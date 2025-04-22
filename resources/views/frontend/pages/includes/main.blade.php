@php
use App\Models\User;
    $users = User::all();
@endphp
<div class="main">
    <div class="main_container">
        <div class="main_data">
            <div class="main_img">
                <img src="{{ asset('images/WhatsApp Image 2025-02-18 at 3.57.36 PM.png') }}" alt="">
            </div>
            <div class="main_content">
                <div class="main_title">
                    <h2>الطباع</h2>
                    <h1>قم بانشاء تجارتك الخاصة بكل سهولة</h1>
                    <h4>
"الطباع، وجهتك الأولى لطباعة واستلام الأوراق بسرعة وجودة عالية وخدمة موثوقة لكل احتياجاتك."
                    </h4>
                </div>
                <div class="main_btns">
                    <div class="main_btn_more">
                        <a href="">
                        </a>
                    </div>
                    <div class="main_btn_contact">
                        <a href="">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- boxes and decorations --}}
<div class="square"></div>
<div class="square" style="top: 30%;left:30%"></div>
<div class="square" style="top: 15%;left:75%"></div>
<div class="square" style="top: 40%;left:45%"></div>
{{-- icons --}}
<div class="icon_1">
    <img width="64" height="64" src="https://img.icons8.com/dusk/64/spiral-bound-booklet.png"
        alt="spiral-bound-booklet" />
</div>
<div class="icon_2">
    <img width="64" height="64" src="https://img.icons8.com/dusk/64/print.png" alt="print" />
</div>
<div class="icon_3">
    <img width="48" height="48" src="https://img.icons8.com/fluency/48/newspaper-.png" alt="newspaper-" />
</div>
{{-- hero --}}
<div class="hero">
    <div class="hero_container">
        <div class="hero_content">
            <div class="hero_data">
                <div class="hero_title">
                    <h2><span>!</span> طباعة احترافية <span> بأفضل جودة </span></h2>
                </div>
            </div>
            <div class="hero_boxes">
                <div class="hero_boxes_container">
                    <div class="hero_boxes_content">
                        <div class="hero_boxes_data">
                            <div class="hero_boxes_img">
                                <img src="{{ asset('images/hero.png') }}" alt="">
                            </div>
                            <div class="hero_boxes_titles">
                                <h2>الطباعة</h2>
                                <h4>تتيح للمستخدمين بطباعة الوثائق والصور والرسومات والنصوص وغيرها من الملفات الرقمية بسهولة وسرعة عبر الانترنت . وتتيح هذه الخدمة للمستخدمين اختيار مختلف الخيارات لطباعة الورق المختلفة. مثل الحجم واللون والجودة والكمية. ويمكن للمستخدمين ارسال الملفات الي خدمة الطباعة الاونلاين واختيار خيارات التسليم والدفع المناسبة لهم ...</h4>
                            </div>
                        </div>
                        <div class="hero_boxes_data" style="border: none; background-color: #0099ad;">
                            <div class="hero_boxes_img">
                                <img src="{{ asset('images/hero.png') }}" alt="">
                            </div>
                            <div class="hero_boxes_titles">
                                <h2 style="color: #4fccb7">مقاسات ورق متعددة تناسب احتياجاتك</h2>
                                <h4 style="color: white">نوفر جميع مقاسات الورق مثل A4، A3، A5، وB5، بالإضافة إلى أحجام
                                    مخصصة حسب طلب العميل. حدد المقاس المناسب لمشروعك واطبع بأعلى جودة.</h4>
                            </div>
                        </div>
                        <div class="hero_boxes_data">
                            <div class="hero_boxes_img">
                                <img src="{{ asset('images/hero.png') }}" alt="">
                            </div>
                            <div class="hero_boxes_titles">
                                <h2>طباعة ملونة وأحادية</h2>
                                <h4>اختر بين الطباعة بالألوان الزاهية أو الطباعة الأحادية باللون الأسود. نضمن لك وضوح
                                    التفاصيل وجودة الطباعة التي تناسب احتياجاتك المختلفة.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--  banners   --}}
{{--  <div class="banners">
    <div class="banners_container">
        <div class="banners_content">
            <div class="banners_data">
                <div class="banners_img_bg">
                    <div class="banners_img">
                        <img src="{{ asset('images/hero.png') }}" alt="">
                    </div>
                    <div class="banners_text">
                        <h2>الطباعة</h2>
                        <h4>تتيح للمستخدمين بطباعة الوثائق والصور والرسومات والنصوص وغيرها من الملفات الرقمية بسهولة وسرعة عبر الانترنت . وتتيح هذه الخدمة للمستخدمين اختيار مختلف الخيارات لطباعة الورق المختلفة. مثل الحجم واللون والجودة والكمية. ويمكن للمستخدمين ارسال الملفات الي خدمة الطباعة الاونلاين واختيار خيارات التسليم والدفع المناسبة لهم ...</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  --}}
{{-- menu --}}
<div class="menu">
    <div class="menu_container">
        <div class="menu_content">
            <div class="menu_data">
                <div class="menu_img">
                    <img style="width: 600px;" src="{{ asset('images/printer.jpg') }}" alt="طابعة احترافية">
                </div>
                <div class="menu_title" style="padding: 0 0 0 20px">
                    <h2>خدمات الطباعة</h2>
                    <h1>جودة ودقة بأفضل الأسعار</h1>
                    <h4>
                        نقدم خدمات الطباعة الورقية المتكاملة، بدءًا من المستندات والكتب، وصولًا إلى الكروت الشخصية
                        والبروشورات. اختر نوع الورق، المقاس، ونوع الطباعة، واحصل على نتائج احترافية تناسب احتياجاتك.
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- partners --}}
<div class="partners">
    <div class="partners_container">
        <div class="partners_content">
            <div class="partners_data">
                <div class="partners_title">
                    <h2>شركاء <span>الطباع</span></h2>
                </div>
                <div class="partners_text">

                </div>
                <div class="partners_boxes">
                    <div class="partners_slider">
                        <div class="partners_boxes_img"><img src="{{ asset('WhatsApp Image 2025-04-10 at 2.38.01 PM (1).jpeg') }}" alt=""></div>
                        <div class="partners_boxes_img"><img src="{{ asset('WhatsApp Image 2025-04-10 at 2.38.01 PM (1).jpeg') }}" alt=""></div>
                        <div class="partners_boxes_img"><img src="{{ asset('WhatsApp Image 2025-04-10 at 2.38.01 PM (2).jpeg') }}" alt=""></div>
                        <div class="partners_boxes_img"><img src="{{ asset('WhatsApp Image 2025-04-10 at 2.38.01 PM.jpeg') }}" alt=""></div>
                        <div class="partners_boxes_img"><img src="{{ asset('WhatsApp Image 2025-04-10 at 2.38.02 PM (1).jpeg') }}" alt=""></div>
                        <div class="partners_boxes_img"><img src="{{ asset('WhatsApp Image 2025-04-10 at 2.38.02 PM.jpeg') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="option_title">
    <h2>الطباعين  <span>المتاحين</span></h2>
