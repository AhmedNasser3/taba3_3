<div class="header">
    <div class="header_container">
        <div class="header_content">
            <div class="header_data">
                <div class="header_auth">
                    <div class="header_auth_lang">
                        {{--  <a href="">
                        <button>EN</button>
                    </a>  --}}
                    </div>

                    <!-- زر القائمة يظهر فقط في الشاشات الصغيرة -->
                    <div class="header_auth_login toggle-menu-btn">
                        <button id="toggleMenu"><i class="fa-solid fa-bars"></i></button>
                    </div>

                    @auth
                    <div class="header_auth_register">
                        <a href="{{ route('profile.show') }}">
                            <button><i class="fa-solid fa-user"></i></button>
                        </a>
                    </div>
                    @endauth

                    @guest
                    <div class="header_auth_register">
                        <a href="{{ route('login') }}">
                            <button>تسجيل دخول</button>
                        </a>
                    </div>
                    <div class="header_auth_login">
                        <a href="{{ route('register') }}">
                            <button>تسجيل</button>
                        </a>
                    </div>
                    @endguest
                </div>

                <div class="header_links" id="headerLinks">
                    <ul>
                        <a href="/"><li>رئيسية</li></a>
                        @auth
                        <a href="{{ route('cart.show') }}"><li>طلباتي</li></a>
                        @endauth
                        <a href="#info"><li>الشروط والاحكام</li></a>
                        <a href="/#contact"><li>التحدث معنا</li></a>
                    </ul>
                </div>

                <div class="header_logo">
                    <a href="/">
                        <img src="{{ asset('images/WhatsApp Image 2025-02-18 at 3.57.36 PM.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let header = document.querySelector(".header");
        let headerHeight = header.offsetHeight;

        window.addEventListener("scroll", function () {
            if (window.scrollY > headerHeight) {
                header.classList.add("fixed");
            } else {
                header.classList.remove("fixed");
            }
        });

        // التمرير السلس للرابط الداخلي
        document.querySelectorAll('a[href^="/#"]').forEach(anchor => {
            anchor.addEventListener("click", function (e) {
                e.preventDefault();
                const targetId = this.getAttribute("href").substring(2);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 50,
                        behavior: "smooth"
                    });
                }
            });
        });

        // تشغيل القائمة المنسدلة في الشاشات الصغيرة
        const toggleButton = document.getElementById("toggleMenu");
        const navLinks = document.getElementById("headerLinks");

        toggleButton.addEventListener("click", () => {
            navLinks.classList.toggle("show");
        });
    });
</script>

<style>
    /* القائمة في الشاشات الصغيرة */
    @media (max-width: 768px) {
        .header_links {
            display: none;
            flex-direction: column;
            background: #181717;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            border-top: 1px solid #eee;
            padding: 10px 0;
            z-index: 9999;
        }

        .header_links.show {
            display: flex;
        }

        .header_links ul {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .header_links ul a {
            width: 100%;
            text-align: center;
        }

        /* زر القائمة يظهر فقط عند تصغير الشاشة */
        .toggle-menu-btn {
            display: block;
        }
    }

    /* إخفاء زر bars في الشاشات الكبيرة */
    @media (min-width: 769px) {
        .toggle-menu-btn {
            display: none;
        }
    }
</style>
