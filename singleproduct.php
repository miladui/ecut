<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>جزییات محصول </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

</head>
<body>
<?php include 'header-desktop.php'; ?>
<?php include 'header-mobile.php'; ?>
<?php include 'loginModal.php'; ?>

<!--box-share-->
<div class="p-box-share bg-[#00000099] z-[99999999] w-full h-[100vh] fixed right-0 top-0">
    <div class="box-share w-[34%] max-[900px]:w-full">
        <div class="row-close w-full flex justify-between items-center px-[1.5rem]">
            <h3 class="title">اشتراک گذاری</h3>
            <svg  class="close-share" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.9986 0H13.2986H4.69831H1.9983C0.896949 0 0 0.896949 0 2.00136V4.70136V13.3993V16.0017C0 17.1031 0.896949 18 2.00136 18H4.69831H13.3993H15.9986C17.1031 18 18 17.1031 18 15.9986V13.3017V4.70136V2.00136C18 0.896949 17.1031 0 15.9986 0ZM12.6 14.0003L9 10.4003L5.4 14.0003L3.99966 12.6L7.59966 9L3.99966 5.4L5.4 3.99966L9 7.59966L12.6 3.99966L14.0003 5.4L10.4003 9L14.0003 12.6L12.6 14.0003Z" fill="#777777"></path>
            </svg>
        </div>
        <div class="row-middle flex justify-between  items-center">
            <img class="img-share " src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg" alt="">
            <div class="p-icons flex flex-col">
                <div class="title-product w-100 flex justify-center">
                    <h4 class="text-[16px]">کت تک 6036</h4>
                </div>
                <div class="w-full flex gap-[6px] flex-col">
                    <button onclick="copyLink('https://your-link.com/instagram')" class="btn-icon">اینستاگرام
                        <img src="assets/images/social-media/instagram-svgrepo-com.svg" alt="">
                    </button>
                    <button onclick="copyLink('https://your-link.com/telegram')" class="btn-icon">
                        تلگرام
                        <img src="assets/images/social-media/telegram-svgrepo-com%20(1).svg" alt="">

                    </button>
                    <button onclick="copyLink('https://your-link.com/facebook')" class="btn-icon">
                        فیس بوک
                        <img src="assets/images/social-media/facebook-svgrepo-com.svg" alt="">
                    </button>
                    <button onclick="copyLink('https://your-link.com/linkdin')" class="btn-icon">
                        لینکدین
                        <img src="assets/images/social-media/linkedin-svgrepo-com.svg" alt="">
                    </button>
                    <button onclick="copyLink('https://your-link.com/whatsapp')" class="btn-icon">
                        واتس اپ
                        <img src="assets/images/social-media/whatsapp-svgrepo-com%20(1).svg" alt="">
                    </button>
                    <button onclick="copyLink('https://your-link.com/sorosh')" class="btn-icon">
                        سروش
                        <img src="assets/images/social-media/sorosh.png" alt="">
                    </button>
                    <button onclick="copyLink('https://your-link.com/eita')" class="btn-icon">
                        ایتا
                        <img src="assets/images/social-media/eta.png" alt="">
                    </button>
                    <button onclick="copyLink('https://your-link.com/bale')" class="btn-icon">
                        بله
                        <img src="assets/images/social-media/bale.png" alt="">
                    </button>
                </div>
            </div>
        </div>
        <div class="row-end w-full flex flex-col items-center">
            <span>لینک محصول</span>
            <a href="" class="copy-link">https://ecut.shop/product/single-coat-xja1156036</a>
            <div class="copy-message bg-green-300 text-[#fff] rounded-[4px] px-[1rem] py-[4px] mt-[12px]"
                 style="display: none;">لینک با موفقیت کپی شد!
            </div>
        </div>
    </div>
</div>


<section class="s-single-product mt-[55px]">
    <div class="p-single-product max-[900px]:hidden w-full h-[100vh] flex items-start">
        <div class="start pt-[1rem] px-[2rem] h-[95vh] overflow-y-auto w-[38%]">
            <div class="w-full flex flex-col max-[800px]:px-0 min-[1300px]:px-[3rem]  min-[1800px]:px-[6rem]">
                <div class="breadcrum mt-[2rem] w-full mb-3">
                    <a class="text-[14px]" href="#">محصولات</a>
                    <span class="mx-[2px] text-[14px]">/</span>
                    <a class="text-[14px]" href="#">کلاسیک</a>
                    <span class="mx-[2px] text-[14px]">/</span>
                    <a class="text-[14px]" href="#"> کت وشلوار </a>
                    <span class="mx-[2px] text-[14px]">/</span>
                    <span class="font-bold en-num text-[14px]">کت و شلوار مدل PSU1153332</span>
                </div>
                <div class="title-product mt-[2rem] w-full flex items-center justify-between">
                    <h2 class="text-[20px] en-num font-bold">کت و شلوار مدل PSU1153332</h2>
                    <div class="icons flex items-center gap-[8px]">
                        <button class="btn-share">
                            <svg fill="#000000" height="20" width="20" version="1.1" id="Layer_1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 458.624 458.624" xml:space="preserve">
<g>
    <g>
        <path d="M339.588,314.529c-14.215,0-27.456,4.133-38.621,11.239l-112.682-78.67c1.809-6.315,2.798-12.976,2.798-19.871
			c0-6.896-0.989-13.557-2.798-19.871l109.64-76.547c11.764,8.356,26.133,13.286,41.662,13.286c39.79,0,72.047-32.257,72.047-72.047
			C411.634,32.258,379.378,0,339.588,0c-39.79,0-72.047,32.257-72.047,72.047c0,5.255,0.578,10.373,1.646,15.308l-112.424,78.491
			c-10.974-6.759-23.892-10.666-37.727-10.666c-39.79,0-72.047,32.257-72.047,72.047s32.256,72.047,72.047,72.047
			c13.834,0,26.753-3.907,37.727-10.666l113.292,79.097c-1.629,6.017-2.514,12.34-2.514,18.872c0,39.79,32.257,72.047,72.047,72.047
			c39.79,0,72.047-32.257,72.047-72.047C411.635,346.787,379.378,314.529,339.588,314.529z"/>
    </g>
</g>
</svg>
                        </button>
                        <a href="./ProductComparison.php" class="btn-comparison">
                            <svg class="relative top-[4px]" width="43" height="43"
                                 xmlns="http://www.w3.org/2000/svg"
                                 data-name="Layer 1" viewBox="0 0 100 125" x="0px" y="0px">
                                <path d="M50,80a2,2,0,0,1-2,2H44a2,2,0,0,1-2-2V76H30a6,6,0,0,1-6-6V30a6,6,0,0,1,6-6H42V20a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2Zm8-12a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H70a6,6,0,0,0,6-6V30a6,6,0,0,0-6-6H58a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H68V68Z"/>

                            </svg>
                        </a>
                        <button class="btn-favorite">
                            <svg fill="#000000" height="20" width="20" version="1.1" id="Layer_1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 455 455" xml:space="preserve">
<path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
	C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
	l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
	C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
	c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
	c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
	c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
