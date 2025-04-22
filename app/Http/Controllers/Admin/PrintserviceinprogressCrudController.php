<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str; // تأكد من استيراد هذا في الأعلى

use Alert;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PrintserviceinprogressRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PrintserviceinprogressCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PrintserviceinprogressCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Printserviceinprogress::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/printserviceinprogress');
        CRUD::setEntityNameStrings('printserviceinprogress', 'printserviceinprogresses');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name' => 'upload_button',
            'label' => 'رفع من الطابعة',
            'type' => 'closure',
            'function' => function($entry) {
                $uploadUrl = route('admin.printserviceinprogress.uploadPrinterFile', $entry->id);
                return '
                    <form method="POST" action="' . $uploadUrl . '" enctype="multipart/form-data" style="display:flex; gap:5px;">
                        ' . csrf_field() . '
                        <input type="file" name="printer_file" accept=".pdf,.doc,.docx,.xlsx" style="width: 130px;" required>
                        <button type="submit" class="btn btn-sm btn-warning">رفع</button>
                    </form>
                ';
            },
            'escaped' => false,
        ]);

        CRUD::addColumn([
            'name' => 'mark_as_completed',
            'label' => 'إجراء',
            'type' => 'closure',
            'function' => function($entry) {
                // فقط إذا لم يكن مكتمل بالفعل
                if ($entry->status !== 'completed') {
                    $url = route('printserviceinprogress.complete', $entry->id);
                    return '<a href="' . $url . '" class="btn btn-sm btn-success">تم الإكمال</a>';
                } else {
                    return '<span class="badge badge-success">مكتمل</span>';
                }
            },
            'escaped' => false,
        ]);

        // إضافة تصفية ليعرض فقط السجلات التي تحتوي على status = 'in_progress'
        CRUD::addClause('where', 'status', '=', 'in_progress');

        // التحقق من الدور (إذا كان الدور 2)
        if (auth()->check() && auth()->user()->role == 2) {
            // إذا كان الدور 2، عرض كافة السجلات التي يتطابق فيها printer_id مع user_id
            CRUD::addClause('where', 'printer_id', '=', auth()->user()->id);
        }

        // تعيين الأعمدة من الجداول في قاعدة البيانات
        CRUD::setFromDb();

        // أضف الأعمدة الخاصة بك هنا
        CRUD::addColumn([
            'name' => 'user_id',
            'label' => 'معرف المستخدم',
        ]);
        CRUD::addColumn([
            'name' => 'type',
            'label' => 'نوع الخدمة',
        ]);

        CRUD::addColumn([
            'name' => 'file',
            'label' => 'الملف',
            'type' => 'closure', // استخدام closure لعرض رابط مخصص
            'function' => function($entry) {
                // استخدم Storage للتحقق من وجود الملف
                $filePath = 'public/' . $entry->file; // تأكد من أن المسار يبدأ بـ 'public/'

                // تحقق من وجود الملف باستخدام Storage
                if (!Storage::exists($filePath)) {
                    return 'الملف غير موجود';
                }

                // احصل على الرابط للتحميل
                $fileUrl = asset('storage/' . $entry->file);

                // زر تحميل الملف
                return '<button class="btn btn-sm btn-primary" onclick="window.location.href=\'' . $fileUrl . '\';">تحميل الملف</button>';
            },
            'escaped' => false, // لتجنب الترميز التلقائي للنصوص
        ]);
        CRUD::addColumn([
            'name' => 'paper_size',
            'label' => 'حجم الورق',
        ]);
        CRUD::addColumn([
            'name' => 'status',
            'label' => 'الحالة',
            'type' => 'select_from_array',
            'options' => [
                'pending' => 'قيد الانتظار',
                'in_progress' => 'قيد التنفيذ',
                'completed' => 'تمت',
            ],
        ]);
    }
    public function uploadPrinterFile($id)
    {
        $request = request();

        $request->validate([
            'printer_file' => 'required|file|mimes:pdf,doc,docx,xlsx|max:20480', // 20MB max
        ]);

        $entry = \App\Models\Printserviceinprogress::findOrFail($id);

        // حذف الملف القديم إن وجد
        if ($entry->printer_file && Storage::disk('public')->exists($entry->printer_file)) {
            Storage::disk('public')->delete($entry->printer_file);
        }

        // توليد اسم عشوائي للملف مع الحفاظ على الامتداد
        $file = $request->file('printer_file');
        $fileName = Str::random(12) . '.' . $file->getClientOriginalExtension();

        // رفع الملف باستخدام الاسم المشفر
        $path = $file->storeAs('printer_files', $fileName, 'public');

        // حفظ المسار في قاعدة البيانات
        $entry->printer_file = $path;
        $entry->save();

        \Alert::success('تم رفع الملف بنجاح واستبداله.')->flash();
        return redirect()->back();
    }

    public function markAsCompleted($id)
    {
        $record = \App\Models\Printserviceinprogress::findOrFail($id);
        $record->status = 'completed';
        $record->save();

        Alert::success('تم تحديث الحالة إلى مكتمل.')->flash();
        return redirect()->back();
    }


    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PrintserviceinprogressRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}