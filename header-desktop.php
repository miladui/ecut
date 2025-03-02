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
<div  class="search-modal">
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
        <div class="row-bottom overflow-y-auto overflow-x-hidden min-[1500px]:h-[90%] max-[900px]:px-[1px]	  px-[2rem] mt-[2rem] w-full flex justify-between items-start">
            <div class="right max-[900px]:hidden  flex flex-col w-[25%]">
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
            <div class="left w-[75%] max-[1699px]:grid-cols-4 max-[900px]:hidden grid min-[1700px]:grid-cols-5 gap-[1rem] max-[900px]:gap-[12px] min-[1800px]:gap-[3rem] list-product-search">
                <div class="product-search relative  flex flex-col items-center h-[400px]">
                    <div class="box-one absolute top-0 w-full">
                        <img id="main-image-1-sm" class="w-full h-[180px] object-cover" src="https://media.ecut.shop/product/PJA/PJA1156130/search/single-coat-01.jpg">
                        <div class="w-full gap-[12px] flex items-center mt-[12px] justify-center">
                            <h3 class="en-num text-[14px]">کت تک مدل PSU1153332 </h3>
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
                            <img id="main-image-1" class="w-full h-full main-image-1" src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="price h-full text-[16px] text-[#777]  flex items-center justify-center w-full bg-[#ffffff8f] ">
                                    165,000,000 ریال
                                </div>
                            </div>
                        </div>
                        <div class="colors flex mt-[10px] w-full items-center gap-[12px]">
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156130/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#D8D7D8]"
                                  onclick="changeImage('main-image-1', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156129/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#989BA2]"
                                  onclick="changeImage('main-image-1', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156128/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#26252C]"
                                  onclick="changeImage('main-image-1', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156127/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#A7B6BF]"
                                  onclick="changeImage('main-image-1', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156125/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#514552]"
                                  onclick="changeImage('main-image-1', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image2 , this)"></span>

                        </div>

                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-one absolute top-0 w-full">
                        <img id="main-image-2-sm" class="w-full object-cover h-[180px]"
                             src="https://media.ecut.shop/product/PJA/PJA1156129/search/single-coat-01.jpg">
                        <div class="w-full gap-[12px] flex items-center mt-[12px] justify-center">
                            <h3 class="en-num text-[14px]">کت تک مدل PSU1153332 </h3>
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
                            <img id="main-image-2" class="w-full h-full main-image-1" src="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg">
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
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156130/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#D8D7D8]"
                                  onclick="changeImage('main-image-2', this.dataset.image , this);changeImage('main-image-2-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156129/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#989BA2]"
                                  onclick="changeImage('main-image-2', this.dataset.image , this);changeImage('main-image-2-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156128/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#26252C]"
                                  onclick="changeImage('main-image-2', this.dataset.image , this);changeImage('main-image-2-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156127/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#A7B6BF]"
                                  onclick="changeImage('main-image-2', this.dataset.image , this);changeImage('main-image-2-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156125/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#514552]"
                                  onclick="changeImage('main-image-2', this.dataset.image , this);changeImage('main-image-2-sm', this.dataset.image2 , this)"></span>

                        </div>


                    </div>

                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-one absolute top-0 w-full">
                        <img id="main-image-3-sm" class="w-full object-cover h-[180px]"
                             src="https://media.ecut.shop/product/PJA/PJA1156128/search/single-coat-01.jpg">
                        <div class="w-full gap-[12px] flex items-center mt-[12px] justify-center">
                            <h3 class="en-num text-[14px]">کت تک مدل PSU1153332 </h3>
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
                            <img id="main-image-3" class="w-full h-full main-image-1" src="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg">
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
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156130/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#D8D7D8]"
                                  onclick="changeImage('main-image-3', this.dataset.image , this);changeImage('main-image-3-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156129/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#989BA2]"
                                  onclick="changeImage('main-image-3', this.dataset.image , this);changeImage('main-image-3-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156128/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#26252C]"
                                  onclick="changeImage('main-image-3', this.dataset.image , this);changeImage('main-image-3-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156127/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#A7B6BF]"
                                  onclick="changeImage('main-image-3', this.dataset.image , this);changeImage('main-image-3-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156125/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#514552]"
                                  onclick="changeImage('main-image-3', this.dataset.image , this);changeImage('main-image-3-sm', this.dataset.image2 , this)"></span>

                        </div>

                    </div>

                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-one absolute top-0 w-full">
                        <img id="main-image-4-sm" class="w-full object-cover h-[180px]"
                             src="https://media.ecut.shop/product/PJA/PJA1156127/search/single-coat-01.jpg">
                        <div class="w-full gap-[12px] flex items-center mt-[12px] justify-center">
                            <h3 class="en-num text-[14px]">کت تک مدل PSU1153332 </h3>
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
                            <img id="main-image-4" class="w-full h-full main-image-1" src="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg">
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
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156130/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#D8D7D8]"
                                  onclick="changeImage('main-image-4', this.dataset.image , this);changeImage('main-image-4-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156129/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#989BA2]"
                                  onclick="changeImage('main-image-4', this.dataset.image , this);changeImage('main-image-4-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156128/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#26252C]"
                                  onclick="changeImage('main-image-4', this.dataset.image , this);changeImage('main-image-4-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156127/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#A7B6BF]"
                                  onclick="changeImage('main-image-4', this.dataset.image , this);changeImage('main-image-4-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156125/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#514552]"
                                  onclick="changeImage('main-image-4', this.dataset.image , this);changeImage('main-image-4-sm', this.dataset.image2 , this)"></span>

                        </div>


                    </div>

                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[400px]">
                    <div class="box-one absolute top-0 w-full">
                        <img id="main-image-5-sm" class="w-full object-cover h-[180px]"
                             src="https://media.ecut.shop/product/PJA/PJA1156125/search/single-coat-01.jpg">
                        <div class="w-full gap-[12px] flex items-center mt-[12px] justify-center">
                            <h3 class="en-num text-[14px]">کت تک مدل PSU1153332 </h3>
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
                            <img id="main-image-5" class="w-full h-full main-image-1" src="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg">
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
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156130/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#D8D7D8]"
                                  onclick="changeImage('main-image-5', this.dataset.image , this);changeImage('main-image-5-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156129/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#989BA2]"
                                  onclick="changeImage('main-image-5', this.dataset.image , this);changeImage('main-image-5-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156128/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#26252C]"
                                  onclick="changeImage('main-image-5', this.dataset.image , this);changeImage('main-image-5-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156127/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#A7B6BF]"
                                  onclick="changeImage('main-image-5', this.dataset.image , this);changeImage('main-image-5-sm', this.dataset.image2 , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                  data-image2="https://media.ecut.shop/product/PJA/PJA1156125/search/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#514552]"
                                  onclick="changeImage('main-image-5', this.dataset.image , this);changeImage('main-image-5-sm', this.dataset.image2 , this)"></span>

                        </div>


                    </div>

                </div>
            </div>
            <div class="left-mobi pb-[2rem] w-full grid grid-cols-2 px-[12px] gap-[1rem] list-product-search min-[901px]:hidden">
                <div class="product-search relative w-full flex flex-col items-center h-[345px]">
                    <div class="box-fix absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 left-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative">
                            <img width="100%" id="main-image-1-mobi" class=" main-image-1"
                                 src="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="title-mobi absolute bottom-0 right-0 w-full h-[30px]  text-[#000] bg-[#cccccc90] flex items-center justify-center">
                                    <span class="text-[11px] text-[#000]">تی شرت 1698</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex mt-3 items-center justify-center">
                            <strong class="text-[14px]"> 165,000,000 ریال</strong>
                        </div>
                        <div class="colors flex mt-[10px] w-full items-center gap-[12px]">
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#D8D7D8]"
                                  onclick="changeImage('main-image-1-mobi', this.dataset.image , this) ; changeImage('main-image-1-sm', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#989BA2]"
                                  onclick="changeImage('main-image-1-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#26252C]"
                                  onclick="changeImage('main-image-1-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#A7B6BF]"
                                  onclick="changeImage('main-image-1-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#514552]"
                                  onclick="changeImage('main-image-1-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>

                        </div>

                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[345px]">
                    <div class="box-fix absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 left-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="discount-search-mobi">
                            <h6 class="text-[#fff]">25%</h6>
                        </div>
                        <div class="img w-full z0 relative">
                            <img width="100%" id="main-image-2-mobi" class="main-image-2-mobi"
                                 src="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="title-mobi absolute bottom-0 right-0 w-full h-[30px]  text-[#000] bg-[#cccccc90] flex items-center justify-center">
                                    <span class="text-[11px] text-[#000]">تی شرت 1698</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex mt-3 items-center justify-center">
                            <strong class="text-[14px]"> 165,000,000 ریال</strong>
                        </div>
                        <div class="colors flex mt-[10px] w-full items-center gap-[12px]">
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#D8D7D8]"
                                  onclick="changeImage('main-image-2-mobi', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#989BA2]"
                                  onclick="changeImage('main-image-2-mobi', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#26252C]"
                                  onclick="changeImage('main-image-2-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#A7B6BF]"
                                  onclick="changeImage('main-image-2-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#514552]"
                                  onclick="changeImage('main-image-2-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>

                        </div>

                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[345px]">
                    <div class="box-fix absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 left-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative">
                            <img width="100%" id="main-image-3-mobi" class=" main-image-1"
                                 src="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="title-mobi absolute bottom-0 right-0 w-full h-[30px]  text-[#000] bg-[#cccccc90] flex items-center justify-center">
                                    <span class="text-[11px] text-[#000]">تی شرت 1698</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex mt-3 items-center justify-center">
                            <strong class="text-[14px]"> 165,000,000 ریال</strong>
                        </div>
                        <div class="colors flex mt-[10px] w-full items-center gap-[12px]">
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#D8D7D8]"
                                  onclick="changeImage('main-image-3-mobi', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#989BA2]"
                                  onclick="changeImage('main-image-3-mobi', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#26252C]"
                                  onclick="changeImage('main-image-3-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#A7B6BF]"
                                  onclick="changeImage('main-image-3-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#514552]"
                                  onclick="changeImage('main-image-3-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>

                        </div>

                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[345px]">
                    <div class="box-fix absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 left-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative">
                            <img width="100%" id="main-image-4-mobi" class=" main-image-1"
                                 src="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="title-mobi absolute bottom-0 right-0 w-full h-[30px]  text-[#000] bg-[#cccccc90] flex items-center justify-center">
                                    <span class="text-[11px] text-[#000]">تی شرت 1698</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex mt-3 items-center justify-center">
                            <strong class="text-[14px]"> 165,000,000 ریال</strong>
                        </div>
                        <div class="colors flex mt-[10px] w-full items-center gap-[12px]">
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#D8D7D8]"
                                  onclick="changeImage('main-image-4-mobi', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#989BA2]"
                                  onclick="changeImage('main-image-4-mobi', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#26252C]"
                                  onclick="changeImage('main-image-4-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#A7B6BF]"
                                  onclick="changeImage('main-image-4-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#514552]"
                                  onclick="changeImage('main-image-4-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>

                        </div>

                    </div>
                </div>
                <div class="product-search relative w-full flex flex-col items-center h-[345px]">
                    <div class="box-fix absolute top-0 w-full">
                        <button class="btn-favorite absolute z-10 left-[10px] top-[10px]">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.7585 1.68716C10.4341 1.52308 10.3036 1.40748 10.1544 1.28815L9.85979 1.05321L8.84174 0.534866C7.99896 0.195516 7.15618 0.0351644 6.34696 0.0351644C5.03058 0.0351644 3.80743 0.445367 2.78938 1.13898C1.77133 1.84752 0.943467 2.83946 0.473598 4.00294C0.160352 4.74131 0 5.55426 0 6.41195C0 9.24235 1.72658 10.8981 3.71793 12.785L4.88514 13.9075C6.73106 15.7534 8.57697 17.5844 10.4042 19.4452C10.6429 19.6951 10.7585 19.7995 11.0829 19.7846C11.3962 19.7846 12.8095 18.2631 13.6075 17.4352L20.3684 10.6482C21.7855 8.94775 22.1994 7.10557 21.916 5.43493C21.7408 4.34229 21.2522 3.32425 20.5735 2.47028C19.8799 1.61258 18.9812 0.918965 17.9632 0.490117C16.4118 -0.173666 14.5659 -0.218416 12.7797 0.698947L12.2502 0.978631C12.0712 1.08305 11.9705 1.16882 11.8661 1.25831C11.702 1.39256 11.5416 1.538 11.2321 1.68716L10.9934 1.82141L10.7585 1.68716ZM3.99761 1.99668C5.0455 1.40748 6.16796 1.27323 7.21584 1.46342C8.35322 1.68716 9.4011 2.29128 10.2439 3.14898C10.9375 3.88734 11.3365 3.53308 11.9108 3.01473C12.6939 2.32111 13.712 1.40748 15.6026 1.40748C16.2217 1.40748 16.8407 1.55291 17.415 1.77293C18.0825 2.04143 18.6717 2.42553 19.0856 2.77979C19.645 3.2795 20.0291 3.88361 20.264 4.55112C20.5027 5.19999 20.6071 5.90852 20.6071 6.64689C20.6071 8.72774 18.8358 10.4096 17.2099 11.9609L15.4833 13.6576C14.0961 15.0747 11.7057 17.5098 11.2769 17.7895L10.9972 17.9797L10.7138 17.7895C10.2588 17.48 6.36187 13.5383 4.31086 11.4724L3.23314 10.3797C2.61038 9.7607 2.15543 9.25727 1.84591 8.63824C1.5364 8.0192 1.37232 7.31067 1.37232 6.30754C1.37232 5.37526 1.62217 4.53621 2.06593 3.81276C2.52461 3.07439 3.1884 2.45536 4.00134 1.99668H3.99761Z"
                                      fill="black"/>
                            </svg>
                        </button>
                        <div class="img w-full z0 relative">
                            <img width="100%" id="main-image-5-mobi" class=" main-image-1"
                                 src="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg">
                            <div class="absolute h-[37px] w-full flex items-center justify-between right-0 bottom-0">
                                <div class="title-mobi absolute bottom-0 right-0 w-full h-[30px]  text-[#000] bg-[#cccccc90] flex items-center justify-center">
                                    <span class="text-[11px] text-[#000]">تی شرت 1698</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex mt-3 items-center justify-center">
                            <strong class="text-[14px]"> 165,000,000 ریال</strong>
                        </div>
                        <div class="colors flex mt-[10px] w-full items-center gap-[12px]">
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156130/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#D8D7D8]"
                                  onclick="changeImage('main-image-5-mobi', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156129/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#989BA2]"
                                  onclick="changeImage('main-image-5-mobi', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156128/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#26252C]"
                                  onclick="changeImage('main-image-5-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156127/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#A7B6BF]"
                                  onclick="changeImage('main-image-5-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>
                            <span data-image="https://media.ecut.shop/product/PJA/PJA1156125/cover/single-coat-01.jpg"
                                  class="color-option w-[16px] h-[16px] bg-[#514552]"
                                  onclick="changeImage('main-image-5-mobi', this.dataset.image , this);changeImage('main-image-1-sm', this.dataset.image , this)"></span>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="loading-page flex items-center justify-center ">
    <div class="text-[180px]  max-[900px]:text-[50px] text-white p-loading-page">E C U T</div>
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
        <div class="w-full px-[5%] max-[1400px]:px-[2%]">
            <div class="p-header flex items-center justify-between h-[85px] w-full mx-auto">
                <ul class="links pt-[20px] h-full w-[40%] p-0 flex items-center">
                    <li><a onclick="window.location.replace('index.php')" href="#"
                           class="link header-link flex indexPage items-center text-white text-[12px] max-[1400px]:text-[11px] px-[8px] mx-[4px]">صفحه
                            اصلی </a>
                    </li>
                    <li onmouseover="showOverlay()" onmouseout="hideOverlay()"
                        class="h-full li-mega-menu flex items-center">
                        <div
                                class="link p-link-underMenu h-[90px] flex items-center text-white text-[12px] max-[1400px]:text-[11px] h-full px-[8px] mx-[4px]">
                            <a   class="header-link">
                                <span>محصولات</span>
                            </a>
                            <div class="underMenu-box">
                                <div class="w-full flex h-full  p-underLink-flex justify-between items-center">
                                    <div class="w-[60%] h-full p-[2rem] flex items-start gap-[1.2rem]">
                                        <div class="col-links h-full w-[120px]">
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="classic"
                                               class="title-link   text-black  text-[13px] font-bold">
                                                <span class="w-[120px] h-[30px]">کــــــلاسیک </span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="classic-1"
                                               class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک 1</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="classic-2"
                                               class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک 2</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="classic-3"
                                               class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک 3</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="classic-4"
                                               class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک 4</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="classic-5"
                                               class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک 5</span>
                                            </a>

                                        </div>
                                        <div category-slider="casual" class="col-links w-[120px]">
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="product-1" class="title-link   text-black  text-[13px] font-bold">
                                                <span class="w-[120px] h-[30px]">کالای فصلی</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="product-2" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="product-3" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="product-4" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="product-5" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="product-6" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>

                                        </div>
                                        <div category-slider="shoe" class="col-links w-[120px]">
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="product-7" class="title-link   text-black  text-[13px] font-bold">
                                                <span class="w-[120px] h-[30px]">اکسسوری</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="product-8" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="product-9" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="product-10" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="product-11" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" category-slider="product-12" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>

                                        </div>
                                        <div category-slider="seasonal" class="col-links  h-full w-[120px]">
                                            <div class="accordion accordion--open w-[120px]">
                                                <h4 category-slider="product-13" class=" flex items-center justify-between title-link  text-black  text-[13px] font-bold">
                                                    کفش
                                                </h4>
                                                <div class="acc-container">
                                                    <div category-slider="product-14" class="acc">
                                                        <div class="acc-head">
                                                            <div class="w-full flex items-center justify-between text-link">
                                                                <p class=" text-black  text-[12px]">کفش 1</p>
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
                                                            </div>
                                                        </div>
                                                        <div class="acc-content">
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
                                                    <div category-slider="product-15" class="acc">
                                                        <div class="acc-head">
                                                            <div class="w-full flex items-center justify-between text-link">
                                                                <p class=" text-black  text-[12px]">کفش 2</p>
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
                                                            </div>

                                                        </div>
                                                        <div class="acc-content">
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
                                                    <div category-slider="product-16" class="acc">
                                                        <div class="acc-head">
                                                            <div class="w-full flex items-center justify-between text-link">
                                                                <p class=" text-black  text-[12px]">کفش 3</p>
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
                                                            </div>

                                                        </div>
                                                        <div class="acc-content">
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
                                            <a onclick="window.location.replace('list-product.php')" href="#" class="title-link   text-black  text-[13px] font-bold">
                                                <span class="w-[120px] h-[30px]">کــــــژوال</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>
                                            <a onclick="window.location.replace('list-product.php')" href="#" class="text-link text-black  text-[12px]">
                                                <span class="w-[100px] h-[30px]">کــــــلاسیک</span>
                                            </a>

                                        </div>
                                        <div category-slider="ecutCart" class="col-cart w-[220px]">
                                            <a onclick="window.location.replace('ecut-cart.php')" href=""
                                               class="title-link   text-black  text-[13px] font-bold">
                                                <span class="w-[220px] h-[30px]">ایکات کارت</span>
                                            </a>
                                            <a onclick="window.location.replace('ecut-cart.php')" href="#">
                                                <img class="w-full" src="assets/images/card.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="slider-header h-full pr-[4rem] flex justify-end w-[40%]">
                                        <div class="swiper swiperHeader category-slider-wrap w-full h-full">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide" category-slider-item="classic"><img
                                                            class="w-full h-full"
                                                            src="assets/images/slider-img-head/1.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="casual"><img
                                                            class="w-full h-full"
                                                            src="assets/images/slider-img-head/3.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="shoe"><img
                                                            class="w-full h-full"
                                                            src="assets/images/slider-img-head/5.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="seasonal"><img
                                                            class="w-full h-full"
                                                            src="assets/images/slider-img-head/2.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="sports"><img
                                                            class="w-full h-full"
                                                            src="assets/images/slider-img-head/5.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="ecutCart"><img
                                                            class="w-full h-full"
                                                            src="assets/images/slider-img-head/Ecut-Card.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="classic-1"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/1.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="classic-2"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/2.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="classic-3"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/3.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="classic-4"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/4.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="classic-5"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/5.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-1"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/6.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-2"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/7.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-3"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/8.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-4"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/1.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-5"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/2.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-6"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/3.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-7"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/4.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-8"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/5.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-9"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/6.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-10"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/7.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-11"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/8.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-12"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/1.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-13"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/2.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-14"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/3.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-15"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/4.jpg" alt="">
                                                </div>
                                                <div class="swiper-slide" category-slider-item="product-16"><img
                                                            class="w-full h-full"
                                                            src="assets/images/head-item/5.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-pagination-c"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a onclick="window.location.replace('storeB.php')" href="#"
                           class="link header-link storePage flex  items-center text-white text-[12px] max-[1400px]:text-[11px] px-[8px] mx-[4px]"
                        >فروشگاه </a>
                    </li>
                    <li><a onclick="window.location.replace('organizational.php')" href="#"
                           class="link header-link organizationalPage flex items-center text-white text-[12px] max-[1400px]:text-[11px] px-[8px] mx-[4px]">فروش
                            سازمانی </a></li>
                    <li><a onclick="window.location.replace('contactUs.php')" href="#"
                           class="link header-link contactUsPage flex items-center text-white text-[12px] max-[1400px]:text-[11px] px-[8px] mx-[4px]">تماس
                            با
                            ما </a>
                    </li>
                    <li><a onclick="window.location.replace('about-us.php')" href="#"
                           class="link header-link aboutUsPage flex items-center text-white text-[12px] max-[1400px]:text-[11px] px-[8px] mx-[4px]">درباره
                            ما </a></li>
                    <li><a onclick="window.location.replace('list-product-landing.php')" href="#"
                           class="link header-link aboutUsPage  flex items-center text-white text-[12px] max-[1400px]:text-[11px] px-[8px] mx-[4px]">تک سایزها
                        </a></li>
                </ul>
                <a href="" class="logo-header w-[20%] flex justify-center">
                    <img width="100" id="logoHeader" src="https://ecut.shop/uploads/setting/img-logo-154771900376273.png">
                </a>
                <div class="end-header pt-[20px] gap-[20px] flex items-center w-[40%] justify-end">
                    <a onclick="window.location.replace('special-products.php')" href="#"
                           class="link header-link aboutUsPage last-link flex items-center text-white text-[12px] px-[8px] mx-[4px]">
                        <svg class="ml-[6px]" width="18" height="25" viewBox="0 0 83 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Layer_x0020_1">
                                <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M35.3499 0.541538C31.1686 1.4931 28.4389 4.01439 27.338 7.79633C25.1223 14.2663 26.6434 20.948 29.9565 26.7373C23.0108 33.9157 18.826 46.4631 23.24 55.8815C10.5294 60.9171 1.96882 73.4263 0.249754 86.8003C-1.53529 99.8061 6.37239 110.357 19.9929 109.679C32.068 108.71 42.6325 101.532 51.2312 93.4543C55.482 89.2799 59.4202 84.7374 62.8757 79.8858C65.72 74.3292 60.3718 70.7765 55.2702 76.5241C48.3071 84.3658 42.2088 92.8291 31.9083 96.6527C16.7701 101.244 9.73759 89.332 15.2212 76.4407C17.9544 70.016 21.3161 66.491 27.1539 63.8933C27.9596 63.5356 28.1333 64.4594 28.8626 65.4283C32.3702 70.0785 36.8328 73.0686 42.5977 73.9924C49.8247 75.4753 56.6628 68.0851 54.1832 61.1984C51.2972 52.3148 38.847 49.1719 30.7761 52.2836C29.519 47.0569 31.9639 40.2467 35.5548 36.3501C45.9976 52.5579 67.5988 47.6994 77.9062 33.9608C80.7505 30.5539 82.6397 26.706 82.9627 22.2121C83.2648 18.0065 81.7333 14.5927 78.316 12.1166C67.0327 4.44502 49.3906 10.6093 39.5625 18.3573C36.9231 13.0264 40.5869 7.04619 44.9002 5.18127C43.9417 2.08348 40.2987 0.354004 37.0967 0.354004C36.4925 0.354004 35.9021 0.416515 35.3499 0.541538ZM41.278 30.863C47.807 24.9036 57.0031 19.736 65.9943 22.2781C69.8284 23.254 71.6447 27.5638 68.856 31.0054C65.1088 35.6312 59.6008 37.9094 54.3568 37.9094C49.0017 37.9094 43.9209 35.534 41.278 30.863ZM34.6102 60.1461C38.5067 59.8579 42.5665 59.3474 45.8518 61.7124C47.2444 62.7785 47.3625 65.0394 45.3968 65.529C44.9627 65.6367 44.5217 65.6888 44.0702 65.6888C40.5522 65.6888 36.7321 62.5841 34.6102 60.1461Z" fill="#fb923c"/>
                            </g>
                        </svg>
                            اکسکلوسیو
                        </a>
                    <button class="btn-search">
                        <i class="fa fa-search text-white"></i>
                    </button>
                    <a href="#" class="link-auth flex items-center openModal">
                        <span class="text-[12px] text-white">ورود</span>
                        <div class="line-between h-[11px] w-[1.5px] bg-base-color-two mx-[8px]"></div>
                        <span class="text-[12px] text-white">عضویت</span>
                    </a>
                    <div class="cart basket-button  relative">
                        <i class=""></i>
                        <span class="count absolute cart bottom-[-3px] bg-base-color-two w-[17px] pt-[4px] text-[11px] left-[-5px] text-white h-[17px] rounded-[50%] flex items-center justify-center">0</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<!--ecut-modal-basket-->
<div class="ecut-modal ecut-modal-basket">
    <div class="bg-overly-ecut"></div>
    <div class="box-ecut-modal">
        <div class="row-close pt-[1rem] px-[2rem] flex justify-between w-full">
            <h6 class="text-[15px] text-[#646464] font-bold">سبد خرید شما</h6>
            <button class="close-modal-ecut">
                <svg xmlns="http://www.w3.org/2000/svg" width="12.724" height="12.707" viewBox="0 0 12.724 12.707">
                    <g id="Close_standard" transform="translate(0.354 0.354)">
                        <line id="Line_33" data-name="Line 33" x1="12" y2="12" transform="translate(0.017)" fill="none"
                              stroke="#242127" stroke-width="1"></line>
                        <line id="Line_34" data-name="Line 34" x1="12" y2="12" transform="translate(12) rotate(90)"
                              fill="none" stroke="#242127" stroke-width="1"></line>
                    </g>
                </svg>
            </button>
        </div>
        <div class="w-full flex flex-col items-center h-[80%]">
            <div class="items-basket p-[1rem] flex flex-col overflow-y-auto items-center h-[90%]">
                <div class="item-basket py-3 border-b-[1px] border-[#cccccc99] gap-[12px] flex items-center justify-start w-full">
                    <div class="img rounded-[8px] overflow-hidden w-[30%] relative">
                        <img class="w-full" src="https://media.ecut.shop/product/XJA/XJA1156095/cover/single-coat-01.jpg" alt="">
                        <button class="absolute right-[6px] top-[6px] w-[32px] h-[32px] flex items-center justify-center bg-white rounded-[50%]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff0000"
                                 class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="w-[70%] flex flex-col items-start">
                        <h2 class="text-[15px]"><a href="">کفش مونک 3997</a></h2>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <span class="text-[13px]">رنگ :</span>
                            <span class="text-[13px]">قهوه ای</span>
                        </div>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <span class="text-[13px]">سایز :</span>
                            <span class="text-[13px]">42</span>
                        </div>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <strong class="text-[18px] text-[#198754]">11,857,800</strong>
                            <span class="text-[13px] text-[#198754]">تومان</span>
                        </div>
                        <div class="item mt-2 flex items-center gap-[12px] justify-center">
                            <span class="text-[13px] text-[#646464] font-bold">تعداد :</span>
                            <div class="flex p-count items-center justify-center gap-[4px]">
                                <button class="btn-increase" onclick="changeQuantity(1)">+</button>
                                <input id="quantity-input" onchange="updatePrice()" value="1" type="text" placeholder=""
                                       disabled>
                                <button class="btn-decrease" onclick="changeQuantity(-1)">-</button>
                            </div>
                        </div>
                        <small class="text-red-700 mt-2 text-[12px]"> تنها 1 عدد در انبار باقی است</small>
                    </div>
                </div>
                <div class="item-basket py-3 border-b-[1px] border-[#cccccc99] gap-[12px] flex items-center justify-start w-full">
                    <div class="img rounded-[8px] overflow-hidden w-[30%] relative">
                        <img class="w-full" src="https://media.ecut.shop/product/XSH/XSH1153997/cover/shoes-01.jpg" alt="">
                        <button class="absolute right-[6px] top-[6px] w-[32px] h-[32px] flex items-center justify-center bg-white rounded-[50%]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff0000"
                                 class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="w-[70%] flex flex-col items-start">
                        <h2 class="text-[15px]"><a href="">کفش مونک 3997</a></h2>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <span class="text-[13px]">رنگ :</span>
                            <span class="text-[13px]">قهوه ای</span>
                        </div>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <span class="text-[13px]">سایز :</span>
                            <span class="text-[13px]">42</span>
                        </div>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <strong class="text-[18px] text-[#198754]">11,857,800</strong>
                            <span class="text-[13px] text-[#198754]">تومان</span>
                        </div>
                        <div class="item mt-2 flex items-center gap-[12px] justify-center">
                            <span class="text-[13px] text-[#646464] font-bold">تعداد :</span>
                            <div class="flex p-count items-center justify-center gap-[4px]">
                                <button class="btn-increase" onclick="changeQuantity(1)">+</button>
                                <input id="quantity-input" onchange="updatePrice()" value="1" type="text" placeholder=""
                                       disabled>
                                <button class="btn-decrease" onclick="changeQuantity(-1)">-</button>
                            </div>
                        </div>
                        <small class="text-red-700 mt-2 text-[12px]"> تنها 1 عدد در انبار باقی است</small>
                    </div>
                </div>
                <div class="item-basket py-3 border-b-[1px] border-[#cccccc99] gap-[12px] flex items-center justify-start w-full">
                    <div class="img rounded-[8px] overflow-hidden w-[30%] relative">
                        <img class="w-full" src="https://media.ecut.shop/product/XJA/XJA1156103/cover/single-coat-01.jpg" alt="">
                        <button class="absolute right-[6px] top-[6px] w-[32px] h-[32px] flex items-center justify-center bg-white rounded-[50%]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff0000"
                                 class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="w-[70%] flex flex-col items-start">
                        <h2 class="text-[15px]"><a href="">کفش مونک 3997</a></h2>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <span class="text-[13px]">رنگ :</span>
                            <span class="text-[13px]">قهوه ای</span>
                        </div>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <span class="text-[13px]">سایز :</span>
                            <span class="text-[13px]">42</span>
                        </div>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <strong class="text-[18px] text-[#198754]">11,857,800</strong>
                            <span class="text-[13px] text-[#198754]">تومان</span>
                        </div>
                        <div class="item mt-2 flex items-center gap-[12px] justify-center">
                            <span class="text-[13px] text-[#646464] font-bold">تعداد :</span>
                            <div class="flex p-count items-center justify-center gap-[4px]">
                                <button class="btn-increase" onclick="changeQuantity(1)">+</button>
                                <input id="quantity-input" onchange="updatePrice()" value="1" type="text" placeholder=""
                                       disabled>
                                <button class="btn-decrease" onclick="changeQuantity(-1)">-</button>
                            </div>
                        </div>
                        <small class="text-red-700 mt-2 text-[12px]"> تنها 1 عدد در انبار باقی است</small>
                    </div>
                </div>
                <div class="item-basket py-3 border-b-[1px] border-[#cccccc99] gap-[12px] flex items-center justify-start w-full">
                    <div class="img rounded-[8px] overflow-hidden w-[30%] relative">
                        <img class="w-full" src="https://media.ecut.shop/product/PMT/PMT1157073/cover/rain_clothes_01.jpg" alt="">
                        <button class="absolute right-[6px] top-[6px] w-[32px] h-[32px] flex items-center justify-center bg-white rounded-[50%]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff0000"
                                 class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="w-[70%] flex flex-col items-start">
                        <h2 class="text-[15px]"><a href="">کفش مونک 3997</a></h2>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <span class="text-[13px]">رنگ :</span>
                            <span class="text-[13px]">قهوه ای</span>
                        </div>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <span class="text-[13px]">سایز :</span>
                            <span class="text-[13px]">42</span>
                        </div>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <strong class="text-[18px] text-[#198754]">11,857,800</strong>
                            <span class="text-[13px] text-[#198754]">تومان</span>
                        </div>
                        <div class="item mt-2 flex items-center gap-[12px] justify-center">
                            <span class="text-[13px] text-[#646464] font-bold">تعداد :</span>
                            <div class="flex p-count items-center justify-center gap-[4px]">
                                <button class="btn-increase" onclick="changeQuantity(1)">+</button>
                                <input id="quantity-input" onchange="updatePrice()" value="1" type="text" placeholder=""
                                       disabled>
                                <button class="btn-decrease" onclick="changeQuantity(-1)">-</button>
                            </div>
                        </div>
                        <small class="text-red-700 mt-2 text-[12px]"> تنها 1 عدد در انبار باقی است</small>
                    </div>
                </div>
                <div class="item-basket py-3 border-b-[1px] border-[#cccccc99] gap-[12px] flex items-center justify-start w-full">
                    <div class="img rounded-[8px] overflow-hidden w-[30%] relative">
                        <img class="w-full" src="assets/images/5.jpg" alt="">
                        <button class="absolute right-[6px] top-[6px] w-[32px] h-[32px] flex items-center justify-center bg-white rounded-[50%]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff0000"
                                 class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="w-[70%] flex flex-col items-start">
                        <h2 class="text-[15px]"><a href="">کفش مونک 3997</a></h2>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <span class="text-[13px]">رنگ :</span>
                            <span class="text-[13px]">قهوه ای</span>
                        </div>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <span class="text-[13px]">سایز :</span>
                            <span class="text-[13px]">42</span>
                        </div>
                        <div class="w-full mt-2 flex items-center justify-start gap-[4px]">
                            <strong class="text-[18px] text-[#198754]">11,857,800</strong>
                            <span class="text-[13px] text-[#198754]">تومان</span>
                        </div>
                        <div class="item mt-2 flex items-center gap-[12px] justify-center">
                            <span class="text-[13px] text-[#646464] font-bold">تعداد :</span>
                            <div class="flex p-count items-center justify-center gap-[4px]">
                                <button class="btn-increase" onclick="changeQuantity(1)">+</button>
                                <input id="quantity-input" onchange="updatePrice()" value="1" type="text" placeholder=""
                                       disabled>
                                <button class="btn-decrease" onclick="changeQuantity(-1)">-</button>
                            </div>
                        </div>
                        <small class="text-red-700 mt-2 text-[12px]"> تنها 1 عدد در انبار باقی است</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex px-[1rem] items-center justify-between">
            <h3 class="text-[#646464] text-[18px] font-bold">مبلغ قابل پرداخت :</h3>
            <div class="flex items-center gap-[4px]">
                <strong class="text-[18px] text-[#646464]">11,857,800</strong>
                <span class="text-[15px] text-[#646464]">تومان</span>
            </div>
        </div>
        <div class="w-full mt-3 px-[1rem] grid grid-cols-2 gap-[10px]">
            <button class="btn-base w-full">سبد خرید</button>
            <button onclick="window.location.replace('checkout.php')" class="btn-base w-full">تسویه حساب</button>
        </div>
    </div>
</div>