</svg>
                        </button>
                    </div>
                </div>
                <div class="row-colors tab-buttons mt-[3rem] flex items-center justify-start w-full gap-[6px]">
                    <span onclick="showTab('tab1');" class="color active w-[24px] h-[24px] ">
                        <img class="w-full h-full" src="assets/images/Fabric%20color.jpg" alt="">
                    </span>
                    <span onclick="showTab('tab2');" class="color w-[24px] h-[24px]">
                      <img class="w-full h-full" src="assets/images/color2.jpg" alt="">
                    </span>
                    <span onclick="showTab('tab3');" class="color w-[24px] h-[24px]">
                        <img class="w-full h-full" src="assets/images/color3.jpg" alt="">
                    </span>
                    <span onclick="showTab('tab4');" class="color w-[24px] h-[24px]">
                        <img class="w-full h-full" src="assets/images/color4.jpg" alt="">
                    </span>
                    <span onclick="showTab('tab5');" class="color w-[24px] h-[24px]">
                        <img class="w-full h-full" src="assets/images/color5.jpg" alt="">
                    </span>

                </div>
                <div class="size mt-[1rem] flex items-center justify-end w-full gap-[6px]">
                    <button class="btn-size en-num  bg-base-color text-white grid pt-[0.8px] w-[35px] h-[22px] rounded-[5px] text-[14px]">
                        50
                    </button>
                    <button class="btn-size en-num w-[35px] grid pt-[0.8px] h-[22px] rounded-[5px] text-[14px]">48</button>
                    <button class="btn-size en-num w-[35px] grid pt-[0.8px] h-[22px] rounded-[5px] text-[14px]">50</button>
                    <button class="btn-size en-num w-[35px] grid pt-[0.8px] h-[22px] rounded-[5px] text-[14px]">52</button>
                    <button class="btn-size en-num w-[35px] grid pt-[0.8px] h-[22px] rounded-[5px] text-[14px]">54</button>
                    <button class="btn-size en-num w-[35px] grid pt-[0.8px] h-[22px] rounded-[5px] text-[14px]">56</button>
                    <button class="btn-size en-num w-[35px] grid pt-[0.8px] h-[22px] rounded-[5px] text-[14px]">58</button>
                    <button class="btn-size en-num w-[35px] grid pt-[0.8px] h-[22px] rounded-[5px] text-[14px]">60</button>
                    <button class="btn-size en-num w-[35px] grid pt-[0.8px]  h-[22px] rounded-[5px] text-[14px]">62</button>
                </div>
                <div class="w-full flex items-center justify-between mt-[2rem]">
                    <div class="flex items-center gap-[6px]">
                        <span class="text-[16px]">جدول سایزبندی</span>
                        <button class="btn-ruler">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="17" viewBox="0 0 80 17"
                                 fill="none">
                                <g clip-path="url(#clip0_517_2614)">
                                    <path d="M-0.0195312 17.0033H79.9805V16.0127V1.11154V0.107883H-0.0195312V1.11154V16.0127V17.0033ZM76.2772 16.0127V12.1485H75.5321V16.0127H72.6966V8.78442H71.9418V16.0127H69.1063V12.1485H68.3611V16.0127H65.516V8.78442H64.7708V16.0127H61.9353V12.1485H61.1805V16.0127H58.345V8.78442H57.5998V16.0127H54.7547V12.1485H54.0095V16.0127H51.174V8.78442H50.4289V16.0127H47.5837V12.1485H46.8385V16.0127H44.003V8.78442H43.2482V16.0127H40.4127V12.1485H39.6676V16.0127H36.8321V8.78442H36.0772V16.0127H33.2418V12.1485H32.4966V16.0127H29.6514V8.78442H28.9063V16.0127H26.0708V12.1485H25.316V16.0127H22.4805V8.78442H21.7353V16.0127H18.8901V12.1485H18.145V16.0127H15.3095V8.78442H14.5643V16.0127H11.7192V12.1485H10.974V16.0127H8.13853V8.78442H7.38369V16.0127H4.54821V12.1485H3.80305V16.0127H0.967565V1.10827H78.9998V16.0127H76.2772Z"
                                          fill="#373435"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_517_2614">
                                        <rect width="80" height="17" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <span class="text-[16px]">سایز خود را پیدا کنید </span>
                        <button class="btn-metter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="23" viewBox="0 0 34 23"
                                 fill="none">
                                <g clip-path="url(#clip0_517_2618)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M8.52662 5.02646C8.84681 7.54049 21.1132 7.59799 20.3738 4.47063C20.0272 2.97882 15.9175 2.56035 14.1416 2.60188C12.8806 2.62104 11.6262 2.77118 10.5204 3.14813C9.67535 3.42604 8.39458 4.04257 8.52662 5.02646ZM13.0324 9.44757H33.2377L33.1486 22.2445L29.3987 22.2541V15.2295H28.547V22.2541L24.6056 22.2445V18.4591H23.7408V22.2349L19.8291 22.2541V15.2295H18.9676V22.1838L15.0064 22.2445V18.4591H14.1416V22.2445C12.633 22.203 11.5965 22.2158 10.2299 22.0848V15.2295H9.36836V21.9953C8.32196 21.8676 7.04778 21.6695 5.28176 21.3213V18.4591H4.43011V21.1424C3.39361 20.8645 1.9973 20.1681 1.43283 19.6826C0.303898 18.7178 0.6505 17.5742 0.6505 15.7758C0.6505 13.0637 0.406228 8.98118 0.68351 6.4384C2.50895 8.17618 9.43108 9.72549 13.0324 9.44757ZM11.1971 0.883266C20.8888 -0.0207621 33.8847 3.54424 25.2922 7.1316C19.9546 9.36771 7.06759 9.1984 2.50895 6.56618C1.72001 6.10938 0.24118 5.28521 1.08293 4.0234C2.48914 1.90549 8.73128 1.11327 11.1971 0.883266ZM28.7847 8.83104C28.7847 4.80604 29.7684 3.10021 24.401 1.42952C18.5583 -0.37854 9.27594 -0.359373 3.57846 1.7266C-0.887752 3.35577 -0.0162959 4.8284 -0.0162959 9.73507C-0.0162959 11.6517 -0.0162959 13.562 -0.0162959 15.4787C-0.0162959 17.7244 -0.30348 18.967 1.18526 20.0691C3.3738 21.6983 7.04778 22.3947 10.3322 22.7013C14.4816 23.0974 28.7616 22.8898 33.9177 22.8898V8.86299L28.7847 8.83104Z"
                                          fill="black"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_517_2618">
                                        <rect width="34" height="23" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="w-full mt-[2rem] prices flex flex-col">
                    <div class="item w-full mt-[1rem] flex items-center justify-between">
                        <span>قیمت محصول:</span>
                        <strong>165,000,000 ریال</strong>
                    </div>
                    <div class="item w-full mt-[1rem] flex items-center justify-between">
                        <span>تخفیف:</span>
                        <strong>%15</strong>
                    </div>
                    <div class="item w-full mt-[1rem] flex items-center justify-between">
                        <span>مبلغ قابل پرداخت نهایی:</span>
                        <strong>147,000,000 ریال</strong>
                    </div>
                </div>
            </div>
            <div class="min-[1800px]:px-[4.5rem] min-[1300px]:px-[2rem] w-full">
                <button class="btn-base w-full my-[2rem]">افزودن به سبد خرید</button>
            </div>
            <!-- Accordion -->
            <div class="acc-container max-[800px]:px-0 min-[1300px]:px-[3rem] min-[1800px]:px-[6rem]">
                <div class="acc">
                    <div class="acc-head">
                        <div class="after"></div>
                        <p>مشخصات محصول</p>
                        <div class="arrow absolute right-[5px]">
                            <img src="assets/images/Icons/arrow-down.svg" alt="">
                        </div>
                    </div>
                    <div class="acc-content">
                        <ul>
                            <li>کت مردانه دو دکمه یقه انگلیسی</li>
                            <li>دارای دو جیب معمولی و یک جیب روی سینه کت برای پوشت</li>
                            <li>دارای دو چاک در پشت کت</li>
                            <li>بدون آستر داخلی</li>
                            <li>دارای دامنه کت جلو گرد</li>
                            <li>برش محصول: رگولار</li>
                            <li><a href="http:google.cm">جنس پارچه: 50 درصد پشم، 50 درصد پلی‌استر </a></li>
                        </ul>
                    </div>
                </div>
                <div class="acc">
                    <div class="acc-head">
                        <div class="arrow absolute right-[5px]">
                            <img src="assets/images/Icons/arrow-down.svg" alt="">
                        </div>

                        <div class="after"></div>
                        <p>روش‌های ارسل </p>
                    </div>
                    <div class="acc-content">
                        <ul>
                            <li>کت مردانه دو دکمه یقه انگلیسی</li>
                            <li>دارای دو جیب معمولی و یک جیب روی سینه کت برای پوشت</li>
                            <li>دارای دو چاک در پشت کت</li>
                            <li>بدون آستر داخلی</li>
                            <li>دارای دامنه کت جلو گرد</li>
                            <li>برش محصول: رگولار</li>
                            <li><a href="http:google.cm">جنس پارچه: 50 درصد پشم، 50 درصد پلی‌استر </a></li>
                        </ul>
                    </div>
                </div>
                <div class="acc">
                    <div class="acc-head">
                        <div class="arrow absolute right-[5px]">
                            <img src="assets/images/Icons/arrow-down.svg" alt="">
                        </div>

                        <div class="after"></div>
                        <p>روش نگهداری</p>
                    </div>
                    <div class="acc-content">
                        <ul>
                            <li>کت مردانه دو دکمه یقه انگلیسی</li>
                            <li>دارای دو جیب معمولی و یک جیب روی سینه کت برای پوشت</li>
                            <li>دارای دو چاک در پشت کت</li>
                            <li>بدون آستر داخلی</li>
                            <li>دارای دامنه کت جلو گرد</li>
                            <li>برش محصول: رگولار</li>
                            <li><a href="http:google.cm">جنس پارچه: 50 درصد پشم، 50 درصد پلی‌استر </a></li>
                        </ul>
                    </div>
                </div>
                <div class="acc">
                    <div class="acc-head">
                        <div class="arrow absolute right-[5px]">
                            <img src="assets/images/Icons/arrow-down.svg" alt="">
                        </div>
                        <div class="after"></div>
                        <p>مرجوعی کالا</p>
                    </div>
                    <div class="acc-content">
                        <ul>
                            <li>کت مردانه دو دکمه یقه انگلیسی</li>
                            <li>دارای دو جیب معمولی و یک جیب روی سینه کت برای پوشت</li>
                            <li>دارای دو چاک در پشت کت</li>
                            <li>بدون آستر داخلی</li>
                            <li>دارای دامنه کت جلو گرد</li>
                            <li>برش محصول: رگولار</li>
                            <li><a href="http:google.cm">جنس پارچه: 50 درصد پشم، 50 درصد پلی‌استر </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[62%] tab-content tab1 active h-full">
            <div class="end  w-full pt-[1.8rem] grid grid-cols-2 relative h-full">
                <div class="scroller-img h-[92vh] w-full overflow-y-auto h-full grid grid-cols-1">
                    <div class="swiper w-full h-[92vh]" id="swiper-scroller1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video w-full">
                                    <a class="link-video"
                                       data-fancybox="gallery-tab-one"
                                       data-src="https://media.ecut.shop/product/PJA/PJA1156130/PJA1156130.MP4"
                                       data-caption="Hello world"
                                       data-fullscreen="true"
                                    >
                                        <video id="myVideo" class="w-full" autoplay loop muted playsinline>
                                            <source src="https://media.ecut.shop/product/PJA/PJA1156130/PJA1156130.MP4"
                                                    type="video/mp4">
                                        </video>
                                    </a>
                                    <!--                                <div class="cover-video absolute right-0 top-0 h-[93vh] bg-[#00000090] flex z-100 items-center w-full justify-center">-->
                                    <!--                                    <button class="btn-play-video relative z-10">-->
                                    <!--                                        <svg id='fi_9453807' enable-background='new 0 0 512 512' height='80'-->
                                    <!--                                             viewBox='0 0 512 512' width='80' xmlns='http://www.w3.org/2000/svg'>-->
                                    <!--                                            <path fill="#fff"-->
                                    <!--                                                  d='m503.5 256c0 48.085-13.807 94.714-39.927 134.845-3.766 5.786-11.509 7.424-17.295 3.657-5.786-3.766-7.423-11.509-3.657-17.295 23.472-36.062 35.879-77.975 35.879-121.207 0-122.687-99.813-222.5-222.5-222.5s-222.5 99.813-222.5 222.5 99.813 222.5 222.5 222.5c43.232 0 85.145-12.407 121.207-35.879 5.785-3.767 13.529-2.129 17.295 3.657s2.129 13.529-3.657 17.295c-40.13 26.12-86.759 39.927-134.845 39.927-66.11 0-128.262-25.745-175.009-72.491s-72.491-108.899-72.491-175.009 25.745-128.262 72.491-175.009 108.899-72.491 175.009-72.491 128.262 25.745 175.009 72.491 72.491 108.899 72.491 175.009zm-89.916 157.078-.506.506c-4.888 4.875-4.899 12.79-.024 17.678 2.442 2.449 5.646 3.673 8.851 3.673 3.193 0 6.387-1.216 8.827-3.649l.555-.555c4.875-4.888 4.864-12.803-.024-17.678-4.89-4.875-12.804-4.863-17.679.025zm-45.534-175.577c6.361 4.158 10.009 10.9 10.009 18.499s-3.648 14.342-10.009 18.499l-148.774 97.238c-3.715 2.428-7.879 3.651-12.062 3.651-3.59 0-7.195-.9-10.545-2.713-7.253-3.924-11.583-11.19-11.583-19.437v-194.476c0-8.247 4.33-15.513 11.583-19.438s15.705-3.574 22.608.939zm-17.392 18.499-140.573-91.877v183.755z'></path>-->
                                    <!--                                        </svg>-->
                                    <!--                                    </button>-->
                                    <!--                                </div>-->

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-one"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-01.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-01.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-one"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-02.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-02.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-one"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-03.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-03.jpg">


                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-one"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-04.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-04.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-one"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-05.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-05.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-one"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-06.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-06.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-one"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-07.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-07.jpg">

                                </a>
                            </div>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="single-img w-full relative h-[92vh]">
                    <a class="link-img"
                       data-fancybox="gallery-tab-one"
                       data-src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                       data-caption="Hello world"
                       data-fullscreen="true"
                    >
                        <img class="w-full h-full"
                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg">
                    </a>

                </div>
            </div>
        </div>
        <div style="display: none" class="w-[62%] tab2 tab-content  h-full">
            <div class="end w-full pt-[1.8rem] grid grid-cols-2 relative h-full">
                <div class="scroller-img h-[92vh] w-full overflow-y-auto h-full grid grid-cols-1">
                    <div class="swiper w-full h-[92vh]" id="swiper-scroller2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video w-full">
                                    <a class="link-video"
                                       data-fancybox="gallery-tab-two"
                                       data-src="https://media.ecut.shop/product/PJA/PJA1156129/PJA1156129.MP4"
                                       data-caption="Hello world"
                                       data-fullscreen="true"
                                    >
                                        <video id="myVideo" class="w-full" autoplay loop muted playsinline>
                                            <source src="https://media.ecut.shop/product/PJA/PJA1156129/PJA1156129.MP4"
                                                    type="video/mp4">
                                        </video>
                                    </a>
                                    <!--                                <div class="cover-video absolute right-0 top-0 h-[93vh] bg-[#00000090] flex z-100 items-center w-full justify-center">-->
                                    <!--                                    <button class="btn-play-video relative z-10">-->
                                    <!--                                        <svg id='fi_9453807' enable-background='new 0 0 512 512' height='80'-->
                                    <!--                                             viewBox='0 0 512 512' width='80' xmlns='http://www.w3.org/2000/svg'>-->
                                    <!--                                            <path fill="#fff"-->
                                    <!--                                                  d='m503.5 256c0 48.085-13.807 94.714-39.927 134.845-3.766 5.786-11.509 7.424-17.295 3.657-5.786-3.766-7.423-11.509-3.657-17.295 23.472-36.062 35.879-77.975 35.879-121.207 0-122.687-99.813-222.5-222.5-222.5s-222.5 99.813-222.5 222.5 99.813 222.5 222.5 222.5c43.232 0 85.145-12.407 121.207-35.879 5.785-3.767 13.529-2.129 17.295 3.657s2.129 13.529-3.657 17.295c-40.13 26.12-86.759 39.927-134.845 39.927-66.11 0-128.262-25.745-175.009-72.491s-72.491-108.899-72.491-175.009 25.745-128.262 72.491-175.009 108.899-72.491 175.009-72.491 128.262 25.745 175.009 72.491 72.491 108.899 72.491 175.009zm-89.916 157.078-.506.506c-4.888 4.875-4.899 12.79-.024 17.678 2.442 2.449 5.646 3.673 8.851 3.673 3.193 0 6.387-1.216 8.827-3.649l.555-.555c4.875-4.888 4.864-12.803-.024-17.678-4.89-4.875-12.804-4.863-17.679.025zm-45.534-175.577c6.361 4.158 10.009 10.9 10.009 18.499s-3.648 14.342-10.009 18.499l-148.774 97.238c-3.715 2.428-7.879 3.651-12.062 3.651-3.59 0-7.195-.9-10.545-2.713-7.253-3.924-11.583-11.19-11.583-19.437v-194.476c0-8.247 4.33-15.513 11.583-19.438s15.705-3.574 22.608.939zm-17.392 18.499-140.573-91.877v183.755z'></path>-->
                                    <!--                                        </svg>-->
                                    <!--                                    </button>-->
                                    <!--                                </div>-->

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-two"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-01.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-01.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-two"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-02.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-02.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-two"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-03.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-03.jpg">


                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-two"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-04.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-04.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-two"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-05.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-05.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-two"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-06.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-06.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-two"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-07.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-07.jpg">

                                </a>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="single-img w-full relative h-[92vh]">
                    <a class="link-img"
                       data-fancybox="gallery-tab-two"
                       data-src="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                       data-caption="Hello world"
                       data-fullscreen="true"
                    >
                        <img class="w-full h-full"
                             src="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg">
                    </a>

                </div>
            </div>
        </div>
        <div style="display: none" class="w-[62%] tab3 tab-content  h-full">
            <div class="end w-full pt-[1.8rem] grid grid-cols-2 relative h-full">
                <div class="scroller-img h-[92vh] w-full overflow-y-auto h-full grid grid-cols-1">
                    <div class="swiper w-full h-[92vh]" id="swiper-scroller3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video w-full">
                                    <a class="link-video"
                                       data-fancybox="gallery-tab-three"
                                       data-src="https://media.ecut.shop/product/PJA/PJA1156128/PJA1156128.MP4"
                                       data-caption="Hello world"
                                       data-fullscreen="true"
                                    >
                                        <video id="myVideo" class="w-full" autoplay loop muted playsinline>
                                            <source src="https://media.ecut.shop/product/PJA/PJA1156128/PJA1156128.MP4"
                                                    type="video/mp4">
                                        </video>
                                    </a>
                                    <!--                                <div class="cover-video absolute right-0 top-0 h-[93vh] bg-[#00000090] flex z-100 items-center w-full justify-center">-->
                                    <!--                                    <button class="btn-play-video relative z-10">-->
                                    <!--                                        <svg id='fi_9453807' enable-background='new 0 0 512 512' height='80'-->
                                    <!--                                             viewBox='0 0 512 512' width='80' xmlns='http://www.w3.org/2000/svg'>-->
                                    <!--                                            <path fill="#fff"-->
                                    <!--                                                  d='m503.5 256c0 48.085-13.807 94.714-39.927 134.845-3.766 5.786-11.509 7.424-17.295 3.657-5.786-3.766-7.423-11.509-3.657-17.295 23.472-36.062 35.879-77.975 35.879-121.207 0-122.687-99.813-222.5-222.5-222.5s-222.5 99.813-222.5 222.5 99.813 222.5 222.5 222.5c43.232 0 85.145-12.407 121.207-35.879 5.785-3.767 13.529-2.129 17.295 3.657s2.129 13.529-3.657 17.295c-40.13 26.12-86.759 39.927-134.845 39.927-66.11 0-128.262-25.745-175.009-72.491s-72.491-108.899-72.491-175.009 25.745-128.262 72.491-175.009 108.899-72.491 175.009-72.491 128.262 25.745 175.009 72.491 72.491 108.899 72.491 175.009zm-89.916 157.078-.506.506c-4.888 4.875-4.899 12.79-.024 17.678 2.442 2.449 5.646 3.673 8.851 3.673 3.193 0 6.387-1.216 8.827-3.649l.555-.555c4.875-4.888 4.864-12.803-.024-17.678-4.89-4.875-12.804-4.863-17.679.025zm-45.534-175.577c6.361 4.158 10.009 10.9 10.009 18.499s-3.648 14.342-10.009 18.499l-148.774 97.238c-3.715 2.428-7.879 3.651-12.062 3.651-3.59 0-7.195-.9-10.545-2.713-7.253-3.924-11.583-11.19-11.583-19.437v-194.476c0-8.247 4.33-15.513 11.583-19.438s15.705-3.574 22.608.939zm-17.392 18.499-140.573-91.877v183.755z'></path>-->
                                    <!--                                        </svg>-->
                                    <!--                                    </button>-->
                                    <!--                                </div>-->

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-three"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-01.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-01.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-three"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-02.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-02.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-three"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-03.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-03.jpg">


                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-three"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-04.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-04.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-three"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-05.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-05.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-three"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-06.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-06.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-three"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-07.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-07.jpg">

                                </a>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="single-img w-full relative h-[92vh]">
                    <a class="link-img"
                       data-fancybox="gallery-tab-three"
                       data-src="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                       data-caption="Hello world"
                       data-fullscreen="true"
                    >
                        <img class="w-full h-full"
                             src="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg">
                    </a>

                </div>
            </div>
        </div>
        <div style="display: none" class="w-[62%] tab4 tab-content  h-full">
            <div class="end w-full pt-[1.8rem] grid grid-cols-2 relative h-full">
                <div class="scroller-img h-[92vh] w-full overflow-y-auto h-full grid grid-cols-1">
                    <div class="swiper w-full h-[92vh]" id="swiper-scroller4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video w-full">
                                    <a class="link-video"
                                       data-fancybox="gallery-tab-four"
                                       data-src="https://media.ecut.shop/product/PJA/PJA1156127/PJA1156127.MP4"
                                       data-caption="Hello world"
                                       data-fullscreen="true"
                                    >
                                        <video id="myVideo" class="w-full" autoplay loop muted playsinline>
                                            <source src="https://media.ecut.shop/product/PJA/PJA1156127/PJA1156127.MP4"
                                                    type="video/mp4">
                                        </video>
                                    </a>
                                    <!--                                <div class="cover-video absolute right-0 top-0 h-[93vh] bg-[#00000090] flex z-100 items-center w-full justify-center">-->
                                    <!--                                    <button class="btn-play-video relative z-10">-->
                                    <!--                                        <svg id='fi_9453807' enable-background='new 0 0 512 512' height='80'-->
                                    <!--                                             viewBox='0 0 512 512' width='80' xmlns='http://www.w3.org/2000/svg'>-->
                                    <!--                                            <path fill="#fff"-->
                                    <!--                                                  d='m503.5 256c0 48.085-13.807 94.714-39.927 134.845-3.766 5.786-11.509 7.424-17.295 3.657-5.786-3.766-7.423-11.509-3.657-17.295 23.472-36.062 35.879-77.975 35.879-121.207 0-122.687-99.813-222.5-222.5-222.5s-222.5 99.813-222.5 222.5 99.813 222.5 222.5 222.5c43.232 0 85.145-12.407 121.207-35.879 5.785-3.767 13.529-2.129 17.295 3.657s2.129 13.529-3.657 17.295c-40.13 26.12-86.759 39.927-134.845 39.927-66.11 0-128.262-25.745-175.009-72.491s-72.491-108.899-72.491-175.009 25.745-128.262 72.491-175.009 108.899-72.491 175.009-72.491 128.262 25.745 175.009 72.491 72.491 108.899 72.491 175.009zm-89.916 157.078-.506.506c-4.888 4.875-4.899 12.79-.024 17.678 2.442 2.449 5.646 3.673 8.851 3.673 3.193 0 6.387-1.216 8.827-3.649l.555-.555c4.875-4.888 4.864-12.803-.024-17.678-4.89-4.875-12.804-4.863-17.679.025zm-45.534-175.577c6.361 4.158 10.009 10.9 10.009 18.499s-3.648 14.342-10.009 18.499l-148.774 97.238c-3.715 2.428-7.879 3.651-12.062 3.651-3.59 0-7.195-.9-10.545-2.713-7.253-3.924-11.583-11.19-11.583-19.437v-194.476c0-8.247 4.33-15.513 11.583-19.438s15.705-3.574 22.608.939zm-17.392 18.499-140.573-91.877v183.755z'></path>-->
                                    <!--                                        </svg>-->
                                    <!--                                    </button>-->
                                    <!--                                </div>-->

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-four"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-01.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-01.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-four"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-02.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-02.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-four"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-03.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-03.jpg">


                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-four"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-04.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-04.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-four"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-05.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-05.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-four"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-06.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-06.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery-tab-four"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-07.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-07.jpg">

                                </a>
                            </div>

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="single-img w-full relative h-[92vh]">
                    <a class="link-img"
                       data-fancybox="gallery-tab-four"
                       data-src="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                       data-caption="Hello world"
                       data-fullscreen="true"
                    >
                        <img class="w-full h-full"
                             src="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg">
                    </a>

                </div>
            </div>
        </div>
        <div style="display: none" class="w-[62%] tab5 tab-content  h-full">
            <div class="end w-full pt-[1.8rem] grid grid-cols-2 relative h-full">
                <div class="scroller-img h-[92vh] w-full overflow-y-auto h-full grid grid-cols-1">
                    <div class="swiper w-full h-[92vh]" id="swiper-scroller5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video w-full">
                                    <a class="link-video"
                                       data-fancybox="gallery"
                                       data-src="https://media.ecut.shop/product/PJA/PJA1156125/PJA1156125.MP4"
                                       data-caption="Hello world"
                                       data-fullscreen="true"
                                    >
                                        <video id="myVideo" class="w-full" autoplay loop muted playsinline>
                                            <source src="https://media.ecut.shop/product/PJA/PJA1156125/PJA1156125.MP4"
                                                    type="video/mp4">
                                        </video>
                                    </a>
                                    <!--                                <div class="cover-video absolute right-0 top-0 h-[93vh] bg-[#00000090] flex z-100 items-center w-full justify-center">-->
                                    <!--                                    <button class="btn-play-video relative z-10">-->
                                    <!--                                        <svg id='fi_9453807' enable-background='new 0 0 512 512' height='80'-->
                                    <!--                                             viewBox='0 0 512 512' width='80' xmlns='http://www.w3.org/2000/svg'>-->
                                    <!--                                            <path fill="#fff"-->
                                    <!--                                                  d='m503.5 256c0 48.085-13.807 94.714-39.927 134.845-3.766 5.786-11.509 7.424-17.295 3.657-5.786-3.766-7.423-11.509-3.657-17.295 23.472-36.062 35.879-77.975 35.879-121.207 0-122.687-99.813-222.5-222.5-222.5s-222.5 99.813-222.5 222.5 99.813 222.5 222.5 222.5c43.232 0 85.145-12.407 121.207-35.879 5.785-3.767 13.529-2.129 17.295 3.657s2.129 13.529-3.657 17.295c-40.13 26.12-86.759 39.927-134.845 39.927-66.11 0-128.262-25.745-175.009-72.491s-72.491-108.899-72.491-175.009 25.745-128.262 72.491-175.009 108.899-72.491 175.009-72.491 128.262 25.745 175.009 72.491 72.491 108.899 72.491 175.009zm-89.916 157.078-.506.506c-4.888 4.875-4.899 12.79-.024 17.678 2.442 2.449 5.646 3.673 8.851 3.673 3.193 0 6.387-1.216 8.827-3.649l.555-.555c4.875-4.888 4.864-12.803-.024-17.678-4.89-4.875-12.804-4.863-17.679.025zm-45.534-175.577c6.361 4.158 10.009 10.9 10.009 18.499s-3.648 14.342-10.009 18.499l-148.774 97.238c-3.715 2.428-7.879 3.651-12.062 3.651-3.59 0-7.195-.9-10.545-2.713-7.253-3.924-11.583-11.19-11.583-19.437v-194.476c0-8.247 4.33-15.513 11.583-19.438s15.705-3.574 22.608.939zm-17.392 18.499-140.573-91.877v183.755z'></path>-->
                                    <!--                                        </svg>-->
                                    <!--                                    </button>-->
                                    <!--                                </div>-->

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-01.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-01.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-02.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-02.jpg">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-03.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-03.jpg">


                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-04.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-04.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-05.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-05.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-06.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-06.jpg">

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a
                                        data-fancybox="gallery"
                                        data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-07.jpg"
                                        data-caption="Hello world"
                                >
                                    <img class="w-full"
                                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-07.jpg">

                                </a>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="single-img w-full relative h-[92vh]">
                    <a class="link-img"
                       data-fancybox="gallery"
                       data-src="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                       data-caption="Hello world"
                       data-fullscreen="true"
                    >
                        <img class="w-full h-full"
                             src="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg">
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="p-single-product-mobi p-single-product mt-[5rem] w-full flex flex-col items-center px-[12px] min-[901px]:hidden">
        <div class="w-[95%] flex tab-content tab1 active flex-col items-center">
            <div class="single-img w-full">
                <a class="link-video"
                   data-fancybox="gallery1-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156130/PJA1156130.MP4"
                   data-caption="Hello world"
                   data-fullscreen="true"
                >
                    <video id="myVideo" class="w-full rounded-[5px]" autoplay loop muted>
                        <source src="https://media.ecut.shop/product/PJA/PJA1156130/PJA1156130.MP4"
                                type="video/mp4">
                    </video>
                </a>
            </div>
            <div class="multi-img w-full grid grid-cols-4 gap-[8px]">
                <a class="w-full"
                   data-fancybox="gallery1-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-01.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-01.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery1-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-02.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-02.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery1-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-03.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-03.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery1-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-04.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-04.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery1-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-05.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-05.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery1-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-06.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-06.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery1-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156130/2000/single-coat-07.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-07.jpg" alt="">

                </a>
            </div>
        </div>
        <div style="display: none" class="w-full tab2 flex tab-content  flex-col items-center">
            <div class="single-img w-full">
                <a class="link-video"
                   data-fancybox="gallery2-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156129/PJA1156129.MP4"
                   data-caption="Hello world"
                   data-fullscreen="true"
                >
                    <video id="myVideo" class="w-full rounded-[5px]" autoplay loop muted>
                        <source src="https://media.ecut.shop/product/PJA/PJA1156129/PJA1156129.MP4"
                                type="video/mp4">
                    </video>
                </a>
            </div>
            <div class="multi-img w-full grid grid-cols-4 gap-[8px]">
                <a class="w-full"
                   data-fancybox="gallery2-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-01.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-01.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery2-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-02.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-02.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery2-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-03.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-03.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery2-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-04.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-04.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery2-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-05.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-05.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery2-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-06.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-06.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery2-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156129/2000/single-coat-07.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-07.jpg" alt="">

                </a>
            </div>
        </div>
        <div style="display: none" class="w-full tab3 flex tab-content  flex-col items-center">
            <div class="single-img w-full">
                <a class="link-video"
                   data-fancybox="gallery3-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156128/PJA1156128.MP4"
                   data-caption="Hello world"
                   data-fullscreen="true"
                >
                    <video id="myVideo" class="w-full rounded-[5px]"  autoplay loop muted>
                        <source src="https://media.ecut.shop/product/PJA/PJA1156128/PJA1156128.MP4"
                                type="video/mp4">
                    </video>
                </a>
            </div>
            <div class="multi-img w-full grid grid-cols-4 gap-[8px]">
                <a class="w-full"
                   data-fancybox="gallery3-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-01.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-01.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery3-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-02.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-02.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery3-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-03.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-03.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery3-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-04.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-04.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery3-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-05.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-05.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery3-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-06.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-06.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery3-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156128/2000/single-coat-07.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-07.jpg" alt="">

                </a>
            </div>
        </div>
        <div style="display: none" class="w-full tab4 flex tab-content  flex-col items-center">
            <div class="single-img w-full">
                <a class="link-video"
                   data-fancybox="gallery4-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156127/PJA1156127.MP4"
                   data-caption="Hello world"
                   data-fullscreen="true"
                >
                    <video id="myVideo" class="w-full rounded-[5px]" autoplay loop muted>
                        <source src="https://media.ecut.shop/product/PJA/PJA1156127/PJA1156127.MP4"
                                type="video/mp4">
                    </video>
                </a>
            </div>
            <div class="multi-img w-full grid grid-cols-4 gap-[8px]">
                <a class="w-full"
                   data-fancybox="gallery4-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-01.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-01.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery4-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-02.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-02.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery4-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-03.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-03.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery4-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-04.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-04.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery4-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-05.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-05.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery4-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-06.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-06.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery4-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156127/2000/single-coat-07.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-07.jpg" alt="">

                </a>
            </div>
        </div>
        <div style="display: none" class="w-full tab5 flex tab-content  flex-col items-center">
            <div class="single-img w-full">
                <a class="link-video"
                   data-fancybox="gallery5-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156125/PJA1156125.MP4"
                   data-caption="Hello world"
                   data-fullscreen="true"
                >
                    <video id="myVideo" class="w-full rounded-[5px]" autoplay loop muted>
                        <source src="https://media.ecut.shop/product/PJA/PJA1156125/PJA1156125.MP4"
                                type="video/mp4">
                    </video>
                </a>
            </div>
            <div class="multi-img w-full grid grid-cols-4 gap-[8px]">
                <a class="w-full"
                   data-fancybox="gallery5-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-01.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-01.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery5-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-02.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-02.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery5-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-03.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-03.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery5-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-04.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-04.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery5-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-05.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-05.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery5-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-06.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-06.jpg" alt="">

                </a>
                <a class="w-full"
                   data-fancybox="gallery5-mobi"
                   data-src="https://media.ecut.shop/product/PJA/PJA1156125/2000/single-coat-07.jpg"
                >
                    <img class="rounded-[4px] mt-[1rem] w-full h-[110px] object-cover"
                         src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-07.jpg" alt="">

                </a>
            </div>
        </div>

        <div class="breadcrum mt-[2rem] w-full mb-3">
            <a class="text-[14px]" href="#">محصولات</a>
            <span class="mx-[2px] text-[14px]">/</span>
            <a class="text-[14px]" href="#">کلاسیک</a>
            <span class="mx-[2px] text-[14px]">/</span>
            <a class="text-[14px]" href="#"> کت وشلوار </a>
            <span class="mx-[2px] text-[14px]">/</span>
            <span class="font-bold en-num text-[14px]">کت و شلوار مدل PSU1153332</span>
        </div>
        <div class="title-product mt-[2rem] w-full flex items-center justify-between">
            <h2 class="text-[20px] en-num font-bold">کت و شلوار مدل PSU1153332</h2>
            <div class="icons flex items-center gap-[8px]">
                <button class="btn-share">
                    <svg fill="#000000" height="20" width="20" version="1.1" id="Layer_1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 458.624 458.624" xml:space="preserve">
