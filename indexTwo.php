<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="body">
<div id="overlay" class="hidden fixed inset-0 z-10 bg-black opacity-50"></div>
<!--search-modal-->
<div class="search-modal">
    <div class="p-search-modal w-full px-[1rem] h-full flex flex-col items-center">
        <div class="row-top h-[60px] py-[8px] border-[#7777] border-b-[1px] w-full justify-between flex items-center">
            <div class="buttons h-[80%] w-[5%] max-[600px]:w-[18%] flex items-center justify-center gap-[12px] border-[#7777] border-l-[1px]">
                <button class="btn-close-search">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.9986 0H13.2986H4.69831H1.9983C0.896949 0 0 0.896949 0 2.00136V4.70136V13.3993V16.0017C0 17.1031 0.896949 18 2.00136 18H4.69831H13.3993H15.9986C17.1031 18 18 17.1031 18 15.9986V13.3017V4.70136V2.00136C18 0.896949 17.1031 0 15.9986 0ZM12.6 14.0003L9 10.4003L5.4 14.0003L3.99966 12.6L7.59966 9L3.99966 5.4L5.4 3.99966L9 7.59966L12.6 3.99966L14.0003 5.4L10.4003 9L14.0003 12.6L12.6 14.0003Z"
                              fill="#777777"/>
                    </svg>
                </button>
                <button class="btn-search-product">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.5 0C8.22391 0 9.87721 0.684819 11.0962 1.90381C12.3152 3.12279 13 4.77609 13 6.5C13 8.11 12.41 9.59 11.44 10.73L11.71 11H12.5L17.5 16L16 17.5L11 12.5V11.71L10.73 11.44C9.59 12.41 8.11 13 6.5 13C4.77609 13 3.12279 12.3152 1.90381 11.0962C0.684819 9.87721 0 8.22391 0 6.5C0 4.77609 0.684819 3.12279 1.90381 1.90381C3.12279 0.684819 4.77609 0 6.5 0ZM6.5 2C4 2 2 4 2 6.5C2 9 4 11 6.5 11C9 11 11 9 11 6.5C11 4 9 2 6.5 2Z"
                              fill="#777777"/>
                    </svg>

                </button>
            </div>
            <div class="input flex items-center w-[94%] max-[600px]:w-[81%] px-[8px] h-full">
                <input class="placeholder-gray-300::placeholder w-full" type="text" placeholder="جستجو کنید ...">
            </div>
        </div>
        <div class="row-bottom overflow-y-auto	  px-[2rem] mt-[2rem] w-full flex justify-between items-start">
            <div class="right max-[900px]:hidden  flex flex-col w-[32%]">
                <h4 class="text-[#777777] text-[16px]">جستجو در دسته بندی ها</h4>
                <ul class="mt-[8px]">
                    <li><a class="text-[#777]  text-[15px]" href="#">کلاسیک</a></li>
                    <li><a class="text-[#777] text-[15px]" href="#">کژوال</a></li>
                    <li><a class="text-[#777] text-[15px]" href="#">کفش</a></li>
                    <li><a class="text-[#777] text-[15px]" href="#">کالای فصلی</a></li>
                    <li><a class="text-[#777] text-[15px]" href="#">اکسسوری</a></li>
                    <li><a class="text-[#777] text-[15px]" href="#">ورزشی</a></li>
                </ul>
                <h4 class="text-[#777777] mt-[4rem] text-[16px]">چطور می تونیم کمکتون کنیم؟</h4>
                <ul class="mt-[8px]">
                    <li><a class="text-[#777] text-[15px]" href="#">رهگیری سفارش</a></li>
                    <li><a class="text-[#777] text-[15px]" href="#">استفاده از فرصت طلایی تخفیف</a></li>
                    <li><a class="text-[#777] text-[15px]" href="#">سفارشات من</a></li>
                    <li><a class="text-[#777] text-[15px]" href="#">شرایط مرجوعی کالا</a></li>
                    <li><a class="text-[#777] text-[15px]" href="#">نقشه سایت</a></li>
                    <li><a class="text-[#777] text-[15px]" href="#">گردونه شانس</a></li>
                </ul>

            </div>
            <div class="left w-[65%] max-[900px]:hidden grid grid-cols-4 gap-[1rem] min-[1800px]:gap-[7rem] list-product-search">
                <div class="product-search relative  flex flex-col items-center h-[400px]">
                    <div class="box-one absolute top-0 w-full">
                        <img class="w-full h-[180px]" src="assets/images/imgs2.png">
                        <div class="w-full gap-[12px] flex items-center mt-[12px] justify-center">
                            <h3 class=" text-[14px]">کت تک مدل PSU1153332 </h3>
                            <button class="btn-favorite">
                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                          fill="black"/>
                                </svg>
                            </button>
                        </div>
                        <div class="w-full flex justify-center mt-[8px]">
                            <h4 class="font-bold">165,000,000 ریال</h4>
                        </div>
                    </div>
                    <div class="box-two absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 right-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative h-[320px]">
                            <img id="main-image-1" class="w-full h-full main-image-1" src="assets/images/imgf2.png">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="price h-full text-[16px] text-[#777]  flex items-center justify-center w-full bg-[#ffffff8f] ">
                                    165,000,000 ریال
                                </div>
                            </div>
                        </div>
                        <div class="colors flex mt-[10px] w-full items-center gap-[12px]">
                            <span data-image="assets/images/img1.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img2.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-800"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>


                        </div>
                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-one absolute top-0 w-full">
                        <img class="w-full h-[180px]" src="assets/images/pants-01.jpg">
                        <div class="w-full gap-[12px] flex items-center mt-[12px] justify-center">
                            <h3 class=" text-[14px]">کت تک مدل PSU1153332 </h3>
                            <button class="btn-favorite">
                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                          fill="black"/>
                                </svg>
                            </button>
                        </div>
                        <div class="w-full price flex justify-center mt-[8px]">
                            <h4 class="font-bold">165,000,000 ریال</h4>
                        </div>
                    </div>
                    <div class="box-two absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 right-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative h-[320px]">
                            <img id="main-image-1" class="w-full h-full main-image-1" src="assets/images/pants2.jpg">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="price h-full text-[16px] flex items-center justify-center w-[70%] bg-[#ffffff8f] text-[#777]">
                                    165,000,000 ریال
                                </div>
                                <div class="discount h-full text-[12px] flex items-center justify-center w-[30%] bg-[#fb923c] text-[#fff]">
                                    <span class="text-[12px] text-one-promo text-[#fff]"> تخفیف دار</span>
                                    <span class="text-[16px] text-two-promo text-[#fff]">25%</span>
                                </div>
                            </div>
                        </div>
                        <div class="colors flex mt-[10px] w-full items-center gap-[12px]">
                            <span data-image="assets/images/img1.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img2.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-800"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>


                        </div>
                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-one absolute top-0 w-full">
                        <img class="w-full h-[180px]" src="assets/images/pants-01.jpg">
                        <div class="w-full gap-[12px] flex items-center mt-[12px] justify-center">
                            <h3 class=" text-[14px]">کت تک مدل PSU1153332 </h3>
                            <button class="btn-favorite">
                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                          fill="black"/>
                                </svg>
                            </button>
                        </div>
                        <div class="w-full price flex justify-center mt-[8px]">
                            <h4 class="font-bold">165,000,000 ریال</h4>
                        </div>
                    </div>
                    <div class="box-two absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 right-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative h-[320px]">
                            <img id="main-image-1" class="w-full h-full main-image-1" src="assets/images/pants2.jpg">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="price h-full text-[16px] flex items-center justify-center w-[70%] bg-[#ffffff8f] text-[#777]">
                                    165,000,000 ریال
                                </div>
                                <div class="discount h-full text-[12px] flex items-center justify-center w-[30%] bg-[#fb923c] text-[#fff]">
                                    <span class="text-[12px] text-one-promo text-[#fff]"> تخفیف دار</span>
                                    <span class="text-[16px] text-two-promo text-[#fff]">25%</span>
                                </div>
                            </div>
                        </div>
                        <div class="colors flex mt-[10px] w-full items-center gap-[12px]">
                            <span data-image="assets/images/img1.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img2.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-800"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>


                        </div>
                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-one absolute top-0 w-full">
                        <img class="w-full h-[180px]" src="assets/images/pants-01.jpg">
                        <div class="w-full gap-[12px] flex items-center mt-[12px] justify-center">
                            <h3 class=" text-[14px]">کت تک مدل PSU1153332 </h3>
                            <button class="btn-favorite">
                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                          fill="black"/>
                                </svg>
                            </button>
                        </div>
                        <div class="w-full price flex justify-center mt-[8px]">
                            <h4 class="font-bold">165,000,000 ریال</h4>
                        </div>
                    </div>
                    <div class="box-two absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 right-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative h-[320px]">
                            <img id="main-image-1" class="w-full h-full main-image-1" src="assets/images/pants2.jpg">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="price h-full text-[16px] flex items-center justify-center w-[70%] bg-[#ffffff8f] text-[#777]">
                                    165,000,000 ریال
                                </div>
                                <div class="discount h-full text-[12px] flex items-center justify-center w-[30%] bg-[#fb923c] text-[#fff]">
                                    <span class="text-[12px] text-one-promo text-[#fff]"> تخفیف دار</span>
                                    <span class="text-[16px] text-two-promo text-[#fff]">25%</span>
                                </div>
                            </div>
                        </div>
                        <div class="colors flex mt-[10px] w-full items-center gap-[12px]">
                            <span data-image="assets/images/img1.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img2.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-800"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>


                        </div>
                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-one absolute top-0 w-full">
                        <img class="w-full h-[180px]" src="assets/images/pants-01.jpg">
                        <div class="w-full gap-[12px] flex items-center mt-[12px] justify-center">
                            <h3 class=" text-[14px]">کت تک مدل PSU1153332 </h3>
                            <button class="btn-favorite">
                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                          fill="black"/>
                                </svg>
                            </button>
                        </div>
                        <div class="w-full price flex justify-center mt-[8px]">
                            <h4 class="font-bold">165,000,000 ریال</h4>
                        </div>
                    </div>
                    <div class="box-two absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 right-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative h-[320px]">
                            <img id="main-image-1" class="w-full h-full main-image-1" src="assets/images/pants2.jpg">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="price h-full text-[16px] flex items-center justify-center w-[70%] bg-[#ffffff8f] text-[#777]">
                                    165,000,000 ریال
                                </div>
                                <div class="discount h-full text-[12px] flex items-center justify-center w-[30%] bg-[#fb923c] text-[#fff]">
                                    <span class="text-[12px] text-one-promo text-[#fff]"> تخفیف دار</span>
                                    <span class="text-[16px] text-two-promo text-[#fff]">25%</span>
                                </div>
                            </div>
                        </div>
                        <div class="colors flex mt-[10px] w-full items-center gap-[12px]">
                            <span data-image="assets/images/img1.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img2.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-800"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>


                        </div>
                    </div>
                </div>


            </div>
            <div class="left-mobi w-full grid grid-cols-1 px-[12px] gap-[1rem] list-product-search min-[901px]:hidden">
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-fix absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 right-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative h-[350px]">
                            <img id="main-image-1" class="w-full h-full main-image-1" src="assets/images/imgf2.png">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="price h-full text-[16px] flex items-center justify-center w-[70%] bg-[#ffffff8f] text-[#777]">
                                    165,000,000 ریال
                                </div>
                                <div class="discount h-full text-[12px] flex items-center justify-center w-[30%] bg-[#fb923c] text-[#fff]">
                                    تخفیف دار
                                </div>
                            </div>
                        </div>
                        <h3 class="w-full text-center text-[14px] mt-[12px]">کت تک مدل PSU1153332 </h3>
                        <div class="colors flex mt-[10px] w-full items-center justify-center gap-[12px]">
                            <span data-image="assets/images/img1.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img2.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-800"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>


                        </div>
                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-fix absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 right-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative h-[350px]">
                            <img id="main-image-1" class="w-full h-full main-image-1" src="assets/images/imgf2.png">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="price h-full text-[16px] flex items-center justify-center w-[70%] bg-[#ffffff8f] text-[#777]">
                                    165,000,000 ریال
                                </div>
                                <div class="discount h-full text-[12px] flex items-center justify-center w-[30%] bg-[#fb923c] text-[#fff]">
                                    تخفیف دار
                                </div>
                            </div>
                        </div>
                        <h3 class="w-full text-center text-[14px] mt-[12px]">کت تک مدل PSU1153332 </h3>
                        <div class="colors flex mt-[10px] w-full items-center justify-center gap-[12px]">
                            <span data-image="assets/images/img1.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img2.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-800"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>


                        </div>
                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-fix absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 right-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative h-[350px]">
                            <img id="main-image-1" class="w-full h-full main-image-1" src="assets/images/imgf2.png">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="price h-full text-[16px] flex items-center justify-center w-[70%] bg-[#ffffff8f] text-[#777]">
                                    165,000,000 ریال
                                </div>
                                <div class="discount h-full text-[12px] flex items-center justify-center w-[30%] bg-[#fb923c] text-[#fff]">
                                    تخفیف دار
                                </div>
                            </div>
                        </div>
                        <h3 class="w-full text-center text-[14px] mt-[12px]">کت تک مدل PSU1153332 </h3>
                        <div class="colors flex mt-[10px] w-full items-center justify-center gap-[12px]">
                            <span data-image="assets/images/img1.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img2.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-800"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>


                        </div>
                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-fix absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 right-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative h-[350px]">
                            <img id="main-image-1" class="w-full h-full main-image-1" src="assets/images/imgf2.png">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="price h-full text-[16px] flex items-center justify-center w-[70%] bg-[#ffffff8f] text-[#777]">
                                    165,000,000 ریال
                                </div>
                                <div class="discount h-full text-[12px] flex items-center justify-center w-[30%] bg-[#fb923c] text-[#fff]">
                                    تخفیف دار
                                </div>
                            </div>
                        </div>
                        <h3 class="w-full text-center text-[14px] mt-[12px]">کت تک مدل PSU1153332 </h3>
                        <div class="colors flex mt-[10px] w-full items-center justify-center gap-[12px]">
                            <span data-image="assets/images/img1.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img2.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-800"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>


                        </div>
                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-fix absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 right-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative h-[350px]">
                            <img id="main-image-1" class="w-full h-full main-image-1" src="assets/images/imgf2.png">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="price h-full text-[16px] flex items-center justify-center w-[70%] bg-[#ffffff8f] text-[#777]">
                                    165,000,000 ریال
                                </div>
                                <div class="discount h-full text-[12px] flex items-center justify-center w-[30%] bg-[#fb923c] text-[#fff]">
                                    تخفیف دار
                                </div>
                            </div>
                        </div>
                        <h3 class="w-full text-center text-[14px] mt-[12px]">کت تک مدل PSU1153332 </h3>
                        <div class="colors flex mt-[10px] w-full items-center justify-center gap-[12px]">
                            <span data-image="assets/images/img1.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img2.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-800"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>


                        </div>
                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-fix absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 right-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative h-[350px]">
                            <img id="main-image-1" class="w-full h-full main-image-1" src="assets/images/imgf2.png">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="price h-full text-[16px] flex items-center justify-center w-full bg-[#ffffff8f] text-[#777]">
                                    165,000,000 ریال
                                </div>
                            </div>
                        </div>
                        <h3 class="w-full text-center text-[14px] mt-[12px]">کت تک مدل PSU1153332 </h3>
                        <div class="colors flex mt-[10px] w-full items-center justify-center gap-[12px]">
                            <span data-image="assets/images/img1.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img2.png"
                                  class="color-option w-[16px] h-[16px] bg-gray-800"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>
                            <span data-image="assets/images/img3.png"
                                  class="color-option w-[16px] h-[16px] bg-amber-400"
                                  onclick="changeImage('main-image-1', this.dataset.image , this)"></span>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!--subscribe-modal-->
