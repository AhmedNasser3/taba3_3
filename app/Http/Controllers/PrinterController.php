<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PrintService;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    public function AddPrint($PrinterId){
        $user = User::findOrFail($PrinterId);
        return view('add_printer',compact('user'));
    }

    public function store(Request $request)
{
    // التحقق من صحة البيانات
    $validated = $request->validate([
        'type' ,
        'paper_size' => 'nullable|string',
        'paper_color' => 'nullable|string',
        'print_type' => 'nullable|in:pdf,word,excel',
        'paper_count' => 'nullable|integer|min:1',
        'print_side' => 'nullable|in:single,double',
        'printer_id' => 'nullable|string',
        'file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,png,jpg,jpeg',
        'dead_line' => 'nullable|date',
        'status' => 'nullable|in:pending,in_progress,completed',
        'payment_status' => 'nullable|in:paid,unpaid',
        'comment' => 'nullable|string',
    ]);

    // رفع الملف إذا تم إرفاقه
    $filePath = null;
    if ($request->hasFile('file')) {
        $filePath = $request->file('file')->store('uploads/print_files', 'public');
    }

    // حفظ الطلب
    $printService = new PrintService();
    $printService->user_id = auth()->id(); // المستخدم الحالي
    $printService->type = $request->type;
    $printService->paper_size = $request->paper_size;
    $printService->paper_color = $request->paper_color;
    $printService->print_type = $request->print_type;
    $printService->paper_count = $request->paper_count;
    $printService->print_side = $request->print_side;
    $printService->printer_id = $request->printer_id;
    $printService->file = $filePath;
    $printService->dead_line = $request->dead_line;
    $printService->status = $request->status;
    $printService->payment_status = $request->payment_status;
    $printService->comment = $request->comment;
    $printService->save();

    return redirect()->back()->with('success', 'تم إرسال طلب الطباعة بنجاح!');
}

}