<g>
    <g>
        <path d="M339.588,314.529c-14.215,0-27.456,4.133-38.621,11.239l-112.682-78.67c1.809-6.315,2.798-12.976,2.798-19.871
			c0-6.896-0.989-13.557-2.798-19.871l109.64-76.547c11.764,8.356,26.133,13.286,41.662,13.286c39.79,0,72.047-32.257,72.047-72.047
			C411.634,32.258,379.378,0,339.588,0c-39.79,0-72.047,32.257-72.047,72.047c0,5.255,0.578,10.373,1.646,15.308l-112.424,78.491
			c-10.974-6.759-23.892-10.666-37.727-10.666c-39.79,0-72.047,32.257-72.047,72.047s32.256,72.047,72.047,72.047
			c13.834,0,26.753-3.907,37.727-10.666l113.292,79.097c-1.629,6.017-2.514,12.34-2.514,18.872c0,39.79,32.257,72.047,72.047,72.047
			c39.79,0,72.047-32.257,72.047-72.047C411.635,346.787,379.378,314.529,339.588,314.529z"/>
    </g>
</g>
</svg>
                </button>
                <button class="btn-comparison">
                    <svg class="relative top-[4px]" width="43" height="43" xmlns="http://www.w3.org/2000/svg"
                         data-name="Layer 1" viewBox="0 0 100 125" x="0px" y="0px">
                        <path d="M50,80a2,2,0,0,1-2,2H44a2,2,0,0,1-2-2V76H30a6,6,0,0,1-6-6V30a6,6,0,0,1,6-6H42V20a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2Zm8-12a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H70a6,6,0,0,0,6-6V30a6,6,0,0,0-6-6H58a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H68V68Z"/>

                    </svg>
                </button>
                <button class="btn-favorite">
                    <svg fill="#000000" height="20" width="20" version="1.1" id="Layer_1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 455 455" xml:space="preserve">
