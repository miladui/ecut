<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <style>
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input[type="tel"],
        input[type="text"] {
            width: 200px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .error-message {
            color: red;
            margin-top: 5px;
        }

        button {
            font-size: 13px;
        }
    </style>
</head>
<link rel="stylesheet" href="styles.css">
<body>
<!--header-->
<div class="header-main relative w-full">
    <header class="header bg-base-color w-full">
        <div class="c-container">
            <div class="p-header flex items-center justify-between h-[85px] w-full mx-auto">
                <ul class="links h-full w-[40%] p-0 flex items-center">
                    <li><a class="link flex items-center text-white text-[12px] px-[8px] mx-[4px]" href="#">صفحه
                            اصلی </a>
                    </li>
                    <li class="h-full flex items-center"><a
                                class="link h-[90px] flex items-center text-white text-[12px] h-full px-[8px] mx-[4px]"
                                href="#"
                                data-megamenu=".category-megamenu">محصولات </a></li>
                    <li><a class="link flex  items-center text-white text-[12px] px-[8px] mx-[4px]"
                           href="#">فروشگاه </a>
                    </li>
                    <li><a class="link flex items-center text-white text-[12px] px-[8px] mx-[4px]" href="#">فروش
                            سازمانی </a></li>
                    <li><a class="link flex items-center text-white text-[12px] px-[8px] mx-[4px]" href="#">تماس با
                            ما </a>
                    </li>
                    <li><a class="link last-link flex items-center text-white text-[12px] px-[8px] mx-[4px]" href="#">درباره
                            ما </a></li>
                </ul>
                <a href="" class="logo-header w-[20%] flex justify-center">
                    <img width="160" id="logoHeader" src="assets/images/ECUT-LOGO-.png">
                </a>
                <div class="end-header gap-[20px] flex items-center w-[40%] justify-end">
                    <button class="btn-search">
                        <i class="fa fa-search text-white"></i>
                    </button>
                    <a href="" class="link-auth flex items-center">
                        <span class="text-[12px] text-white">ورود</span>
                        <div class="line-between h-[11px] w-[1.5px] bg-base-color-two mx-[8px]"></div>
                        <span class="text-[12px] text-white">عضویت</span>
                    </a>
                    <div class="cart relative">
                        <i class=""></i>
                        <span class="count absolute cart bottom-[-3px] bg-base-color-two w-[17px] pt-[4px] text-[11px] left-[-5px] text-white h-[17px] rounded-[50%] flex items-center justify-center">0</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="megaMenu" class="mega-menu">
        <h1>milad</h1>
    </div>
</div>

<section class="s-login mt-[60px] w-full overflow-hidden  h-[100vh] relative">
    <div class="absolute w-full h-full right-0 top-0">
        <img class="w-full h-full object-cover" src="assets/images/banner.png" alt="">
    </div>
    <div class="flex absolute right-0 top-0 h-[100vh] w-full items-center justify-center">
        <div class=" bg-white z-[20px] py-[4rem] px-[2rem]" id="sms-container">
            <div class="container">
                <h1>ورود به سایت</h1>
                <div class="flex flex-col items-center" id="mobile-form">
                    <input type="tel" id="mobile" placeholder="شماره همراه">
                    <button class="btn-base" id="send-sms">ارسال پیامک</button>
                    <p id="mobile-error" class="error-message"></p>
                </div>
                <div id="code-form" style="display: none;">
                    <div class="flex flex-col items-center">
                        <input type="text" id="code" placeholder="کد تایید">
                        <button class="btn-base" id="login">ورود</button>
                        <p id="code-error" class="error-message"></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<footer style="margin-top: 3rem">
    <div class="main-footer">
        <div class="top-footer">
            <div class="footer1box">
                <div class="enamd-box">
                    <div class="footer1boxs">
                        <span>مجوز ها </span>
                        <img src="assets/images/logos.png">
                    </div>
                </div>
            </div>
            <div class="footer2box">
                <span>اطلاعات تماس </span>
                <ul>
                    <li>تـــــلفن: <a href="">02122910202</a></li>
                    <li>ایمیل: <a href="">info@ecut.ir</a></li>
                    <li>نشانی: تهران، میردادماد</li>
                    <li>نبش کـــــــازرون جنوبی</li>
                    <li>ساختمان ایکات، پلاک 25</li>
                </ul>
            </div>
            <div class="footer3box">
                <ul>
                    <li><a href="#">صفحه اصلی</a></li>
                    <li><a href="#">تماس با ما</a></li>
                    <li><a href="#">درباره‌ما</a></li>
                    <li><a href="#">ورود/ثبت نام</a></li>
                    <li><a href="#">ایکات کارت</a></li>
                    <li><a href="#">فروش سازمانی</a></li>
                    <li><a href="#">نقشه سایت</a></li>
                </ul>
            </div>
            <div class="footer4box">
                <ul>
                    <li><a href="#">فروشگاه‌ها </a></li>
                    <li><a href="#">سایز من چیست؟</a></li>
                    <li><a href="#">رهگیری سفارش</a></li>
                    <li><a href="#">شرایط بازگشت و تعویض کالا</a></li>
                    <li><a href="#">سوالات متداول</a></li>
                    <li><a href="#">حریم خصوصی</a></li>
                    <li><a href="#">قوانین و مقررات</a></li>
                </ul>

            </div>
            <div class="footer5box">
                <p>مشترک شوید تا آخرین اخبار را دریافت کنید. <br>ما به شما تمامی اخبار و فروش‌های
                    فوق‌العاده را
                    اطلاع رسانی می‌کنیم</p>
                <form>
                    <input type="text" name="email" placeholder="شماره همراه خود را وارد کنید.">
                    <button>مشترک شوید</button>
                </form>
            </div>
        </div>

    </div>
    <div class="social">
        <div class="container-fluid">
            <ul>
                <li class="telegram"><a href="#"><i class="ecut-telegram"></i></a></li>
                <li class="instagram"><a href="#"><i class="ecut-instagram"></i></a></li>
                <li class="aparat"><a href="#"><i class="ecut-aparat"></i></a></li>
                <li class="youtube"><a href="#"><i class="ecut-youtube"></i></a></li>
                <li class="pintres"><a href="#"><i class="ecut-pintres"></i></a></li>
                <li class="facebook"><a href="#"><i class="ecut-facebook"></i></a></li>
                <li class="x"><a href="#"><i class="ecut-x"></i></a></li>
                <li class="linkedin"><a href="#"><i class="ecut-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>کلیه حقوق محصولات و محتوای این وبگاه متعلق به ایکات است</p>
    </div>
</footer>


<script src="assets/js/jquery-3.7.1.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    const mobileForm = document.getElementById('mobile-form');
    const codeForm = document.getElementById('code-form');
    const mobileInput = document.getElementById('mobile');
    const codeInput = document.getElementById('code');
    const sendSmsButton = document.getElementById('send-sms');
    const loginButton = document.getElementById('login');
    const mobileError = document.getElementById('mobile-error');
    const codeError = document.getElementById('code-error');

    sendSmsButton.addEventListener('click', function () {
        const mobile = mobileInput.value;

        // Validate mobile number (you can add more robust validation)
        if (!/^\d{11}$/.test(mobile)) {
            mobileError.textContent = 'شماره موبایل باید 11 رقم باشد.';
            return;
        }

        // Here you would typically make an AJAX request to your server
        // to send the SMS. For demonstration purposes, we'll simulate it.
        console.log('Sending SMS to:', mobile);

        // Simulate SMS sent successfully
        mobileForm.style.display = 'none';
        codeForm.style.display = 'block';

        // Clear any previous error messages
        mobileError.textContent = '';
    });

    loginButton.addEventListener('click', function () {
        const code = codeInput.value;

        // Validate code (you can add more robust validation)
        if (!/^\d{4}$/.test(code)) {
            codeError.textContent = 'کد تایید باید 4 رقم باشد.';
            return;
        }

        // Here you would typically make an AJAX request to your server
        // to validate the code. For demonstration purposes, we'll simulate it.
        console.log('Validating code:', code);

        // Simulate successful login
        alert('ورود موفقیت آمیز بود!'); // Replace with actual redirect
        window.location.href = '/your-actual-website';

        // Clear any previous error messages
        codeError.textContent = '';
    });


</script>
</body>
</html>