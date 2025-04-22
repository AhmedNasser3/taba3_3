<?php

namespace App\Http\Controllers\Admin;

use App\Models\PrintService;
use Illuminate\Support\Facades\Storage;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PrintServiceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PrintServiceCrudController extends CrudController
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
        CRUD::setModel(PrintService::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/print-service');
        CRUD::setEntityNameStrings('print service', 'طلب طباعة');
    }
    public function acceptRequest($id)
    {
        $service = PrintService::find($id);

        if (!$service) {
            return back()->with('error', 'السجل غير موجود');
        }

        if ($service->status == 'pending') {
            $service->status = 'in_progress'; // تغيير الحالة إلى "قيد التنفيذ"
            $service->save();

            return back()->with('success', 'تم قبول الطلب بنجاح!');
        }

        return back()->with('error', 'لا يمكن قبول هذا الطلب');
    }

    public function rejectRequest($id)
    {
        $service = PrintService::find($id);

        if (!$service) {
            return back()->with('error', 'السجل غير موجود');
        }

        if ($service->status == 'pending') {
            $service->status = 'rejected'; // تغيير الحالة إلى "مرفوض"
            $service->save();

            return back()->with('success', 'تم رفض الطلب بنجاح!');
        }

        return back()->with('error', 'لا يمكن رفض هذا الطلب');
    }
    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // جلب معرف المستخدم الحالي
        $currentUserId = backpack_user()->id;

        // فلترة السجلات بحيث تظهر فقط التي تخص هذا المستخدم
        CRUD::addClause('where', 'printer_id', '=', $currentUserId);

        CRUD::setFromDb(); // تعيين الأعمدة من الجداول في قاعدة البيانات

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
            'type' => 'closure',
            'function' => function($entry) {
                $filePath = 'public/' . $entry->file;
                if (!Storage::exists($filePath)) {
                    return 'الملف غير موجود';
                }
                $fileUrl = asset('storage/' . $entry->file);
                return '<button class="btn btn-sm btn-primary" onclick="window.location.href=\'' . $fileUrl . '\';">تحميل الملف</button>';
            },
            'escaped' => false,
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

        // إضافة زر قبول
        CRUD::addButtonFromModelFunction('line', 'accept', 'acceptButton', 'beginning');

        // إضافة زر رفض
        CRUD::addButtonFromModelFunction('line', 'reject', 'rejectButton', 'beginning');
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            // 'name' => 'required|min:2',
        ]);
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
