<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>فروشگاه ها  </title>
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


<div class="store-page  mt-[7rem] max-[900px]:mt-[5rem] mb-[1rem] w-full">
    <div class="c-container-custom px-[1rem]">
        <div class="breadcrum max-[800px]:px-[12px]">
            <a href="#">ایکات</a> / <a href="#">فروشگاه ها</a></span>
        </div>
    </div>

    <div class="w-full max-[900px]:hidden mt-[1rem] relative z-20">
        <div class="swiper w-full h-full swiper-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img alt="" class="w-full"
                                               src="assets/images/store-desktop/banner/saadat-01.jpg"></div>
                <div class="swiper-slide"><img alt="" class="w-full"
                                               src="assets/images/store-desktop/banner/saadat-01.jpg"></div>
                <div class="swiper-slide"><img alt="" class="w-full"
                                               src="assets/images/store-desktop/banner/saadat-01.jpg"></div>
                <div class="swiper-slide"><img alt="" class="w-full"
                                               src="assets/images/store-desktop/banner/saadat-01.jpg"></div>
                <div class="swiper-slide"><img alt="" class="w-full"
                                               src="assets/images/store-desktop/banner/saadat-01.jpg"></div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="w-full min-[901px]:hidden mt-[1rem] relative z-20">
        <div class="swiper w-full h-full swiper-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img style="height: auto !important;" alt="" class="w-full"
                                               src="assets/images/store-mobile/12.jpg"></div>
                <div class="swiper-slide"><img style="height: auto !important;" alt="" class="w-full"
                                               src="assets/images/store-mobile/13.jpg"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="c-container-custom">
        <div class="w-full max-[800px]:px-[12px] detail-text mt-[2.5rem] flex flex-col items-center">
            <h2 class="text-[26px] max-[800px]:text-[20px] font-bold">فروشگاه‌های پوشاک ایکات</h2>
            <p class="leading-[26px] text-black text-[15px] w-[60%] mt-[1.5rem] text-center max-[800px]:w-full max-[800px]:text-[13px]">
                فروشگاه‌های ایکات، با ارائه‌ی مجموعه‌ای از جدیدترین و با کیفیت‌ترین پوشاک مردانه و اکسسوری‌های روز، تجربه‌ای
                بی‌نظیر از خرید را برای شما فراهم می‌کنند.
                <br>
                شعب&nbsp;ایکات در&nbsp;سراسر کشور&nbsp;آماده‌ی خدمت‌ رسانی به شما هستند تا با محصولات متنوع و قیمت‌های
                مناسب، ظاهری جذاب و متمایز را تجربه کنید.
                <br>
                در فروشگاه‌های ایکات، شما می‌توانید از بین انواع لباس‌های مردانه و اکسسوری‌های مختلف انتخاب کنید. از کت و&nbsp;شلوارهای
                شیک و کلاسیک گرفته تا پوشاک کژوال و راحتی، همگی با بهترین کیفیت و جدیدترین طرح‌ها موجود&nbsp;هستند.&nbsp;
                <br>

                <b>
                    خرید از ایکات تنها یک خرید نیست، بلکه یک تجربه‌ی منحصر به ‌فرد&nbsp;است.
                </b>
            </p>
        </div>
        <!-- Slider main container -->
        <div class="c-container">
            <div class="w-full tabs-store mt-[3rem] max-[800px]:px-[12px]">
                <section class="wrapper  w-full">
                    <ul class="tabs w-full flex items-center justify-center gap-[6px]">
                        <li class="min-[901px]:hidden opacity-0 li-tabs invisible"></li>
                        <li class="bg-[#646464] li-tabs active rounded-[5px]"><span>فروشگاه میرداماد</span></li>
                        <li class="bg-[#646464] li-tabs rounded-[5px]"><span>فروشگاه پاسداران</span></li>
                        <li class="bg-[#646464] li-tabs rounded-[5px]"><span>فروشگاه سعادت آباد</span></li>
                        <li class="bg-[#646464] li-tabs rounded-[5px]"><span>فروشگاه  اکسکلوسیو</span></li>
                        <li class="bg-[#646464] li-tabs rounded-[5px]"><span>فروشگاه رشت</span></li>
                        <li class="bg-[#646464] li-tabs rounded-[5px]"><span>فروشگاه شیراز</span></li>
                        <li class="bg-[#646464] li-tabs rounded-[5px]"><span>فروشگاه کرمان</span></li>
                        <li class="bg-[#646464] li-tabs rounded-[5px]"><span>فروشگاه بوشهر</span></li>
                        <li class="bg-[#646464] li-tabs rounded-[5px]"><span>فروشگاه بندر عباس</span></li>

                    </ul>

                    <ul class="tab__content">
                        <li class="min-[901px]:hidden li-tabs"></li>
                        <li class="active">
                            <div class="content__wrapper">
                                <div class="w-full mt-[3rem] mb-[2rem] title flex justify-center">
                                    <h2 class="text-[18px]  px-[1rem]">فروشگاه میرداماد</h2>
                                </div>
                                <div class="databoxswiper w-full">
                                    <div class="databoxswipers">
                                        <div class="w-1/2 max-[900px]:w-full databoxswiperrt">
                                            <img style="height: 390px !important;" src="assets/images/map.png">
                                        </div>
                                        <div class="w-1/2 max-[900px]:w-full databoxswiperlf detailContact">
                                            <div class="dataltbox">
                                                <div class="textswipbox">

                                                    <p class="item text-[14px]"><strong>نشانی: </strong>تهران، میرداماد، نبش
                                                        کازرون
                                                        جنوبی، ساختمان ایکات،
                                                        پلاک 202</p>
                                                    <p class="item text-[14px]"><strong>ساعات کاری: </strong> 9:30 الی 21:30
                                                    </p>
                                                    <p class="item text-[14px]"><strong>تلفن: </strong> 0202 9122-021 داخلی
                                                        200</p>
                                                    <p class="item text-[14px]">ساعت بازگشایی روزهای تعطیل 10 صبح
                                                        می‌باشد</p>
                                                </div>
                                                <div class="Routing">
                                                    <span>مسیریابی</span>
                                                    <ul>
                                                        <li><a href="#"><i class="balad"></i></a></li>
                                                        <li><a href="#"><i class="neshan"></i></a></li>
                                                        <li><a href="#"><i class="waze"></i></a></li>
                                                        <li><a href="#"><i class="gm"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabswipslide">
                                        <div class="flex items-center justify-center gap-[16px] relative custom-slider">
                                            <div class="swiper-button-next-c ">
                                                <svg style="transform: rotate(180deg)" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                            <div dir="rtl" class="swiper swiper-fancy w-full">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">

                                                            <a data-fancybox="gallery-1"
                                                               data-src="assets/images/store-desktop/mirdamad/00.jpg"
                                                            >
                                                                <img src="assets/images/store-desktop/mirdamad/00.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-1"
                                                               href="assets/images/store-desktop/mirdamad/01.jpg">
                                                                <img src="assets/images/store-desktop/mirdamad/01.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-1"
                                                               href="assets/images/store-desktop/mirdamad/02.jpg">
                                                                <img src="assets/images/store-desktop/mirdamad/02.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-1"
                                                               href="assets/images/store-desktop/mirdamad/03.jpg">
                                                                <img src="assets/images/store-desktop/mirdamad/03.jpg">

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-button-prev-c">
                                                <svg class="rotate-180" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="content__wrapper">
                                <div class="w-full mt-[3rem] mb-[2rem] title flex justify-center">
                                    <h2 class="text-[18px]  px-[1rem]">فروشگاه پاسداران</h2>
                                </div>
                                <div class="databoxswiper w-full">
                                    <div class="databoxswipers">
                                        <div class="w-1/2 databoxswiperrt">
                                            <img style="height: 390px !important;" src="assets/images/map.png">
                                        </div>
                                        <div class="w-1/2 databoxswiperlf detailContact">
                                            <div class="dataltbox">
                                                <div class="textswipbox">
                                                    <p class="item text-[14px]"><strong>نشانی: </strong>تهران، میرداماد، نبش
                                                        کازرون
                                                        جنوبی، ساختمان ایکات،
                                                        پلاک 202</p>
                                                    <p class="item text-[14px]"><strong>ساعات کاری: </strong> 9:30 الی 21:30
                                                    </p>
                                                    <p class="item text-[14px]"><strong>تلفن: </strong> 0202 9122-021 داخلی
                                                        200</p>
                                                    <p class="item text-[14px]">ساعت بازگشایی روزهای تعطیل 10 صبح
                                                        می‌باشد</p>
                                                </div>
                                                <div class="Routing">
                                                    <span>مسیریابی</span>
                                                    <ul>
                                                        <li><a href="#"><i class="balad"></i></a></li>
                                                        <li><a href="#"><i class="neshan"></i></a></li>
                                                        <li><a href="#"><i class="waze"></i></a></li>
                                                        <li><a href="#"><i class="gm"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabswipslide">
                                        <div class="flex items-center justify-center gap-[16px] relative custom-slider">
                                            <div class="swiper-button-next-c">
                                                <svg style="transform: rotate(180deg)" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                            <div dir="rtl" class="swiper swiper-fancy w-full">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-2"
                                                               href="assets/images/store-desktop/pasdaran/01.jpg">
                                                                <img src="assets/images/store-desktop/pasdaran/01.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-2"
                                                               href="assets/images/store-desktop/pasdaran/02.jpg">
                                                                <img src="assets/images/store-desktop/pasdaran/02.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-2"
                                                               href="assets/images/store-desktop/pasdaran/03.jpg">
                                                                <img src="assets/images/store-desktop/pasdaran/03.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-button-prev-c">
                                                <svg class="rotate-180" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="content__wrapper">
                                <div class="w-full mt-[3rem] mb-[2rem] title flex justify-center">
                                    <h2 class="text-[18px]  px-[1rem]">فروشگاه سعادت آباد </h2>
                                </div>
                                <div class="databoxswiper w-full">
                                    <div class="databoxswipers">
                                        <div class="w-1/2 databoxswiperrt">
                                            <img style="height: 390px !important;" src="assets/images/map.png">
                                        </div>
                                        <div class="w-1/2 databoxswiperlf detailContact">
                                            <div class="dataltbox">
                                                <div class="textswipbox">
                                                    <p class="item text-[14px]"><strong>نشانی: </strong>تهران، میرداماد، نبش
                                                        کازرون
                                                        جنوبی، ساختمان ایکات،
                                                        پلاک 202</p>
                                                    <p class="item text-[14px]"><strong>ساعات کاری: </strong> 9:30 الی 21:30
                                                    </p>
                                                    <p class="item text-[14px]"><strong>تلفن: </strong> 0202 9122-021 داخلی
                                                        200</p>
                                                    <p class="item text-[14px]">ساعت بازگشایی روزهای تعطیل 10 صبح
                                                        می‌باشد</p>
                                                </div>
                                                <div class="Routing">
                                                    <span>مسیریابی</span>
                                                    <ul>
                                                        <li><a href="#"><i class="balad"></i></a></li>
                                                        <li><a href="#"><i class="neshan"></i></a></li>
                                                        <li><a href="#"><i class="waze"></i></a></li>
                                                        <li><a href="#"><i class="gm"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabswipslide">
                                        <div class="flex items-center justify-center gap-[16px] relative custom-slider">
                                            <div class="swiper-button-next-c">
                                                <svg style="transform: rotate(180deg)" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                            <div dir="rtl" class="swiper swiper-fancy w-full">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-3"
                                                               href="assets/images/store-desktop/saedatabad/01.jpg">
                                                                <img src="assets/images/store-desktop/saedatabad/01.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-3"
                                                               href="assets/images/store-desktop/saedatabad/00.jpg">
                                                                <img src="assets/images/store-desktop/saedatabad/00.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-3"
                                                               href="assets/images/store-desktop/saedatabad/03.jpg">
                                                                <img src="assets/images/store-desktop/saedatabad/03.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-3"
                                                               href="assets/images/store-desktop/saedatabad/04.jpg">
                                                                <img src="assets/images/store-desktop/saedatabad/04.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-3"
                                                               href="assets/images/store-desktop/saedatabad/05.jpg">
                                                                <img src="assets/images/store-desktop/saedatabad/05.jpg">
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-button-prev-c">
                                                <svg class="rotate-180" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="content__wrapper">
                                <div class="w-full mt-[3rem] mb-[2rem] title flex justify-center">
                                    <h2 class="text-[18px]  px-[1rem]">فروشگاه اکسکلوسیو </h2>
                                </div>
                                <div class="databoxswiper w-full">
                                    <div class="databoxswipers">
                                        <div class="w-1/2 databoxswiperrt">
                                            <img style="height: 390px !important;" src="assets/images/map.png">
                                        </div>
                                        <div class="w-1/2 databoxswiperlf detailContact">
                                            <div class="dataltbox">
                                                <div class="textswipbox">
                                                    <p class="item text-[14px]"><strong>نشانی: </strong>تهران، میرداماد، نبش
                                                        کازرون
                                                        جنوبی، ساختمان ایکات،
                                                        پلاک 202</p>
                                                    <p class="item text-[14px]"><strong>ساعات کاری: </strong> 9:30 الی 21:30
                                                    </p>
                                                    <p class="item text-[14px]"><strong>تلفن: </strong> 0202 9122-021 داخلی
                                                        200</p>
                                                    <p class="item text-[14px]">ساعت بازگشایی روزهای تعطیل 10 صبح
                                                        می‌باشد</p>
                                                </div>
                                                <div class="Routing">
                                                    <span>مسیریابی</span>
                                                    <ul>
                                                        <li><a href="#"><i class="balad"></i></a></li>
                                                        <li><a href="#"><i class="neshan"></i></a></li>
                                                        <li><a href="#"><i class="waze"></i></a></li>
                                                        <li><a href="#"><i class="gm"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabswipslide">
                                        <div class="flex items-center justify-center gap-[16px] relative custom-slider">
                                            <div class="swiper-button-next-c">
                                                <svg style="transform: rotate(180deg)" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                            <div dir="rtl" class="swiper swiper-fancy w-full">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-4"
                                                               href="assets/images/store2.png">
                                                                <img height="550" src="assets/images/store2.png">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-4"
                                                               href="assets/images/store_gallery_10_7176217.jpg">
                                                                <img height="550"
                                                                     src="assets/images/store_gallery_10_7176217.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-4"
                                                               href="assets/images/store_gallery_10.jpg">
                                                                <img height="550" src="assets/images/store_gallery_10.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-4"
                                                               href="assets/images/store_gallery_9.jpg">
                                                                <img height="550" src="assets/images/store_gallery_9.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-button-prev-c">
                                                <svg class="rotate-180" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="content__wrapper">
                                <div class="w-full mt-[3rem] mb-[2rem] title flex justify-center">
                                    <h2 class="text-[18px]  px-[1rem]">فروشگاه رشت </h2>
                                </div>
                                <div class="databoxswiper w-full">
                                    <div class="databoxswipers">
                                        <div class="w-1/2 databoxswiperrt">
                                            <img style="height: 390px !important;" src="assets/images/map.png">
                                        </div>
                                        <div class="w-1/2 databoxswiperlf detailContact">
                                            <div class="dataltbox">
                                                <div class="textswipbox">

                                                    <p class="item text-[14px]"><strong>نشانی: </strong>تهران، میرداماد، نبش
                                                        کازرون
                                                        جنوبی، ساختمان ایکات،
                                                        پلاک 202</p>
                                                    <p class="item text-[14px]"><strong>ساعات کاری: </strong> 9:30 الی 21:30
                                                    </p>
                                                    <p class="item text-[14px]"><strong>تلفن: </strong> 0202 9122-021 داخلی
                                                        200</p>
                                                    <p class="item text-[14px]">ساعت بازگشایی روزهای تعطیل 10 صبح
                                                        می‌باشد</p>
                                                </div>
                                                <div class="Routing">
                                                    <span>مسیریابی</span>
                                                    <ul>
                                                        <li><a href="#"><i class="balad"></i></a></li>
                                                        <li><a href="#"><i class="neshan"></i></a></li>
                                                        <li><a href="#"><i class="waze"></i></a></li>
                                                        <li><a href="#"><i class="gm"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabswipslide">
                                        <div class="flex items-center justify-center gap-[16px] relative custom-slider">
                                            <div class="swiper-button-next-c">
                                                <svg style="transform: rotate(180deg)" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                            <div dir="rtl" class="swiper swiper-fancy w-full">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-5"
                                                               href="assets/images/store2.png">
                                                                <img height="550" src="assets/images/store2.png">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-5"
                                                               href="assets/images/store_gallery_10_7176217.jpg">
                                                                <img height="550"
                                                                     src="assets/images/store_gallery_10_7176217.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-5"
                                                               href="assets/images/store_gallery_10.jpg">
                                                                <img height="550" src="assets/images/store_gallery_10.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-5"
                                                               href="assets/images/store_gallery_9.jpg">
                                                                <img height="550" src="assets/images/store_gallery_9.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-button-prev-c">
                                                <svg class="rotate-180" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="content__wrapper">
                                <div class="w-full mt-[3rem] mb-[2rem] title flex justify-center">
                                    <h2 class="text-[18px]  px-[1rem]">فروشگاه شیراز </h2>
                                </div>
                                <div class="databoxswiper w-full">
                                    <div class="databoxswipers">
                                        <div class="w-1/2 databoxswiperrt">
                                            <img style="height: 390px !important;" src="assets/images/map.png">
                                        </div>
                                        <div class="w-1/2 databoxswiperlf detailContact">
                                            <div class="dataltbox">
                                                <div class="textswipbox">
                                                    <p class="item text-[14px]"><strong>نشانی: </strong>تهران، میرداماد، نبش
                                                        کازرون
                                                        جنوبی، ساختمان ایکات،
                                                        پلاک 202</p>
                                                    <p class="item text-[14px]"><strong>ساعات کاری: </strong> 9:30 الی 21:30
                                                    </p>
                                                    <p class="item text-[14px]"><strong>تلفن: </strong> 0202 9122-021 داخلی
                                                        200</p>
                                                    <p class="item text-[14px]">ساعت بازگشایی روزهای تعطیل 10 صبح
                                                        می‌باشد</p>
                                                </div>
                                                <div class="Routing">
                                                    <span>مسیریابی</span>
                                                    <ul>
                                                        <li><a href="#"><i class="balad"></i></a></li>
                                                        <li><a href="#"><i class="neshan"></i></a></li>
                                                        <li><a href="#"><i class="waze"></i></a></li>
                                                        <li><a href="#"><i class="gm"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabswipslide">
                                        <div class="flex items-center justify-center gap-[16px] relative custom-slider">
                                            <div class="swiper-button-next-c">
                                                <svg style="transform: rotate(180deg)" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                            <div dir="rtl" class="swiper swiper-fancy w-full">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-6"
                                                               href="assets/images/store2.png">
                                                                <img height="550" src="assets/images/store2.png">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-6"
                                                               href="assets/images/store_gallery_10_7176217.jpg">
                                                                <img height="550"
                                                                     src="assets/images/store_gallery_10_7176217.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-6"
                                                               href="assets/images/store_gallery_10.jpg">
                                                                <img height="550" src="assets/images/store_gallery_10.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-6"
                                                               href="assets/images/store_gallery_9.jpg">
                                                                <img height="550" src="assets/images/store_gallery_9.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-button-prev-c">
                                                <svg class="rotate-180" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="content__wrapper">
                                <div class="w-full mt-[3rem] mb-[2rem] title flex justify-center">
                                    <h2 class="text-[18px]  px-[1rem]">فروشگاه کرمان </h2>
                                </div>
                                <div class="databoxswiper w-full">
                                    <div class="databoxswipers">
                                        <div class="w-1/2 databoxswiperrt">
                                            <img style="height: 390px !important;" src="assets/images/map.png">
                                        </div>
                                        <div class="w-1/2 databoxswiperlf detailContact">
                                            <div class="dataltbox">
                                                <div class="textswipbox">
                                                    <p class="item text-[14px]"><strong>نشانی: </strong>تهران، میرداماد، نبش
                                                        کازرون
                                                        جنوبی، ساختمان ایکات،
                                                        پلاک 202</p>
                                                    <p class="item text-[14px]"><strong>ساعات کاری: </strong> 9:30 الی 21:30
                                                    </p>
                                                    <p class="item text-[14px]"><strong>تلفن: </strong> 0202 9122-021 داخلی
                                                        200</p>
                                                    <p class="item text-[14px]">ساعت بازگشایی روزهای تعطیل 10 صبح
                                                        می‌باشد</p>
                                                </div>
                                                <div class="Routing">
                                                    <span>مسیریابی</span>
                                                    <ul>
                                                        <li><a href="#"><i class="balad"></i></a></li>
                                                        <li><a href="#"><i class="neshan"></i></a></li>
                                                        <li><a href="#"><i class="waze"></i></a></li>
                                                        <li><a href="#"><i class="gm"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabswipslide">
                                        <div class="flex items-center justify-center gap-[16px] relative custom-slider">
                                            <div class="swiper-button-next-c">
                                                <svg style="transform: rotate(180deg)" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                            <div dir="rtl" class="swiper swiper-fancy w-full">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-7"
                                                               href="assets/images/store2.png">
                                                                <img height="550" src="assets/images/store2.png">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-7"
                                                               href="assets/images/store_gallery_10_7176217.jpg">
                                                                <img height="550"
                                                                     src="assets/images/store_gallery_10_7176217.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-7"
                                                               href="assets/images/store_gallery_10.jpg">
                                                                <img height="550" src="assets/images/store_gallery_10.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-7"
                                                               href="assets/images/store_gallery_9.jpg">
                                                                <img height="550" src="assets/images/store_gallery_9.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-button-prev-c">
                                                <svg class="rotate-180" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="content__wrapper">
                                <div class="w-full mt-[3rem] mb-[2rem] title flex justify-center">
                                    <h2 class="text-[18px]  px-[1rem]">فروشگاه بوشهر </h2>
                                </div>
                                <div class="databoxswiper w-full">
                                    <div class="databoxswipers">
                                        <div class="w-1/2 databoxswiperrt">
                                            <img style="height: 390px !important;" src="assets/images/map.png">
                                        </div>
                                        <div class="w-1/2 databoxswiperlf detailContact">
                                            <div class="dataltbox">
                                                <div class="textswipbox">
                                                    <p class="item text-[14px]"><strong>نشانی: </strong>تهران، میرداماد، نبش
                                                        کازرون
                                                        جنوبی، ساختمان ایکات،
                                                        پلاک 202</p>
                                                    <p class="item text-[14px]"><strong>ساعات کاری: </strong> 9:30 الی 21:30
                                                    </p>
                                                    <p class="item text-[14px]"><strong>تلفن: </strong> 0202 9122-021 داخلی
                                                        200</p>
                                                    <p class="item text-[14px]">ساعت بازگشایی روزهای تعطیل 10 صبح
                                                        می‌باشد</p>
                                                </div>
                                                <div class="Routing">
                                                    <span>مسیریابی</span>
                                                    <ul>
                                                        <li><a href="#"><i class="balad"></i></a></li>
                                                        <li><a href="#"><i class="neshan"></i></a></li>
                                                        <li><a href="#"><i class="waze"></i></a></li>
                                                        <li><a href="#"><i class="gm"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabswipslide">
                                        <div class="flex items-center justify-center gap-[16px] relative custom-slider">
                                            <div class="swiper-button-next-c">
                                                <svg style="transform: rotate(180deg)" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                            <div dir="rtl" class="swiper swiper-fancy w-full">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-8"
                                                               href="assets/images/store2.png">
                                                                <img height="550" src="assets/images/store2.png">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-8"
                                                               href="assets/images/store_gallery_10_7176217.jpg">
                                                                <img height="550"
                                                                     src="assets/images/store_gallery_10_7176217.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-8"
                                                               href="assets/images/store_gallery_10.jpg">
                                                                <img height="550" src="assets/images/store_gallery_10.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-8"
                                                               href="assets/images/store_gallery_9.jpg">
                                                                <img height="550" src="assets/images/store_gallery_9.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-button-prev-c">
                                                <svg class="rotate-180" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="content__wrapper">
                                <div class="w-full mt-[3rem] mb-[2rem] title flex justify-center">
                                    <h2 class="text-[18px]  px-[1rem]">فروشگاه بندر عباس </h2>
                                </div>
                                <div class="databoxswiper w-full">
                                    <div class="databoxswipers">
                                        <div class="w-1/2 databoxswiperrt">
                                            <img style="height: 390px !important;" src="assets/images/map.png">
                                        </div>
                                        <div class="w-1/2 databoxswiperlf detailContact">
                                            <div class="dataltbox">
                                                <div class="textswipbox">
                                                    <p class="item text-[14px]"><strong>نشانی: </strong>تهران، میرداماد، نبش
                                                        کازرون
                                                        جنوبی، ساختمان ایکات،
                                                        پلاک 202</p>
                                                    <p class="item text-[14px]"><strong>ساعات کاری: </strong> 9:30 الی 21:30
                                                    </p>
                                                    <p class="item text-[14px]"><strong>تلفن: </strong> 0202 9122-021 داخلی
                                                        200</p>
                                                    <p class="item text-[14px]">ساعت بازگشایی روزهای تعطیل 10 صبح
                                                        می‌باشد</p>
                                                </div>
                                                <div class="Routing">
                                                    <span>مسیریابی</span>
                                                    <ul>
                                                        <li><a href="#"><i class="balad"></i></a></li>
                                                        <li><a href="#"><i class="neshan"></i></a></li>
                                                        <li><a href="#"><i class="waze"></i></a></li>
                                                        <li><a href="#"><i class="gm"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabswipslide">
                                        <div class="flex items-center justify-center gap-[16px] relative custom-slider">
                                            <div class="swiper-button-next-c">
                                                <svg style="transform: rotate(180deg)" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                            <div dir="rtl" class="swiper swiper-fancy w-full">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-8"
                                                               href="assets/images/store2.png">
                                                                <img height="550" src="assets/images/store2.png">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-8"
                                                               href="assets/images/store_gallery_10_7176217.jpg">
                                                                <img height="550"
                                                                     src="assets/images/store_gallery_10_7176217.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-8"
                                                               href="assets/images/store_gallery_10.jpg">
                                                                <img height="550" src="assets/images/store_gallery_10.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sliderbox">
                                                            <a data-index="0" data-fancybox="gallery-8"
                                                               href="assets/images/store_gallery_9.jpg">
                                                                <img height="550" src="assets/images/store_gallery_9.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-button-prev-c">
                                                <svg class="rotate-180" fill="#fff" width="40" height="40"
                                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                     enable-background="new 0 0 24 24">
                                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </section>

            </div>
        </div>
    </div>
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
</div>