<div class="p-subscribe-modal">
    <div class="subscribe-modal p-[1rem] flex flex-col items-center">
        <div class="row-close-subscribe w-full flex justify-end">
            <i class="fa fa-times btn-close-subscribe text-red-400 text-[22px] cursor-pointer"></i>
        </div>
    </div>
</div>

<!--header-->
<div class="header-main relative w-full max-[900px]:hidden">
    <header class="header bg-base-color w-full">
        <div class="c-container">
            <div class="p-header flex items-center justify-between h-[85px] w-full mx-auto">
                <ul class="links h-full w-[40%] p-0 flex items-center">
                    <li><a href="index.php"
                           class="link header-link flex indexPage items-center text-white text-[12px] px-[8px] mx-[4px]">صفحه
                        اصلی </a>
                    </li>
                    <li onmouseover="showOverlay()" onmouseout="hideOverlay()"
                        class="h-full li-mega-menu flex items-center">
                        <div
                                class="link p-link-underMenu h-[90px] flex items-center text-white text-[12px] h-full px-[8px] mx-[4px]">
                            <a href="list-product.php" class="header-link">
                                <span>محصولات</span>
                            </a>
                            <div class="underMenu-box">
                                <div class="w-full flex h-full  p-underLink-flex justify-between items-center">
                                    <div class="w-[60%] h-[300px] p-[2rem] flex items-start gap-[1.2rem]">
                                        <div category-slider="classic" class="col-links w-[120px]">
                                            <a href="" class="title-link   text-black  text-[13px] font-bold">
                                                <span class="w-[120px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>

                                        </div>
                                        <div category-slider="casual" class="col-links w-[120px]">
                                            <a href="" class="title-link   text-black  text-[13px] font-bold">
                                                <span class="w-[120px] h-[30px]">کالای فصلی</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>

                                        </div>
                                        <div category-slider="shoe" class="col-links w-[120px]">
                                            <a href="" class="title-link   text-black  text-[13px] font-bold">
                                                <span class="w-[120px] h-[30px]">اکسسوری</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>

                                        </div>
                                        <div category-slider="seasonal" class="col-links w-[120px]">
                                            <div class="accordion w-[120px]">
                                                <h4 class="accordion__title flex items-center justify-between title-link  text-black  text-[13px] font-bold">
                                                    محصولات

                                                    <svg class="svg-main-link" fill="#333" version="1.1" id="Capa_1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         width="10" height="10" viewBox="0 0 30.727 30.727"
                                                         xml:space="preserve">