<path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
	C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
	l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
	C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
	c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
	c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
	c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
</svg>
                </button>
            </div>
        </div>
        <div class="row-colors tab-buttons mt-[3rem] flex items-center justify-start w-full gap-[6px]">
            <span onclick="showTab('tab1')" class="color active w-[24px] h-[24px]">
                <img class="w-full h-full" src="assets/images/Fabric%20color.jpg" alt="">
            </span>
            <span onclick="showTab('tab2')" class="color w-[24px] h-[24px]">
                <img class="w-full h-full" src="assets/images/color2.jpg" alt="">
            </span>
            <span onclick="showTab('tab3')" class="color w-[24px] h-[24px]">
                <img class="w-full h-full" src="assets/images/color3.jpg" alt="">
            </span>
            <span onclick="showTab('tab4')" class="color w-[24px] h-[24px]">
                <img class="w-full h-full" src="assets/images/color4.jpg" alt="">
            </span>
            <span onclick="showTab('tab5')" class="color w-[24px] h-[24px]">
                <img class="w-full h-full" src="assets/images/color5.jpg" alt="">
            </span>
        </div>
        <div class="size mt-[1rem] en-num flex items-center justify-center w-full gap-[6px]">
            <button class="btn-size pt-[1.6px] bg-[#000] text-white w-[35px] h-[22px] rounded-[5px] text-[14px]">42</button>
            <button class="btn-size pt-[1.6px] w-[35px] h-[22px] rounded-[5px] text-[14px]">44</button>
            <button class="btn-size pt-[1.6px] w-[35px] h-[22px] rounded-[5px] text-[14px]">46</button>
            <button class="btn-size pt-[1.6px] w-[35px] h-[22px] rounded-[5px] text-[14px]">48</button>
            <button class="btn-size pt-[1.6px] w-[35px] h-[22px] rounded-[5px] text-[14px]">50</button>
            <button class="btn-size pt-[1.6px] w-[35px] h-[22px] rounded-[5px] text-[14px]">52</button>
            <button class="btn-size pt-[1.6px] w-[35px] h-[22px] rounded-[5px] text-[14px]">54</button>
            <button class="btn-size pt-[1.6px] w-[35px] h-[22px] rounded-[5px] text-[14px]">56</button>
            <button class="btn-size pt-[1.6px] w-[35px] h-[22px] rounded-[5px] text-[14px]">58</button>
        </div>
        <div class="w-full flex items-center justify-between mt-[2rem]">
            <div class="flex items-center gap-[6px]">
                <span class="text-[16px]">جدول سایزبندی</span>
                <button class="btn-ruler">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="17" viewBox="0 0 80 17" fill="none">
                        <g clip-path="url(#clip0_517_2614)">
                            <path d="M-0.0195312 17.0033H79.9805V16.0127V1.11154V0.107883H-0.0195312V1.11154V16.0127V17.0033ZM76.2772 16.0127V12.1485H75.5321V16.0127H72.6966V8.78442H71.9418V16.0127H69.1063V12.1485H68.3611V16.0127H65.516V8.78442H64.7708V16.0127H61.9353V12.1485H61.1805V16.0127H58.345V8.78442H57.5998V16.0127H54.7547V12.1485H54.0095V16.0127H51.174V8.78442H50.4289V16.0127H47.5837V12.1485H46.8385V16.0127H44.003V8.78442H43.2482V16.0127H40.4127V12.1485H39.6676V16.0127H36.8321V8.78442H36.0772V16.0127H33.2418V12.1485H32.4966V16.0127H29.6514V8.78442H28.9063V16.0127H26.0708V12.1485H25.316V16.0127H22.4805V8.78442H21.7353V16.0127H18.8901V12.1485H18.145V16.0127H15.3095V8.78442H14.5643V16.0127H11.7192V12.1485H10.974V16.0127H8.13853V8.78442H7.38369V16.0127H4.54821V12.1485H3.80305V16.0127H0.967565V1.10827H78.9998V16.0127H76.2772Z" fill="#373435"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_517_2614">
                                <rect width="80" height="17" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
            <div class="flex items-center gap-[6px]">
                <span class="text-[16px]">سایز خود را پیدا کنید </span>
                <button class="btn-metter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="23" viewBox="0 0 34 23" fill="none">
                        <g clip-path="url(#clip0_517_2618)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52662 5.02646C8.84681 7.54049 21.1132 7.59799 20.3738 4.47063C20.0272 2.97882 15.9175 2.56035 14.1416 2.60188C12.8806 2.62104 11.6262 2.77118 10.5204 3.14813C9.67535 3.42604 8.39458 4.04257 8.52662 5.02646ZM13.0324 9.44757H33.2377L33.1486 22.2445L29.3987 22.2541V15.2295H28.547V22.2541L24.6056 22.2445V18.4591H23.7408V22.2349L19.8291 22.2541V15.2295H18.9676V22.1838L15.0064 22.2445V18.4591H14.1416V22.2445C12.633 22.203 11.5965 22.2158 10.2299 22.0848V15.2295H9.36836V21.9953C8.32196 21.8676 7.04778 21.6695 5.28176 21.3213V18.4591H4.43011V21.1424C3.39361 20.8645 1.9973 20.1681 1.43283 19.6826C0.303898 18.7178 0.6505 17.5742 0.6505 15.7758C0.6505 13.0637 0.406228 8.98118 0.68351 6.4384C2.50895 8.17618 9.43108 9.72549 13.0324 9.44757ZM11.1971 0.883266C20.8888 -0.0207621 33.8847 3.54424 25.2922 7.1316C19.9546 9.36771 7.06759 9.1984 2.50895 6.56618C1.72001 6.10938 0.24118 5.28521 1.08293 4.0234C2.48914 1.90549 8.73128 1.11327 11.1971 0.883266ZM28.7847 8.83104C28.7847 4.80604 29.7684 3.10021 24.401 1.42952C18.5583 -0.37854 9.27594 -0.359373 3.57846 1.7266C-0.887752 3.35577 -0.0162959 4.8284 -0.0162959 9.73507C-0.0162959 11.6517 -0.0162959 13.562 -0.0162959 15.4787C-0.0162959 17.7244 -0.30348 18.967 1.18526 20.0691C3.3738 21.6983 7.04778 22.3947 10.3322 22.7013C14.4816 23.0974 28.7616 22.8898 33.9177 22.8898V8.86299L28.7847 8.83104Z" fill="black"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_517_2618">
                                <rect width="34" height="23" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
        </div>
        <div class="w-full mt-[2rem] prices flex flex-col">
            <div class="item w-full mt-[1rem] flex items-center justify-between">
                <span>قیمت محصول:</span>
                <strong>165,000,000 ریال</strong>
            </div>
            <div class="item w-full mt-[1rem] flex items-center justify-between">
                <span>تخفیف:</span>
                <strong>%15</strong>
            </div>
            <div class="item w-full mt-[1rem] flex items-center justify-between">
                <span>مبلغ قابل پرداخت نهایی:</span>
                <strong>147,000,000 ریال</strong>
            </div>
        </div>
        <button class="btn-base w-full my-[2rem]">افزودن به سبد خرید</button>
        <!-- Accordion -->
        <div class="acc-container">
            <div class="acc">
                <div class="acc-head">
                    <div class="after"></div>
                    <p>مشخصات محصول</p>
                    <div class="arrow absolute right-[5px]">
                        <img src="assets/images/Icons/arrow-down.svg" alt="">
                    </div>

                </div>
                <div class="acc-content">
                    <ul>
                        <li>کت مردانه دو دکمه یقه انگلیسی</li>
                        <li>دارای دو جیب معمولی و یک جیب روی سینه کت برای پوشت</li>
                        <li>دارای دو چاک در پشت کت</li>
                        <li>بدون آستر داخلی</li>
                        <li>دارای دامنه کت جلو گرد</li>
                        <li>برش محصول: رگولار</li>
                        <li><a href="http:google.cm">جنس پارچه: 50 درصد پشم، 50 درصد پلی‌استر </a></li>
                    </ul>
                </div>
            </div>
            <div class="acc">
                <div class="acc-head">
                    <div class="after"></div>
                    <p>روش‌های ارسل </p>
                    <div class="arrow absolute right-[5px]">
                        <img src="assets/images/Icons/arrow-down.svg" alt="">
                    </div>
                </div>
                <div class="acc-content">
                    <ul>
                        <li>کت مردانه دو دکمه یقه انگلیسی</li>
                        <li>دارای دو جیب معمولی و یک جیب روی سینه کت برای پوشت</li>
                        <li>دارای دو چاک در پشت کت</li>
                        <li>بدون آستر داخلی</li>
                        <li>دارای دامنه کت جلو گرد</li>
                        <li>برش محصول: رگولار</li>
                        <li><a href="http:google.cm">جنس پارچه: 50 درصد پشم، 50 درصد پلی‌استر </a></li>
                    </ul>
                </div>
            </div>
            <div class="acc">
                <div class="acc-head">
                    <div class="after"></div>
                    <p>روش نگهداری</p>
                    <div class="arrow absolute right-[5px]">
                        <img src="assets/images/Icons/arrow-down.svg" alt="">
                    </div>
                </div>
                <div class="acc-content">
                    <ul>
                        <li>کت مردانه دو دکمه یقه انگلیسی</li>
                        <li>دارای دو جیب معمولی و یک جیب روی سینه کت برای پوشت</li>
                        <li>دارای دو چاک در پشت کت</li>
                        <li>بدون آستر داخلی</li>
                        <li>دارای دامنه کت جلو گرد</li>
                        <li>برش محصول: رگولار</li>
                        <li><a href="http:google.cm">جنس پارچه: 50 درصد پشم، 50 درصد پلی‌استر </a></li>
                    </ul>
                </div>
            </div>
            <div class="acc">
                <div class="acc-head">
                    <div class="after"></div>
                    <p>مرجوعی کالا</p>
                    <div class="arrow absolute right-[5px]">
                        <img src="assets/images/Icons/arrow-down.svg" alt="">
                    </div>
                </div>
                <div class="acc-content">
                    <ul>
                        <li>کت مردانه دو دکمه یقه انگلیسی</li>
                        <li>دارای دو جیب معمولی و یک جیب روی سینه کت برای پوشت</li>
                        <li>دارای دو چاک در پشت کت</li>
                        <li>بدون آستر داخلی</li>
                        <li>دارای دامنه کت جلو گرد</li>
                        <li>برش محصول: رگولار</li>
                        <li><a href="http:google.cm">جنس پارچه: 50 درصد پشم، 50 درصد پلی‌استر </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row-five max-[900px]:px-[12px] px-[3%] mt-[10rem] max-[900px]:hidden row-five-product flex flex-col items-center justify-center w-full">
        <div class="w-full mb-[2rem] title flex justify-center">
            <h2 class="text-[18px] px-[1rem]">محصولات مشابه</h2>
        </div>
        <div class="w-full flex items-center justify-center">
            <div class="swiper-button-next-product">
                <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                          fill="#777777"/>
                </svg>
            </div>
            <div class="swiper mb-[3rem] w-[94%] mx-[15px]  swiperProduct">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="thumbnail-product relative w-full flex flex-col items-center justify-center">
                            <a class="w-full p-img h-[67vh]  relative" href="./singleproduct.php">
                                <img id="img-one" class="w-full h-full img-main fade object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                     alt="">
                                <img id="img-one-hover" class="w-full h-full img-hover object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-02.jpg"
                                     alt="">
                            </a>
                            <div class="w-full flex mt-[1rem] items-center justify-between">
                                <span class="text-[12px] font-bold text">تی شرت 1698</span>
                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                            </div>
                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                <div class="colors flex items-center gap-[12px]">
                                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                                  class="color-option flex items-center justify-center w-[17px] h-[17px] "
                                                  onclick="changeImage('img-one', this.dataset.image ,this) ; changeImage('img-one-hover', this.dataset.image ,this)">
                                                <img class="w-full h-full" src="assets/images/Fabric%20color.jpg"
                                                     alt="">
                                            </span>
                                </div>
                                <div class="flex items-center gap-[1rem]">
                                    <!--                                        <div class="discount py-[1px]  bg-base-color-two w-[70px] flex justify-center">-->
                                    <!--                                            <span class="text text-white text-[12px]">تخفیف دار</span>-->
                                    <!--                                            <span class="number text-white text-[12px]">25%</span>-->
                                    <!--                                        </div>-->
                                    <div class="favorite cursor-pointer">
                                        <svg fill="#000000" height="23" width="23" version="1.1" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             viewBox="0 0 455 455" xml:space="preserve">