<?php include 'script-header.php'; ?>

<script>
    var swiperBanner = new Swiper(".swiper-top", {
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: false,
        loop: false,
        speed: 1000,
    });
    var swiperfancy = new Swiper(".swiper-fancy", {
        pagination: {
            el: ".swiper-pagination",
        },
        grabCursor: true,
        // effect: "creative",
        // creativeEffect: {
        //     prev: {
        //         shadow: true,
        //         translate: [0, 0, -400],
        //     },
        //     next: {
        //         translate: ["100%", 0, 0],
        //     },
        // },
        navigation: {
            nextEl: ".swiper-button-next-c",
            prevEl: ".swiper-button-prev-c",
        },

    });
</script>
<script>
    $(document).ready(function () {

        // Variables
        var clickedTab = $(".tabs > .active");
        var tabWrapper = $(".tab__content");
        var activeTab = tabWrapper.find(".active");
        var activeTabHeight = activeTab.outerHeight();

        // Show tab on page load
        activeTab.show();

        // Set height of wrapper on page load
        tabWrapper.height(activeTabHeight);

        $(".tabs > li").on("click", function () {

            // Remove class from active tab
            $(".tabs > li").removeClass("active");

            // Add class active to clicked tab
            $(this).addClass("active");

            // Update clickedTab variable
            clickedTab = $(".tabs .active");

            // fade out active tab
            activeTab.fadeOut(100, function () {

                // Remove active class all tabs
                $(".tab__content > li").removeClass("active");

                // Get index of clicked tab
                var clickedTabIndex = clickedTab.index();

                // Add class active to corresponding tab
                $(".tab__content > li").eq(clickedTabIndex).addClass("active");

                // update new active tab
                activeTab = $(".tab__content > .active");

                // Update variable
                activeTabHeight = activeTab.outerHeight();

                // Animate height of wrapper to new tab height
                tabWrapper.stop().delay(10).animate({
                    height: activeTabHeight
                }, 500, function () {

                    // Fade in active tab
                    activeTab.delay(10).fadeIn(100);

                });
            });
        });

        // Variables
        var colorButton = $(".colors li");

        colorButton.on("click", function () {

            // Remove class from currently active button
            $(".colors > li").removeClass("active-color");

            // Add class active to clicked button
            $(this).addClass("active-color");

            // Get background color of clicked
            var newColor = $(this).attr("data-color");

            // Change background of everything with class .bg-color
            $(".bg-color").css("background-color", newColor);

            // Change color of everything with class .text-color
            $(".text-color").css("color", newColor);
        });
    });
    const options = {
        Images: {
            initialSize: "cover",
        },
    };
</script>
</body>
</html>

