<?php include 'header-desktop.php';?>
<?php include 'header-mobile.php';?>
<?php include 'loginModal.php'; ?>
<section class="contact-us">
    <div class="c-container-pages">
        <div class="p-contact-us min-[801px]:mt-[7rem] max-[800px]:mt-[5rem] w-[90%]">
            <div class="breadcrum mb-3">
                <a class="text-[14px]" href="#">صفحه نخست</a> <span class="mx-[2px] text-[14px]">/</span> <span class="font-bold text-[14px]"> تماس با ما </span>
            </div>
            <div class="row-title  mt-[2.5rem]">
                <div class="title-main-site w-[120px] flex justify-center">
                    <h2 class="text-[14px] font-bold w-[120px] flex justify-center">تماس با ما</h2>
                </div>
            </div>
            <div class="row-contact mt-[1rem] w-full flex justify-between items-start">
                <form action="" class="form w-[49%] flex justify-between flex-wrap">
                    <div class="item w-[48%] max-[800px]:w-full flex flex-col items-start">
                        <label for="">نام و نام خانوادگی <span class="text-red-500">*</span> </label>
                        <input placeholder="نام و نام خانوادگی" type="text">
                    </div>
                    <div class="item w-[48%] max-[800px]:w-full flex flex-col items-start">
                        <label for="">تلفن همراه <span class="text-red-500">*</span> </label>
                        <input placeholder="تلفن همراه" type="text">
                    </div>
                    <div class="item w-[48%] max-[800px]:w-full flex flex-col items-start">
                        <label for="">آدرس ایمیل <span class="text-red-500">*</span> </label>
                        <input placeholder="آدرس ایمیل" type="text">
                    </div>
                    <div class="item w-[48%] max-[800px]:w-full flex flex-col items-start">
                        <label for="">دپارتمان <span class="text-red-500">*</span> </label>
                        <select name="" id="">
                            <option selected value="">پشتیبانی خرید آنلاین</option>
                            <option value=""> پشتیبانی فنی سایت</option>
                            <option value="">فروش سازمانی</option>
                            <option value="">مدیریت</option>
                        </select>
                    </div>
                    <div class="item w-full flex flex-col items-start">
                        <label for="">پیام شما <span class="text-red-500">*</span> </label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="row-code w-full flex justify-center">
                        <input placeholder="کد امنیتی را وارد کنید" type="text">
                    </div>
                    <div class="w-full flex justify-center mt-3">
                        <button class="btn-submit">ارسال پیام</button>
                    </div>

                </form>
                <div class="box-info w-[49%] flex flex-col items-start">
                    <h2>اطلاعات تماس</h2>

                    <ul class="contact-info-list">
                        <li class="contact-info-item text-[13px] flex gap-[12px]">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 5.5C21 14.0604 14.0604 21 5.5 21C5.11378 21 4.73086 20.9859 4.35172 20.9581C3.91662 20.9262 3.69906 20.9103 3.50103 20.7963C3.33701 20.7019 3.18146 20.5345 3.09925 20.364C3 20.1582 3 19.9181 3 19.438V16.6207C3 16.2169 3 16.015 3.06645 15.842C3.12515 15.6891 3.22049 15.553 3.3441 15.4456C3.48403 15.324 3.67376 15.255 4.05321 15.117L7.26005 13.9509C7.70153 13.7904 7.92227 13.7101 8.1317 13.7237C8.31637 13.7357 8.49408 13.7988 8.64506 13.9058C8.81628 14.0271 8.93713 14.2285 9.17882 14.6314L10 16C12.6499 14.7999 14.7981 12.6489 16 10L14.6314 9.17882C14.2285 8.93713 14.0271 8.81628 13.9058 8.64506C13.7988 8.49408 13.7357 8.31637 13.7237 8.1317C13.7101 7.92227 13.7904 7.70153 13.9509 7.26005L13.9509 7.26005L15.117 4.05321C15.255 3.67376 15.324 3.48403 15.4456 3.3441C15.553 3.22049 15.6891 3.12515 15.842 3.06645C16.015 3 16.2169 3 16.6207 3H19.438C19.9181 3 20.1582 3 20.364 3.09925C20.5345 3.18146 20.7019 3.33701 20.7963 3.50103C20.9103 3.69907 20.9262 3.91662 20.9581 4.35173C20.9859 4.73086 21 5.11378 21 5.5Z"
                                      stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a href="tel:02122910202">
                                <bdi>02122910202</bdi>
                            </a>
                        </li>
                        <li class="contact-info-item flex gap-[12px]">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7" stroke="#fff"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <rect x="3" y="5" width="18" height="14" rx="2" stroke="#fff" stroke-width="2"
                                      stroke-linecap="round"/>
                            </svg>
                            <div>
                                <a href="mailto:info@ecut.shop">info@ecut.shop</a>
                            </div>
                        </li>
                        <li class="contact-info-item flex text-[13px] gap-[12px]">
                            <svg width="25" height="25" viewBox="0 0 1024 1024" fill="#fff" class="icon" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z"
                                      fill=""/>
                            </svg>
                            تهران - بلوار میرداماد، روبروی پمپ بنزین، نبش کازرون جنوبی، پلاک 202، ساختمان ایکات
                        </li>
                        <li class="contact-info-item text-[13px] flex gap-[12px]">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 5.5C21 14.0604 14.0604 21 5.5 21C5.11378 21 4.73086 20.9859 4.35172 20.9581C3.91662 20.9262 3.69906 20.9103 3.50103 20.7963C3.33701 20.7019 3.18146 20.5345 3.09925 20.364C3 20.1582 3 19.9181 3 19.438V16.6207C3 16.2169 3 16.015 3.06645 15.842C3.12515 15.6891 3.22049 15.553 3.3441 15.4456C3.48403 15.324 3.67376 15.255 4.05321 15.117L7.26005 13.9509C7.70153 13.7904 7.92227 13.7101 8.1317 13.7237C8.31637 13.7357 8.49408 13.7988 8.64506 13.9058C8.81628 14.0271 8.93713 14.2285 9.17882 14.6314L10 16C12.6499 14.7999 14.7981 12.6489 16 10L14.6314 9.17882C14.2285 8.93713 14.0271 8.81628 13.9058 8.64506C13.7988 8.49408 13.7357 8.31637 13.7237 8.1317C13.7101 7.92227 13.7904 7.70153 13.9509 7.26005L13.9509 7.26005L15.117 4.05321C15.255 3.67376 15.324 3.48403 15.4456 3.3441C15.553 3.22049 15.6891 3.12515 15.842 3.06645C16.015 3 16.2169 3 16.6207 3H19.438C19.9181 3 20.1582 3 20.364 3.09925C20.5345 3.18146 20.7019 3.33701 20.7963 3.50103C20.9103 3.69907 20.9262 3.91662 20.9581 4.35173C20.9859 4.73086 21 5.11378 21 5.5Z"
                                      stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            روابط عمومی داخلی
                            <a href="tel:02122910202">
                                <bdi>115</bdi>
                            </a>
                        </li>
                        <li class="contact-info-item text-[13px] flex gap-[12px]">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 5.5C21 14.0604 14.0604 21 5.5 21C5.11378 21 4.73086 20.9859 4.35172 20.9581C3.91662 20.9262 3.69906 20.9103 3.50103 20.7963C3.33701 20.7019 3.18146 20.5345 3.09925 20.364C3 20.1582 3 19.9181 3 19.438V16.6207C3 16.2169 3 16.015 3.06645 15.842C3.12515 15.6891 3.22049 15.553 3.3441 15.4456C3.48403 15.324 3.67376 15.255 4.05321 15.117L7.26005 13.9509C7.70153 13.7904 7.92227 13.7101 8.1317 13.7237C8.31637 13.7357 8.49408 13.7988 8.64506 13.9058C8.81628 14.0271 8.93713 14.2285 9.17882 14.6314L10 16C12.6499 14.7999 14.7981 12.6489 16 10L14.6314 9.17882C14.2285 8.93713 14.0271 8.81628 13.9058 8.64506C13.7988 8.49408 13.7357 8.31637 13.7237 8.1317C13.7101 7.92227 13.7904 7.70153 13.9509 7.26005L13.9509 7.26005L15.117 4.05321C15.255 3.67376 15.324 3.48403 15.4456 3.3441C15.553 3.22049 15.6891 3.12515 15.842 3.06645C16.015 3 16.2169 3 16.6207 3H19.438C19.9181 3 20.1582 3 20.364 3.09925C20.5345 3.18146 20.7019 3.33701 20.7963 3.50103C20.9103 3.69907 20.9262 3.91662 20.9581 4.35173C20.9859 4.73086 21 5.11378 21 5.5Z"
                                      stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            فروش سازمانی داخلی
                            <a href="tel:02122910202">
                                <bdi>110</bdi>
                            </a>
                        </li>
                        <li class="contact-info-item text-[13px] flex gap-[12px]">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M9.83824 18.4467C10.0103 18.7692 10.1826 19.0598 10.3473 19.3173C8.59745 18.9238 7.07906 17.9187 6.02838 16.5383C6.72181 16.1478 7.60995 15.743 8.67766 15.4468C8.98112 16.637 9.40924 17.6423 9.83824 18.4467ZM11.1618 17.7408C10.7891 17.0421 10.4156 16.1695 10.1465 15.1356C10.7258 15.0496 11.3442 15 12.0001 15C12.6559 15 13.2743 15.0496 13.8535 15.1355C13.5844 16.1695 13.2109 17.0421 12.8382 17.7408C12.5394 18.3011 12.2417 18.7484 12 19.0757C11.7583 18.7484 11.4606 18.3011 11.1618 17.7408ZM9.75 12C9.75 12.5841 9.7893 13.1385 9.8586 13.6619C10.5269 13.5594 11.2414 13.5 12.0001 13.5C12.7587 13.5 13.4732 13.5593 14.1414 13.6619C14.2107 13.1384 14.25 12.5841 14.25 12C14.25 11.4159 14.2107 10.8616 14.1414 10.3381C13.4732 10.4406 12.7587 10.5 12.0001 10.5C11.2414 10.5 10.5269 10.4406 9.8586 10.3381C9.7893 10.8615 9.75 11.4159 9.75 12ZM8.38688 10.0288C8.29977 10.6478 8.25 11.3054 8.25 12C8.25 12.6946 8.29977 13.3522 8.38688 13.9712C7.11338 14.3131 6.05882 14.7952 5.24324 15.2591C4.76698 14.2736 4.5 13.168 4.5 12C4.5 10.832 4.76698 9.72644 5.24323 8.74088C6.05872 9.20472 7.1133 9.68686 8.38688 10.0288ZM10.1465 8.86445C10.7258 8.95042 11.3442 9 12.0001 9C12.6559 9 13.2743 8.95043 13.8535 8.86447C13.5844 7.83055 13.2109 6.95793 12.8382 6.2592C12.5394 5.69894 12.2417 5.25156 12 4.92432C11.7583 5.25156 11.4606 5.69894 11.1618 6.25918C10.7891 6.95791 10.4156 7.83053 10.1465 8.86445ZM15.6131 10.0289C15.7002 10.6479 15.75 11.3055 15.75 12C15.75 12.6946 15.7002 13.3521 15.6131 13.9711C16.8866 14.3131 17.9412 14.7952 18.7568 15.2591C19.233 14.2735 19.5 13.1679 19.5 12C19.5 10.8321 19.233 9.72647 18.7568 8.74093C17.9413 9.20477 16.8867 9.6869 15.6131 10.0289ZM17.9716 7.46178C17.2781 7.85231 16.39 8.25705 15.3224 8.55328C15.0189 7.36304 14.5908 6.35769 14.1618 5.55332C13.9897 5.23077 13.8174 4.94025 13.6527 4.6827C15.4026 5.07623 16.921 6.08136 17.9716 7.46178ZM8.67765 8.55325C7.61001 8.25701 6.7219 7.85227 6.02839 7.46173C7.07906 6.08134 8.59745 5.07623 10.3472 4.6827C10.1826 4.94025 10.0103 5.23076 9.83823 5.5533C9.40924 6.35767 8.98112 7.36301 8.67765 8.55325ZM15.3224 15.4467C15.0189 16.637 14.5908 17.6423 14.1618 18.4467C13.9897 18.7692 13.8174 19.0598 13.6527 19.3173C15.4026 18.9238 16.921 17.9186 17.9717 16.5382C17.2782 16.1477 16.3901 15.743 15.3224 15.4467ZM12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                      fill="#fff"/>
                            </svg>
                            فروش اینترنتی
                            <a href="tel:02122910202">
                                <bdi>311</bdi>
                            </a>
                        </li>
                        <li class="contact-info-item text-[13px] flex gap-[12px]">
                            <svg fill="#fff" width="25" height="25" viewBox="0 0 32 32" id="icon"
                                 xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <style>.cls-1 {
                                            fill: none;
                                        }</style>
                                </defs>
                                <title>purchase</title>
                                <path d="M28,6H4A2,2,0,0,0,2,8V24a2,2,0,0,0,2,2H28a2,2,0,0,0,2-2V8A2,2,0,0,0,28,6Zm0,2v3H4V8ZM4,24V13H28V24Z"
                                      transform="translate(0 0)"/>
                                <rect x="6" y="20" width="10" height="2"/>
                                <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1"
                                      width="32" height="32"/>
                            </svg>
                            مشاوره خرید
                            <a href="tel:02122910202">
                                <bdi>201</bdi>
                            </a>
                        </li>

                    </ul>
                    <div class="row-social-media">
                        <span>شبکات اجتماعی</span>
                        <ul class="contact-scoial-list flex justify-center gap-[8px] list-unstyled">
                            <li class="contact-social-item">
                                <a href="https://t.me/Ecutco" target="_blank" rel="nofollow" aria-label="تلگرام">
                                    <img src="assets/images/social-media/telegram-svgrepo-com%20(1).svg" alt="">
                                </a>
                            </li>
                            <li class="contact-social-item">
                                <a href="https://instagram.com/_ecut_" target="_blank" rel="nofollow" aria-label="اینستاگرام">
                                    <img src="assets/images/social-media/instagram-svgrepo-com.svg" alt="">
                                </a>
                            </li>
                            <li class="contact-social-item">
                                <a href="https://linkedin.com/company/ecutco" target="_blank" rel="nofollow" aria-label="linkedin">
                                    <img src="assets/images/social-media/linkedin-svgrepo-com.svg" alt="">
                                </a>
                            </li>
                            <li class="contact-social-item">
                                <a href="https://www.pinterest.com/ecutco/" target="_blank" rel="nofollow" aria-label="pinterest"><img
                                            src="assets/images/social-media/pinterest-svgrepo-com.svg" alt=""> </a>
                            </li>
                            <li class="contact-social-item">
                                <a href="https://www.aparat.com/ecut" target="_blank" rel="nofollow" aria-label="aparat">
                                    <img src="assets/images/social-media/aparat-svgrepo-com.svg" alt="">
                                </a>
                            </li>
                            <li class="contact-social-item">
                                <a href="https://www.youtube.com/channel/UCzU-IJVMkn4kv4mieQbMmvg" target="_blank" rel="nofollow" aria-label="youtube"><img
                                            src="assets/images/social-media/youtube-color-svgrepo-com.svg" alt=""> </a>
                            </li>
                            <li class="contact-social-item">
                                <a href="https://www.facebook.com/ecut.ir/" target="_blank" rel="nofollow" aria-label="facebook"><img
                                            src="assets/images/social-media/facebook-svgrepo-com.svg" alt=""> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<footer>
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
<script src="themes.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    var swiperHeader = new Swiper(".swiperHeader", {
        pagination: {
            el: ".swiper-pagination-c",
        },
        slidesPerView: 1,
    });
</script>
<?php include 'script-header.php'; ?>
</body>
</html>