<path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
	C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
	l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
	C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
	c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
	c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
	c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
</svg>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail-product relative w-full flex flex-col items-center justify-center">
                            <a class="w-full p-img h-[67vh] max-[800px]:h-[395px] relative"
                               href="./singleproduct.php">
                                <img id="img-two" class="w-full h-full img-main fade object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                     alt="">
                                <img class="w-full h-full img-hover object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-02.jpg"
                                     alt="">
                            </a>
                            <div class="w-full flex mt-[1rem] items-center justify-between">
                                <span class="text-[12px] font-bold text">تی شرت 1698</span>
                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                            </div>
                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                <div class="colors flex items-center gap-[12px]">
                                        <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                              class="color-option flex items-center justify-center w-[17px] h-[17px] "
                                              onclick="changeImage('img-two', this.dataset.image ,this) ; changeImage('img-one-hover', this.dataset.image ,this)">
                                                <img class="w-full h-full" src="assets/images/color2.jpg"
                                                     alt="">
                                            </span>
                                </div>

                                <div class="flex items-center gap-[1rem]">
                                    <div class="discount py-[1px]  bg-base-color-two w-[70px] flex justify-center">
                                        <span class="text text-white text-[12px]">تخفیف دار</span>
                                        <span class="number text-white text-[12px]">25%</span>
                                    </div>
                                    <div class="favorite cursor-pointer">
                                        <svg fill="#000000" height="23" width="23" version="1.1" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             viewBox="0 0 455 455" xml:space="preserve">
<path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
	C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
	l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
	C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
	c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
	c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
	c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
</svg>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail-product relative w-full flex flex-col items-center justify-center">
                            <a class="w-full p-img h-[67vh] max-[800px]:h-[395px] relative"
                               href="./singleproduct.php">
                                <img id="img-three" class="w-full h-full img-main fade object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                     alt="">
                                <img class="w-full h-full img-hover object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-02.jpg"
                                     alt="">
                            </a>
                            <div class="w-full flex mt-[1rem] items-center justify-between">
                                <span class="text-[12px] font-bold text">تی شرت 1698</span>
                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                            </div>
                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                <div class="colors flex items-center gap-[12px]">
                                        <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                              class="color-option flex items-center justify-center w-[17px] h-[17px] "
                                              onclick="changeImage('img-three', this.dataset.image ,this) ; changeImage('img-one-hover', this.dataset.image ,this)">
                                                <img class="w-full h-full" src="assets/images/color3.jpg"
                                                     alt="">
                                            </span>
                                </div>

                                <div class="flex items-center gap-[1rem]">
                                    <div class="discount py-[1px]  bg-base-color-two w-[70px] flex justify-center">
                                        <span class="text text-white text-[12px]">تخفیف دار</span>
                                        <span class="number text-white text-[12px]">25%</span>
                                    </div>
                                    <div class="favorite cursor-pointer">
                                        <svg fill="#000000" height="23" width="23" version="1.1" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             viewBox="0 0 455 455" xml:space="preserve">
<path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
	C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
	l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
	C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
	c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
	c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
	c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
</svg>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail-product relative w-full flex flex-col items-center justify-center">
                            <a class="w-full p-img h-[67vh] max-[800px]:h-[395px] relative"
                               href="./singleproduct.php">
                                <img id="img-four" class="w-full h-full img-main fade object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                     alt="">
                                <img class="w-full h-full img-hover object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-02.jpg"
                                     alt="">
                            </a>
                            <div class="w-full flex mt-[1rem] items-center justify-between">
                                <span class="text-[12px] font-bold text">تی شرت 1698</span>
                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                            </div>
                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                <div class="colors flex items-center gap-[12px]">
                                        <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                              class="color-option flex items-center justify-center w-[17px] h-[17px] "
                                              onclick="changeImage('img-four', this.dataset.image ,this) ; changeImage('img-one-hover', this.dataset.image ,this)">
                                                <img class="w-full h-full" src="assets/images/color4.jpg"
                                                     alt="">
                                            </span>
                                </div>

                                <div class="flex items-center gap-[1rem]">
                                    <div class="discount py-[1px]  bg-base-color-two w-[70px] flex justify-center">
                                        <span class="text text-white text-[12px]">تخفیف دار</span>
                                        <span class="number text-white text-[12px]">25%</span>
                                    </div>
                                    <div class="favorite cursor-pointer">
                                        <svg fill="#000000" height="23" width="23" version="1.1" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             viewBox="0 0 455 455" xml:space="preserve">
<path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
	C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
	l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
	C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
	c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
	c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
	c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
</svg>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail-product relative w-full flex flex-col items-center justify-center">
                            <a class="w-full p-img h-[67vh] max-[800px]:h-[395px] relative"
                               href="./singleproduct.php">
                                <img id="img-five" class="w-full h-full img-main fade object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                     alt="">
                                <img class="w-full h-full img-hover object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-02.jpg
"
                                     alt="">
                            </a>
                            <div class="w-full flex mt-[1rem] items-center justify-between">
                                <span class="text-[12px] font-bold text">تی شرت 1698</span>
                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                            </div>
                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                <div class="colors flex items-center gap-[12px]">
                                        <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                              class="color-option flex items-center justify-center w-[17px] h-[17px] "
                                              onclick="changeImage('img-five', this.dataset.image ,this) ; changeImage('img-one-hover', this.dataset.image ,this)">
                                                <img class="w-full h-full" src="assets/images/color5.jpg"
                                                     alt="">
                                            </span>
                                </div>

                                <div class="flex items-center gap-[1rem]">
                                    <div class="discount py-[1px]  bg-base-color-two w-[70px] flex justify-center">
                                        <span class="text text-white text-[12px]">تخفیف دار</span>
                                        <span class="number text-white text-[12px]">25%</span>
                                    </div>
                                    <div class="favorite cursor-pointer">
                                        <svg fill="#000000" height="23" width="23" version="1.1" id="Layer_1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             viewBox="0 0 455 455" xml:space="preserve">
<path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
	C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
	l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
	C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
	c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
	c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
	c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
</svg>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="swiper-button-prev-product">
                <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                          fill="#777777"/>
                </svg>
            </div>
        </div>

    </div>
    <div class="row-five max-[900px]:px-[12px] mt-[10rem] min-[901px]:hidden row-five-product flex flex-col items-center justify-center w-full">
        <div class="w-full mb-[2rem] title flex justify-center">
            <h2 class="text-[18px] px-[1rem]">محصولات مشابه</h2>
        </div>
        <div class="w-full flex flex-col items-center justify-center">
            <div class="swiper w-full mx-[15px]  swiperProduct">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="thumbnail-product thumbnail-product-mobi relative w-full flex flex-col items-center justify-center">
                            <a  class="w-full p-img h-[32vh] overflow-hidden  relative" href="./singleproduct.php">
                                <div class="favorite absolute z-10 left-[8px] top-[8px] cursor-pointer">
                                    <svg fill="#000000" height="20" width="20" version="1.1" id="Layer_1"
                                         xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                         viewBox="0 0 455 455" xml:space="preserve">
<path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
	C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
	l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
	C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
	c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
	c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
	c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
</svg>
                                </div>
                                <div class="discount absolute">
                                    <h6 class="text-[#fff]">25%</h6>
                                </div>

                                <img id="img-t2" class="w-full h-full img-main fade object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg" alt="">
                                <img id="img-t2-hover" class="w-full h-full img-hover object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-02.jpg"
                                     alt="">

                                <span class="title-mobi absolute bottom-0 right-0 w-full h-[30px]  text-[#000] bg-[#cccccc90] flex items-center justify-center">
                                     <span class="text-[12px] text-white">تی شرت 1698</span>
                                    </span>
                            </a>
                            <div class="w-full flex mt-[1rem] items-center justify-center">
                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                            </div>
                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                <div class="colors flex items-center w-full justify-center gap-[6px]">
                                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-02.jpg"
                                                          class="color-option w-[15px] h-[15px]"
                                                          onclick="changeImage('img-three', this.dataset.image ,this) ; changeImage('img-three-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/Fabric%20color.jpg" alt="">
                                            </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t2', this.dataset.image ,this) ; changeImage('img-t2-hover', this.dataset.image2 ,this)">
                                                        <img class="w-full h-full" src="assets/images/color2.jpg" alt="">
                                                    </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t2', this.dataset.image ,this) ; changeImage('img-t2-hover', this.dataset.image2 ,this)">
                                                 <img class="w-full h-full" src="assets/images/color3.jpg" alt="">
                                             </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t2', this.dataset.image ,this) ; changeImage('img-t2-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/color4.jpg" alt="">
                                            </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px] "
                                          onclick="changeImage('img-t2', this.dataset.image ,this) ; changeImage('img-t2-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/color5.jpg" alt="">
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail-product thumbnail-product-mobi relative w-full flex flex-col items-center justify-center">
                            <a class="w-full p-img h-[32vh]  relative" href="./list-product.php">
                                <div class="favorite absolute z-10 left-[8px] top-[8px] cursor-pointer">
                                    <svg fill="#000000" height="20" width="20" version="1.1" id="Layer_1"
                                         xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                         viewBox="0 0 455 455" xml:space="preserve">
<path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
	C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
	l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
	C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
	c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
	c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
	c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
</svg>
                                </div>

                                <img id="img-t1" class="w-full h-full img-main fade object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg" alt="">
                                <img id="img-t1-hover" class="w-full h-full img-hover object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-02.jpg"
                                     alt="">
                                <span class="title-mobi absolute bottom-0 right-0 w-full h-[30px]  text-[#000] bg-[#cccccc90] flex items-center justify-center">
                                     <span class="text-[12px] text-white ">کت و شلوار و ژیله 1468</span>
                                    </span>
                            </a>
                            <div class="w-full flex mt-[1rem] items-center justify-center">
                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                            </div>
                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                <div class="colors w-full justify-center flex items-center gap-[6px]">
                                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-02.jpg"
                                                          class="color-option w-[15px] h-[15px]"
                                                          onclick="changeImage('img-three', this.dataset.image ,this) ; changeImage('img-three-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/Fabric%20color.jpg" alt="">
                                            </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t1', this.dataset.image ,this) ; changeImage('img-t1-hover', this.dataset.image2 ,this)">
                                                        <img class="w-full h-full" src="assets/images/color2.jpg" alt="">
                                                    </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t1', this.dataset.image ,this) ; changeImage('img-t1-hover', this.dataset.image2 ,this)">
                                                 <img class="w-full h-full" src="assets/images/color3.jpg" alt="">
                                             </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t1', this.dataset.image ,this) ; changeImage('img-t1-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/color4.jpg" alt="">
                                            </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px] "
                                          onclick="changeImage('img-t1', this.dataset.image ,this) ; changeImage('img-t1-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/color5.jpg" alt="">
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail-product thumbnail-product-mobi relative w-full flex flex-col items-center justify-center">
                            <a class="w-full p-img h-[32vh]  relative" href="./list-product.php">
                                <div class="favorite absolute z-10 left-[8px] top-[8px] cursor-pointer">
                                    <svg fill="#000000" height="20" width="20" version="1.1" id="Layer_1"
                                         xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                         viewBox="0 0 455 455" xml:space="preserve">
<path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
	C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
	l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
	C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
	c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
	c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
	c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
</svg>
                                </div>

                                <img id="img-t3" class="w-full h-full img-main fade object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg" alt="">
                                <img id="img-t3-hover" class="w-full h-full img-hover object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-02.jpg"
                                     alt="">
                                <span class="title-mobi absolute bottom-0 right-0 w-full h-[30px]  text-[#000] bg-[#cccccc90] flex items-center justify-center">
                                     <span class="text-[12px] text-white ">کت و شلوار و ژیله 1468</span>
                                    </span>
                            </a>
                            <div class="w-full flex mt-[1rem] items-center justify-center">
                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                            </div>
                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                <div class="colors w-full justify-center flex items-center gap-[6px]">
                                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-02.jpg"
                                                          class="color-option w-[15px] h-[15px]"
                                                          onclick="changeImage('img-three', this.dataset.image ,this) ; changeImage('img-three-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/Fabric%20color.jpg" alt="">
                                            </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t3', this.dataset.image ,this) ; changeImage('img-t3-hover', this.dataset.image2 ,this)">
                                                        <img class="w-full h-full" src="assets/images/color2.jpg" alt="">
                                                    </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t3', this.dataset.image ,this) ; changeImage('img-t3-hover', this.dataset.image2 ,this)">
                                                 <img class="w-full h-full" src="assets/images/color3.jpg" alt="">
                                             </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t3', this.dataset.image ,this) ; changeImage('img-t3-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/color4.jpg" alt="">
                                            </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px] "
                                          onclick="changeImage('img-t3', this.dataset.image ,this) ; changeImage('img-t3-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/color5.jpg" alt="">
                                            </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail-product thumbnail-product-mobi relative w-full flex flex-col items-center justify-center">
                            <a class="w-full p-img h-[32vh]  relative" href="./list-product.php">
                                <div class="favorite absolute z-10 left-[8px] top-[8px] cursor-pointer">
                                    <svg fill="#000000" height="20" width="20" version="1.1" id="Layer_1"
                                         xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                         viewBox="0 0 455 455" xml:space="preserve">