<g>
	<path d="M29.994,10.183L15.363,24.812L0.733,10.184c-0.977-0.978-0.977-2.561,0-3.536c0.977-0.977,2.559-0.976,3.536,0
		l11.095,11.093L26.461,6.647c0.977-0.976,2.559-0.976,3.535,0C30.971,7.624,30.971,9.206,29.994,10.183z"/>
</g>
</svg>
                                                </h4>
                                                <div class="accordion__content h-[250px] overflow-y-auto">
                                                    <div class="accordion accordion--nested">
                                                        <h4 class="accordion__title   text-[#646464] flex items-center justify-between border-b-[1px] h-[30px] border-black border-b-[1px]">
                                                            کــــــلاسیک
                                                            <svg fill="#333" version="1.1" id="Capa_1"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                 width="10" height="10" viewBox="0 0 30.727 30.727"
                                                                 xml:space="preserve">
<g>
	<path d="M29.994,10.183L15.363,24.812L0.733,10.184c-0.977-0.978-0.977-2.561,0-3.536c0.977-0.977,2.559-0.976,3.536,0
		l11.095,11.093L26.461,6.647c0.977-0.976,2.559-0.976,3.535,0C30.971,7.624,30.971,9.206,29.994,10.183z"/>
</g>
</svg>
                                                        </h4>
                                                        <div class="accordion__content">
                                                            <ul class=" w-full under-links">
                                                                <li class="py-[7px] h-[30px] pr-[8px]  li-link w-full text-black border-b-[1px] border-[#ccc]">
                                                                    <a href="#">کت و شلوار</a></li>
                                                                <li class="py-[7px] h-[30px] pr-[8px]  li-link w-full text-black border-b-[1px] border-[#ccc]">
                                                                    <a href="#">دامادی</a></li>
                                                                <li class="py-[7px] h-[30px] pr-[8px]  li-link w-full text-black border-b-[1px] border-[#ccc]">
                                                                    <a href="#">کت‌تک</a></li>
                                                                <li class="py-[7px] h-[30px] pr-[8px]  li-link w-full text-black border-b-[1px] border-[#ccc]">
                                                                    <a href="#">شلوار فاستونی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="accordion accordion--nested">
                                                        <h4 class="accordion__title text-[#646464] flex items-center justify-between border-b-[1px] h-[30px] border-black border-b-[1px]">
                                                            1 کــــــلاسیک
                                                            <svg fill="#333" version="1.1" id="Capa_1"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                 width="10" height="10" viewBox="0 0 30.727 30.727"
                                                                 xml:space="preserve">
<g>
	<path d="M29.994,10.183L15.363,24.812L0.733,10.184c-0.977-0.978-0.977-2.561,0-3.536c0.977-0.977,2.559-0.976,3.536,0
		l11.095,11.093L26.461,6.647c0.977-0.976,2.559-0.976,3.535,0C30.971,7.624,30.971,9.206,29.994,10.183z"/>
</g>
</svg>

                                                        </h4>
                                                        <div class="accordion__content">
                                                            <ul class=" w-full under-links">
                                                                <li class="py-[7px] h-[30px] pr-[8px]  li-link w-full text-black border-b-[1px] border-[#ccc]">
                                                                    <a href="#">کت و شلوار</a></li>
                                                                <li class="py-[7px] h-[30px] pr-[8px]  li-link w-full text-black border-b-[1px] border-[#ccc]">
                                                                    <a href="#">دامادی</a></li>
                                                                <li class="py-[7px] h-[30px] pr-[8px]  li-link w-full text-black border-b-[1px] border-[#ccc]">
                                                                    <a href="#">کت‌تک</a></li>
                                                                <li class="py-[7px] h-[30px] pr-[8px]  li-link w-full text-black border-b-[1px] border-[#ccc]">
                                                                    <a href="#">شلوار فاستونی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="accordion accordion--nested">
                                                        <h4 class="accordion__title text-[#646464] flex items-center justify-between border-b-[1px] h-[30px] border-black border-b-[1px]">
                                                            3 کــــــلاسیک
                                                            <svg fill="#333" version="1.1" id="Capa_1"
                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                 width="10" height="10" viewBox="0 0 30.727 30.727"
                                                                 xml:space="preserve">
<g>
	<path d="M29.994,10.183L15.363,24.812L0.733,10.184c-0.977-0.978-0.977-2.561,0-3.536c0.977-0.977,2.559-0.976,3.536,0
		l11.095,11.093L26.461,6.647c0.977-0.976,2.559-0.976,3.535,0C30.971,7.624,30.971,9.206,29.994,10.183z"/>
</g>
</svg>

                                                        </h4>
                                                        <div class="accordion__content">
                                                            <ul class=" w-full under-links">
                                                                <li class="py-[7px] h-[30px] pr-[8px]  li-link w-full text-black border-b-[1px] border-[#ccc]">
                                                                    <a href="#">کت و شلوار</a></li>
                                                                <li class="py-[7px] h-[30px] pr-[8px]  li-link w-full text-black border-b-[1px] border-[#ccc]">
                                                                    <a href="#">دامادی</a></li>
                                                                <li class="py-[7px] h-[30px] pr-[8px]  li-link w-full text-black border-b-[1px] border-[#ccc]">
                                                                    <a href="#">کت‌تک</a></li>
                                                                <li class="py-[7px] h-[30px] pr-[8px]  li-link w-full text-black border-b-[1px] border-[#ccc]">
                                                                    <a href="#">شلوار فاستونی</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                        <div category-slider="sports" class="col-links w-[120px]">
                                            <a href="" class="title-link   text-black  text-[13px] font-bold">
                                                <span class="w-[120px] h-[30px]">کــــــژوال</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a href="" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>

                                        </div>
                                        <div class="col-cart w-[220px]">
                                            <a href="" class="title-link   text-black  text-[13px] font-bold">
                                                <span class="w-[220px] h-[30px]">یکات کارت</span>
                                            </a>
                                            <img class="w-full" src="assets/images/card.png" alt="">

                                        </div>

                                    </div>
                                    <div class="slider-header h-full pr-[4rem] flex justify-end w-[40%]">
                                        <div class="swiper swiperHeader category-slider-wrap w-full h-full">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide" category-slider-item="classic"><img
                                                        class="w-full h-full"
                                                        src="assets/images/menu1.png" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="casual"><img
                                                        class="w-full h-full"
                                                        src="assets/images/2.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="shoe"><img
                                                        class="w-full h-full"
                                                        src="assets/images/3.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="seasonal"><img
                                                        class="w-full h-full"
                                                        src="assets/images/4.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="sports"><img
                                                        class="w-full h-full"
                                                        src="assets/images/menu1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-pagination-c"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="storeB.php"
                           class="link header-link storePage flex  items-center text-white text-[12px] px-[8px] mx-[4px]"
                    >فروشگاه </a>
                    </li>
                    <li><a href="organizational.php"
                           class="link header-link organizationalPage flex items-center text-white text-[12px] px-[8px] mx-[4px]">فروش
                        سازمانی </a></li>
                    <li><a href="contactUs.php"
                           class="link header-link contactUsPage flex items-center text-white text-[12px] px-[8px] mx-[4px]">تماس
                        با
                        ما </a>
                    </li>
                    <li><a href="about-us.php"
                           class="link header-link aboutUsPage last-link flex items-center text-white text-[12px] px-[8px] mx-[4px]">درباره
                        ما </a></li>
                </ul>
                <a href="" class="logo-header w-[20%] flex justify-center">
                    <img width="160" id="logoHeader" src="assets/images/ECUT-LOGO-.png">
                </a>
                <div class="end-header gap-[20px] flex items-center w-[40%] justify-end">
                    <button class="btn-search">
                        <i class="fa fa-search text-white"></i>
                    </button>
                    <a href="#" class="link-auth flex items-center openModal">
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
</div>


<!--megaMenu-->


