<?php include 'script-header.php'; ?>

<meta name="viewport" content="width=device-width, initial-scale=1">


<section class="s-cart mt-[3rem]">
    <div class="c-container">
        <div class="p-cart flex flex-col items-center w-full">
            <a class="logo" href="">
                <svg width="150" height="60" viewBox="0 0 194 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.8077 40.1366V30.0704H9.99893V10.0405H37.0954V0H0V70.207H37.0954V60.1665H9.99893V40.1366H37.8077Z"
                          fill="#F97316"/>
                    <path d="M179.014 0H170.644H149.959V10.0405H170.644V70.079H180.617V10.0405H194V0H179.014Z"
                          fill="#F97316"/>
                    <path d="M150.112 47.1035V0H140.138V47.2828L140.163 47.6926C140.163 47.7695 140.545 54.5571 136.678 58.3991C134.897 60.1921 132.302 61.191 128.994 61.4215C128.791 61.4215 128.587 61.4472 128.384 61.4472C128.104 61.4728 127.798 61.4728 127.493 61.4728C127.162 61.4728 126.857 61.4728 126.552 61.4472C126.348 61.4472 126.17 61.4215 125.992 61.4215C122.684 61.191 120.089 60.2177 118.308 58.4503C114.339 54.5315 114.772 47.7439 114.772 47.6926L114.797 47.4877V0H104.824V47.1035C104.722 48.8965 104.493 58.8346 111.235 65.5454C114.517 68.8239 118.766 70.7449 123.931 71.334V71.3597C124.16 71.3853 124.415 71.3852 124.669 71.4109C124.923 71.4365 125.203 71.4621 125.458 71.4621C125.61 71.4878 125.737 71.4877 125.89 71.4877C126.399 71.5133 126.908 71.539 127.442 71.539H127.468C127.493 71.539 127.493 71.539 127.518 71.539C128.027 71.539 128.562 71.5133 129.07 71.4877C129.198 71.4877 129.35 71.4878 129.478 71.4621C129.757 71.4621 130.012 71.4365 130.266 71.4109C130.521 71.3852 130.75 71.3853 131.03 71.3597V71.334C136.169 70.7449 140.418 68.8239 143.7 65.5454C150.442 58.8346 150.213 48.8965 150.112 47.1035Z"
                          fill="#F97316"/>
                    <path d="M92.611 52.9178C87.8787 58.4503 80.882 61.9594 73.0711 61.9594C58.8486 61.9594 47.2977 50.3052 47.2977 35.9872C47.2977 21.6948 58.8486 10.0405 73.0711 10.0405C80.7547 10.0405 87.6498 13.4215 92.3821 18.826H104.493C98.4375 7.6072 86.632 0 73.0711 0C53.353 0 37.3242 16.1366 37.3242 35.9872C37.3242 55.8634 53.353 72 73.0711 72C86.7338 72 98.6155 64.2646 104.645 52.9178H92.611Z"
                          fill="#F97316"/>
                </svg>

            </a>
            <div class="bg-base-color box-route-active h-[110px] mt-[1rem] w-full flex items-center justify-center">
                <div class="pages w-[57%] pb-[1rem] flex items-start justify-center">
                    <div class="page-active ml-[5px] flex flex-col relative items-center">
                        <div class="circle w-[22px] h-[22px] rounded-[50%] bg-base-color-two flex items-center justify-center p-[4px]">
                            <div class="circle-two rounded-[50%] bg-white w-[9px] h-[9px]"></div>
                        </div>
                        <span class="text-white text-[13px] font-bold  absolute w-[100px] text-center top-[30px]">سبد خرید</span>
                    </div>
                    <div class="border-active w-[35%] border-t-[1px] border-white relative top-[11px]"></div>
                    <div class="page-deActive mx-[5px] relative flex flex-col justify-center items-center">
                        <div class="circle w-[22px] h-[22px] rounded-[50%] border-[1px] border-[#fb923c] flex items-center justify-center p-[4px]">
                            <div class="circle-two rounded-[50%] bg-white w-[9px] h-[9px]"></div>
                        </div>
                        <span class="text-white  text-[13px] absolute w-[170px] text-center top-[30px]">نشانی و نحوه ارسال</span>
                    </div>
                    <div class="border-active w-[35%] border-t-[1px] border-white relative top-[11px]"></div>
                    <div class="page-deActive mr-[5px] relative flex flex-col justify-center items-center">
                        <div class="circle w-[22px] h-[22px] rounded-[50%] border-[1px] border-[#fb923c] flex items-center justify-center p-[4px]">
                            <div class="circle-two rounded-[50%] bg-white w-[9px] h-[9px]"></div>
                        </div>
                        <span class="text-white  text-[13px] absolute w-[100px] text-center top-[30px]">پرداخت</span>
                    </div>
                </div>

            </div>
            <div class="main-cart mt-[2rem] w-full flex items-start justify-between">
                <div class="products-cart w-[56%] flex items-start justify-between">
                    <div class="product-cart w-[29%] flex flex-col items-center">
                        <div class="p-img rounded-[4px] overflow-hidden w-full relative">
                            <img class="w-full" src="assets/images/2.jpg" alt="">
                            <div class="close-product absolute left-[1px] top-[1px]">
                                <svg width="18" height="18" viewBox="0 0 25 25" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2203 0H18.4703H6.52542H2.77542C1.24576 0 0 1.24576 0 2.77966V6.52966V18.6102V22.2246C0 23.7542 1.24576 25 2.77966 25H6.52542H18.6102H22.2203C23.7542 25 25 23.7542 25 22.2203V18.4746V6.52966V2.77966C25 1.24576 23.7542 0 22.2203 0ZM17.5 19.4449L12.5 14.4449L7.5 19.4449L5.55509 17.5L10.5551 12.5L5.55509 7.5L7.5 5.55508L12.5 10.5551L17.5 5.55508L19.4449 7.5L14.4449 12.5L19.4449 17.5L17.5 19.4449Z"
                                          fill="#777777"/>
                                </svg>
                            </div>
                        </div>
                        <div class="title-box w-full h-[37px] mt-[1.5rem] bg-base-color rounded-[4px] text-white px-[8px] flex  items-center text-[14px]">
                            پلو شرت 6038، رنگ آبی روشن
                        </div>
                        <div class="detail-box w-full h-[37px] mt-[7px] bg-[#D9D9D9] rounded-[4px] text-[#000] px-[8px] flex items-center text-[14px]">
                            سایز: M
                        </div>
                        <div class="detail-box w-full h-[37px] mt-[7px] bg-[#D9D9D9] rounded-[4px] text-[#000] px-[8px] flex items-center text-[14px]">
                            تعداد:
                            <div class="count-product mr-[6px] flex items-center">
                                <button class="border-[1px] border-[#000] w-[20px] h-[20px]">+</button>
                                <input value="2"
                                       class="border-t-[1px] border-b-[1px] border-[#000] w-[20px] h-[20px] bg-white text-center"
                                       type="text">
                                <button class="border-[1px] border-[#000] w-[20px] h-[20px]">-</button>
                            </div>
                        </div>
                        <div class="detail-box w-full h-[37px] mt-[7px] bg-[#D9D9D9] rounded-[4px] text-[#000] px-[8px] flex items-center justify-between text-[14px]">
                            <span>قبل از تخفیف:</span>
                            <div class="price flex items-center gap-[4px]">
                                <strong>25,000,000</strong>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="detail-box w-full h-[37px] mt-[7px] bg-base-color-two rounded-[4px] text-[#000] px-[8px] flex items-center justify-between text-[14px]">
                            <span class="text-white">قابل پرداخت:</span>
                            <div class="price flex items-center gap-[4px]">
                                <strong class="text-white">12,500,000</strong>
                                <span class="text-white">تومان</span>
                            </div>
                        </div>
                        <span class="w-full mt-[7px] text-center text-[#FF0004] text-[13px]">
                            تنها 2 عدد در انبار باقی مانده است
                        </span>
                    </div>
                    <div class="product-cart w-[29%] flex flex-col items-center">
                        <div class="p-img rounded-[4px] overflow-hidden w-full relative">
                            <img class="w-full" src="assets/images/new-imges/Shirt-01.jpg" alt="">
                            <div class="close-product absolute left-[1px] top-[1px]">
                                <svg width="18" height="18" viewBox="0 0 25 25" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2203 0H18.4703H6.52542H2.77542C1.24576 0 0 1.24576 0 2.77966V6.52966V18.6102V22.2246C0 23.7542 1.24576 25 2.77966 25H6.52542H18.6102H22.2203C23.7542 25 25 23.7542 25 22.2203V18.4746V6.52966V2.77966C25 1.24576 23.7542 0 22.2203 0ZM17.5 19.4449L12.5 14.4449L7.5 19.4449L5.55509 17.5L10.5551 12.5L5.55509 7.5L7.5 5.55508L12.5 10.5551L17.5 5.55508L19.4449 7.5L14.4449 12.5L19.4449 17.5L17.5 19.4449Z"
                                          fill="#777777"/>
                                </svg>
                            </div>
                        </div>
                        <div class="title-box w-full h-[37px] mt-[1.5rem] bg-base-color rounded-[4px] text-white px-[8px] flex  items-center text-[14px]">
                            پلو شرت 6038، رنگ آبی روشن
                        </div>
                        <div class="detail-box w-full h-[37px] mt-[7px] bg-[#D9D9D9] rounded-[4px] text-[#000] px-[8px] flex items-center text-[14px]">
                            سایز: M
                        </div>
                        <div class="detail-box w-full h-[37px] mt-[7px] bg-[#D9D9D9] rounded-[4px] text-[#000] px-[8px] flex items-center text-[14px]">
                            تعداد:
                            <div class="count-product mr-[6px] flex items-center">
                                <button class="border-[1px] border-[#000] w-[20px] h-[20px]">+</button>
                                <input value="2"
                                       class="border-t-[1px] border-b-[1px] border-[#000] w-[20px] h-[20px] bg-white text-center"
                                       type="text">
                                <button class="border-[1px] border-[#000] w-[20px] h-[20px]">-</button>
                            </div>
                        </div>
                        <div class="detail-box w-full h-[37px] mt-[7px] bg-[#D9D9D9] rounded-[4px] text-[#000] px-[8px] flex items-center justify-between text-[14px]">
                            <span>قبل از تخفیف:</span>
                            <div class="price flex items-center gap-[4px]">
                                <strong>25,000,000</strong>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="detail-box w-full h-[37px] mt-[7px] bg-base-color-two rounded-[4px] text-[#000] px-[8px] flex items-center justify-between text-[14px]">
                            <span class="text-white">قابل پرداخت:</span>
                            <div class="price flex items-center gap-[4px]">
                                <strong class="text-white">12,500,000</strong>
                                <span class="text-white">تومان</span>
                            </div>
                        </div>
                        <span class="w-full mt-[7px] text-center text-[#FF0004] text-[13px]">
                            تنها 2 عدد در انبار باقی مانده است
                        </span>
                    </div>
                    <div class="product-cart w-[29%] flex flex-col items-center">
                        <div class="p-img rounded-[4px] overflow-hidden w-full relative">
                            <img class="w-full" src="assets/images/new-imges/single-coat-01.jpg" alt="">
                            <div class="close-product absolute left-[1px] top-[1px]">
                                <svg width="18" height="18" viewBox="0 0 25 25" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2203 0H18.4703H6.52542H2.77542C1.24576 0 0 1.24576 0 2.77966V6.52966V18.6102V22.2246C0 23.7542 1.24576 25 2.77966 25H6.52542H18.6102H22.2203C23.7542 25 25 23.7542 25 22.2203V18.4746V6.52966V2.77966C25 1.24576 23.7542 0 22.2203 0ZM17.5 19.4449L12.5 14.4449L7.5 19.4449L5.55509 17.5L10.5551 12.5L5.55509 7.5L7.5 5.55508L12.5 10.5551L17.5 5.55508L19.4449 7.5L14.4449 12.5L19.4449 17.5L17.5 19.4449Z"
                                          fill="#777777"/>
                                </svg>
                            </div>
                        </div>
                        <div class="title-box w-full h-[37px] mt-[1.5rem] bg-base-color rounded-[4px] text-white px-[8px] flex  items-center text-[14px]">
                            پلو شرت 6038، رنگ آبی روشن
                        </div>
                        <div class="detail-box w-full h-[37px] mt-[7px] bg-[#D9D9D9] rounded-[4px] text-[#000] px-[8px] flex items-center text-[14px]">
                            سایز: M
                        </div>
                        <div class="detail-box w-full h-[37px] mt-[7px] bg-[#D9D9D9] rounded-[4px] text-[#000] px-[8px] flex items-center text-[14px]">
                            تعداد:
                            <div class="count-product mr-[6px] flex items-center">
                                <button class="border-[1px] border-[#000] w-[20px] h-[20px]">+</button>
                                <input value="2"
                                       class="border-t-[1px] border-b-[1px] border-[#000] w-[20px] h-[20px] bg-white text-center"
                                       type="text">
                                <button class="border-[1px] border-[#000] w-[20px] h-[20px]">-</button>
                            </div>
                        </div>
                        <div class="detail-box w-full h-[37px] mt-[7px] bg-[#D9D9D9] rounded-[4px] text-[#000] px-[8px] flex items-center justify-between text-[14px]">
                            <span>قبل از تخفیف:</span>
                            <div class="price flex items-center gap-[4px]">
                                <strong>25,000,000</strong>
                                <span>تومان</span>
                            </div>
                        </div>
                        <div class="detail-box w-full h-[37px] mt-[7px] bg-base-color-two rounded-[4px] text-[#000] px-[8px] flex items-center justify-between text-[14px]">
                            <span class="text-white">قابل پرداخت:</span>
                            <div class="price flex items-center gap-[4px]">
                                <strong class="text-white">12,500,000</strong>
                                <span class="text-white">تومان</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="detail-cart w-[40%] bg-[#F2F2F2] rounded-[8px] h-auto overflow-hidden flex flex-col items-center">
                    <div class="title w-full h-[50px] flex items-center justify-center bg-[#777777]">
                        <span class="font-bold text-white text-[16px]">مجموع سبد خرید شما</span>
                    </div>
                    <div class="p-detail-cart w-full p-[2rem]">
                        <div class="item w-full flex items-center justify-between">
                            <span class="text-[14px] font-bold">قیمت مجموع کالاها(3کالا)</span>
                            <div class="flex items-center gap-[1rem]">
                                <strong>25,000,000</strong>
                                <span class="text-[14px]">تومان</span>
                            </div>
                        </div>
                        <div class="item w-full flex items-center justify-between">
                            <span class="text-[14px] font-bold">تخفیف سایت</span>
                            <div class="flex items-center gap-[1rem] mt-[1rem]">
                                <strong>12,500,000 -</strong>
                                <span class="text-[14px]">تومان</span>
                            </div>
                        </div>
                        <div class="item w-full flex mt-[6px] items-center justify-between">
                           <div class="w-[60%] grid grid-cols-2 gap-[1rem]">
                               <input class="rounded-[4px] border-[1.5px] border-[#fb923c] h-[28px] text-[14px] text-center" type="text" placeholder="کد تخفیف ">
                               <button style="height: 28px !important;" class="btn-base-two">اعمال</button>
                           </div>
                            <div class="flex items-center gap-[1rem]">
                                <strong>10,000,000 -</strong>
                                <span class="text-[14px]">تومان</span>
                            </div>
                        </div>
                        <hr class="w-full my-[1.5rem] border-[#000]">
                        <div class="item w-full flex items-center justify-between">
                            <span class="text-[14px] font-bold">سود شما از این خرید:</span>
                            <div class="flex items-center gap-[1rem]">
                                <strong>25,000,000</strong>
                                <span class="text-[14px]">تومان</span>
                            </div>
                        </div>
                        <div class="item mt-[1rem] w-full flex items-center justify-between">
                            <span class="text-[14px] font-bold">مبلغ قابل پرداخت:</span>
                            <div class="flex items-center gap-[1rem]">
                                <strong>25,000,000</strong>
                                <span class="text-[14px]">تومان</span>
                            </div>
                        </div>
                        <button class="btn-base-two mt-[1rem] w-full">درج نشانی</button>
                        <div class="w-full rounded-[10px] py-[1rem] px-[2rem] border-[1px] border-[#666666] mt-[1rem]">
                            <p class="text-[14px] text-[#666666]"><span class="font-bold text-[14px]">کاربــر گـــرامی</span>، لطفا تــوجه داشته باشید کــه سفارش ثبت نهایی نشده است. در
                                صورتی‌که موجودی کالاها تمام شود. سفارش شما لغو خواهد شد.</p>
                            <p class="text-[14px] text-[#666666] mt-[1rem]"><span class="text-[14px] font-bold">توجه:</span> هزینه ارسال پس از درج نشانی و انتخاب روش ارسال به مبلغ کل سفارش
                                اضافه خواهد شد.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>
