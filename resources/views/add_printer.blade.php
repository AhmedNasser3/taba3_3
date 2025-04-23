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

<div class="print-form-wrapper">
    <div class="print-form-box">
        <h2 class="form-title">خيارات <span>الطباعة</span></h2>
        <form action="{{ route('print.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- نوع الخدمة -->
            <label>نوع الخدمة</label>
            <select name="type" id="serviceType" onchange="updateOptions()">
                <option value="print">طباعة</option>
                <option value="operator">برينت</option>
            </select>

            <!-- حجم الورق -->
            <label>حجم الورق</label>
            <div class="flex-group" id="paperSizes"></div>

            <!-- لون الطباعة -->
            <label>لون الطباعة</label>
            <div class="flex-group">
                <label><input type="radio" name="print_color" value="black" onchange="calculatePrice()"> أسود</label>
                <label><input type="radio" name="print_color" value="color" onchange="calculatePrice()"> ملون</label>
            </div>

            <input type="hidden" name="status" value="pending">

            <!-- نوع الملف -->
            <label>نوع الملف</label>
            <select name="print_type" id="fileType" onchange="calculatePrice()"></select>

            <!-- عدد الأوراق -->
            <label>عدد الأوراق</label>
            <input type="number" name="paper_count" id="paperCount" min="1" placeholder="مثال: 10" oninput="calculatePrice()">
            <small class="warning">🔴 تنبيه ‼️ <br> أكثر من خمس صفحات طباعة يتم تسليمها بعد ٢٤ ساعة.</small>

            <!-- السعر النهائي -->
            <label>السعر النهائي</label>
            <input type="text" id="totalPrice" readonly>

            <!-- الطباعة -->
            <label>الطباعة</label>
            <select name="print_side" id="printSide" onchange="calculatePrice()">
                <option value="single">وجه واحد</option>
            </select>

            <!-- اسم الطابعة -->
            <input hidden value="{{ $user->id }}" type="text" name="printer_id">

            <!-- رفع الملف -->
            <label>رفع الملف</label>
            <input type="file" name="file" id="fileUpload">

            <!-- رفع الصورة بالكاميرا -->
            <label id="cameraTitle" style="display: none;">التقاط صورة بالكاميرا</label>
            <div id="cameraUpload" style="display: none;">
                <input type="file" name="file" accept="image/*" capture="environment">
            </div>

            <!-- تاريخ التسليم -->
            <label>تاريخ التسليم</label>
            <input type="datetime-local" name="dead_line">

            <!-- ملاحظات -->
            <label>ملاحظات إضافية</label>
            <textarea name="comment" placeholder="اكتب ملاحظاتك هنا..."></textarea>

            <!-- زر الإرسال -->
            <div class="submit-btn">
                <button type="submit">إرسال الطلب</button>
            </div>
        </form>
    </div>
</div>
@endsection

<style>
    .print-form-wrapper {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding: 50px 20px;
        min-height: calc(100vh - 150px); /* تعديل لتفادي الفوتر */
        background-color: #f9f9f9;
    }

    .print-form-box {
        background-color: white;
        padding: 30px;
        max-width: 700px;
        width: 100%;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        text-align: center;
        margin-bottom: 25px;
        font-size: 24px;
        font-weight: bold;
        color: #4fccb7;
    }

    .form-title span {
        color: #333;
    }

    form label {
        display: block;
        margin: 15px 0 5px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"],
    input[type="datetime-local"],
    select,
    textarea {
        width: 100%;
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        box-sizing: border-box;
    }

    textarea {
        resize: vertical;
    }

    .flex-group {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .submit-btn {
        text-align: center;
        margin-top: 25px;
    }

    .submit-btn button {
        padding: 10px 30px;
        background-color: #4fccb7;
        color: white;
        font-size: 16px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit-btn button:hover {
        background-color: #3cb39e;
    }

    .warning {
        color: red;
        margin-top: 5px;
        font-size: 12px;
    }
</style>

<script>
    function updateOptions() {
        const serviceType = document.getElementById('serviceType').value;
        const fileType = document.getElementById('fileType');
        const paperSizes = document.getElementById('paperSizes');
        const cameraUpload = document.getElementById('cameraUpload');
        const cameraTitle = document.getElementById('cameraTitle');
        const fileUpload = document.getElementById('fileUpload');

        fileType.innerHTML = '';
        paperSizes.innerHTML = '';

        if (serviceType === 'operator') {
            fileType.innerHTML += `<option value="pdf">PDF</option>`;
            fileType.innerHTML += `<option value="word">Word</option>`;
            fileType.innerHTML += `<option value="excel">Excel</option>`;
            paperSizes.innerHTML += `<label><input type="radio" name="paper_size" value="A4" onchange="calculatePrice()"> A4</label>`;
            paperSizes.innerHTML += `<label><input type="radio" name="paper_size" value="A3" onchange="calculatePrice()"> A3</label>`;
            cameraUpload.style.display = 'none';
            cameraTitle.style.display = 'none';
            fileUpload.style.display = 'block';
        } else {
            fileType.innerHTML += `<option value="word">وورد</option>`;
            fileType.innerHTML += `<option value="excel">إكسيل</option>`;
            fileType.innerHTML += `<option value="ppt">بوربوينت</option>`;
            paperSizes.innerHTML += `<label><input type="radio" name="paper_size" value="A4" onchange="calculatePrice()"> A4</label>`;
            cameraUpload.style.display = 'block';
            cameraTitle.style.display = 'block';
            fileUpload.style.display = 'block';
        }

        calculatePrice();
    }

    function calculatePrice() {
        const type = document.getElementById('serviceType').value;
        const size = document.querySelector('input[name="paper_size"]:checked')?.value;
        const color = document.querySelector('input[name="print_color"]:checked')?.value;
        const file = document.getElementById('fileType').value;
        const count = parseInt(document.getElementById('paperCount').value) || 0;
        const side = document.getElementById('printSide').value;

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

        let total = price * count;
        if (side === 'double') {
            total *= 2;
        }

        document.getElementById('totalPrice').value = total.toFixed(3) + ' دينار';
    }

    window.onload = () => {
        updateOptions();
    };
</script>