<!--main-->
<main>
    <div class="w-full desktop max-[900px]:hidden">
        <div class="swiper swiperMain">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="s-one bg-[#646464]">
                        <div class="row-one-v2">
                            <div class="for">for</div>
                            <div class="gsap">GSAP</div>
                            <div class="container final">
                                <div class="letter F">E</div>
                                <div class="letter l">C</div>
                                <div class="letter i">U</div>
                                <div class="letter p">T</div>
                                <div class="for">for</div>
                                <div class="gsap">ECUT</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row-two h-[100vh] w-full relative">
                        <div class="swiper w-full h-full swiper-banner">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <video class="w-full h-full object-cover" autoplay loop>
                                        <source src="assets/images/new-imges/03.%20Santorini%20V.2.mp4"
                                                type="video/mp4">
                                        مرورگر شما از ویدیو پشتیبانی نمی‌کند.
                                    </video>

                                </div>
                                <div class="swiper-slide">
                                    <img class="w-full" src="assets/images/banner2.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-full" src="assets/images/banner2.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-full" src="assets/images/banner2.png" alt="">
                                </div>


                            </div>
                            <div class="swiper-pagination-banner-2"></div>
                        </div>
                        <div class="instagram-logo w-[150px] h-[40px]  absolute bottom-[35%]  left-[20%]">
                            <img class="absolute img-one" src="assets/images/inst.png">
                            <img class="absolute img-two" src="assets/images/inst2.png">
                        </div>
                        <div class="box-post w-full absolute bottom-[81px] right-0 bg-stone-200	 h-[45px] flex items-center justify-around z-10	">
                            <div class="item flex items-center gap-[12px]">
                                <svg width='20' height='21' viewBox='0 0 20 21' fill='none'
                                     xmlns='http://www.w3.org/2000/svg'>
                                    <g clip-path='url(#clip0_277_1123)'>
                                        <path d='M10.5045 19.6194C10.1763 19.746 9.81264 19.746 9.4844 19.6194C6.92319 18.636 4.7205 16.899 3.16731 14.6374C1.61411 12.376 0.783497 9.69651 0.785159 6.95302V2.70258C0.785159 2.32683 0.934429 1.96644 1.20013 1.70074C1.46584 1.43504 1.82621 1.28577 2.20197 1.28577H17.7869C18.1627 1.28577 18.5231 1.43504 18.7888 1.70074C19.0545 1.96644 19.2038 2.32683 19.2038 2.70258V6.95302C19.2054 9.69651 18.3748 12.376 16.8217 14.6374C15.2684 16.899 13.0657 18.636 10.5045 19.6194Z'
                                              stroke='black' stroke-width='2' stroke-linecap='round'
                                              stroke-linejoin='round'/>
                                        <path d='M14.2843 6.21423L8.57003 12.6428L5.71289 10.4999' stroke='black'
                                              stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                                    </g>
                                    <defs>
                                        <clipPath id='clip0_277_1123'>
                                            <rect width='20' height='20' fill='white' transform='translate(0 0.5)'/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span class="text-[14px]"> تضمین کیفیت کالا</span>
                            </div>
                            <div class="item flex items-center gap-[12px]">
                                <svg width='20' height='21' viewBox='0 0 20 21' fill='none'
                                     xmlns='http://www.w3.org/2000/svg'>
                                    <g clip-path='url(#clip0_277_1123)'>
                                        <path d='M10.5045 19.6194C10.1763 19.746 9.81264 19.746 9.4844 19.6194C6.92319 18.636 4.7205 16.899 3.16731 14.6374C1.61411 12.376 0.783497 9.69651 0.785159 6.95302V2.70258C0.785159 2.32683 0.934429 1.96644 1.20013 1.70074C1.46584 1.43504 1.82621 1.28577 2.20197 1.28577H17.7869C18.1627 1.28577 18.5231 1.43504 18.7888 1.70074C19.0545 1.96644 19.2038 2.32683 19.2038 2.70258V6.95302C19.2054 9.69651 18.3748 12.376 16.8217 14.6374C15.2684 16.899 13.0657 18.636 10.5045 19.6194Z'
                                              stroke='black' stroke-width='2' stroke-linecap='round'
                                              stroke-linejoin='round'/>
                                        <path d='M14.2843 6.21423L8.57003 12.6428L5.71289 10.4999' stroke='black'
                                              stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                                    </g>
                                    <defs>
                                        <clipPath id='clip0_277_1123'>
                                            <rect width='20' height='20' fill='white' transform='translate(0 0.5)'/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span class="text-[14px]">7 روز ضمانت برگشت</span>
                            </div>
                            <div class="item flex items-center gap-[12px]">
                                <svg width='20' height='21' viewBox='0 0 20 21' fill='none'
                                     xmlns='http://www.w3.org/2000/svg'>
                                    <g clip-path='url(#clip0_277_1123)'>
                                        <path d='M10.5045 19.6194C10.1763 19.746 9.81264 19.746 9.4844 19.6194C6.92319 18.636 4.7205 16.899 3.16731 14.6374C1.61411 12.376 0.783497 9.69651 0.785159 6.95302V2.70258C0.785159 2.32683 0.934429 1.96644 1.20013 1.70074C1.46584 1.43504 1.82621 1.28577 2.20197 1.28577H17.7869C18.1627 1.28577 18.5231 1.43504 18.7888 1.70074C19.0545 1.96644 19.2038 2.32683 19.2038 2.70258V6.95302C19.2054 9.69651 18.3748 12.376 16.8217 14.6374C15.2684 16.899 13.0657 18.636 10.5045 19.6194Z'
                                              stroke='black' stroke-width='2' stroke-linecap='round'
                                              stroke-linejoin='round'/>
                                        <path d='M14.2843 6.21423L8.57003 12.6428L5.71289 10.4999' stroke='black'
                                              stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                                    </g>
                                    <defs>
                                        <clipPath id='clip0_277_1123'>
                                            <rect width='20' height='20' fill='white' transform='translate(0 0.5)'/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span class="text-[14px]">تحویل سریع</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex title-row-three flex-col items-center h-[90vh]">
                        <div class="w-full mt-[3rem] mb-[2rem] title flex justify-center">
                            <h2 class="text-[18px]  px-[1rem]">دسته بندی محصولات</h2>
                        </div>
                        <div class="row-three row-three-category  w-full flex items-center justify-center">
                            <div class="swiper-button-next-category">
                                <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                          fill="#777777"/>
                                </svg>
                            </div>
                            <div class="swiper w-[90%] mx-[15px]  swiperCategory">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href=""
                                           class="thumbnail-category w-full flex flex-col items-center justify-center">
                                            <img class="w-full h-[65vh] object-cover" src="assets/images/img3.png"
                                                 alt="">
                                            <h3 class="title-category mt-[1.2rem] flex items-center relative text-[14px] px-[7px]">
                                                تی شرت</h3>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""
                                           class="thumbnail-category w-full flex flex-col items-center justify-center">
                                            <img class="w-full h-[65vh] object-cover" src="assets/images/img3.png"
                                                 alt="">
                                            <h3 class="title-category mt-[1.2rem] flex items-center relative text-[14px] px-[7px]">
                                                تی شرت</h3>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""
                                           class="thumbnail-category w-full flex flex-col items-center justify-center">
                                            <img class="w-full h-[65vh] object-cover" src="assets/images/img3.png"
                                                 alt="">
                                            <h3 class="title-category mt-[1.2rem] flex items-center relative text-[14px] px-[7px]">
                                                تی شرت</h3>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""
                                           class="thumbnail-category w-full flex flex-col items-center justify-center">
                                            <img class="w-full h-[65vh] object-cover" src="assets/images/img3.png"
                                                 alt="">
                                            <h3 class="title-category mt-[1.2rem] flex items-center relative text-[14px] px-[7px]">
                                                تی شرت</h3>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href=""
                                           class="thumbnail-category w-full flex flex-col items-center justify-center">
                                            <img class="w-full h-[65vh] object-cover" src="assets/images/img3.png"
                                                 alt="">
                                            <h3 class="title-category mt-[1.2rem] flex items-center relative text-[14px] px-[7px]">
                                                تی شرت</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev-category">
                                <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                          fill="#777777"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="row-four w-full">
                        <div class="swiper w-full h-full swiper-banner-two">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="img-banner w-full relative">
                                        <img class="w-full" src="assets/images/new-imges/baneer02.jpg" alt="">
                                        <div class="box-title-banner absolute flex items-end pb-[3rem] justify-center bg-[#77777770] z-10 top-0 left-[80px] h-[330px] w-[370px]">
                                            <div class="title-banner flex flex-col w-[90%]">
                                                <div class="en-title w-full flex justify-center border-b-[1px] border-white">
                                                    <h3 class="text-white leading-[46px] text-[55px]">ECUT STYLE</h3>
                                                </div>
                                                <div class="fa-title w-full flex justify-start">
                                                    <h3 class="text-white text-[28px]">پیشنهاد هفته</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-banner w-full relative">
                                        <img class="w-full" src="assets/images/new-imges/baneer03.jpg" alt="">
                                        <div class="box-title-banner absolute flex items-end pb-[3rem] justify-center bg-[#77777770] z-10 top-0 left-[80px] h-[330px] w-[370px]">
                                            <div class="title-banner flex flex-col w-[90%]">
                                                <div class="en-title w-full flex justify-center border-b-[1px] border-white">
                                                    <h3 class="text-white leading-[46px] text-[55px]">ECUT STYLE</h3>
                                                </div>
                                                <div class="fa-title w-full flex justify-start">
                                                    <h3 class="text-white text-[28px]">پیشنهاد هفته</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-banner w-full relative">
                                        <img class="w-full" src="assets/images/new-imges/baneer04.jpg" alt="">
                                        <div class="box-title-banner absolute flex items-end pb-[3rem] justify-center bg-[#77777770] z-10 top-0 left-[80px] h-[330px] w-[370px]">
                                            <div class="title-banner flex flex-col w-[90%]">
                                                <div class="en-title w-full flex justify-center border-b-[1px] border-white">
                                                    <h3 class="text-white leading-[46px] text-[55px]">ECUT STYLE</h3>
                                                </div>
                                                <div class="fa-title w-full flex justify-start">
                                                    <h3 class="text-white text-[28px]">پیشنهاد هفته</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination-banner-5"></div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row-five row-five-product flex h-[100vh] flex-col items-center justify-center w-full">
                        <div class="w-full mb-[2rem] title flex justify-center">
                            <h2 class="text-[18px] px-[1rem]">جدید ترین محصولات</h2>
                        </div>
                        <div class="w-full flex items-center justify-center">
                            <div class="swiper-button-next-product">
                                <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                          fill="#777777"/>
                                </svg>
                            </div>
                            <div class="swiper mb-[3rem] w-[90%] mx-[15px]  swiperProduct">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="thumbnail-product relative w-full flex flex-col items-center justify-center">
                                            <a class="w-full p-img h-[65vh] relative" href="">
                                                <img id="main-image-1" class="w-full h-full img-main fade object-cover"
                                                     src="assets/images/img3.png" alt="">
                                                <img class="w-full h-full img-hover object-cover"
                                                     src="assets/images/img1.png"
                                                     alt="">
                                            </a>
                                            <div class="w-full flex mt-[1rem] items-center justify-between">
                                                <span class="text-[11px] text">تی شرت 1698</span>
                                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                                            </div>
                                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                                <div class="colors flex items-center gap-[12px]">
                                            <span data-image="assets/images/img1.png"
                                                  class="color-option w-[17px] h-[17px] bg-gray-400"
                                                  onclick="changeImage('main-image-1', this.dataset.image ,this)"></span>
                                                    <span data-image="assets/images/img2.png"
                                                          class="color-option w-[17px] h-[17px] bg-gray-800"
                                                          onclick="changeImage('main-image-1', this.dataset.image ,this)"></span>
                                                    <span data-image="assets/images/img3.png"
                                                          class="color-option w-[17px] h-[17px] bg-amber-400"
                                                          onclick="changeImage('main-image-1', this.dataset.image ,this)"></span>
                                                </div>
                                                <div class="favorite cursor-pointer">
                                                    <svg fill="#000000" height="23" width="23" version="1.1"
                                                         id="Layer_1"
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
                                    <div class="swiper-slide">
                                        <div class="thumbnail-product w-full flex flex-col items-center justify-center">
                                            <a class="w-full p-img h-[65vh] relative" href="">
                                                <img id="main-image-2" class="w-full h-full img-main fade object-cover"
                                                     src="assets/images/img4.png" alt="">
                                                <img class="w-full h-full img-hover object-cover"
                                                     src="assets/images/img1.png"
                                                     alt="">
                                            </a>
                                            <div class="w-full flex mt-[1rem] items-center justify-between">
                                                <span class="text-[11px] text">تی شرت 1698</span>
                                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                                            </div>
                                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                                <div class="colors flex items-center gap-[12px]">
                                            <span data-image="assets/images/img4.png"
                                                  class="color-option w-[17px] h-[17px] bg-gray-400"
                                                  onclick="changeImage('main-image-2', this.dataset.image ,this)"></span>
                                                    <span data-image="assets/images/img5.png"
                                                          class="color-option w-[17px] h-[17px] bg-gray-800"
                                                          onclick="changeImage('main-image-2', this.dataset.image ,this)"></span>
                                                    <span data-image="assets/images/img6.png"
                                                          class="color-option w-[17px] h-[17px] bg-amber-400"
                                                          onclick="changeImage('main-image-2', this.dataset.image ,this)"></span>
                                                </div>
                                                <div class="favorite cursor-pointer">
                                                    <!-- SVG code -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail-product w-full flex flex-col items-center justify-center">
                                            <a class="w-full p-img h-[65vh] relative" href="">
                                                <img id="main-image-3" class="w-full fade h-full img-main object-cover"
                                                     src="assets/images/img7.png" alt="">
                                                <img class="w-full h-full img-hover object-cover"
                                                     src="assets/images/img1.png"
                                                     alt="">
                                            </a>
                                            <div class="w-full flex mt-[1rem] items-center justify-between">
                                                <span class="text-[11px] text">تی شرت 1698</span>
                                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                                            </div>
                                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                                <div class="colors flex items-center gap-[12px]">
                                            <span data-image="assets/images/img7.png"
                                                  class="color-option w-[17px] h-[17px] bg-gray-400"
                                                  onclick="changeImage('main-image-3', this.dataset.image ,this)"></span>
                                                    <span data-image="assets/images/img8.png"
                                                          class="color-option w-[17px] h-[17px] bg-gray-800"
                                                          onclick="changeImage('main-image-3', this.dataset.image ,this)"></span>
                                                    <span data-image="assets/images/img9.png"
                                                          class="color-option w-[17px] h-[17px] bg-amber-400"
                                                          onclick="changeImage('main-image-3', this.dataset.image ,this)"></span>
                                                </div>
                                                <div class="favorite cursor-pointer">
                                                    <!-- SVG code -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail-product w-full flex flex-col items-center justify-center">
                                            <a class="w-full p-img h-[65vh] relative" href="">
                                                <img id="main-image-4" class="w-full fade h-full img-main object-cover"
                                                     src="assets/images/img7.png" alt="">
                                                <img class="w-full h-full img-hover object-cover"
                                                     src="assets/images/img1.png"
                                                     alt="">
                                            </a>
                                            <div class="w-full flex mt-[1rem] items-center justify-between">
                                                <span class="text-[11px] text">تی شرت 1698</span>
                                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                                            </div>
                                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                                <div class="colors flex items-center gap-[12px]">
                                            <span data-image="assets/images/img7.png"
                                                  class="color-option w-[17px] h-[17px] bg-gray-400"
                                                  onclick="changeImage('main-image-4', this.dataset.image ,this)"></span>
                                                    <span data-image="assets/images/img8.png"
                                                          class="color-option w-[17px] h-[17px] bg-gray-800"
                                                          onclick="changeImage('main-image-4', this.dataset.image ,this)"></span>
                                                    <span data-image="assets/images/img9.png"
                                                          class="color-option w-[17px] h-[17px] bg-amber-400"
                                                          onclick="changeImage('main-image-4', this.dataset.image ,this)"></span>
                                                </div>
                                                <div class="favorite cursor-pointer">
                                                    <!-- SVG code -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="thumbnail-product w-full flex flex-col items-center justify-center">
                                            <a class="w-full p-img h-[65vh] relative" href="">
                                                <img id="main-image-5" class="w-full fade h-full img-main object-cover"
                                                     src="assets/images/img7.png" alt="">
                                                <img class="w-full h-full img-hover object-cover"
                                                     src="assets/images/img1.png"
                                                     alt="">
                                            </a>
                                            <div class="w-full flex mt-[1rem] items-center justify-between">
                                                <span class="text-[11px] text">تی شرت 1698</span>
                                                <strong class="text-[12px] price">1,385,300 تومان</strong>
                                            </div>
                                            <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                                <div class="colors flex items-center gap-[12px]">
                                            <span data-image="assets/images/img7.png"
                                                  class="color-option w-[17px] h-[17px] bg-gray-400"
                                                  onclick="changeImage('main-image-5', this.dataset.image ,this)"></span>
                                                    <span data-image="assets/images/img8.png"
                                                          class="color-option w-[17px] h-[17px] bg-gray-800"
                                                          onclick="changeImage('main-image-5', this.dataset.image ,this)"></span>
                                                    <span data-image="assets/images/img9.png"
                                                          class="color-option w-[17px] h-[17px] bg-amber-400"
                                                          onclick="changeImage('main-image-5', this.dataset.image ,this)"></span>
                                                </div>
                                                <div class="favorite cursor-pointer">
                                                    <!-- SVG code -->
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
                </div>
                <div class="swiper-slide">
                    <div class="scroll-custom"
                         style="width: 100%; overflow: auto; height: 100vh;display: flex;flex-direction: column;padding: 2rem 0">
                        <div class="row-five flex h-[100vh] flex-col items-center justify-center w-full">
                            <div class="top-footer-box gap-[3rem] w-[70%] min-[1600px]:w-full max-[700px]:flex-col flex justify-center items-center">
                                <div class="box">
                                    <a class="flex flex-col items-center" href="#">
                                        <img alt="" src="assets/images/img9.png">
                                        <span class="mt-[1.5rem] px-[7px] text-[14px] font-semibold text-border-custom">فروش سازمانی </span>
                                    </a>
                                </div>
                                <div class="box">
                                    <a class="flex flex-col items-center" href="#">
                                        <img alt="" src="assets/images/img8.png">
                                        <span class="mt-[1.5rem] px-[7px] text-[14px] font-semibold text-border-custom">ایکارت کارت </span>
                                    </a>
                                </div>
                                <div class="box">
                                    <a class="flex flex-col items-center" href="#">
                                        <img alt="" src="assets/images/img10.png">
                                        <span class="mt-[1.5rem] px-[7px] text-[14px] font-semibold text-border-custom"> فروشگاه ها  </span>
                                    </a>
                                </div>
                            </div>
                        </div>
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
                                        <p>مشترک شوید تا آخرین اخبار را دریافت کنید. <br>ما به شما تمامی اخبار و
                                            فروش‌های
                                            فوق‌العاده را
                                            اطلاع رسانی می‌کنیم</p>
                                        <button class="btn-base-two w-[80%] mt-[1rem] btn-subscribe">مشترک شوید</button>
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
                </div>
            </div>
        </div>
    </div>
    <div class="w-full min-[901px]:hidden">
        <div class="header-mobi fixed top-0  w-full px-[12px] h-[60px] bg-[#263238] flex items-center justify-between">
            <div class="icons flex w-[30%] items-center gap-[12px]">
                <button class="btn-open-menu-mobi">
                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Menu / Menu_Alt_02">
                            <path id="Vector" d="M11 17H19M5 12H19M11 7H19" stroke="#fff" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </button>
                <button class="btn-open-search-mobi">
                    <i class="fa fa-search text-white"></i>
                </button>
            </div>
            <a href="" class="logo-header  flex justify-center">
                <img width="118" id="logoHeader" src="assets/images/ECUT-LOGO-.png">
            </a>
            <div class="end-header gap-[4px] flex items-center  justify-end">
                <a href="#" class="link-auth flex items-center openModal">
                    <span class="text-[11px] text-white">ورود</span>
                    <div class="line-between h-[11px] w-[1.5px] bg-base-color-two mx-[8px]"></div>
                    <span class="text-[11px] text-white">عضویت</span>
                </a>
                <div class="cart relative">
                    <i class=""></i>
                    <span class="count absolute cart bottom-[-3px] bg-base-color-two w-[17px] pt-[4px] text-[11px] left-[-5px] text-white h-[17px] rounded-[50%] flex items-center justify-center">0</span>
                </div>
            </div>
        </div>
        <main class="w-full mt-[5rem] px-[12px]">
            <div class="row-two  w-full relative">
                <div class="swiper w-full h-full swiper-banner">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <video class="w-full h-full object-cover" autoplay loop>
                                <source src="assets/images/new-imges/03.%20Santorini%20V.2.mp4"
                                        type="video/mp4">
                                مرورگر شما از ویدیو پشتیبانی نمی‌کند.
                            </video>

                        </div>
                        <div class="swiper-slide">
                            <img class="w-full" src="assets/images/banner2.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full" src="assets/images/banner2.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full" src="assets/images/banner2.png" alt="">
                        </div>


                    </div>
                    <div class="swiper-pagination-banner-2"></div>
                </div>
                <div class="box-post w-full relative  bg-stone-200	 h-[45px] flex items-center justify-around z-10	">
                    <div class="item flex items-center gap-[6px]">
                        <svg width='15' height='16' viewBox='0 0 20 21' fill='none'
                             xmlns='http://www.w3.org/2000/svg'>
                            <g clip-path='url(#clip0_277_1123)'>
                                <path d='M10.5045 19.6194C10.1763 19.746 9.81264 19.746 9.4844 19.6194C6.92319 18.636 4.7205 16.899 3.16731 14.6374C1.61411 12.376 0.783497 9.69651 0.785159 6.95302V2.70258C0.785159 2.32683 0.934429 1.96644 1.20013 1.70074C1.46584 1.43504 1.82621 1.28577 2.20197 1.28577H17.7869C18.1627 1.28577 18.5231 1.43504 18.7888 1.70074C19.0545 1.96644 19.2038 2.32683 19.2038 2.70258V6.95302C19.2054 9.69651 18.3748 12.376 16.8217 14.6374C15.2684 16.899 13.0657 18.636 10.5045 19.6194Z'
                                      stroke='black' stroke-width='2' stroke-linecap='round'
                                      stroke-linejoin='round'/>
                                <path d='M14.2843 6.21423L8.57003 12.6428L5.71289 10.4999' stroke='black'
                                      stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                            </g>
                            <defs>
                                <clipPath id='clip0_277_1123'>
                                    <rect width='20' height='20' fill='white' transform='translate(0 0.5)'/>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-[11px]"> تضمین کیفیت کالا</span>
                    </div>
                    <div class="item flex items-center gap-[6px]">
                        <svg width='15' height='16' viewBox='0 0 20 21' fill='none'
                             xmlns='http://www.w3.org/2000/svg'>
                            <g clip-path='url(#clip0_277_1123)'>
                                <path d='M10.5045 19.6194C10.1763 19.746 9.81264 19.746 9.4844 19.6194C6.92319 18.636 4.7205 16.899 3.16731 14.6374C1.61411 12.376 0.783497 9.69651 0.785159 6.95302V2.70258C0.785159 2.32683 0.934429 1.96644 1.20013 1.70074C1.46584 1.43504 1.82621 1.28577 2.20197 1.28577H17.7869C18.1627 1.28577 18.5231 1.43504 18.7888 1.70074C19.0545 1.96644 19.2038 2.32683 19.2038 2.70258V6.95302C19.2054 9.69651 18.3748 12.376 16.8217 14.6374C15.2684 16.899 13.0657 18.636 10.5045 19.6194Z'
                                      stroke='black' stroke-width='2' stroke-linecap='round'
                                      stroke-linejoin='round'/>
                                <path d='M14.2843 6.21423L8.57003 12.6428L5.71289 10.4999' stroke='black'
                                      stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                            </g>
                            <defs>
                                <clipPath id='clip0_277_1123'>
                                    <rect width='20' height='20' fill='white' transform='translate(0 0.5)'/>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-[11px]">7 روز ضمانت برگشت</span>
                    </div>
                    <div class="item flex items-center gap-[6px]">
                        <svg width='15' height='16' viewBox='0 0 20 21' fill='none'
                             xmlns='http://www.w3.org/2000/svg'>
                            <g clip-path='url(#clip0_277_1123)'>
                                <path d='M10.5045 19.6194C10.1763 19.746 9.81264 19.746 9.4844 19.6194C6.92319 18.636 4.7205 16.899 3.16731 14.6374C1.61411 12.376 0.783497 9.69651 0.785159 6.95302V2.70258C0.785159 2.32683 0.934429 1.96644 1.20013 1.70074C1.46584 1.43504 1.82621 1.28577 2.20197 1.28577H17.7869C18.1627 1.28577 18.5231 1.43504 18.7888 1.70074C19.0545 1.96644 19.2038 2.32683 19.2038 2.70258V6.95302C19.2054 9.69651 18.3748 12.376 16.8217 14.6374C15.2684 16.899 13.0657 18.636 10.5045 19.6194Z'
                                      stroke='black' stroke-width='2' stroke-linecap='round'
                                      stroke-linejoin='round'/>
                                <path d='M14.2843 6.21423L8.57003 12.6428L5.71289 10.4999' stroke='black'
                                      stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                            </g>
                            <defs>
                                <clipPath id='clip0_277_1123'>
                                    <rect width='20' height='20' fill='white' transform='translate(0 0.5)'/>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-[11px]">تحویل سریع</span>
                    </div>
                </div>
            </div>
            <div class="flex title-row-three flex-col items-center">
                <div class="w-full mt-[3rem] mb-[2rem] title flex justify-center">
                    <h2 class="text-[18px]  px-[1rem]">دسته بندی محصولات</h2>
                </div>
                <div class="row-three row-three-category  w-full flex items-center justify-center">
                    <div class="swiper-button-next-category">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                    <div class="swiper w-[90%] mx-[15px]  swiperCategory">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href=""
                                   class="thumbnail-category w-full flex flex-col items-center justify-center">
                                    <img class="w-full h-[65vh] object-cover" src="assets/images/img3.png"
                                         alt="">
                                    <h3 class="title-category mt-[1.2rem] flex items-center relative text-[14px] px-[7px]">
                                        تی شرت</h3>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href=""
                                   class="thumbnail-category w-full flex flex-col items-center justify-center">
                                    <img class="w-full h-[65vh] object-cover" src="assets/images/img3.png"
                                         alt="">
                                    <h3 class="title-category mt-[1.2rem] flex items-center relative text-[14px] px-[7px]">
                                        تی شرت</h3>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href=""
                                   class="thumbnail-category w-full flex flex-col items-center justify-center">
                                    <img class="w-full h-[65vh] object-cover" src="assets/images/img3.png"
                                         alt="">
                                    <h3 class="title-category mt-[1.2rem] flex items-center relative text-[14px] px-[7px]">
                                        تی شرت</h3>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href=""
                                   class="thumbnail-category w-full flex flex-col items-center justify-center">
                                    <img class="w-full h-[65vh] object-cover" src="assets/images/img3.png"
                                         alt="">
                                    <h3 class="title-category mt-[1.2rem] flex items-center relative text-[14px] px-[7px]">
                                        تی شرت</h3>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href=""
                                   class="thumbnail-category w-full flex flex-col items-center justify-center">
                                    <img class="w-full h-[65vh] object-cover" src="assets/images/img3.png"
                                         alt="">
                                    <h3 class="title-category mt-[1.2rem] flex items-center relative text-[14px] px-[7px]">
                                        تی شرت</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev-category">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row-four mt-[3rem] w-full">
                <div class="swiper w-full h-full swiper-banner-two">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img-banner w-full relative">
                                <img class="w-full" src="assets/images/new-imges/baneer02.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-banner w-full relative">
                                <img class="w-full" src="assets/images/new-imges/baneer03.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-banner w-full relative">
                                <img class="w-full" src="assets/images/new-imges/baneer04.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination-banner-5"></div>
                </div>

            </div>
            <div class="row-five mt-[3rem] row-five-product flex  flex-col items-center justify-center w-full">
                <div class="w-full mb-[2rem] title flex justify-center">
                    <h2 class="text-[18px] px-[1rem]">جدید ترین محصولات</h2>
                </div>
                <div class="w-full flex items-center justify-center">
                    <div class="swiper-button-next-product">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                    <div class="swiper mb-[3rem] w-[90%] mx-[15px]  swiperProduct">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="thumbnail-product relative w-full flex flex-col items-center justify-center">
                                    <a class="w-full p-img h-[65vh] relative" href="">
                                        <img id="main-image-2-mobi" class="w-full h-full img-main fade object-cover"
                                             src="assets/images/img3.png" alt="">
                                        <img class="w-full h-full img-hover object-cover"
                                             src="assets/images/img1.png"
                                             alt="">
                                    </a>
                                    <div class="w-full flex mt-[1rem] items-center justify-between">
                                        <span class="text-[11px] text">تی شرت 1698</span>
                                        <strong class="text-[12px] price">1,385,300 تومان</strong>
                                    </div>
                                    <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                        <div class="colors flex items-center gap-[12px]">
                                            <span data-image="assets/images/img1.png"
                                                  class="color-option w-[17px] h-[17px] bg-gray-400"
                                                  onclick="changeImage('main-image-2-mobi', this.dataset.image ,this)"></span>
                                            <span data-image="assets/images/img2.png"
                                                  class="color-option w-[17px] h-[17px] bg-gray-800"
                                                  onclick="changeImage('main-image-2-mobi', this.dataset.image ,this)"></span>
                                            <span data-image="assets/images/img3.png"
                                                  class="color-option w-[17px] h-[17px] bg-amber-400"
                                                  onclick="changeImage('main-image-2-mobi', this.dataset.image ,this)"></span>
                                        </div>
                                        <div class="favorite cursor-pointer">
                                            <svg fill="#000000" height="23" width="23" version="1.1"
                                                 id="Layer_1"
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
                            <div class="swiper-slide">
                                <div class="thumbnail-product relative w-full flex flex-col items-center justify-center">
                                    <a class="w-full p-img h-[65vh] relative" href="">
                                        <img id="main-image-3-mobi" class="w-full h-full img-main fade object-cover"
                                             src="assets/images/img3.png" alt="">
                                        <img class="w-full h-full img-hover object-cover"
                                             src="assets/images/img1.png"
                                             alt="">
                                    </a>
                                    <div class="w-full flex mt-[1rem] items-center justify-between">
                                        <span class="text-[11px] text">تی شرت 1698</span>
                                        <strong class="text-[12px] price">1,385,300 تومان</strong>
                                    </div>
                                    <div class="row-tools-product mt-[8px] w-full flex items-center justify-between">
                                        <div class="colors flex items-center gap-[12px]">
                                            <span data-image="assets/images/img1.png"
                                                  class="color-option w-[17px] h-[17px] bg-gray-400"
                                                  onclick="changeImage('main-image-3-mobi', this.dataset.image ,this)"></span>
                                            <span data-image="assets/images/img2.png"
                                                  class="color-option w-[17px] h-[17px] bg-gray-800"
                                                  onclick="changeImage('main-image-3-mobi', this.dataset.image ,this)"></span>
                                            <span data-image="assets/images/img3.png"
                                                  class="color-option w-[17px] h-[17px] bg-amber-400"
                                                  onclick="changeImage('main-image-3-mobi', this.dataset.image ,this)"></span>
                                        </div>
                                        <div class="favorite cursor-pointer">
                                            <svg fill="#000000" height="23" width="23" version="1.1"
                                                 id="Layer_1"
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
                    <div class="swiper-button-prev-product">
                        <svg width="55" height="55" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                                  fill="#777777"/>
                        </svg>
                    </div>
                </div>

            </div>
            <div class="row-five flex  flex-col items-center justify-center w-full">
                <div class="top-footer-box gap-[3rem] w-[70%] max-[700px]:flex-col flex items-center">
                    <div class="box">
                        <a class="flex flex-col items-center" href="#">
                            <img alt="" src="assets/images/img9.png">
                            <span class="mt-[1.5rem] px-[7px] text-[14px] font-semibold text-border-custom">فروش سازمانی </span>
                        </a>
                    </div>
                    <div class="box">
                        <a class="flex flex-col items-center" href="#">
                            <img alt="" src="assets/images/img8.png">
                            <span class="mt-[1.5rem] px-[7px] text-[14px] font-semibold text-border-custom">ایکارت کارت </span>
                        </a>
                    </div>
                    <div class="box">
                        <a class="flex flex-col items-center" href="#">
                            <img alt="" src="assets/images/img10.png">
                            <span class="mt-[1.5rem] px-[7px] text-[14px] font-semibold text-border-custom"> فروشگاه ها  </span>
                        </a>
                    </div>
                </div>

            </div>

        </main>
        <footer class="mt-[1rem]">
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
                        <p>مشترک شوید تا آخرین اخبار را دریافت کنید. <br>ما به شما تمامی اخبار و
                            فروش‌های
                            فوق‌العاده را
                            اطلاع رسانی می‌کنیم</p>
                        <button class="btn-base-two w-full mt-[1rem] btn-subscribe">مشترک شوید</button>
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

        <!-- menu mobile -->
        <div class="open_menu">
            <div class="menu-content">
                <div class="menu-btn menu-btn-close">
                    <svg id="Icons" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg"
                         fill='#DE1F0D'>
                        <path d="m4.59 59.41a2 2 0 0 0 2.83 0l24.58-24.58 24.59 24.58a2 2 0 0 0 2.83-2.83l-24.59-24.58 24.58-24.59a2 2 0 0 0 -2.83-2.83l-24.58 24.59-24.59-24.58a2 2 0 0 0 -2.82 2.82l24.58 24.59-24.58 24.59a2 2 0 0 0 0 2.82z"/>
                    </svg>
                </div>
                <div class="logomobile w-full flex justify-center">
                    <img src="assets/images/logo.png">
                </div>
                <ul>
                    <li><a href="#">صفحه اصلی </a></li>
                    <li class="menu-item-has-children relative">
                        <div class="accordion ">
                            <h4 class="accordion__title text-white">
                                محصولات
                                <i class="accordion__icon">
                                    <div class="line-01"></div>
                                    <div class="line-02"></div>
                                </i>
                            </h4>
                            <div class="accordion__content bg-[#212a2f]">
                                <div class="accordion accordion--nested">
                                    <h4 class="accordion__title text-white border-b-[1px] border-[#CBCBCB]">
                                        کــــــلاسیک
                                        <i class="accordion__icon">
                                            <div class="line-01"></div>
                                            <div class="line-02"></div>
                                        </i>
                                    </h4><!-- end .accordion__title -->
                                    <div class="accordion__content">
                                        <ul class="bg-[#263238] w-full under-links">
                                            <li class="py-[7px] li-link w-full"><a href="#">کت و شلوار</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">دامادی</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">کت‌تک</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">شلوار فاستونی</a></li>
                                        </ul>
                                    </div><!-- end .accordion__content -->
                                </div>
                                <div class="accordion accordion--nested">
                                    <h4 class="accordion__title text-white border-b-[1px] border-[#CBCBCB]">
                                        کــــــژوال
                                        <i class="accordion__icon">
                                            <div class="line-01"></div>
                                            <div class="line-02"></div>
                                        </i>
                                    </h4>
                                    <div class="accordion__content">
                                        <ul class="bg-[#263238] w-full under-links">
                                            <li class="py-[7px] li-link w-full"><a href="#">پیراهن</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">تی شرت/پلوشرت</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">شلوار جین</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">شلوار کتان</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">شلوارک کتان </a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">ست کژوال </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion accordion--nested">
                                    <h4 class="accordion__title text-white border-b-[1px] border-[#CBCBCB]">
                                        کالای فصلی
                                        <i class="accordion__icon">
                                            <div class="line-01"></div>
                                            <div class="line-02"></div>
                                        </i>
                                    </h4>
                                    <div class="accordion__content">
                                        <ul class="bg-[#263238] w-full under-links">
                                            <li class="py-[7px] li-link w-full"><a href="#">پالـــتو</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">کاپشن</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">بـــــارانی</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">ژاکــــت</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">پلیـــــور</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">ژیلـــــه</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">کت جین</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion accordion--nested">
                                    <h4 class="accordion__title text-white border-b-[1px] border-[#CBCBCB]">
                                        اکسسوری
                                        <i class="accordion__icon">
                                            <div class="line-01"></div>
                                            <div class="line-02"></div>
                                        </i>
                                    </h4>
                                    <div class="accordion__content">
                                        <ul class="bg-[#263238] w-full under-links">
                                            <li class="py-[7px] li-link w-full"><a href="#">دستکش</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">کمربند</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">کراوات</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">پاپیون</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">پوشت</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">شال گردن</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">دکمه سردست </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="accordion accordion--nested">
                                    <h4 class="accordion__title text-white border-b-[1px] border-[#CBCBCB]">
                                        کـــــــفش
                                        <i class="accordion__icon">
                                            <div class="line-01"></div>
                                            <div class="line-02"></div>
                                        </i>
                                    </h4>
                                    <div class="accordion__content">
                                        <ul class="bg-[#263238] w-full under-links">
                                            <li class="py-[7px] li-link w-full"><a href="#">کلاسیک</a></li>
                                            <li class="py-[7px] li-link w-full"><a href="#">کـــژوال</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">فروشگاه </a></li>
                    <li><a href="#">فروش سازمانی </a></li>
                    <li><a href="#">تماس با ما </a></li>
                    <li><a href="#">درباره ما </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div>

    </div>

