<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class PrintService extends Model
{
    use CrudTrait;
    protected $guarded;
    public function acceptRequest($id)
    {
        // جلب الطلب بناءً على المعرف
        $service = \App\Models\PrintService::find($id);

        // تأكد من أن السجل موجود
        if (!$service) {
            return back()->with('error', 'السجل غير موجود');
        }

        // تأكد من أن الحالة هي "pending" قبل التغيير
        if ($service->status == 'pending') {
            $service->status = 'in_progress'; // تغيير الحالة إلى "قيد التنفيذ"
            $service->save();

            return back()->with('success', 'تم قبول الطلب بنجاح!');
        }

        return back()->with('error', 'لا يمكن قبول هذا الطلب');
    }
    public function acceptButton()
    {
        return '<a href="' . route('admin.print-service.accept', ['id' => $this->id]) . '" class="btn btn-success btn-sm">قبول</a>';
    }

    /**
     * زر رفض الطلب
     */
    public function rejectButton()
    {
        return '<a href="' . route('admin.print-service.reject', ['id' => $this->id]) . '" class="btn btn-danger btn-sm">رفض</a>';
    }
}
