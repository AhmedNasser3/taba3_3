@extends('frontend.master')
@section('Content')
@if ($errors->any())
    <div style="background-color: #f8d7da; color: #842029; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
        <ul style="margin: 0; padding-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- option --}}
<div class="options">
    <div class="option_container">
        <div class="option_content">
            <div class="option_data">
                <div class="option_title">
                    <h2>خيارات <span>الطباعة</span></h2>
                </div>
                <div class="option_box">
                    <div class="option_box_container">
                        <div class="option_box_content">
                            <div class="option_box_data">

                                <!-- بداية النموذج -->
                                <form action="{{ route('print.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- نوع الخدمة -->
                                    <div class="option_box_1_title">
                                        <h3>نوع الخدمة</h3>
                                    </div>
                                    <div class="option_box_1_cn">
                                        <select name="type" style="width: 200px;">
                                            <option value="print">طباعة</option>
                                            <option value="operator">تشغيل طابعة</option>
                                        </select>
                                    </div>

                                    <!-- حجم الورق -->
                                    <div class="option_box_1_title">
                                        <h3>حجم الورق</h3>
                                    </div>
                                    <div class="option_box_1_cn" style="display: flex; gap: 15px;">
                                        <label style="border: 1px solid #ccc; padding: 5px 15px; border-radius: 5px;">
                                            <input type="radio" name="paper_size" value="A3"> A3
                                        </label>
                                        <label style="border: 1px solid #ccc; padding: 5px 15px; border-radius: 5px;">
                                            <input type="radio" name="paper_size" value="A4"> A4
                                        </label>
                                    </div>

                                    <!-- لون الطباعة -->
                                    <div class="option_box_1_title">
                                        <h3>لون الطباعة</h3>
                                    </div>
                                    <div class="option_box_1_cn" style="display: flex; gap: 15px;">
                                        <label style="border: 2px solid #4fccb7; background-color: #4fccb7; color: white; padding: 5px 15px; border-radius: 5px;">
                                            <input type="radio" name="print_color" value="black"> أسود
                                        </label>
                                        <label style="border: 1px solid #ccc; padding: 5px 15px; border-radius: 5px;">
                                            <input type="radio" name="print_color" value="color"> ملون
                                        </label>
                                    </div>

                                    <!-- نوع الملف -->
                                    <div class="option_box_1_title">
                                        <h3>نوع الملف</h3>
                                    </div>
                                    <div class="option_box_1_cn">
                                        <select name="print_type" style="width: 200px;">
                                            <option value="pdf">PDF</option>
                                            <option value="word">Word</option>
                                            <option value="excel">Excel</option>
                                        </select>
                                    </div>

                                    <!-- عدد الأوراق -->
                                    <div class="option_box_1_title">
                                        <h3>عدد الأوراق</h3>
                                    </div>
                                    <div class="option_box_1_cn">
                                        <input type="number" name="paper_count" min="1" style="width: 200px;" placeholder="مثال: 10">
                                    </div>

                                    <!-- نوع الطباعة: وجه واحد / وجهين -->
                                    <div class="option_box_1_title">
                                        <h3>الطباعة</h3>
                                    </div>
                                    <div class="option_box_1_cn">
                                        <select name="print_side" style="width: 200px;">
                                            <option value="single">وجه واحد</option>
                                            <option value="double">وجهين</option>
                                        </select>
                                    </div>

                                    <!-- اسم أو معرف الطابعة -->
                                    <div class="option_box_1_title">
                                        <h3>الطابعة</h3>
                                    </div>
                                    <div class="option_box_1_cn">
                                        <input hidden value="{{ $user->id }}" type="text" name="printer_id" style="width: 300px;" placeholder="معرف أو اسم الطابعة">
                                    </div>

                                    <!-- رفع الملف -->
                                    <div class="option_box_1_title">
                                        <h3>رفع الملف</h3>
                                    </div>
                                    <div class="option_box_1_cn">
                                        <input type="file" name="file" style="width: 300px;">
                                    </div>

                                    <!-- تاريخ التسليم -->
                                    <div class="option_box_1_title">
                                        <h3>تاريخ التسليم</h3>
                                    </div>
                                    <div class="option_box_1_cn">
                                        <input type="datetime-local" name="dead_line" style="width: 250px;">
                                    </div>

                                    <!-- ملاحظات -->
                                    <div class="option_box_1_title" style="padding-top: 20px;">
                                        <h3>ملاحظات إضافية حول الطلب</h3>
                                    </div>
                                    <div class="option_box_1_cn">
                                        <textarea name="comment" style="height: 100px;width:100%;"></textarea>
                                    </div>

                                    <!-- زر الإرسال -->
                                    <div class="option_box_1_cn" style="margin-top: 30px;">
                                        <button type="submit" style="padding: 10px 25px; background-color: #4fccb7; color: white; border: none; border-radius: 5px;">إرسال الطلب</button>
                                    </div>

                                </form>
                                <!-- نهاية النموذج -->

                            </div> <!-- /option_box_data -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<style>
    input[type="text"],
    input[type="number"],
    input[type="file"],
    input[type="datetime-local"],
    select,
    textarea {
        border: 1px solid #ccc !important;
        padding: 5px;
    }
</style>
