<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>الطباع</title>
    <style>
        .social-icons {
          position: fixed;
          top: 40%;
          right: 20px;
          transform: translateY(-50%);
          display: flex;
          flex-direction: column;
          gap: 15px;
          z-index: 999;
        }

        .social-icons a {
          width: 50px;
          height: 50px;
          border-radius: 50%;
          background-color: #e7e7e733;
          display: flex;
          align-items: center;
          justify-content: center;
          box-shadow: 0 4px 8px rgba(0,0,0,0.1);
          transition: all 0.3s ease;
          cursor: pointer;
          text-decoration: none;
        }

        .social-icons a:hover {
          transform: scale(1.1) rotate(10deg);
          box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .social-icons i {
          font-size: 22px;
          color: #333;
          transition: color 0.3s;
        }

        .social-icons a.facebook:hover i { color: #1877f2; }
        .social-icons a.twitter:hover i { color: #1da1f2; }
        .social-icons a.whatsapp:hover i { color: #25d366; }
        .social-icons a.instagram:hover i { color: #e1306c; }
      </style>

      <!-- Font Awesome for icons -->
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    <body>

      <div class="social-icons">

        <a href="https://x.com/el6aba3?s=11" style="color: #1da1f2" class="twitter" title="Twitter">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.tiktok.com/@el6aba3?is_from_webapp=1&sender_device=pc" style="color: #141414" class="twitter" title="Twitter">
          <i class="fab fa-tiktok"></i>
        </a>
        <a href="https://wa.me/96567661103" style="color: #25d366" class="whatsapp" title="WhatsApp">
            <i class="fab fa-whatsapp"></i>
          </a>
        <a href="https://www.instagram.com/el6aba3/" style="color: #e1306c" class="instagram" title="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://snapchat.com/t/BqLVXMbL" style="color: #cfe130" class="snap" title="snap">
          <i class="fab fa-snapchat"></i>
        </a>
      </div>

    @include('frontend.includes.header')
    <div style="padding: 0;margin:0;">
        <main style="min-height: 100vh">
            @yield('Content')
        </main>
    </div>
    @include('frontend.includes.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script>
        $(document).ready(function(){
            $('.partners_slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev">&#10094;</button>',
                nextArrow: '<button type="button" class="slick-next">&#10095;</button>',
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
    <style>
        .partners_slider {
            direction: ltr;
        }
        .partners_boxes_img {
            text-align: center;
            padding: 10px;
        }
        .partners_boxes_img img {
            width: 100px;
            height: auto;
        }
        .slick-prev, .slick-next {
            font-size: 24px;
            background: #253b2c;
            border: none;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .slick-prev {
            left: -50px;
        }
        .slick-next {
            right: -50px;
        }
    </style>

</body>
</html>