</main>


<div class="loginModal w-full h-[100vh]">
    <div class="modal-content w-[37%] max-[900px]:w-full bg-white">
        <div class="head-auth flex items-center justify-center relative w-full h-[85px] bg-base-color">
            <span class="close absolute text-white right-[10px] closeModal">&times;</span>
            <div class="flex gap-[8px] items-center">
                <svg height="20" width="20" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 60.671 60.671" xml:space="preserve">
<g>
	<g>
		<ellipse style="fill:#fff;" cx="30.336" cy="12.097" rx="11.997" ry="12.097"/>
        <path style="fill:#fff;" d="M35.64,30.079H25.031c-7.021,0-12.714,5.739-12.714,12.821v17.771h36.037V42.9
			C48.354,35.818,42.661,30.079,35.64,30.079z"/>
	</g>
</g>
</svg>
                <h2 class="text-[19px] text-white font-bold">ورود یا ثبت نام</h2>
            </div>
        </div>
        <div class="body-auth overflow-y-auto pb-[1rem]	h-[90%]  w-full flex flex-col items-center">
            <h3 class="font-bold mt-[2rem] text-[20px] pb-[1.2rem] text-gray-c text-center">سلام
                <br>
                به وبگاه رسمی ایکات خوش آمدید!</h3>
            <div class="p-input mt-[5rem] flex flex-col items-center w-[90%]">
                <label class="text-[16px]" for="">لطفا برای ادامه شماره موبایل خود را وارد کنید</label>
                <input class="w-[85%] mt-[1rem] h-[45px] px-[1.5rem] rounded-[5px] text-[16px]" type="text"
                       placeholder="مثال: 09125873251">
                <a href=""
                   class="btn-one w-[85%] rounded-[5px] mt-[1rem] bg-base-color text-white h-[50px] flex items-center justify-center">
                    ادامـــــه

                </a>
            </div>
            <div class="w-full flex justify-center rules">
                <p class="text-[16px] w-[70%] leading-[24px] mt-[1.5rem] text-center">با ورود یا ثبت نام در وبگاه رسمی
                    ایکات، شما تمامی <a href="#">قوانین
                        و مقررات </a>سامانه فروشگاهی پوشاک ایکات را می‌پذیرید.</p>
            </div>
            <div class="detailbox w-[85%]">
                <span>یک حساب کاربری ایجاد کنید</span>
                <p>یک حساب کاربری ایجاد کنید تا از تمام مزایای مشتریان ثبت نام شده
                    ما بهره مند شوید.</p>
                <ul>
                    <li>موارد دلخواه خود را در همه دستگاه‌ها ذخیره کنید. <i class="ecut-snf1"></i></li>
                    <li>برای سفارشات بعدی در زمان پرداخت صرفه‌جویی کنید.<i class="ecut-snf2"></i></li>
                    <li>خریدهای خود را در تایخچه سفارشات مدیریت کنید.<i class="ecut-snf3"></i></li>
                    <li>امکان ذخیره سازی اطلاعات راهنمای هوشمند سایز در پروفایل. <i class="ecut-snf4"></i></li>
                    <li>برای بهره‌مندی از پیشنهادات ویژه، عضو باشگاه مشتریان شوید.
                        <i class="ecut-snf5"></i></li>
                </ul>

            </div>
            <div class="copyrightm">
                1991 - 2024 Ecut. All rights reserved
            </div>
        </div>


    </div>