</div>
<div class="py-8 bg-gray-100 min-h-100" style="display: flex;justify-content:center;align-items:center">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="p-6 bg-white shadow-xl rounded-xl">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4" style="display: flex;justify-content:center;">
                @foreach($users as $user)
                <a href="{{ route('print.create', $user->id) }}" class="text-lg font-semibold text-center text-gray-800 transition duration-200 hover:text-indigo-600">
                    <div class="flex flex-col items-center p-4 transition duration-300 ease-in-out border border-gray-200 rounded-lg shadow bg-gray-50 hover:shadow-md" style="padding: 10px">
                        <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" class="w-20 h-20 mb-3 border border-gray-300 rounded-full shadow-sm">
                            {{ $user->name }}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

    {{-- contact --}}
    {{--  <div class="contact" id="contact">
        <div class="contact_container">
            <div class="contact_content">
                <div class="contact_data">
                    <div class="contact_title">
                        <h2> تواصل <span>معنا</span></h2>
                    </div>
                    <div class="contact_cn">
                        <div class="hidden contact_bg left-to-right">
                            <div class="contact_inputs">
                                <div class="contact_inputs_title">
                                    <h2>ارسال <span>رسالة</span></h2>
                                </div>
                                <div class="contact_inputs_input">
                                    <input type="text" placeholder="اسمك" required>
                                    <input type="text" placeholder="البريد الالكتروني" required>
                                    <input type="text" placeholder="رقم الجوال" required>
                                    <input type="text" placeholder="موضوع الرسالة" required>
                                    <textarea style="height: 200px; width: 100%; resize: none;" placeholder="الرسالة"
                                        required></textarea>
                                    <div class="contact_inputs_submit">
                                        <a href="">
                                            <button type="submit">ارسال</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden contact_bg_2 right-to-left">
                            <div class="contact_2_title">
                                <h2>معلومات <span>التواصل</span></h2>
                            </div>
                            <div class="contact_bg_2_cn">
                                <div class="contact_2_links">
                                    <div class="contact_2_link">
                                        <h3>العنوان</h3>
                                        <h4>جدة - المملكة العربية السعودية</h4>
                                    </div>
                                    <div class="contact_2_link">
                                        <h3>رقم الجوال</h3>
                                        <h4>0535910104</h4>
                                    </div>
                                    <div class="contact_2_link">
                                        <h3>البريد الإلكتروني</h3>
                                        <h4>info@printertech.sa</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>طريقة الطباعة</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: #f8f8f8;
      direction: rtl;
      margin: 0;
      padding: 0;
    }

    .unique-wrapper {
      max-width: 700px;
      margin: 40px auto;
      background: linear-gradient(135deg, #0097B2, #0097B2);
      color: #fff;
      padding: 40px 20px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .unique-title {
      text-align: center;
      color: #000;
      margin-bottom: 30px;
    }

    .unique-step {
      display: flex;
      align-items: center;
      margin-bottom: 30px;
    }

    .unique-icon-box {
      background: #03241d;
      color: white;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 22px;
      margin-left: 15px;
    }

    .unique-step-content h4 {
      margin: 0;
      color: #000;
      font-size: 18px;
    }

    .unique-step-content p {
      margin: 5px 0 0;
      font-size: 15px;
      color: #000;
    }

    footer.unique-footer {
        border-radius: 10px;

      background: linear-gradient(135deg, #0097B2, #0097B2);
      color: #fff;
      padding: 40px 20px;
      direction: rtl;
      font-family: Arial, sans-serif;
    }

    .unique-footer-title {
      text-align: center;
      margin-bottom: 30px;
    }

    .unique-stats-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 40px;
    }

    .unique-stat-box {
      text-align: center;
    }

    .unique-stat-number {
      font-size: 32px;
      color: #03241d;
    }

    .unique-stat-label {
      color: #000;
    }
    .footer{
        display: flex;
        justify-content: center;

    }
  </style>
</head>
<body>

<div class="unique-wrapper">
  <h2 class="unique-title" style="color: white;font-size:1.2rem; font-weight: 900;">كيف أطبع؟<br><small>يمكنك البدء بطباعة مستنداتك الآن في 4 خطوات فقط!</small></h2>

  <div class="unique-step">
    <div class="unique-icon-box"><i class="fas fa-file-upload"></i></div>
    <div class="unique-step-content">
      <h4>ارفع المستند</h4>
      <p>بعد تسجيل الدخول إلى حسابك، قم برفع الملف بأمان وخصوصية عالية.</p>
    </div>
  </div>

  <div class="unique-step">
    <div class="unique-icon-box"><i class="fas fa-cogs"></i></div>
    <div class="unique-step-content">
      <h4>حدد خيارات الطباعة</h4>
      <p>مثل نوع الطباعة، وحجم الورق، مع اختيار آلية التوصيل.</p>
    </div>
  </div>

  <div class="unique-step">
    <div class="unique-icon-box"><i class="fas fa-credit-card"></i></div>
    <div class="unique-step-content">
      <h4>اختر طريقة الدفع</h4>
      <p>باستخدام بطاقة الصراف أو بطاقة السحب الآلي.</p>
    </div>
  </div>

  <div class="unique-step">
    <div class="unique-icon-box"><i class="fas fa-print"></i></div>
    <div class="unique-step-content">
      <h4>استلم مطبوعاتك</h4>
      <p>استلمها بكل سهولة من نقاط الاستلام.</p>
    </div>
  </div>
</div>


<section style="padding: 60px 20px; background-color: #f9f9f9; direction: rtl;">
    <div style="text-align: center; margin-bottom: 50px;">
      <h2 style="font-size: 30px; color: #222;">نقدم لك <span style="color: #c2185b;">أفضل خدمات الطباعة</span></h2>
      <p style="max-width: 700px; margin: 15px auto; color: #555;">
        يمكنك اختيار أي من وسائل الدفع الآمنة والسريعة المتوفرة في المنصة، حيث نوفر لك الراحة في التحكم بطلباتك بكل سهولة.
      </p>
    </div>

    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
      <!-- كرت -->
      <div style="background: #fff; border-radius: 12px; padding: 30px; width: 280px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: center;">
        <!-- أيقونة الطابعة -->
        <svg width="50" height="50" fill="#c2185b" viewBox="0 0 24 24" style="margin-bottom: 15px;">
          <path d="M6 9V4h12v5h2a2 2 0 012 2v5a2 2 0 01-2 2h-2v3H6v-3H4a2 2 0 01-2-2v-5a2 2 0 012-2h2zm2-3v3h8V6H8zm8 11v-3H8v3h8zm-9-4a1 1 0 100-2 1 1 0 000 2z"/>
        </svg>
        <h3 style="color: #333; font-size: 20px;">إمكانية التحكم بالمطبوعات</h3>
        <p style="color: #777; font-size: 14px;">تابع وسجّل طلباتك بسهولة وتحكم بها.</p>
      </div>

      <!-- كرت -->
      <div style="background: #fff; border-radius: 12px; padding: 30px; width: 280px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: center;">
        <!-- أيقونة شاشة -->
        <svg width="50" height="50" fill="#c2185b" viewBox="0 0 24 24" style="margin-bottom: 15px;">
          <path d="M4 5h16a1 1 0 011 1v11a1 1 0 01-1 1h-6v2h3v2H7v-2h3v-2H4a1 1 0 01-1-1V6a1 1 0 011-1zm0 2v9h16V7H4z"/>
        </svg>
        <h3 style="color: #333; font-size: 20px;">سهولة استخدام المنصة</h3>
        <p style="color: #777; font-size: 14px;">واجهة سهلة وبسيطة لكل المستخدمين.</p>
      </div>

      <!-- كرت -->
      <div style="background: #fff; border-radius: 12px; padding: 30px; width: 280px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: center;">
        <!-- أيقونة سعر -->
        <svg width="50" height="50" fill="#c2185b" viewBox="0 0 24 24" style="margin-bottom: 15px;">
          <path d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm1 17h-2v-2h2v2zm0-4h-2c-1.104 0-2-.896-2-2h2c0 .552.448 1 1 1s1-.448 1-1-.448-1-1-1c-1.104 0-2-.896-2-2s.896-2 2-2h2c1.104 0 2 .896 2 2h-2c0-.552-.448-1-1-1s-1 .448-1 1 .448 1 1 1c1.104 0 2 .896 2 2s-.896 2-2 2z"/>
        </svg>
        <h3 style="color: #333; font-size: 20px;">أسعار في متناول الجميع</h3>
        <p style="color: #777; font-size: 14px;">خدمات بأسعار منافسة ومناسبة للجميع.</p>
      </div>

      <!-- كرت -->
      <div style="background: #fff; border-radius: 12px; padding: 30px; width: 280px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: center;">
        <!-- أيقونة دفع -->
        <svg width="50" height="50" fill="#c2185b" viewBox="0 0 24 24" style="margin-bottom: 15px;">
          <path d="M2 5a2 2 0 012-2h16a2 2 0 012 2H2zm20 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V7h20zm-3 4a1 1 0 00-2 0 1 1 0 002 0z"/>
        </svg>
        <h3 style="color: #333; font-size: 20px;">سهولة الدفع</h3>
        <p style="color: #777; font-size: 14px;">اختر وسيلة الدفع المناسبة لك بكل سهولة.</p>
      </div>
    </div>
  </section>
<div class="mb-10 text-center">
  <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" width="70" class="mx-auto mb-4 animate-bounce" alt="كأس">
  <h2 class="text-3xl font-bold tracking-wide">
    <span class="text-dark-300">أرقام</span> تُشرفنا
  </h2>
  <p class="mt-2 text-sm text-dark">نسعى دومًا للتميّز وخدمة عملائنا بأعلى جودة</p>
</div>
<footer dir="rtl" class="px-4 py-16 text-white shadow-xl bg-gradient-to-br from-cyan-700 to-cyan-800 rounded-t-3xl" style="
        display: flex;
        justify-content: center;">

    <div class="flex flex-col items-center justify-center max-w-6xl gap-6 mx-auto text-center sm:flex-row sm:gap-12">
      <!-- عدد العملاء -->
      <div style="padding: 10px 10px 35px  10px "class="w-64 p-6 transition duration-300 shadow-md bg-white/10 rounded-2xl hover:scale-105">
        <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" width="50" class="mx-auto mb-4" alt="عملاء">
        <div id="clients" class="text-4xl font-extrabold text-dark-300">0</div>
        <div class="mt-2 text-white">عدد العملاء</div>
      </div>

      <!-- عدد زيارات الموقع -->
      <div style="padding: 10px 10px 35px  10px "class="w-64 p-6 transition duration-300 shadow-md bg-white/10 rounded-2xl hover:scale-105">
        <img src="https://cdn-icons-png.flaticon.com/512/2922/2922510.png" width="50" class="mx-auto mb-4" alt="زيارات">
        <div id="visits" class="text-4xl font-extrabold text-dark-300">0</div>
        <div class="mt-2 text-white">عدد زيارات الموقع</div>
      </div>

      <!-- عدد طلبات الطباعة -->
      <div style="padding: 10px 10px 35px  10px " class="w-64 p-6 transition duration-300 shadow-md bg-white/10 rounded-2xl hover:scale-105">
        <img src="https://cdn-icons-png.flaticon.com/512/4213/4213925.png" width="50" class="mx-auto mb-4" alt="طباعة">
        <div id="orders" class="text-4xl font-extrabold text-dark-300">0</div>
        <div class="mt-2 text-white">عدد طلبات للطبعيين</div>
      </div>
    </div>
  </footer>

  <script>
    function animateValue(id, start, end, duration) {
      const obj = document.getElementById(id);
      let startTimestamp = null;
      const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) window.requestAnimationFrame(step);
      };
      window.requestAnimationFrame(step);
    }

    window.onload = () => {
      animateValue("clients", 0, 212, 1500);
      animateValue("visits", 0, 17815, 2000);
      animateValue("orders", 0, 207, 1500);
    };
  </script>



<script>
  function animateValue(id, start, end, duration) {
    const obj = document.getElementById(id);
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) window.requestAnimationFrame(step);
    };
    window.requestAnimationFrame(step);
  }

  window.onload = () => {
    animateValue("clients", 0, 212, 1500);
    animateValue("visits", 0, 17815, 2000);
    animateValue("orders", 0, 207, 1500);
  };