<path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
	C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
	l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
	C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
	c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
	c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
	c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
</svg>
                                </div>

                                <img id="img-t4" class="w-full h-full img-main fade object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg" alt="">
                                <img id="img-t4-hover" class="w-full h-full img-hover object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-02.jpg"
                                     alt="">
                                <span class="title-mobi absolute bottom-0 right-0 w-full h-[30px]  text-[#000] bg-[#cccccc90] flex items-center justify-center">
                                     <span class="text-[12px] text-white ">کت و شلوار و ژیله 1468</span>
                                    </span>
                            </a>
                            <div class="w-full flex mt-[1rem] items-center justify-center">
                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                            </div>
                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                <div class="colors w-full justify-center flex items-center gap-[6px]">
                                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-02.jpg"
                                                          class="color-option w-[15px] h-[15px]"
                                                          onclick="changeImage('img-three', this.dataset.image ,this) ; changeImage('img-three-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/Fabric%20color.jpg" alt="">
                                            </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t4', this.dataset.image ,this) ; changeImage('img-t4-hover', this.dataset.image2 ,this)">
                                                        <img class="w-full h-full" src="assets/images/color2.jpg" alt="">
                                                    </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t4', this.dataset.image ,this) ; changeImage('img-t4-hover', this.dataset.image2 ,this)">
                                                 <img class="w-full h-full" src="assets/images/color3.jpg" alt="">
                                             </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t4', this.dataset.image ,this) ; changeImage('img-t4-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/color4.jpg" alt="">
                                            </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px] "
                                          onclick="changeImage('img-t4', this.dataset.image ,this) ; changeImage('img-t4-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/color5.jpg" alt="">
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnail-product thumbnail-product-mobi relative w-full flex flex-col items-center justify-center">
                            <a class="w-full p-img h-[32vh]  relative" href="./list-product.php">
                                <div class="favorite absolute z-10 left-[8px] top-[8px] cursor-pointer">
                                    <svg fill="#000000" height="20" width="20" version="1.1" id="Layer_1"
                                         xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                         viewBox="0 0 455 455" xml:space="preserve">
<path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
	C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
	l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
	C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
	c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
	c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
	c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
</svg>
                                </div>

                                <img id="img-t5" class="w-full h-full img-main fade object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg" alt="">
                                <img id="img-t5-hover" class="w-full h-full img-hover object-cover"
                                     src="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-02.jpg"
                                     alt="">
                                <span class="title-mobi absolute bottom-0 right-0 w-full h-[30px]  text-[#000] bg-[#cccccc90] flex items-center justify-center">
                                     <span class="text-[12px] text-white ">کت و شلوار و ژیله 1468</span>
                                    </span>
                            </a>
                            <div class="w-full flex mt-[1rem] items-center justify-center">
                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                            </div>
                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                <div class="colors flex w-full justify-center items-center gap-[6px]">
                                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-02.jpg"
                                                          class="color-option w-[15px] h-[15px]"
                                                          onclick="changeImage('img-three', this.dataset.image ,this) ; changeImage('img-three-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/Fabric%20color.jpg" alt="">
                                            </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t5', this.dataset.image ,this) ; changeImage('img-t5-hover', this.dataset.image2 ,this)">
                                                        <img class="w-full h-full" src="assets/images/color2.jpg" alt="">
                                                    </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t5', this.dataset.image ,this) ; changeImage('img-t5-hover', this.dataset.image2 ,this)">
                                                 <img class="w-full h-full" src="assets/images/color3.jpg" alt="">
                                             </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px]"
                                          onclick="changeImage('img-t5', this.dataset.image ,this) ; changeImage('img-t5-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/color4.jpg" alt="">
                                            </span>
                                    <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                          data-image2="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-02.jpg"
                                          class="color-option w-[15px] h-[15px] "
                                          onclick="changeImage('img-t5', this.dataset.image ,this) ; changeImage('img-t5-hover', this.dataset.image2 ,this)">
                                                <img class="w-full h-full" src="assets/images/color5.jpg" alt="">
                                            </span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full mt-4 flex items-center justify-center gap-[12px]">
                <div class="swiper-button-next-product">
                    <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                              fill="#777777"/>
                    </svg>
                </div>
                <div class="swiper-button-prev-product">
                    <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                              fill="#777777"/>
                    </svg>
                </div>
            </div>
        </div>

    </div>
    <div class="w-full max-[900px]:hidden row-five mb-[5rem] mt-[2rem]">
        <div class="w-[60%] max-[900px]:w-full max-[900px]:px-[6px] flex flex-col items-center mx-auto">
            <div class="w-full mb-[2rem] title flex justify-center">
                <h2 class="text-[18px] px-[1rem]">استایل خود را تکمیل کنید</h2>
            </div>
            <div class="w-full tab1 tab-content active">
                <div class="w-full  flex items-center justify-center">
                    <div class="p-gallery  py-[2rem]  gap-[12px] w-full grid ">
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                     alt="">

                            </div>
                        </div>
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery  overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery  overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery max-[900px]:hidden overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="cols w-full flex flex-col gap-[12px]">
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PTS/PTS1156904/cover/T-shirt-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">تی شرت 6958</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PSH/PSH1155503/cover/shoes-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">کفش اسپرت 5502</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="display: none" class="w-full tab2 tab-content">
                <div class="w-full  flex items-center justify-center">
                    <div class="p-gallery  py-[2rem]  gap-[12px] w-full grid ">
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                     alt="">

                            </div>
                        </div>
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery  overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery  overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery max-[900px]:hidden overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="cols w-full flex flex-col gap-[12px]">
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PTS/PTS1156904/cover/T-shirt-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">تی شرت 6958</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PSH/PSH1155503/cover/shoes-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">کفش اسپرت 5502</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="display: none" class="w-full tab3 tab-content">
                <div class="w-full  flex items-center justify-center">
                    <div class="p-gallery  py-[2rem]  gap-[12px] w-full grid ">
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                     alt="">

                            </div>
                        </div>
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery  overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery  overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery max-[900px]:hidden overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="cols w-full flex flex-col gap-[12px]">
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PTS/PTS1156904/cover/T-shirt-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">تی شرت 6958</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PSH/PSH1155503/cover/shoes-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">کفش اسپرت 5502</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="display: none" class="w-full tab4 tab-content">
                <div class="w-full  flex items-center justify-center">
                    <div class="p-gallery  py-[2rem]  gap-[12px] w-full grid ">
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                     alt="">

                            </div>
                        </div>
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery  overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery  overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery max-[900px]:hidden overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="cols w-full flex flex-col gap-[12px]">
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PTS/PTS1156904/cover/T-shirt-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">تی شرت 6958</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PSH/PSH1155503/cover/shoes-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">کفش اسپرت 5502</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="display: none" class="w-full tab5 tab-content">
                <div class="w-full  flex items-center justify-center">
                    <div class="p-gallery  py-[2rem]  gap-[12px] w-full grid ">
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                     alt="">

                            </div>
                        </div>
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery  overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery  overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery max-[900px]:hidden overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="cols w-full flex flex-col gap-[12px]">
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PTS/PTS1156904/cover/T-shirt-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">تی شرت 6958</a></h3>
                                </div>
                            </div>
                            <div class="img-gallery overflow-hidden relative h-full w-full">
                                <img class="object-cover h-full w-full"
                                     src="https://media.ecut.shop/product/PSH/PSH1155503/cover/shoes-01.jpg"
                                     alt="">
                                <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                    <h3 class="en-num font-bold text-[14px]"><a href="">کفش اسپرت 5502</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full min-[901px]:hidden mobile-style row-five mb-[5rem] mt-[2rem]">
        <div class="w-[60%] max-[900px]:w-full max-[900px]:px-[6px] flex flex-col items-center mx-auto">
            <div class="w-full mb-[2rem] title flex justify-center">
                <h2 class="text-[18px] px-[1rem]">استایل خود را تکمیل کنید</h2>
            </div>
            <div class="w-full tab1 tab-content active">
                <div class="w-full  flex items-center justify-center">
                    <div class="p-gallery  py-[2rem]  gap-[12px] w-full grid">
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery h-[297px] overflow-hidden relative h-full w-full">
                                <img class="object-cover h-[297px]  w-full"
                                     src="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                     alt="">

                            </div>
                        </div>
                        <div class="swiper w-full overflow-hidden swiper-two-cols">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                        </div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full  gap-[12px] items-center justify-center">
                    <div class="swiper-button-next-style">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                    <div class="swiper-button-prev-style">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div style="display: none" class="w-full tab2 tab-content">
                <div class="w-full  flex items-center justify-center">
                    <div class="p-gallery  py-[2rem]  gap-[12px] w-full grid">
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery h-[297px] overflow-hidden relative h-full w-full">
                                <img class="object-cover h-[297px]  w-full"
                                     src="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                     alt="">

                            </div>
                        </div>
                        <div class="swiper w-full overflow-hidden swiper-two-cols">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                        </div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full  gap-[12px] items-center justify-center">
                    <div class="swiper-button-next-style">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                    <div class="swiper-button-prev-style">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div style="display: none" class="w-full tab3 tab-content">
                <div class="w-full  flex items-center justify-center">
                    <div class="p-gallery  py-[2rem]  gap-[12px] w-full grid">
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery h-[297px] overflow-hidden relative h-full w-full">
                                <img class="object-cover h-[297px]  w-full"
                                     src="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                     alt="">

                            </div>
                        </div>
                        <div class="swiper w-full overflow-hidden swiper-two-cols">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                        </div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full  gap-[12px] items-center justify-center">
                    <div class="swiper-button-next-style">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                    <div class="swiper-button-prev-style">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div style="display: none" class="w-full tab4 tab-content">
                <div class="w-full  flex items-center justify-center">
                    <div class="p-gallery  py-[2rem]  gap-[12px] w-full grid">
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery h-[297px] overflow-hidden relative h-full w-full">
                                <img class="object-cover h-[297px]  w-full"
                                     src="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                     alt="">

                            </div>
                        </div>
                        <div class="swiper w-full overflow-hidden swiper-two-cols">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                        </div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full  gap-[12px] items-center justify-center">
                    <div class="swiper-button-next-style">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                    <div class="swiper-button-prev-style">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div style="display: none" class="w-full tab5 tab-content">
                <div class="w-full  flex items-center justify-center">
                    <div class="p-gallery  py-[2rem]  gap-[12px] w-full grid">
                        <div class="cols   w-full flex flex-col gap-[12px]">
                            <div class="img-gallery h-[297px] overflow-hidden relative h-full w-full">
                                <img class="object-cover h-[297px]  w-full"
                                     src="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                     alt="">

                            </div>
                        </div>
                        <div class="swiper w-full overflow-hidden swiper-two-cols">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                             alt="">

                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XST/XST1157095/cover/Shirt-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">پیراهن پشمی 7095</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/XTR/XTR1156252/cover/pants-02.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">شلوار فاستونی 6252</a></h3>
                                        </div>
                                    </div></div>
                                <div class="swiper-slide"><div class="img-gallery  overflow-hidden relative h-full w-full">
                                        <img class="object-cover h-full w-full"
                                             src="https://media.ecut.shop/product/PSH/PSH1155512/cover/shoes-01.jpg"
                                             alt="">
                                        <div class="details-img h-[70px] gap-[6px] w-full flex flex-col items-center justify-center p-[1rem] bg-[#ffffff95] absolute right-0 z-10">
                                            <h3 class="en-num font-bold text-[14px]"><a href="">کفش کلاسیک 5512</a></h3>
                                        </div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full  gap-[12px] items-center justify-center">
                    <div class="swiper-button-next-style">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                    <div class="swiper-button-prev-style">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!--modal-ruler-->
<div class="modal-ruler">
    <div class="box-ruler p-[1rem] flex flex-col items-center">
        <div class="row-close mb-[3rem] w-full flex justify-end">
            <button class="btn-close-modal-ruler p-[4px]">
                <svg  width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.9986 0H13.2986H4.69831H1.9983C0.896949 0 0 0.896949 0 2.00136V4.70136V13.3993V16.0017C0 17.1031 0.896949 18 2.00136 18H4.69831H13.3993H15.9986C17.1031 18 18 17.1031 18 15.9986V13.3017V4.70136V2.00136C18 0.896949 17.1031 0 15.9986 0ZM12.6 14.0003L9 10.4003L5.4 14.0003L3.99966 12.6L7.59966 9L3.99966 5.4L5.4 3.99966L9 7.59966L12.6 3.99966L14.0003 5.4L10.4003 9L14.0003 12.6L12.6 14.0003Z" fill="#777777"></path>
                </svg>
            </button>
        </div>
        <h3 class="text-[16px] font-bold">راهمنای سایز شلوار فاستونی</h3>
        <p class="text-[15px] mt-[6px] leading-[24px] text-center">
            کلیه اندازه‌ها بر حسب میلیمتر است
            <br>
            نحوه اندازه گیری
        </p>
        <div class="w-full">
            <div class="p-sizing my-[3rem] pb-[8px] w-full px-[1rem]  gap-[3px] flex items-center justify-center">
                <div class="title-size grid grid-cols-1 gap-[3px]">
                    <div class="item w-[100px] text-white flex items-center justify-center h-[35px]">سایز</div>
                    <div class="item w-[100px] text-white flex items-center justify-center h-[35px]">عرض کمر</div>
                    <div class="item w-[100px] text-white flex items-center justify-center h-[35px]">عرض ران</div>
                    <div class="item w-[100px] text-white flex items-center justify-center h-[35px]">عرض دمپا</div>
                    <div class="item w-[100px] text-white flex items-center justify-center h-[35px]">قد دمپا</div>
                </div>
                <div class="col-items grid grid-cols-1 gap-[3px]">
                    <div class="item-head item-head w-[40px] text-white flex items-center justify-center h-[35px]">31
                    </div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">42</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">32</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">18.5</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">105</div>
                </div>
                <div class="col-items grid grid-cols-1 gap-[3px]">
                    <div class="item-head item-head w-[40px] text-white flex items-center justify-center h-[35px]">31
                    </div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">42</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">32</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">18.5</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">105</div>
                </div>
                <div class="col-items grid grid-cols-1 gap-[3px]">
                    <div class="item-head item-head w-[40px] text-white flex items-center justify-center h-[35px]">31
                    </div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">42</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">32</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">18.5</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">105</div>
                </div>
                <div class="col-items grid grid-cols-1 gap-[3px]">
                    <div class="item-head item-head w-[40px] text-white flex items-center justify-center h-[35px]">31
                    </div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">42</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">32</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">18.5</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">105</div>
                </div>
                <div class="col-items grid grid-cols-1 gap-[3px]">
                    <div class="item-head item-head w-[40px] text-white flex items-center justify-center h-[35px]">31
                    </div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">42</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">32</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">18.5</div>
                    <div class="item w-[40px] text-white flex items-center justify-center h-[35px]">105</div>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center">
            <img class="w-4/5" src="assets/images/table2.png">
        </div>
    </div>