</div>


<script src="assets/js/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/Flip.min.js"></script>
<script src="themes.js"></script>
<script>


    var swiperHeader = new Swiper(".swiperHeader", {
        pagination: {
            el: ".swiper-pagination-c",
        },
        slidesPerView: 1,
    });


    var swiperMain = new Swiper(".swiperMain", {
        direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: {
            releaseOnEdges: true,
        },
        speed: 900,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        effect: "creative",
        creativeEffect: {
            prev: {
                translate: [0, "-20%", -1],
            },
            next: {
                translate: [0, "100%", 0],
            },
        },
    });

    var swiperBanner = new Swiper(".swiper-banner", {
        pagination: {
            el: ".swiper-pagination-banner-2",
        },
        autoplay: true,
        loop: true,
    });
    var swiperBannerTwo = new Swiper(".swiper-banner-two", {
        pagination: {
            el: ".swiper-pagination-banner-5",
        },
        autoplay: true,
        loop: true,

    });
    var swiperCategory = new Swiper(".swiperCategory", {
        pagination: {
            el: ".swiper-pagination",
        },
        slidesPerView: 4,
        spaceBetween: 18,
        loop: true,
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
        navigation: {
            nextEl: ".swiper-button-next-category",
            prevEl: ".swiper-button-prev-category",
        },
    });
    var swiperProduct = new Swiper(".swiperProduct", {
        pagination: {
            el: ".swiper-pagination",
        },
        slidesPerView: 4,
        spaceBetween: 18,
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
        navigation: {
            nextEl: ".swiper-button-next-product",
            prevEl: ".swiper-button-prev-product",
        },
    });


