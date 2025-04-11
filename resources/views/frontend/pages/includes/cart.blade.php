@extends('frontend.master')
@section('Content')
{{-- resources/views/orders.blade.php --}}
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>طلباتي</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#ffffff] text-white font-sans">

    <h1 class="mb-8 text-3xl font-bold text-center text-black">طلباتي</h1>

    <div class="p-6">
      <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($orders as $order)
          <div class="bg-white text-black rounded-2xl shadow-lg p-6 flex flex-col justify-between transition duration-300 hover:scale-[1.02]">

            <div class="mb-4">
              {{-- التاريخ وحالة الطلب --}}
              <div class="flex items-center justify-between mb-4">
                <span class="text-sm text-gray-500">{{ $order->created_at->format('Y-m-d') }}</span>
                <span class="text-xs font-semibold px-3 py-1 rounded-full
                  @if($order->status === 'منشور')
                    bg-green-100 text-green-700
                  @elseif($order->status === 'قيد المراجعة')
                    bg-yellow-100 text-yellow-700
                  @elseif($order->status === 'قيد التنفيذ')
                    bg-blue-100 text-blue-700
                  @else
                    bg-gray-200 text-gray-700
                  @endif
                ">
                  {{ $order->status === 'in_progress' ? 'جاري التنفيذ' : $order->status }}
                </span>
              </div>

              {{-- عنوان الطلب --}}
              <h2 class="mb-2 text-xl font-bold">طلب للطباعة</h2>

              {{-- تفاصيل الطلب --}}
              <p class="text-sm text-gray-600">تفاصيل: {{ $order->comment }}</p>

              {{-- عرض المعلومات الإضافية --}}
              <p class="text-sm text-gray-600">نوع الطباعة: {{ $order->print_type }}</p>
              <p class="text-sm text-gray-600">عدد الأوراق: {{ $order->paper_count }}</p>
              <p class="text-sm text-gray-600">الحجم: {{ $order->paper_size }}</p>
              <p class="text-sm text-gray-600">اللون: {{ $order->paper_color }}</p>
              <p class="text-sm text-gray-600">
                الموعد النهائي:
                @if($order->dead_line)
                  {{ \Carbon\Carbon::parse($order->dead_line)->format('Y-m-d H:i:s') }}
                @else
                  غير محدد
                @endif
              </p>

              <p class="text-sm text-gray-600">
                الملف:
                <a href="{{ asset('storage/' . $order->file) }}" class="text-blue-600 hover:underline" download>
                  تحميل الملف
                </a>
              </p>
                          </div>

            {{-- عرض اسم المستخدم --}}
            <div class="mb-4">
              <p class="text-sm text-gray-600">اسم الشخص: {{ $order->user->name ?? 'غير معروف' }}</p>
            </div>

            {{-- أزرار التفاعل --}}
            <div class="flex items-center justify-between mt-4">
              @if($order->status !== 'in_progress')
                <form method="POST" action="">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-red-600 hover:text-red-800">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    حذف الطلب
                  </button>
                </form>
              @else
                <form method="POST" action="">
                  @csrf
                  <button type="submit" class="text-green-600 hover:text-green-800">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    دفع الطلب
                  </button>
                </form>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    </div>

</body>
</html>

@endsection
