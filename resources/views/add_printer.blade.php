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
                                <form action="{{ route('print.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- نوع الخدمة -->
                                    <div class="option_box_1_title"><h3>نوع الخدمة</h3></div>
                                    <div class="option_box_1_cn">
                                        <select name="type" id="serviceType" style="width: 200px;" onchange="updateOptions()">
                                            <option value="print">طباعة</option>
                                            <option value="operator">برينت</option>
                                        </select>
                                    </div>

                                    <!-- حجم الورق -->
                                    <div class="option_box_1_title"><h3>حجم الورق</h3></div>
                                    <div class="option_box_1_cn" style="display: flex; gap: 15px;">
                                        <label><input type="radio" name="paper_size" value="A4" onchange="calculatePrice()"> A4</label>
                                        <label><input type="radio" name="paper_size" value="A3" onchange="calculatePrice()"> A3</label>
                                    </div>

                                    <!-- لون الطباعة -->
                                    <div class="option_box_1_title"><h3>لون الطباعة</h3></div>
                                    <div class="option_box_1_cn" style="display: flex; gap: 15px;">
                                        <label><input type="radio" name="print_color" value="black" onchange="calculatePrice()"> أسود</label>
                                        <label><input type="radio" name="print_color" value="color" onchange="calculatePrice()"> ملون</label>
                                    </div>

                                    <input type="hidden" name="status" value="pending">

                                    <!-- نوع الملف -->
                                    <div class="option_box_1_title"><h3>نوع الملف</h3></div>
                                    <div class="option_box_1_cn">
                                        <select name="print_type" id="fileType" style="width: 200px;" onchange="calculatePrice()">
                                            <option value="pdf">PDF</option>
                                            <option value="word">Word</option>
                                            <option value="excel">Excel</option>
                                        </select>
                                    </div>

                                    <!-- عدد الأوراق -->
                                    <div class="option_box_1_title"><h3>عدد الأوراق</h3></div>
                                    <div class="option_box_1_cn">
                                        <input type="number" name="paper_count" id="paperCount" min="1" style="width: 200px;" placeholder="مثال: 10" oninput="calculatePrice()">
                                        <p style="color: red; margin-top: 5px;">🔴 تنبيه ‼️ <br> عملائنا الكرام، أكثر من خمس صفحات طباعة يتم تسليمها بعد ٢٤ ساعة.</p>
                                    </div>

                                    <!-- السعر النهائي -->
                                    <div class="option_box_1_title"><h3>السعر النهائي</h3></div>
                                    <div class="option_box_1_cn">
                                        <input type="text" id="totalPrice" readonly style="width: 200px; background-color: #eee;">
                                    </div>

                                    <!-- نوع الطباعة -->
                                    <div class="option_box_1_title"><h3>الطباعة</h3></div>
                                    <div class="option_box_1_cn">
                                        <select name="print_side" style="width: 200px;">
                                            <option value="single">وجه واحد</option>
                                            <option value="double">وجهين</option>
                                        </select>
                                    </div>

                                    <!-- اسم الطابعة -->
                                    <div class="option_box_1_title"><h3>الطابعة</h3></div>
                                    <div class="option_box_1_cn">
                                        <input hidden value="{{ $user->id }}" type="text" name="printer_id">
                                    </div>

                                    <!-- رفع الملف -->
                                    <div class="option_box_1_title"><h3>رفع الملف</h3></div>
                                    <div class="option_box_1_cn">
                                        <input type="file" name="file" style="width: 300px;">
                                    </div>

                                    <!-- تاريخ التسليم -->
                                    <div class="option_box_1_title"><h3>تاريخ التسليم</h3></div>
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

<script>
    function updateOptions() {
        const serviceType = document.getElementById('serviceType').value;
        const fileType = document.getElementById('fileType');
        fileType.innerHTML = '';

        if (serviceType === 'operator') {

            fileType.innerHTML += `<option value="pdf">PDF</option>`;
            fileType.innerHTML += `<option value="word">Word</option>`;
            fileType.innerHTML += `<option value="excel">Excel</option>`;
        } else {
            fileType.innerHTML += `<option value="word">وورد</option>`;
            fileType.innerHTML += `<option value="excel">إكسيل</option>`;
            fileType.innerHTML += `<option value="ppt">بوربوينت</option>`;
        }

        calculatePrice();
    }

    function calculatePrice() {
        const type = document.getElementById('serviceType').value;
        const size = document.querySelector('input[name="paper_size"]:checked')?.value;
        const color = document.querySelector('input[name="print_color"]:checked')?.value;
        const file = document.getElementById('fileType').value;
        const count = parseInt(document.getElementById('paperCount').value) || 0;

        let price = 0;

        if (type === 'operator') {
            if (color === 'black' && size === 'A4') price = 0.05;
            if (color === 'black' && size === 'A3') price = 0.1;
            if (color === 'color' && size === 'A4') price = 0.1;
            if (color === 'color' && size === 'A3') price = 0.2;
        } else {
            if (file === 'word') price = 0.75;
            if (file === 'excel') price = 1.0;
            if (file === 'ppt') price = 1.0;
            if (file === 'pdf') price = 0.75;
        }

        const total = (price * count).toFixed(3);
        document.getElementById('totalPrice').value = total + ' دينار';
    }

    window.onload = () => {
        updateOptions();
    };
</script>