</script>
<script>
    $(document).ready(function () {

        // MARK: SWIPER INIT BY ATTRIBUTE
        $('[swiper]').each(function () {
            try {
                let options = $(this).attr('swiper');
                eval('options=' + options);
                if (typeof options == 'object') {
                    new Swiper(this, options);
                }
            } catch (err) {
                console.error('Check swiper options', err);
            }
        });

        // MARK: CATEGORY SLIDER
        $('[category-slider]').each(function (_, cat) {
            let name = $(cat).attr('category-slider');

            $(cat).hover(function () {
                $('.category-slider-wrap').each(function (_, wrap) {
                    let item = $(`[category-slider-item=${name}]`, wrap);

                    if (item.length > 0) {
                        this.swiper.slideTo(item.index());
                    }
                });
            });
        });

    });
</script>
<script>
    gsap.registerPlugin(Flip);

    let layouts = ["final", "plain", "columns", "grid"],
        container = document.querySelector(".container"),
        curLayout = 0; // index of the current layout

    function nextState() {
        const state = Flip.getState(".letter, .for, .gsap", {props: "color,backgroundColor", simple: true}); // capture current state

        container.classList.remove(layouts[curLayout]); // remove old class
        curLayout = (curLayout + 1) % layouts.length;   // increment (loop back to the start if at the end)
        container.classList.add(layouts[curLayout]);    // add the new class

        Flip.from(state, { // animate from the previous state
            absolute: true,
            stagger: 0.07,
            duration: 0.7,
            ease: "power2.inOut",
            spin: curLayout === 0, // only spin when going to the "final" layout
            simple: true,
            onEnter: (elements, animation) => gsap.fromTo(elements, {opacity: 0}, {
                opacity: 1,
                delay: animation.duration() - 0.1
            }),
            onLeave: elements => gsap.to(elements, {opacity: 0})
        });

        gsap.delayedCall(curLayout === 0 ? 3.5 : 1.5, nextState);
    }

    gsap.delayedCall(1, nextState);
</script>
</body>
</html>