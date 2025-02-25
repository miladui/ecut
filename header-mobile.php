<div class="header-mobi fixed top-0 right-0  w-full px-[12px] h-[60px] bg-[#263238] flex items-center justify-between">
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
        <div class="cart basket-button relative">
            <i class=""></i>
            <span class="count absolute cart bottom-[-3px] bg-base-color-two w-[17px] pt-[4px] text-[11px] left-[-5px] text-white h-[17px] rounded-[50%] flex items-center justify-center">0</span>
        </div>
    </div>
</div>
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
            <li><a onclick="window.location.replace('index.php')" href="#">صفحه اصلی </a></li>
            <li><a style="display: flex !important;" class=" items-center border-b-[1px] border-[#88888826] justify-center gap-[12px]"  href="#">
                    <img  width="15" src="./assets/images/vector_snake.svg" class="ml-[8px]"  alt="" style="display: block;filter: invert(1)">
                    اکسکلوسیو
                </a></li>

            <li class="menu-item-has-children relative">
                <div class="accordion ">
                    <h4  class="accordion__title text-white">
                        محصولات
                        <i class="accordion__icon">
                            <div class="line-01"></div>
                            <div class="line-02"></div>
                        </i>
                    </h4>
                    <div class="accordion__content bg-[#212a2f]">
                        <div class="accordion accordion--nested">
                            <h4  class="accordion__title text-white border-b-[1px] border-[#CBCBCB]">
                                کــــــلاسیک
                                <i class="accordion__icon">
                                    <div class="line-01"></div>
                                    <div class="line-02"></div>
                                </i>
                            </h4><!-- end .accordion__title -->
                            <div class="accordion__content">
                                <ul class="bg-[#263238] w-full under-links">
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">کت و شلوار</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">دامادی</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">کت‌تک</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">شلوار فاستونی</a></li>
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
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">پیراهن</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">تی شرت/پلوشرت</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">شلوار جین</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">شلوار کتان</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">شلوارک کتان </a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">ست کژوال </a></li>
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
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">پالـــتو</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">کاپشن</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">بـــــارانی</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">ژاکــــت</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">پلیـــــور</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">ژیلـــــه</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">کت جین</a></li>
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
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">دستکش</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">کمربند</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">کراوات</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">پاپیون</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">پوشت</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">شال گردن</a></li>
                                    <li onclick="window.location.replace('list-product.php')" class="py-[7px] li-link w-full"><a href="#">دکمه سردست </a></li>
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
            <li><a onclick="window.location.replace('storeB.php')" href="#">فروشگاه </a></li>
            <li><a onclick="window.location.replace('organizational.php')" href="#">فروش سازمانی </a></li>
            <li><a onclick="window.location.replace('contactUs.php')" href="#">تماس با ما </a></li>
            <li><a onclick="window.location.replace('about-us.php')" href="#">درباره ما </a></li>
        </ul>
    </div>
</div>