</div>


<!--  size find  -->
<div class="modal-size">
    <div class="open_menu4">
        <div class="menu-content4">
            <div class="menu-btn4 close-modal-size">
                <svg  width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.9986 0H13.2986H4.69831H1.9983C0.896949 0 0 0.896949 0 2.00136V4.70136V13.3993V16.0017C0 17.1031 0.896949 18 2.00136 18H4.69831H13.3993H15.9986C17.1031 18 18 17.1031 18 15.9986V13.3017V4.70136V2.00136C18 0.896949 17.1031 0 15.9986 0ZM12.6 14.0003L9 10.4003L5.4 14.0003L3.99966 12.6L7.59966 9L3.99966 5.4L5.4 3.99966L9 7.59966L12.6 3.99966L14.0003 5.4L10.4003 9L14.0003 12.6L12.6 14.0003Z" fill="#777777"></path>
                </svg>
            </div>
            <div class="content">
                <div class="content__inner">
                    <div class="container overflow-hidden">
                        <div class="multisteps-form">
                            <div class="row">
                                <div class="multisteps-form__progress"></div>
                                <div class="w-full">
                                    <form class="multisteps-form__form">
                                        <div class="multisteps-form__panel step-one shadow  rounded srt7 bg-white js-active"
                                             data-animation="fade">
                                            <div class="multisteps-form__content">
                                                <div class="contenttabs">
                                                    <div class="titleboxtab">
                                                        <span>مدیریت نمایه‌ها</span>
                                                        <p>در اینجا می‌توانید نمایه خود یا شخص دیگری که برایش خرید <br/>می‌کنید
                                                            را انتخاب کرده و یا نمایه جدیدی بسازید.</p>
                                                    </div>
                                                    <div class="namaboxs">
                                                        <span>انتخاب نمابه</span>
                                                        <p>توجه: بر روی هر یک از نمایه‌های زیر کلیک کنید <br/>آن نمایه
                                                            فعال
                                                            می‌شود.</p>
                                                        <div class="namabox">
                                                            <ul id="navbar__list">
                                                                <li class="active">
                                                                    <i class="cute-user"></i>
                                                                    <p>نمایه خودم <br/> 92 kg</p>
                                                                    <span>انتخاب شده  </span>
                                                                </li>
                                                                <li>
                                                                    <i class="cute-user"></i>
                                                                    <p>نمایه خودم <br/> 92 kg</p>
                                                                    <span>انتخاب نمایه </span>
                                                                    <div class="deletelist">
                                                                        <i class="ecut-close flex items-center justify-center">
                                                                            <svg class="close-share" id="Icons"
                                                                                 height="10" viewBox="0 0 64 64"
                                                                                 width="10"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 fill="#fff">
                                                                                <path d="m4.59 59.41a2 2 0 0 0 2.83 0l24.58-24.58 24.59 24.58a2 2 0 0 0 2.83-2.83l-24.59-24.58 24.58-24.59a2 2 0 0 0 -2.83-2.83l-24.58 24.59-24.59-24.58a2 2 0 0 0 -2.82 2.82l24.58 24.59-24.58 24.59a2 2 0 0 0 0 2.82z"></path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <i class="cute-user"></i>
                                                                    <p>نمایه خودم <br/> 92 kg</p>
                                                                    <span>انتخاب نمایه </span>
                                                                    <div class="deletelist">
                                                                        <i class="ecut-close flex items-center justify-center">
                                                                            <svg class="close-share" id="Icons"
                                                                                 height="10" viewBox="0 0 64 64"
                                                                                 width="10"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 fill="#fff">
                                                                                <path d="m4.59 59.41a2 2 0 0 0 2.83 0l24.58-24.58 24.59 24.58a2 2 0 0 0 2.83-2.83l-24.59-24.58 24.58-24.59a2 2 0 0 0 -2.83-2.83l-24.58 24.59-24.59-24.58a2 2 0 0 0 -2.82 2.82l24.58 24.59-24.58 24.59a2 2 0 0 0 0 2.82z"></path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>


                                                    <div class="button-row mt-[1rem] showdatambl">
                                                        <p>اگر می‌خواهید برای شخص دیگری خــــرید کنید می‌توانید با کلیک
                                                            بر
                                                            روی دکمه "افــزودن نمایه جدید" یک نمایه با نام و مشخصات وی
                                                            بسازید</p>


                                                        <button class="btn-base flex items-center justify-center btn-show-step-two w-[90%] "
                                                                type="button"
                                                                title="Next">
                                                            افزودن نمایه جدید
                                                            <i class="mr-[1rem]">
                                                                <svg fill="#fff" version="1.1" id="Capa_1"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="10" height="10" viewBox="0 0 45.402 45.402"
                                                                     xml:space="preserve">
<g>
    <path d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141
		c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27
		c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435
		c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z"/>
</g>
</svg>
                                                            </i>
                                                        </button>
                                                        <span>حداکثر 3 نمایه می‌توانید بسازید</span>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__panel step-two shadow  rounded bg-white srt1 "
                                             data-animation="fade">
                                            <div class="multisteps-form__content">
                                                <div class="contenttabs w-full flex flex-col items-center">
                                                    <img class="firsttbimg" src="assets/images/snimg1.png">
                                                    <div class="titleboxtab">
                                                        <span>سایز من چیست؟</span>
                                                        <p>لطفا بــــه چند پرسش ســـاده پــاسخ دهیـــد تا <br/>نزدیکترین
                                                            سایز مناسب شما را پیشنهاد دهیـم</p>
                                                    </div>

                                                    <div class="firstdata">
                                                        <div class="firstdatabox">
                                                            <label>نمایه </label>
                                                            <input type="text" placeholder="نمایه " name="name">
                                                        </div>

                                                        <div class="firstdatabox">
                                                            <label>قــد شما</label>
                                                            <input type="text" placeholder="cm" name="dt1">
                                                        </div>

                                                        <div class="firstdatabox">
                                                            <label>وزن شما </label>
                                                            <input type="text" placeholder="km" name="dt2">
                                                        </div>
                                                    </div>
                                                    <button class="btn-base btn-step-two w-[70%]" type="button">
                                                        ادامـــــه
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__panel step-three shadow  rounded srt2 bg-white"
                                             data-animation="fade">
                                            <div class="multisteps-form__content">
                                                <div class="contenttabs">
                                                    <div class="titleboxtab">
                                                        <span>فرم سینه شما </span>
                                                        <p>از میان سه فرم سینه زیر یکی که به بدن شما <br/>نزدیکتر است را
                                                            انتخاب کنید</p>
                                                    </div>
                                                    <div class="image_radio_button_control w-full flex flex-col items-center">
                                                        <label class="radio-button-label">
                                                            <input type="radio" name="radio-control" value="lsb"/>
                                                            <img src="assets/images/size1.png">
                                                        </label>

                                                        <label class="radio-button-label">
                                                            <input type="radio" name="radio-control" value="nosb"/>
                                                            <img src="assets/images/size2.png">
                                                        </label>

                                                        <label class="radio-button-label">
                                                            <input type="radio" name="radio-control" value="rsb"/>
                                                            <img src="assets/images/size3.png">
                                                        </label>
                                                    </div>
                                                    <div class="button-row flex w-full justify-center items-center gap-[1rem] mt-[1rem]">
                                                        <button class="btn-disable sm:w-[40%] btn-sep-four px-[1rem]"
                                                                type="button"
                                                                title="Next">ادامـــــه
                                                        </button>
                                                        <button class="btn-base sm:w-[40%] back-step-two px-[1rem]"
                                                                type="button"
                                                                title="Prev">بازگشت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__panel step-four shadow  rounded srt3 bg-white"
                                             data-animation="fade">
                                            <div class="multisteps-form__content">
                                                <div class="contenttabs">
                                                    <div class="titleboxtab">
                                                        <span>فرم شکم شما</span>
                                                        <p>از میان سه فرم شکمی زیر یکی که به بدن شما <br/>نزدیکتر است را
                                                            انتخاب کنید</p>
                                                    </div>
                                                    <div class="image_radio_button_control w-full flex flex-col items-center">
                                                        <label class="radio-button-label">
                                                            <input type="radio" name="radio-control" value="lsbs"/>
                                                            <img src="assets/images/size4.png">
                                                        </label>

                                                        <label class="radio-button-label">
                                                            <input type="radio" name="radio-control" value="nosbd"/>
                                                            <img src="assets/images/size5.png">
                                                        </label>

                                                        <label class="radio-button-label">
                                                            <input type="radio" name="radio-control" value="rsbf"/>
                                                            <img src="assets/images/size6.png">
                                                        </label>
                                                    </div>
                                                    <div class="button-row flex mt-[1rem] w-full items-center gap-[1rem] justify-center">
                                                        <button class="btn-base sm:w-[40%] px-[1rem] btn-step-five"
                                                                type="button"
                                                                title="Next">ادامـــــه
                                                        </button>
                                                        <button class="btn-base sm:w-[40%] px-[1rem] btn-step-three"
                                                                type="button"
                                                                title="Prev">بازگشت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__panel step-five shadow  rounded srt4 bg-white"
                                             data-animation="fade">
                                            <div class="multisteps-form__content">
                                                <div class="contenttabs">
                                                    <div class="titleboxtab">
                                                        <span>حالت و سبک لباس</span>
                                                        <p>چه نوع برشی را برای لباس انتخابی خود می‌پسندید <br/>از میان
                                                            حالات
                                                            زیر یکی را انتخاب کنید</p>
                                                    </div>
                                                    <div class="image_radio_button_control w-full flex flex-col items-enter">
                                                        <label class="radio-button-label">
                                                            <input type="radio" name="radio-control" value="lsbs"/>
                                                            <img src="assets/images/size7.png">
                                                        </label>

                                                        <label class="radio-button-label">
                                                            <input type="radio" name="radio-control" value="nosbd"/>
                                                            <img src="assets/images/size8.png">
                                                        </label>

                                                        <label class="radio-button-label">
                                                            <input type="radio" name="radio-control" value="rsbf"/>
                                                            <img src="assets/images/size9.png">
                                                        </label>
                                                    </div>
                                                    <div class="button-row flex w-full items-center justify-center gap-[1rem] mt-[1rem]">
                                                        <button class="btn-base sm:w-[40%] bt-step-six px-[1rem]"
                                                                type="button"
                                                                title="Next">ادامـــــه
                                                        </button>
                                                        <button class="btn-base sm:w-[40%] btn-back-step-four px-[1rem]"
                                                                type="button"
                                                                title="Prev">بازگشت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__panel step-six shadow  lg:top-[-20px] rounded srt5 bg-white"
                                             data-animation="fade">
                                            <div class="multisteps-form__content">
                                                <div class="contenttabs w-full flex flex-col items-center">
                                                    <img class="firsttbimg" src="assets/images/snimg1.png">
                                                    <div class="titleboxtab">
                                                        <span>سایز پیشنهادی برای شما</span>
                                                    </div>
                                                    <div class="sizefinal w-[70%]">
                                                        <span>برآورد سایز برای کت و شلوار </span>
                                                        <div style="width: 100% !important;" class="sizefinalbox">
                                                            <ul>
                                                                <li>52</li>
                                                                <li>54</li>
                                                                <li>56</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="sizedesc">
                                                        توجه: <br/>
                                                        این سایز صرفا یک توصیه است که
                                                        یز اساس اطلاعات دریافتی از شما و
                                                        مقایسه با خرید هزاران کاربر دیگـــر
                                                        به شما پیشنهاد شده است.
                                                    </div>
                                                    <div class="button-row flex flex-col items-center gap-[1rem] justify-center mt-[1rem]">
                                                        <button class="btn-base flex items-center max-[1600px]:text-[14px] justify-center px-[1rem] w-1/2  btn-cart"
                                                                type="button"
                                                                title="Next">افزودن به سبد خرید <i
                                                                    class="ecut-arrow"></i>
                                                        </button>
                                                        <button class="btn-base flex items-center justify-center px-[1rem]  max-[1600px]:text-[14px] w-1/2  btn-show-step-seven"
                                                                type="button" title="Prev">
                                                            ویرایش اطلاعات
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__panel step-seven shadow  rounded srt6 bg-white "
                                             data-animation="fade">
                                            <div class="multisteps-form__content">
                                                <div class="contenttabs">
                                                    <div class="titleboxtab">
                                                        <span>اطلاعات دریافتی از شما</span>
                                                        <p>این اطلاعات به عنوان راهنمایی برای پیشنهاد سایز مناسب به شما
                                                            استفاده می‌شود.</p>
                                                    </div>
                                                    <div class="datatablesize">
                                                        <span>ویرایش اطلاعات </span>
                                                        <p>برای ویرایش بر روی هر کدام از موارد زیر کلیک کنید</p>
                                                        <ul>
                                                            <li><span>قد شما</span><span> 185 </span></li>
                                                            <li><span>وزن شما</span><span> 92 </span></li>
                                                            <li><span>فرم سینه</span><span> متوسط </span></li>
                                                            <li><span>گردتر</span><span> 185 </span></li>
                                                            <li><span>سبک مورد علاقه</span><span> آزاد </span></li>
                                                        </ul>
                                                    </div>


                                                    <div class="button-row flex flex-col w-full mt-[1rem] showdatadff">
                                                        <p>تــوجــه: <br/>
                                                            با کـــلیک بــر روی این دکـــــمه زیر بــــه شروع
                                                            این برنامه بازمی‌گردید. </p>

                                                        <button class="btn-base w-full" type="button"
                                                                title="Prev"><i class="ecut-arrow"></i>پاک کردن همه
                                                            داده‌ها
                                                        </button>

                                                        <button class="btn-base flex items-center justify-center  w-full "
                                                                type="button"
                                                                title="Next">افزودن نمایه جدید
                                                            <i class="mr-[1rem]">
                                                                <svg fill="#fff" version="1.1" id="Capa_1"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="10" height="10" viewBox="0 0 45.402 45.402"
                                                                     xml:space="preserve">
