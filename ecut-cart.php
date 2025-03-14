<?php include 'header-desktop.php'; ?>
<?php include 'header-mobile.php'; ?>
<?php include 'loginModal.php'; ?>

<!--box-share-->


<section class="s-single-product s-single-product-ecut-cart mt-[55px]">
    <div class="p-single-product max-[900px]:hidden w-full h-[100vh] flex items-start">

        <div style="height: 95vh !important;" class="start bg-[#f2f2f2] pt-[1rem] px-[1rem] h-full overflow-y-auto w-[30%]">
            <div class="w-full flex flex-col max-[800px]:px-0 min-[1300px]:px-[0.5rem]  min-[1800px]:px-[1rem]">
                <div class="title-product mt-[2rem] w-full flex items-center justify-between">
                    <h2 class="text-[20px] en-num font-bold">کت و شلوار مدل PSU1153332</h2>
                    <div class="icons flex items-center gap-[8px]">

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
                <div class="w-full border-[1px] py-[2rem] px-[12px] border-[#ccc] rounded-[8px] my-[2rem] flex items-center justify-between">
                    <div class="item flex items-center gap-[12px] justify-center">
                        <span class="text-[13px] text-[#646464] font-bold">مبلغ :</span>
                        <select class="select" name="" id="">
                            <option selected value="">1 میلیون</option>
                            <option value="">10 میلیون</option>
                            <option value="">30 میلیون</option>
                            <option value="">50 میلیون</option>
                            <option value="">100 میلیون</option>
                        </select>
                    </div>
                    <div class="item flex items-center gap-[12px] justify-center">
                        <span class="text-[13px] text-[#646464] font-bold">تعداد :</span>
                        <div class="flex p-count items-center justify-center gap-[8px]">
                            <button class="btn-increase" onclick="changeQuantity(1)">+</button>
                            <input id="quantity-input" onchange="updatePrice()" value="1" type="text" placeholder="" disabled>
                            <button class="btn-decrease" onclick="changeQuantity(-1)">-</button>
                        </div>
                    </div>

                </div>
                <div class="w-full mt-[2rem] prices flex flex-col">
                    <div class="item w-full mt-[1rem] flex items-center justify-between">
                        <span class="text-[#646464]">مبلغ قابل پرداخت نهایی:</span>
                        <strong id="total-price" class="text-[#646464]">147,000,000 ریال</strong>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <button class="btn-base w-full my-[2rem]">افزودن به سبد خرید</button>
            </div>
            <!-- Accordion -->
            <div class="acc-container max-[800px]:px-0">
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
            </div>
        </div>
        <div class="end w-[70%] pt-[1.8rem] h-[90vh] grid grid-cols-1 relative h-full">
            <div class="w-full relative h-full flex items-start justify-center">
                <div class=" absolute bottom-[100px] right-[30px] flex items-center gap-[12px] z-10">
                    <div class="swiper-button-next-single">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                    <div class="swiper-button-prev-single">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                </div>
                <div class="swiper  w-full  h-[92vh]  swiperSingle">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="w-full h-full">
                                <img class="w-full h-full" src="assets/images/banner.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full h-full">
                                <img class="w-full h-full" src="assets/images/banner.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full h-full">
                                <img class="w-full h-full" src="assets/images/banner.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full h-full">
                                <img class="w-full h-full" src="assets/images/banner.png" alt="">
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="p-single-product-mobi p-single-product mt-[5rem] w-full flex flex-col items-center px-[12px] min-[901px]:hidden">
        <div class="single-img w-full">
            <a class="link-video"
               data-fancybox="gallery2"
               data-src="https://media.ecut.shop/product/XTR/XTR1156264/XTR1156264.MP4"
               data-caption="Hello world"
               data-fullscreen="true"
            >
                <video id="myVideo" class="w-full rounded-[5px]" poster="assets/images/4.jpg" autoplay loop muted>
                    <source src="https://media.ecut.shop/product/XTR/XTR1156264/XTR1156264.MP4"
                            type="video/mp4">
                </video>
            </a>
        </div>
        <div class="multi-img w-full grid grid-cols-4 gap-[8px]">
            <a class="w-full"
               data-fancybox="gallery2"
               data-src="assets/images/1.jpg"
            >
                <img class="rounded-[4px] mt-[1rem] w-full h-[95px] object-cover" src="assets/images/1.jpg" alt="">

            </a>
            <a class="w-full"
               data-fancybox="gallery2"
               data-src="assets/images/1.jpg"
            >
                <img class="rounded-[4px] mt-[1rem] w-full h-[95px] object-cover" src="assets/images/1.jpg" alt="">

            </a>
            <a class="w-full"
               data-fancybox="gallery2"
               data-src="assets/images/1.jpg"
            >
                <img class="rounded-[4px] mt-[1rem] w-full h-[95px] object-cover" src="assets/images/1.jpg" alt="">

            </a>
            <a class="w-full"
               data-fancybox="gallery2"
               data-src="assets/images/1.jpg"
            >
                <img class="rounded-[4px] mt-[1rem] w-full h-[95px] object-cover" src="assets/images/1.jpg" alt="">

            </a>
            <a class="w-full"
               data-fancybox="gallery2"
               data-src="assets/images/1.jpg"
            >
                <img class="rounded-[4px] mt-[1rem] w-full h-[95px] object-cover" src="assets/images/1.jpg" alt="">

            </a>
            <a class="w-full"
               data-fancybox="gallery2"
               data-src="assets/images/1.jpg"
            >
                <img class="rounded-[4px] mt-[1rem] w-full h-[95px] object-cover" src="assets/images/1.jpg" alt="">

            </a>
            <a class="w-full"
               data-fancybox="gallery2"
               data-src="assets/images/1.jpg"
            >
                <img class="rounded-[4px] mt-[1rem] w-full h-[95px] object-cover" src="assets/images/1.jpg" alt="">

            </a>
            <a class="w-full"
               data-fancybox="gallery2"
               data-src="assets/images/1.jpg"
            >
                <img class="rounded-[4px] mt-[1rem] w-full h-[95px] object-cover" src="assets/images/1.jpg" alt="">

            </a>
            <a class="w-full"
               data-fancybox="gallery2"
               data-src="assets/images/1.jpg"
            >
                <img class="rounded-[4px] mt-[1rem] w-full h-[95px] object-cover" src="assets/images/1.jpg" alt="">

            </a>
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
        <div class="row-colors  mt-[3rem] flex items-center justify-start w-full gap-[6px]">
            <span class="color w-[16px] h-[16px] bg-stone-500"></span>
            <span class="color w-[16px] h-[16px] bg-red-600"></span>
            <span class="color w-[16px] h-[16px] bg-red-600"></span>
            <span class="color w-[16px] h-[16px] bg-orange-500"></span>
            <span class="color w-[16px] h-[16px] bg-orange-500"></span>
            <span class="color w-[16px] h-[16px] bg-orange-500"></span>
            <span class="color w-[16px] h-[16px] bg-orange-500"></span>
            <span class="color w-[16px] h-[16px] bg-orange-500"></span>
        </div>
        <div class="size mt-[1rem] en-num flex items-center justify-end w-full gap-[6px]">
            <button class="btn-size bg-[#000] text-white w-[35px] h-[22px] rounded-[5px] text-[14px]">50</button>
            <button class="btn-size w-[35px] h-[22px] rounded-[5px] text-[14px]">50</button>
            <button class="btn-size w-[35px] h-[22px] rounded-[5px] text-[14px]">50</button>
            <button class="btn-size w-[35px] h-[22px] rounded-[5px] text-[14px]">50</button>
            <button class="btn-size w-[35px] h-[22px] rounded-[5px] text-[14px]">50</button>
            <button class="btn-size w-[35px] h-[22px] rounded-[5px] text-[14px]">50</button>
            <button class="btn-size w-[35px] h-[22px] rounded-[5px] text-[14px]">50</button>
            <button class="btn-size w-[35px] h-[22px] rounded-[5px] text-[14px]">50</button>
            <button class="btn-size w-[35px] h-[22px] rounded-[5px] text-[14px]">50</button>
        </div>
        <div class="w-full flex items-center justify-start mt-[2rem]">
            <div class="flex flex-col items-center justify-center rounded-[8px] border-[#777] border-[1px] py-[1rem] px-[10px] gap-[6px]">
                <span class="text-[16px]">سایز خود را پیدا کنید </span>
                <button class="btn-metter mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="23" viewBox="0 0 34 23" fill="none">
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
        <button class="btn-base w-full my-[2rem]">افزودن به سبد خرید</button>
        <!-- Accordion -->
        <div class="acc-container">
            <div class="acc">
                <div class="acc-head">
                    <p>مشخصات محصول</p>
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
</section>

<?php include 'footer.php'; ?>
<?php include 'script-header.php'; ?>

<script>

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

    var swiperSingle = new Swiper(".swiperSingle", {
        pagination: {
            el: ".swiper-pagination",
        },
        slidesPerView: 1,
        spaceBetween: 18,
        navigation: {
            nextEl: ".swiper-button-next-single",
            prevEl: ".swiper-button-prev-single",
        },
    });
</script>
</body>
</html>