</script>

</body>
</html>

    {{--  about us   --}}
    <div class="about" id="about">
        <div class="about_container">
            <div class="about_content">
                <div class="about_data">
                    <div class="about_bg">
                        <div class="about_img">
                            <img src="{{ asset('images/WhatsApp Image 2025-02-18 at 3.57.36 PM.png') }}" alt="">
                        </div>
                        <div class="about_text">
                            <h1>من نحن</h1>
                            <h3>        خَطرت فكرة إنشاء منصة الطِباع من التعايش مع طلبات الطباعة في السوق وخاصة مع الشباب الجامعي والتعرف على
                                أهمية واحتياجات الطباعة لديهم، وما يتطلبه من مشاكل كثيرة، فأولها حساب التكلفة والآخر مشاوير تردد على أماكن
                                الطباعة وإدارتها، وانتهاءً بشكل ضياع الوقت المتبقي له لتجهيـز أوراقه المقررة.</h3>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>خيارات الطباعة</title>
    <style>


        .wrapper-print-options {
            width: 80%;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .title-print-main {
            font-size: 26px;
            margin-bottom: 10px;
        }

        .desc-print-text {
            color: #555;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .section-print {
            margin-bottom: 20px;
            text-align: right;
        }

        .section-print label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        .choices-box {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .choice-item {
            padding: 10px 20px;
            border: 2px solid #ccc;
            border-radius: 6px;
            cursor: pointer;
            background-color: #fff;
            transition: all 0.3s;
        }

        .choice-item.active-choice {
            background-color: #0097B2;
            color: #fff;
            border-color: #0097B2;
        }

        .layout-preview-images img {
            width: 60px;
            height: 80px;
            border: 2px solid #ccc;
            border-radius: 6px;
            padding: 5px;
            cursor: pointer;
        }

        .layout-preview-images img.active-image {
            border-color: #0097B2;
            background-color: #0097B2;
        }

        input[type="number"],
        input[type="date"],
        input[type="file"] {
            padding: 10px;
            width: 100%;
            max-width: 300px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button.print-submit-btn {
            padding: 10px 30px;
            margin-top: 20px;
            background-color: #0097B2;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        textarea.notes-area {
            width: 100%;
            max-width: 500px;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
    </style>
    <script>
        function changeSelection(groupClass, el) {
            document.querySelectorAll(`.${groupClass} .choice-item`).forEach(option => {
                option.classList.remove('active-choice');
            });
            el.classList.add('active-choice');
        }

        function highlightImage(el) {
            document.querySelectorAll(".layout-preview-images img").forEach(img => {
                img.classList.remove("active-image");
            });
            el.classList.add("active-image");
        }
    </script>
</head>
<body>

    <div class="wrapper-print-options">
        <h2 class="title-print-main">خيارات <span>الطباعة</span></h2>

        <div class="section-print">
            <label>نوع الخدمة</label>
            <div class="choices-box service-choice-group">
                <div class="choice-item active-choice" onclick="changeSelection('service-choice-group', this)">Print</div>
                <div class="choice-item" onclick="changeSelection('service-choice-group', this)">طباعة</div>
            </div>
        </div>

        <div class="section-print">
            <label>مقاس الورقة</label>
            <div class="choices-box paper-size-group">
                <div class="choice-item active-choice" onclick="changeSelection('paper-size-group', this)">A3</div>
                <div class="choice-item" onclick="changeSelection('paper-size-group', this)">A4</div>
            </div>
        </div>

        <div class="section-print">
            <label>نوع الملف</label>
            <div class="choices-box file-format-group">
                <div class="choice-item active-choice" onclick="changeSelection('file-format-group', this)">PDF</div>
                <div class="choice-item" onclick="changeSelection('file-format-group', this)">Word</div>
            </div>
        </div>

        <div class="section-print">
            <label>عدد الأوراق</label>
            <input type="number" name="pages_count" min="1" placeholder="أدخل عدد الأوراق" required>
        </div>

        <div class="section-print">
            <label>رفع ملف من الجهاز</label>
            <input type="file" name="upload_file" accept=".pdf,.doc,.docx" required>
        </div>

        <div class="section-print">
            <label>أو التقاط صورة للملف بالكاميرا</label>
            <input type="file" name="camera_capture" accept="image/*" capture="environment">
        </div>

        <div class="section-print">
            <label>تاريخ التسليم المطلوب</label>
            <input type="date" name="delivery_date" required>
        </div>

        <div class="section-print">
            <label>ملاحظات قبل الطلب</label>
            <textarea name="notes" rows="4" placeholder="اكتب ملاحظاتك أو التعليمات هنا..." class="notes-area"></textarea>
        </div>

        <button class="print-submit-btn" type="submit">احجز الآن</button>
    </div>

</body>
</html>

    {{--  why  --}}
    <div class="option_title">
        <h2>لماذا  <span>نحن ؟</span></h2>
    </div>
    <div class="why">
        <div class="why_container">
            <div class="why_content">
                <div class="why_data">
                    <div class="why_bg">
                        <div class="why_img">
                            <img src="https://cdn-icons-png.flaticon.com/512/1533/1533895.png" alt="مراكز الطباعة" width="70">
                        </div>
                        <div class="why_text">
                            <h3 style="color:#000000; margin-top: 15px;">تعدد مراكز الطباعة</h3>
                            <p style="color:#000000;">لتكون الأقرب لك دائماً</p>
                        </div>
                    </div>
                    <div class="why_bg">
                        <div class="why_img">
                            <img src="https://cdn-icons-png.flaticon.com/512/2936/2936825.png" alt="24 ساعة" width="70">
                        </div>
                        <div class="why_text">
                            <h3 style="color:#000000; margin-top: 15px;">الطلب من مكان تواجدك</h3>
                            <p style="color:#000000;">وتعدد طرق الإستلام</p>
                        </div>
                    </div>
                    <div class="why_bg">
                        <div class="why_img">
                            <img src="https://cdn-icons-png.flaticon.com/512/1907/1907425.png" alt="الجودة والتكلفة" width="70">
                        </div>
                        <div class="why_text">
                            <h3 style="color:#000000; margin-top: 15px;">الجمع بين الجودة والتكلفة</h3>
                            <p style="color:#000000;">بأفضل تكلفة ممكنة</p>
                        </div>
                    </div>
                    <div class="why_bg">
                        <div class="why_img">
                            <img src="https://cdn-icons-png.flaticon.com/512/709/709496.png" alt="مرونة الطلب" width="70">
                        </div>
                        <div class="why_text">
                            <h3 style="color:#000000; margin-top: 15px;">مرونة الطلب والتحكم</h3>
                            <p style="color:#000000;">بخيارات الطباعة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="display: flex;justify-content:center">

        <!DOCTYPE html>
        <html lang="ar">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>الشروط والأحكام</title>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" defer></script>
            <style>
                body {

                    direction: rtl;
                }
                .container {
                    max-width: 600px;
                    margin: 0 auto;
                }
                .box {
                    background: #fff;
                    border-radius: 8px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                    margin-bottom: 10px;
                    overflow: hidden;
                }
                .box button {
                    width: 100%;
                    background: #f0f0f0;
                    border: none;
                    padding: 15px;
                    font-size: 18px;
                    font-weight: bold;
                    text-align: right;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    cursor: pointer;
                    transition: background 0.3s;
                }
                .box button:hover {
                    background: #e0e0e0;
                }
                .content {
                    padding: 15px;
                    font-size: 16px;
                    color: #555;
                    display: none;
                }
                .rotate {
                    transition: transform 0.3s ease;
                }
                .rotated {
                    transform: rotate(180deg);
                }
            </style>
        </head>
        <body>

            <div class="container" id="info">
                @php
                    $terms = [
                        "سياسة الخصوصية – موقع الطبّاع" => "(1) مقدمة ...

                        نحن في [موقع الطبّاع] نحترم خصوصيتك ونلتزم بحماية بياناتك الشخصية. توضح هذه السياسة كيفية جمع واستخدام ومشاركة المعلومات الخاصة بك عند استخدام موقعنا الإلكتروني.
                        (2) جمع المعلومات ...
                        (9) التواصل معنا ...
                        باستخدامك لهذا الموقع، فإنك توافق على سياسة الخصوصية الخاصة بنا",
                        "الشروط والأحكام للعملاء - موقع (الطبّاع)" => "(1) مقدمة ...

                        مرحبًا بك في موقع [الطبّاع]، المتخصص في خدمات الطباعة. باستخدامك لهذا الموقع، فإنك توافق على الالتزام بالشروط والأحكام التالية. يرجى قراءتها بعناية قبل تقديم أي طلب.
                        (2) شروط الاستخدام ...
                        (11) التواصل والدعم ...
                        باستخدامك لهذا الموقع، فإنك توافق على هذه الشروط والأحكام.",
                        "الشروط والأحكام للطباعين - موقع (الطبّاع)" => "(1) مقدمة ...

                        مرحبًا بك في موقع [الطبّاع]، وهو موقع متخصص في تقديم خدمات الطباعة عبر الإنترنت. باستخدامك لهذا الموقع كاطباع، فإنك توافق على الالتزام بالشروط والأحكام التالية. يرجى قراءتها بعناية قبل تقديم أي خدمات.
                        (2) شروط التسجيل والاستخدام ...
                        (9) التواصل والدعم ...
                        باستخدامك لهذه المنصة، فإنك توافق على هذه الشروط والأحكام. نشكرك على انضمامك إلينا!"
                    ];

                    $role = auth()->check() ? auth()->user()->role : ''; // استرجاع قيمة role للمستخدم الحالي
                @endphp

                @foreach ($terms as $title => $content)
                    @if ($title == "سياسة الخصوصية – موقع الطبّاع")
                        <!-- سياسة الخصوصية تكون ظاهرة دائمًا -->
                        <div class="box">
                            <button onclick="toggleContent(this)">
                                {{ $title }}
                                <i class="rotate fas fa-chevron-down"></i>
                            </button>
                            <div class="content">
                                {!! nl2br(e($content)) !!}
                            </div>
                        </div>
                    @elseif ($title == "الشروط والأحكام للعملاء - موقع (الطبّاع)" && $role == 0)
                        <!-- الشروط والأحكام للعملاء تظهر فقط إذا كان الدور ليس 1 -->
                        <div class="box">
                            <button onclick="toggleContent(this)">
                                {{ $title }}
                                <i class="rotate fas fa-chevron-down"></i>
                            </button>
                            <div class="content">
                                "(1) مقدمة

مرحبًا بك في موقع [الطبّاع]، المتخصص في خدمات الطباعة. باستخدامك لهذا الموقع، فإنك توافق على الالتزام بالشروط والأحكام التالية. يرجى قراءتها بعناية قبل تقديم أي طلب.

(2) شروط الاستخدام

يجب أن يكون العميل بعمر 16 عامًا أو أكثر لإجراء عمليات الدفع.

يُحظر استخدام الموقع لأي أغراض غير قانونية أو غير مصرح بها.

يلتزم العميل بتقديم معلومات صحيحة عند التسجيل أو تقديم طلب.

(3) تقديم الطلبات والدفع

جميع الطلبات تُعتبر مؤكدة بمجرد إتمام عملية الدفع.

الأسعار الموضحة تشمل تكلفة الطباعة، ولكن قد يتم فرض رسوم إضافية على التوصيل أو التعديلات الخاصة.

يقبل الموقع طرق الدفع المختلفة مثل البطاقات الائتمانية.

(4) تصميمات العملاء وحقوق الملكية

يتحمل العميل المسؤولية الكاملة عن أي تصميمات أو اوراق يقدمها للطباعة، ويضمن أنها لا تنتهك حقوق الطبع والنشر أو العلامات التجارية.

يحق للموقع رفض أي تصميمات أو أوراق تحتوي على محتوى غير قانوني، عنصري، أو مخالف للآداب العامة.

(5)  الإنتاج والتسليم

تختلف مدة تنفيذ الطلبات بناءً على نوع وحجم العمل، وسيتم إبلاغ العميل بالإطار الزمني المتوقع.

لا يتحمل الموقع مسؤولية التأخير الناجم عن مشاكل التوصيل أو الطوارئ غير المتوقعة.

يتحمل العميل مسؤولية تقديم عنوان توصيل دقيق لضمان وصول الطلبات.

(6)  شروط وقياسات الطباعة :

يتم طباعة الصفحة على قياس A4 .

حدود قياس الصفحة هي 2.5 سم من الأربع اتجاهات .

يتم احتساب قيمة الصفحة بنوع الخط (Times New Roman) وبحجم خط وقدره16.

سعر الصفحة طباعة بالقياسات المذكورة أعلاه هي 500 فلس للورقة الواحدة .

فيما عدا ذلك يتم تقديره من قبل الطباع أو الموقع لاحتساب رسوم الصفحات المرفقة للطباعة .

يحق للعميل عمل تعديل مجاني مرة واحده فقط في حدوث أخطاء مطبعية او تنسيقية وذلك من خلال التواصل مع خدمة عملاء الموقع .



(7) الإلغاء والاسترجاع

يمكن إلغاء الطلبات قبل بدء عملية الطباعة فقط، وبعد ذلك لا يمكن الإلغاء أو استرداد المبلغ.

يتحمل العميل تكلفة إعادة الشحن ما لم يكن الخطأ من قبل الموقع.

(8) السرية والخصوصية

يلتزم الموقع بحماية خصوصية العملاء وعدم مشاركة بياناتهم الشخصية مع أطراف ثالثة دون إذن.

يتم استخدام المعلومات الشخصية فقط لغرض تنفيذ الطلبات والتواصل مع العملاء بشأن خدماتنا.

(9)  التعديلات على الشروط والأحكام

يحتفظ الموقع بالحق في تعديل هذه الشروط والأحكام في أي وقت، وستكون النسخة المحدثة متاحة على الموقع.

استمرار استخدام الموقع بعد التعديلات يُعتبر قبولًا للشروط الجديدة.

(10) إخلاء المسؤولية

لا يتحمل الموقع أي مسؤولية عن الأضرار الناتجة عن سوء استخدام المنتجات المطبوعة أو التلاعب بالملفات من قبل المستخدمين .

يتم تقديم جميع الخدمات كما هي دون أي ضمانات صريحة أو ضمنية.

(11) التواصل والدعم

 لأي استفسارات أو شكاوى، يمكن التواصل معنا عبر البريد الإلكتروني:

الايميل :

 أو عبر الهاتف:

باستخدامك لهذا الموقع، فإنك توافق على هذه الشروط والأحكام.

 نشكرك على ثقتك بنا ","
                            </div>
                        </div>
                    @elseif ($title == "الشروط والأحكام للطباعين - موقع (الطبّاع)" && $role == 1)
                        <!-- الشروط والأحكام للطباعين تظهر فقط إذا كان الدور 0 -->
                        <div class="box">
                            <button onclick="toggleContent(this)">
                                {{ $title }}
                                <i class="rotate fas fa-chevron-down"></i>
                            </button>
                            <div class="content">
                                " مرحبًا بك في موقع [الطبّاع]، وهو موقع متخصص في تقديم خدمات الطباعة عبر الإنترنت. باستخدامك لهذا الموقع كاطباع، فإنك توافق على الالتزام بالشروط والأحكام التالية. يرجى قراءتها بعناية قبل تقديم أي خدمات.

                                (2) شروط التسجيل والاستخدام

                                يجب أن يكون الطبّاع محترفًا في مجال الطباعة ويمتلك الخبرة اللازمة لتنفيذ الطلبات بجودة عالية.

                                يجب تقديم معلومات دقيقة عن الخبرات، المعدات، والأسعار.

                                يُحظر استخدام الموقع لأي أغراض غير قانونية أو غير مصرح بها.

                                يلتزم الطبّاع بالحفاظ على سرية معلومات العملاء وعدم مشاركتها مع أطراف ثالثة.

                                في حال افشاء أي بيانات او معلومات عن الطباعة من قبل الطبّاع فإنه يتحمله وحده كافة المسائلات القانونية الناتجة عن ذلك والموقع غير مسئول عن أي مسائلة قانونية تماماَ.

                                (4) استلام الطلبات وتنفيذها

                                يتلقى الطبّاع الطلبات من العملاء عبر الموقع، ويجب عليه تأكيد قبول الطلب في أسرع وقت ممكن.

                                يُلزم الطبّاع بتقديم العمل وفقًا للمواصفات المتفق عليها مع العميل.

                                في حال تعذّر تنفيذ الطلب لأي سبب، يجب إبلاغ الموقع والعميل فوراً من خلال التواصل مع خدمة عملاء الموقع.

                                (5) الأسعار والدفع

                                يتم تحديد أسعار الطباعة من قبل الطبّاع، على أن تكون ضمن المعايير المعقولة والمتوافقة مع سياسة الموقع.

                                يتم الدفع عبر الموقع قبل تسليم الطلب، مع خصم أي عمولات أو رسوم منصوص عليها في الاتفاقية.

                                لا يحق للطبّاع تحصيل أي مبالغ مباشرة من العملاء دون إذن من الموقع.

                                نسبة الموقع من كافة أعمال الطباعة التي يقوم بها الطبّاع هي 25% تخصم تلقائياً كل شهر ويتم ارسال باقي المبلغ للطبّاع نظير عمله على حسابه البنكي.

                                  شروط وقياسات الطباعة :

                                يتم طباعة الصفحة على قياس A4 .

                                حدود قياس الصفحة هي 2.5 سم من الأربع اتجاهات .

                                يتم احتساب قيمة الصفحة بنوع الخط (Times New Roman) وبحجم خط وقدره 16.

                                سعر الصفحة طباعة بالقياسات المذكورة أعلاه هي 500 فلس للورقة الواحدة .

                                فيما عدا ذلك يتم تقديره من قبل الطباع أو الموقع لاحتساب رسوم الصفحات المرفقة للطباعة .



                                (6) الجودة والمواصفات

                                يلتزم المطبّع بتقديم منتجات ذات جودة عالية ومطابقة للمعايير المطلوبة.

                                في حال استلام العميل لمنتج غير مطابق للمواصفات، قد يُطلب من المطبّع إعادة الطباعة أو تقديم تعويض مناسب.

                                يحتفظ الموقع بالحق في تقييم أداء المطبّعين واتخاذ إجراءات ضد أي مخالفات.

                                6. الإلغاء والاسترجاع

                                يمكن إلغاء الطلبات قبل بدء الإنتاج، وبعد ذلك قد يتم فرض رسوم إلغاء.

                                في حالة وجود خطأ في الطباعة، يتحمل المطبّع مسؤولية إعادة الطباعة أو تقديم حل بديل.

                                يتحمل المطبّع تكلفة إعادة الطباعة ما لم يكن الخطأ من قبل العميل.

                                7. المسؤولية القانونية

                                يضمن المطبّع أن جميع الأعمال التي يقوم بها لا تنتهك أي حقوق ملكية فكرية أو قوانين محلية.

                                الموقع غير مسؤول عن أي نزاعات قانونية تنشأ بين المطبّع والعملاء بسبب سوء الاستخدام أو انتهاك الحقوق.

                                يحتفظ الموقع بالحق في تعليق أو إيقاف حساب أي مطبّع يخالف الشروط.

                                8. التعديلات على الشروط والأحكام

                                يحتفظ الموقع بالحق في تعديل هذه الشروط في أي وقت، وسيتم إخطار المطبّعين بالتعديلات عبر البريد الإلكتروني أو عبر المنصة.

                                استمرار تقديم الخدمات على الموقع بعد التعديلات يُعتبر قبولًا للشروط الجديدة.

                                9. التواصل والدعم لأي استفسارات أو مشاكل، يمكن للمطبّعين التواصل مع دعم الموقع عبر البريد الإلكتروني: [البريد الإلكتروني] أو الهاتف: [رقم الهاتف].

                                باستخدامك لهذه المنصة، فإنك توافق على هذه الشروط والأحكام. نشكرك على انضمامك إلينا! "
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>


            <script>
                function toggleContent(button) {
                    let content = button.nextElementSibling;
                    let icon = button.querySelector("i");

                    if (content.style.display === "block") {
                        content.style.display = "none";
                        icon.classList.remove("rotated");
                    } else {
                        content.style.display = "block";
                        icon.classList.add("rotated");
                    }
                }
            </script>



        </body>
        </html>


</div>
    </html>

    <script>
        function formatNumber(number) {
            if (number >= 1000000) {
                return (number / 1000000).toFixed(1) + 'M'; // لعرض الرقم بالمليون
            } else if (number >= 1000) {
                return (number / 1000).toFixed(1) + 'K'; // لعرض الرقم بالآلاف
            }
            return number;
        }

        function animateCount(id, endValue) {
            let startValue = 0;
            const duration = 600; // مدة التحريك بالمللي ثانية
            const stepTime = Math.abs(Math.floor(duration / endValue));
            const element = document.getElementById(id);

            const counter = setInterval(function () {
                startValue += 1;
                element.innerText = formatNumber(startValue); // تطبيق التنسيق على الرقم

                if (startValue === endValue) {
                    clearInterval(counter);
                }
            }, stepTime);
        }

        // قم بتشغيل الـ animateCount لكل عنصر مع القيم النهائية المناسبة
        animateCount("customerCount", 212);
        animateCount("viewCount", 17421);
        animateCount("orderCount", 32);
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const elementsToAnimate = document.querySelectorAll('.main, .main_content, .main_title h2, .main_title h1, .main_title h4, .main_btns, .main_img img, .icons_above_image, .square, .icon_1, .icon_2, .icon_3');

            elementsToAnimate.forEach((el, index) => {
                el.style.opacity = 0;
                el.style.transition = `transform 1s ease-out ${index * 0.3}s, opacity 1s ease-out ${index * 0.3}s`;

                if (el.classList.contains('main_img')) {
                    el.style.transform = 'translateX(100%)';
                } else if (el.classList.contains('icons_above_image') || el.classList.contains('icon_1') || el.classList.contains('icon_2') || el.classList.contains('icon_3')) {
                    el.style.transform = 'translateY(-100%)';
                } else if (el.classList.contains('square')) {
                    el.style.transform = 'translateY(100%)';
                } else {
                    el.style.transform = 'translateX(-100%)';
                }

                setTimeout(() => {
                    el.style.opacity = 1;
                    el.style.transform = 'translateX(0) translateY(0)';
                }, 100);
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const heroTitle = document.querySelector('.hero_title');
            const heroImg = document.querySelector('.hero_img');

            // استخدام IntersectionObserver لمتابعة ظهور العناصر
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const heroData = entry.target;

                        // تحريك النص من اليمين لليسار
                        heroTitle.style.transition = "transform 1s ease-out, opacity 1s ease-out";
                        heroTitle.style.transform = "translateX(0)";
                        heroTitle.style.opacity = 1;

                        // تحريك الصورة من الشمال لليمين
                        heroImg.style.transition = "transform 1s ease-out, opacity 1s ease-out";
                        heroImg.style.transform = "translateX(0)";
                        heroImg.style.opacity = 1;

                        observer.unobserve(heroData); // إيقاف المراقبة بعد تنفيذ التحريك
                    }
                });
            }, { threshold: 0.5 }); // يبدأ التحريك عندما يظهر 50% من العنصر

            // مراقبة العنصر الذي يحتوي على الصورة والنص
            observer.observe(document.querySelector('.hero_data'));

            // إخفاء العناصر في البداية
            heroTitle.style.transform = 'translateX(100%)';
            heroTitle.style.opacity = 0;
            heroImg.style.transform = 'translateX(-100%)';
            heroImg.style.opacity = 0;
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuTitle = document.querySelector('.menu_title');
            const menuImg = document.querySelector('.menu_img');

            // استخدام IntersectionObserver لمتابعة ظهور العناصر
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const menuData = entry.target;

                        // تحريك النص من اليمين لليسار
                        menuTitle.style.transition = "transform 1s ease-out, opacity 1s ease-out";
                        menuTitle.style.transform = "translateX(0)";
                        menuTitle.style.opacity = 1;

                        // تحريك الصورة من الشمال لليمين
                        menuImg.style.transition = "transform 1s ease-out, opacity 1s ease-out";
                        menuImg.style.transform = "translateX(0)";
                        menuImg.style.opacity = 1;

                        observer.unobserve(menuData); // إيقاف المراقبة بعد تنفيذ التحريك
                    }
                });
            }, { threshold: 0.5 }); // يبدأ التحريك عندما يظهر 50% من العنصر

            // مراقبة العنصر الذي يحتوي على الصورة والنص
            observer.observe(document.querySelector('.menu_data'));

            // إخفاء العناصر في البداية
            menuTitle.style.transform = 'translateX(100%)';
            menuTitle.style.opacity = 0;
            menuImg.style.transform = 'translateX(-100%)';
            menuImg.style.opacity = 0;
        });
    </script>
    <script>
        window.addEventListener('scroll', function () {
            let contactBg = document.querySelector('.contact_bg');
            let contactBg2 = document.querySelector('.contact_bg_2');

            let contactPosition = contactBg.getBoundingClientRect().top;
            let contactPosition2 = contactBg2.getBoundingClientRect().top;

            if (contactPosition <= window.innerHeight) {
                contactBg.classList.add('show');
                contactBg.classList.remove('left-to-right');
            }

            if (contactPosition2 <= window.innerHeight) {
                contactBg2.classList.add('show');
                contactBg2.classList.remove('right-to-left');
            }
        });

    </script>