<g>
    <path d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141
		c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27
		c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435
		c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z"></path>
</g>
</svg>
                                                            </i>
                                                        </button>


                                                        <button class="btn-base w-full mb-[12px] btn-step-one"
                                                                type="button" title="Next">مدیریت نمایه‌ها
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="p-modal-gallery-product  z-[9999] w-full h-[100vh]  fixed right-0 top-0">
    <div class="bg-overly absolute z-0 right-0 top-0 h-full w-full bg-[#00000090]"></div>
    <div class="modal-gallery-product relative  p-[1rem] z-10 w-[27%] max-[900px]:w-full min-[2000px]:w-[20%] h-full bg-white flex flex-col">
        <div class="row-close flex justify-end w-full">
            <button class="close-modal-gallery">
                <svg  width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.9986 0H13.2986H4.69831H1.9983C0.896949 0 0 0.896949 0 2.00136V4.70136V13.3993V16.0017C0 17.1031 0.896949 18 2.00136 18H4.69831H13.3993H15.9986C17.1031 18 18 17.1031 18 15.9986V13.3017V4.70136V2.00136C18 0.896949 17.1031 0 15.9986 0ZM12.6 14.0003L9 10.4003L5.4 14.0003L3.99966 12.6L7.59966 9L3.99966 5.4L5.4 3.99966L9 7.59966L12.6 3.99966L14.0003 5.4L10.4003 9L14.0003 12.6L12.6 14.0003Z" fill="#777777"></path>
                </svg>
            </button>
        </div>
        <div class="w-full mt-[2rem]">
            <button class="btn-base w-full rounded-[0px]">بازگشت به سبد خرید</button>
        </div>
        <div class="w-full flex flex-col items-start mt-4">
            <h3 class="font-bold title text-[18px]"><a href=""> کت تک سایز مدیوم 1396</a></h3>
            <span class="mt-2 price text-[14px]">18,998,900  تومان</span>
        </div>
        <div class="w-full grid grid-cols-1 mt-3 gap-[1rem] selects">
            <select class="border-[1px] border-[#000] w-full text-[14px] px-[12px] h-[50px]" name="" id="">
                <option selected disabled value="">سایز را انتخاب کنید</option>
                <option value="">S</option>
                <option value="">M</option>
                <option value="">L</option>
                <option value="">XL</option>
                <option value="">XXL</option>
            </select>
        </div>
        <div class="w-full mt-2 ">
            <button class="btn-base w-full rounded-[0px]">افزودن به سبد خرید</button>
        </div>
        <div class="w-full mt-[3rem]">
            <div class="acc-container">
                <div class="acc">
                    <div class="acc-head">
                        <div class="arrow absolute right-[5px]">
                            <img src="assets/images/Icons/arrow-down.svg" alt="">
                        </div>
                        <p>توضیحات محصول</p>
                    </div>
                    <div class="acc-content">
                        <p class="w-full text-justify leading-[24px] text-[#555555] text-[13px]">لورم ایپسوم متن ساختگی
                            با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
                            روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،
                            حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای
                            طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت
                            می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد
                            وزمان م.
                        </p>
                    </div>
                </div>
                <div class="acc">
                    <div class="acc-head">
                        <div class="arrow absolute right-[5px]">
                            <img src="assets/images/Icons/arrow-down.svg" alt="">
                        </div>
                        <p>ویژگی های محصول</p>
                    </div>
                    <div class="acc-content">
                        <ul class="text-[14px] text-[#555555]">
                            <li>کت مردانه دو دکمه یقه انگلیسی</li>
                            <li class="mt-3">دارای دو جیب معمولی و یک جیب روی سینه کت برای پوشت</li>
                            <li class="mt-3">دارای دو چاک در پشت کت</li>
                            <li class="mt-3">بدون آستر داخلی</li>
                            <li class="mt-3">دارای دامنه کت جلو گرد</li>
                            <li class="mt-3">برش محصول: رگولار</li>
                            <li class="mt-3"><a href="http:google.cm">جنس پارچه: 50 درصد پشم، 50 درصد پلی‌استر </a></li>
                        </ul>
                    </div>
                </div>
                <div class="acc">
                    <div class="acc-head">
                        <div class="arrow absolute right-[5px]">
                            <img src="assets/images/Icons/arrow-down.svg" alt="">
                        </div>
                        <p>روش نگهداری</p>
                    </div>
                    <div class="acc-content">
                        <ul>
                            <li>کت مردانه دو دکمه یقه انگلیسی</li>
                            <li>دارای دو جیب معمولی و یک جیب روی سینه کت برای پوشت</li>
                            <li>دارای دو چاک در پشت کت</li>
                            <li>بدون آستر داخلی</li>
                            <li>دارای دامنه کت جلو گرد</li>
                            <li>برش محصول: رگولار</li>
                            <li><a href="http:google.cm">جنس پارچه: 50 درصد پشم، 50 درصد پلی‌استر </a></li>
                        </ul>
                    </div>
                </div>
                <div class="acc">
                    <div class="acc-head">
                        <div class="arrow absolute right-[5px]">
                            <img src="assets/images/Icons/arrow-down.svg" alt="">
                        </div>
                        <p>مرجوعی کالا</p>
                    </div>
                    <div class="acc-content">
                        <ul>
                            <li>کت مردانه دو دکمه یقه انگلیسی</li>
                            <li>دارای دو جیب معمولی و یک جیب روی سینه کت برای پوشت</li>
                            <li>دارای دو چاک در پشت کت</li>
                            <li>بدون آستر داخلی</li>
                            <li>دارای دامنه کت جلو گرد</li>
                            <li>برش محصول: رگولار</li>
                            <li><a href="http:google.cm">جنس پارچه: 50 درصد پشم، 50 درصد پلی‌استر </a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <div class="tab1  tab-content active w-full">
            <div class="slider flex items-center relative mt-[1.5rem]  w-full">
                <div class="swiper-button-next-product-simulator">
                    <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                              fill="#777777"/>
                    </svg>
                </div>
                <div class="swiper w-full swiper-gallery-simulator">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <video id="myVideo" class="w-full" autoplay loop muted playsinline>
                                <source src="https://media.ecut.shop/product/PJA/PJA1156130/PJA1156130.MP4"
                                        type="video/mp4">
                            </video>
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-04.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-05.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-06.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156130/1000/single-coat-07.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev-product-simulator">
                    <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                              fill="#777777"/>
                    </svg>
                </div>
            </div>
        </div>
        <div style="display: none" class="tab2  tab-content w-full">
            <div class="slider flex items-center relative mt-[1.5rem]  w-full">
                <div class="swiper-button-next-product-simulator">
                    <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                              fill="#777777"/>
                    </svg>
                </div>
                <div class="swiper w-full swiper-gallery-simulator">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-04.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-05.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-06.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156129/1000/single-coat-07.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev-product-simulator">
                    <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                              fill="#777777"/>
                    </svg>
                </div>
            </div>
        </div>
        <div style="display: none" class="tab3  tab-content w-full">
            <div class="slider flex items-center relative mt-[1.5rem]  w-full">
                <div class="swiper-button-next-product-simulator">
                    <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                              fill="#777777"/>
                    </svg>
                </div>
                <div class="swiper w-full swiper-gallery-simulator">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-04.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-05.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-06.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156128/1000/single-coat-07.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev-product-simulator">
                    <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                              fill="#777777"/>
                    </svg>
                </div>
            </div>
        </div>
        <div style="display: none" class="tab4  tab-content w-full">
            <div class="slider flex items-center relative mt-[1.5rem]  w-full">
                <div class="swiper-button-next-product-simulator">
                    <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                              fill="#777777"/>
                    </svg>
                </div>
                <div class="swiper w-full swiper-gallery-simulator">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-04.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-05.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-06.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156127/1000/single-coat-07.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev-product-simulator">
                    <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                              fill="#777777"/>
                    </svg>
                </div>
            </div>
        </div>
        <div style="display: none" class="tab5  tab-content w-full">
            <div class="slider flex items-center relative mt-[1.5rem]  w-full">
                <div class="swiper-button-next-product-simulator">
                    <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                              fill="#777777"/>
                    </svg>
                </div>
                <div class="swiper w-full swiper-gallery-simulator">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-01.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-02.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-03.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-04.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-05.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-06.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                 src="https://media.ecut.shop/product/PJA/PJA1156125/1000/single-coat-07.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev-product-simulator">
                    <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                              fill="#777777"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

<?php include 'script-header.php'; ?>

<script>
    function showTab(tabId) {
        $('.s-single-product .tab-content  , .p-modal-gallery-product .tab-content').hide();
        $('.' + tabId).show();

        $('.s-single-product .tab-buttons button').removeClass('active');
        $(event.target).addClass('active');
    }

    const swiper1 = new Swiper("#swiper-scroller1", {
        direction: "vertical",
        slidesPerView: 1,
        mousewheel: true,
        speed: 900,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    const swiper2 = new Swiper("#swiper-scroller2", {
        direction: "vertical",
        slidesPerView: 1,
        mousewheel: true,
        speed: 900,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    const swiper3 = new Swiper("#swiper-scroller3", {
        direction: "vertical",
        slidesPerView: 1,
        mousewheel: true,
        speed: 900,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });
    const swiper4 = new Swiper("#swiper-scroller4", {
        direction: "vertical",
        slidesPerView: 1,
        mousewheel: true,
        speed: 900,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    const swiper5 = new Swiper("#swiper-scroller5", {
        direction: "vertical",
        slidesPerView: 1,
        mousewheel: true,
        speed: 900,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    $(document).ready(function () {
        // $('.acc-container .acc:nth-child(1) .acc-head').addClass('active');
        // $('.acc-container .acc:nth-child(1) .acc-content').slideDown();
        $('.p-single-product .acc-head').on('click', function () {
            if ($(this).hasClass('active')) {
                $(this).siblings('.p-single-product .acc-content').slideUp();
                $(this).removeClass('active');
            } else {
                $('.p-single-product .acc-content').slideUp();
                $('.p-single-product .acc-head').removeClass('active');
                $(this).siblings('.p-single-product .acc-content').slideToggle();
                $(this).toggleClass('active');
            }
        });
    });

    var swiperProduct = new Swiper(".swiperProduct", {
        pagination: {
            el: ".swiper-pagination",
        },
        slidesPerView: 4,
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            900: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        },

        spaceBetween: 18,
        navigation: {
            nextEl: ".swiper-button-next-product",
            prevEl: ".swiper-button-prev-product",
        },
    });
    var swiperProduct2 = new Swiper(".swiperProduct2", {
        pagination: {
            el: ".swiper-pagination",
        },
        slidesPerView: 4,
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            900: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        },

        spaceBetween: 18,
        navigation: {
            nextEl: ".swiper-button-next-product2",
            prevEl: ".swiper-button-prev-product2",
        },
    });


    // box-share
    $(document).ready(function () {
        $('.p-box-share').hide()
        $('.btn-share').click(function () {
            $(".p-box-share").fadeIn()
        })
        $('.close-share').click(function () {
            $(".p-box-share").fadeOut()
        })
    })
    // box-share
    function copyLink(link) {
        navigator.clipboard.writeText(link).then(function () {
            console.log('لینک کپی شد: ' + link)
        }, function (err) {
            console.error('خطا در کپی لینک: ', err);
        });
    }




    $(document).ready(function () {
        $('.btn-ruler').click(function () {
            $('.modal-ruler').fadeIn({queue: false, duration: 'normal'})
        })
        $('.btn-close-modal-ruler').click(function () {
            $('.modal-ruler').fadeOut({queue: false, duration: 'normal'})
        })
        setTimeout(function () {
            $('.box-ruler').fadeIn({queue: false, duration: 'normal'});
        }, 2000);
    })


    $(document).ready(function () {
        $(".btn-metter").click(function () {
            $(".open_menu4").toggleClass("opened");
            $(".btn-metter").toggleClass("toOpened");
        });
    });


    const options = {
        Images: {
            initialSize: "cover",
        },
    };
    $(document).ready(function () {


        Fancybox.bind("[data-fancybox]", {
            buttons: [
                "zoom",
                "close"
            ],
            video: {
                autoplay: true,
                loop: true
            }
        });

    });

    var x = document.getElementById("myVideo");
    $(document).ready(function () {
        $('.btn-play-video').click(function () {
            x.play();
            $('.cover-video').fadeOut()
        })
    })

    function playVid() {

    }

    function pauseVid() {
        x.pause();
    }

    var swiperGallerySimulator = new Swiper(".swiper-gallery-simulator", {
        navigation: {
            nextEl: ".swiper-button-next-product-simulator",
            prevEl: ".swiper-button-prev-product-simulator",
        },
    });

    $(document).ready(function () {
        $('.copy-link').click(function (e) {
            e.preventDefault();

            navigator.clipboard.writeText($(this).text())
                .then(() => {
                    $('.copy-message')
                        .fadeIn()
                        .delay(3000)
                        .fadeOut();
                })
                .catch(err => {
                    console.error('خطا در کپی کردن متن:', err);
                });
        });
    });

    var swiper = new Swiper(".swiper-two-cols", {
        slidesPerView: 2,
        grid: {
            rows: 2,
        },
        spaceBetween: 12,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next-style",
            prevEl: ".swiper-button-prev-style",
        },
    });
</script>

</body>
</html>

