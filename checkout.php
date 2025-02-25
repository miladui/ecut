<?php include 'header-desktop.php'; ?>
<?php include 'loginModal.php'; ?>
<?php include 'header-mobile.php'; ?>

<meta name="viewport" content="width=device-width, initial-scale=1">

<section class="s-checkout max-[900px]:px-[12px] mt-[7rem]">
    <div class="c-container">
        <div class="p-checkout max-[900px]:mb-[2rem] gap-[1.5rem] flex max-[900px]:flex-col items-start justify-between mx-auto">
            <div class="start w-[70%] max-[900px]:w-full flex flex-col items-start">
                <div class="box-address max-[900px]:flex-col p-[1rem] w-full flex items-start justify-between h-[200px] max-[900px]:h-auto border-[1px] border-[#ccc] rounded-[10px]">
                    <div class="detail-address max-[900px]:w-full  w-[70%]  flex flex-col  justify-start">
                        <div class="name w-full flex items-center justify-start">
                            <span class="text-[14px] text-[#646464]">میلاد کرد</span>
                        </div>
                        <div class="address max-[900px]:flex-wrap mt-[1rem] gap-[4px] w-full flex items-center justify-start">
                            <span class="text-[14px] max-[900px]:text-[13px] font-bold text-[#646464]">آدرس تحویل سفارش :</span>
                            <span class="text-[14px] max-[900px]:text-[13px] font-bold text-[#000000]">تهران، میرداماد، نبش کازرون جنوبی، ساختمان ایکات، پلاک 202</span>
                        </div>
                        <div class="address mt-[1rem] gap-[4px] w-full flex items-center justify-start">
                            <span class="text-[14px] max-[900px]:text-[13px] font-bold text-[#646464]">منطقه :</span>
                            <span class="text-[14px] max-[900px]:text-[13px] font-bold text-[#000000]">تهران | تجریش</span>
                        </div>
                        <div class=" mt-[3rem] gap-[4px] w-full flex items-center justify-end">
                            <a class="text-[#333] max-[900px]:text-[13px] flex items-center font-bold text-[14px]" href="">
                                تغییر یا ویرایش آدرس
                                <svg class="mr-[8px]" fill="#000000" width="30" height="30" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24">
                                    <path d="M11.3,12l3.5-3.5c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0l-4.2,4.2l0,0c-0.4,0.4-0.4,1,0,1.4l4.2,4.2c0.2,0.2,0.4,0.3,0.7,0.3l0,0c0.3,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.4L11.3,12z"/>
                                </svg>
                            </a>
                        </div>

                    </div>
                    <div class="select-address max-[900px]:mt-[2rem]  max-[900px]:w-full border-r-[1px] max-[900px]:border-r-[0px] max-[900px]:border-t-[1px] h-full border-r-[#ccc] w-[30%]  max-[900px]:pt-[1.5rem] flex flex-col gap-[8px] pr-[1rem] max-[900px]:pr-0 items-center justify-between">
                        <div class="item border-[2px] border-[#ccc] px-[1rem] bg-[#ddd] w-full h-[75px] rounded-[8px] flex items-center justify-start">
                            <div class="radio-btn w-[22px] border-[2px] border-[#000] h-[22px] rounded-[50%] relative p-[2px]">
                                <div class="fill-radio-btn rounded-[50%] bg-[#000] w-full h-full"></div>
                            </div>
                            <img class="w-[55px] h-[55px] mr-[12px] rounded-[5px]"
                                 src="https://ecut.shop/uploads/media/banner/icon post-512-512-v1.png">
                            <span class="text-[14px] mr-4 font-bold">پست پیشتاز</span>
                        </div>
                        <div class="item border-[2px] border-[#ccc] px-[1rem] bg-[#fff] w-full h-[75px] rounded-[8px] flex items-center justify-start">
                            <div class="radio-btn w-[22px] border-[2px] border-[#000] h-[22px] rounded-[50%] relative p-[2px]">
<!--                                <div class="fill-radio-btn rounded-[50%] bg-[#000] w-full h-full"></div>-->
                            </div>
                            <img class="w-[55px] h-[55px] mr-[12px] rounded-[5px]"
                                 src="https://ecut.shop/uploads/media/banner/icon post-512-512-v1.png">
                            <span class="text-[14px] mr-4 font-bold">ارسال سریع</span>
                        </div>

                    </div>
                </div>
                <div class="row-wallet  w-full flex flex-col">
                    <div class="w-full mt-[2rem] flex items-center justify-between">
                        <h3 class="title-checkout">ایکات کارت</h3>
                        <button class="btn-base-two h-[40px] px-[1.5rem]">افزودن</a>
                    </div>
                    <div class="title-table mb-[1rem] w-full">
                        <span>#</span>
                        <span class="max-[1600px]:text-[15px]">شماره کارت</span>
                        <span class="max-[1600px]:text-[15px]">رمز</span>
                        <span class="max-[1600px]:text-[15px]">موجودی</span>
                        <span></span>
                    </div>
                    <div class="body-table w-full">
                        <span class="text-[20px] font-bold">1</span>
                        <input class="px-[8px] h-[40px] w-full border-[1px] border-[#ccc] rounded-[8px]" type="text"
                               placeholder="">
                        <input class="px-[8px] h-[40px] w-full border-[1px] border-[#ccc] rounded-[8px]" type="text"
                               placeholder="">
                        <div class="flex items-center gap-[6px] justify-between">
                            <div class="flex flex-col gap-[6px]">
                                <button class="btn-base h-[25px] w-[25px] rounded-[8px]">+</button>
                                <button class="btn-base h-[25px] w-[25px] rounded-[8px]">-</button>
                            </div>
                            <input class="px-[8px] h-[40px] w-full border-[1px] border-[#ccc] rounded-[8px]" type="text"
                                   placeholder="">
                            <span>ریال</span>
                        </div>
                        <button class="btn-base text-[12px] w-full">اعمال</button>
                    </div>
                    <div class="body-table w-full">
                        <span class="text-[20px] font-bold">2</span>
                        <input class="px-[8px] h-[40px] w-full border-[1px] border-[#ccc] rounded-[8px]" type="text"
                               placeholder="">
                        <input class="px-[8px] h-[40px] w-full border-[1px] border-[#ccc] rounded-[8px]" type="text"
                               placeholder="">
                        <div class="flex items-center gap-[6px] justify-between">
                            <div class="flex flex-col gap-[6px]">
                                <button class="btn-base h-[25px] w-[25px] rounded-[8px]">+</button>
                                <button class="btn-base h-[25px] w-[25px] rounded-[8px]">-</button>
                            </div>
                            <input class="px-[8px] h-[40px] w-full border-[1px] border-[#ccc] rounded-[8px]" type="text"
                                   placeholder="">
                            <span>ریال</span>
                        </div>
                        <button class="btn-base text-[12px] w-full">اعمال</button>
                    </div>
                    <div class="body-table w-full">
                        <span class="text-[20px] font-bold">3</span>
                        <input class="px-[8px] h-[40px] w-full border-[1px] border-[#ccc] rounded-[8px]" type="text"
                               placeholder="">
                        <input class="px-[8px] h-[40px] w-full border-[1px] border-[#ccc] rounded-[8px]" type="text"
                               placeholder="">
                        <div class="flex items-center gap-[6px] justify-between">
                            <div class="flex flex-col gap-[6px]">
                                <button class="btn-base h-[25px] w-[25px] rounded-[8px]">+</button>
                                <button class="btn-base h-[25px] w-[25px] rounded-[8px]">-</button>
                            </div>
                            <input class="px-[8px] h-[40px] w-full border-[1px] border-[#ccc] rounded-[8px]" type="text"
                                   placeholder="">
                            <span>ریال</span>
                        </div>
                        <button class="btn-base-two text-[12px] w-full">اعمال شد</button>
                    </div>
                    <div class="grid max-[900px]:grid-cols-1 pay mt-[3rem] grid-cols-2 gap-[2rem] w-full items-center">
                        <div class="w-full flex flex-col items-start gap-[2rem]">
                            <h3 class="title-checkout">اعتبار</h3>
                            <div class="w-full flex items-center justify-start gap-[1rem]">
                                <div class="flex items-center gap-[6px] w-[80%] justify-between">
                                    <div class="flex flex-col gap-[6px]">
                                        <button class="btn-base h-[25px] w-[25px] rounded-[8px]">+</button>
                                        <button class="btn-base h-[25px] w-[25px] rounded-[8px]">-</button>
                                    </div>
                                    <input class="px-[8px] h-[40px] w-full border-[1px] border-[#ccc] rounded-[8px]"
                                           type="text"
                                           placeholder="">
                                    <span>ریال</span>
                                </div>
                                <button class="btn-base text-[12px] w-[20%]">اعمال</button>
                            </div>
                        </div>
                        <div class="w-full flex flex-col items-start gap-[2rem]">
                            <h3 class="title-checkout">کیف پول</h3>
                            <div class="w-full flex items-center justify-start gap-[1rem]">
                                <div class="flex items-center gap-[6px] w-[80%] justify-between">
                                    <div class="flex flex-col gap-[6px]">
                                        <button class="btn-base h-[25px] w-[25px] rounded-[8px]">+</button>
                                        <button class="btn-base h-[25px] w-[25px] rounded-[8px]">-</button>
                                    </div>
                                    <input class="px-[8px] h-[40px] w-full border-[1px] border-[#ccc] rounded-[8px]"
                                           type="text"
                                           placeholder="">
                                    <span>ریال</span>
                                </div>
                                <button class="btn-base text-[12px] w-[20%]">اعمال</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full my-[2rem] rounded-[12px] p-[1rem] border-[1px] border-[#ccc]">
                    <div class="flex items-center gap-[1rem]">
                        <h5 class="font-bold text-[16px]">بازبینی سبد خرید کالا</h5>
                        <div class=" h-[35px] text-[12px] rounded-[30px] px-[1rem] flex items-center justify-center bg-[#ccc]">
                            2 کالا
                        </div>
                    </div>
                    <div class="w-full flex items-center max-[900px]:flex-wrap max-[900px]:gap-[1rem] mt-[1rem] justify-between">
                        <span class="text-[#646464] text-[13px]">تفکیک اقلام و تعداد قابل مشاهده است</span>
                        <button class="btn-base-two text-[13px] px-[2rem]">مشاهده سبد خرید</button>
                    </div>
                    <div class="w-full gap-[1rem] flex items-center mt-[1rem]">
                        <div class="basket-img rounded-[8px] relative overflow-hidden w-[100px]">
                            <img class="w-full" src="assets/images/5.jpg" alt="">
                            <div class="w-[20px] h-[20px] rounded-[50%] absolute right-[3px] top-[3px] bg-[#fff] flex items-center justify-center">
                                <span class="font-bold text-[12px]">2</span>
                            </div>
                        </div>
                        <div class="basket-img rounded-[8px] relative overflow-hidden w-[100px]">
                            <img class="w-full" src="assets/images/4.jpg" alt="">
                            <div class="w-[20px] h-[20px] rounded-[50%] absolute right-[3px] top-[3px] bg-[#fff] flex items-center justify-center">
                                <span class="font-bold text-[12px]">2</span>
                            </div>
                        </div>
                        <div class="basket-img rounded-[8px] relative overflow-hidden w-[100px]">
                            <img class="w-full" src="assets/images/3.jpg" alt="">
                            <div class="w-[20px] h-[20px] rounded-[50%] absolute right-[3px] top-[3px] bg-[#fff] flex items-center justify-center">
                                <span class="font-bold text-[12px]">2</span>
                            </div>
                        </div>
                        <div class="basket-img rounded-[8px] relative overflow-hidden w-[100px]">
                            <img class="w-full" src="assets/images/2.jpg" alt="">
                            <div class="w-[20px] h-[20px] rounded-[50%] absolute right-[3px] top-[3px] bg-[#fff] flex items-center justify-center">
                                <span class="font-bold text-[12px]">2</span>
                            </div>
                        </div>
                        <div class="basket-img rounded-[8px] relative overflow-hidden w-[100px]">
                            <img class="w-full" src="assets/images/1.jpg" alt="">
                            <div class="w-[20px] h-[20px] rounded-[50%] absolute right-[3px] top-[3px] bg-[#fff] flex items-center justify-center">
                                <span class="font-bold text-[12px]">2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="end w-[30%] max-[900px]:w-full p-[1.5rem] flex flex-col bg-[#f2f2f2] border-[1px] border-[#ccc] rounded-[8px]  items-start">
                <div class="item w-full flex items-center justify-between">
                    <span class="text-[17px] max-[1600px]:text-[15px] font-bold text-[#646464]">جمع سبد خرید</span>
                    <div class="flex items-center gap-[6px]">
                        <strong class="text-[18px] max-[1600px]:text-[16px]">12,000,000</strong>
                        <span class="text-[14px] max-[1600px]:text-[12px] font-bold">ریال</span>
                    </div>
                </div>
                <div class="item mt-[12px] w-full flex items-center justify-between">
                    <span class="text-[17px] max-[1600px]:text-[15px] font-bold text-[#646464]">کسور</span>
                    <div class="flex items-center gap-[6px]">
                        <strong class="text-[18px] max-[1600px]:text-[16px]">12,000,000</strong>
                        <span class="text-[14px] font-bold max-[1600px]:text-[12px]">ریال</span>
                    </div>
                </div>
                <div class="item mt-[12px] w-full flex items-center justify-between">
                    <span class="text-[17px] max-[1600px]:text-[15px] font-bold text-[#646464]">تخفیفات</span>
                    <div class="flex items-center gap-[6px]">
                        <strong class="text-[18px] max-[1600px]:text-[16px]">7,000,000</strong>
                        <span class="text-[14px] font-bold max-[1600px]:text-[12px]">ریال</span>
                    </div>
                </div>
                <hr class="w-full border-b-[1px] border-[#ccc] my-[1rem]">
                <div class="item w-full flex items-center justify-between">
                    <span class="text-[17px] max-[1600px]:text-[15px] font-bold text-[#646464]">قابل پرداخت</span>
                    <div class="flex items-center gap-[6px]">
                        <strong class="text-[18px] max-[1600px]:text-[16px]">5,000,000</strong>
                        <span class="text-[14px] font-bold max-[1600px]:text-[12px]">ریال</span>
                    </div>
                </div>
                <div class="payment w-full flex flex-col items-start gap-[1rem] mt-[1rem]">
                    <h6 class="m-0 text-[17px] max-[1600px]:text-[15px] font-bold">روش پرداخت</h6>
                </div>
                <div class="select-payment mt-[1rem] w-full  flex flex-col gap-[8px]  items-center">
                    <div class="w-full  p-radio-c">
                        <label class="font-bold"><input type="radio" name="e"> درگاه</label>

                    </div>
                    <div class="item border-[2px] border-[#ccc] px-[1rem] bg-[#ddd] w-full h-[60px] rounded-[8px] flex items-center justify-start">
                        <div class="radio-btn w-[22px] border-[2px] border-[#000] h-[22px] rounded-[50%] relative p-[2px]">
                            <div class="fill-radio-btn rounded-[50%] bg-[#000] w-full h-full"></div>
                        </div>
                        <img class="w-[45px] h-[45px] mr-[12px] rounded-[5px]"
                             src="data:image/jpeg;base64,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">
                        <span class="text-[14px] mr-4 font-bold">به پرداخت</span>
                    </div>
                    <div class="item border-[2px] border-[#ccc] px-[1rem] bg-[#fff] w-full h-[60px] rounded-[8px] flex items-center justify-start">
                        <div class="radio-btn w-[22px] border-[2px] border-[#000] h-[22px] rounded-[50%] relative p-[2px]">
<!--                            <div class="fill-radio-btn rounded-[50%] bg-[#000] w-full h-full"></div>-->
                        </div>
                        <img class="w-[45px] h-[45px] mr-[12px] rounded-[5px]"
                             src="data:image/png;base64,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">
                        <span class="text-[14px] mr-4 font-bold">سامان</span>
                    </div>

                </div>

                <button class="btn-base-two w-full mt-[2rem]">پرداخت</button>

            </div>
        </div>
    </div>
</section>


<?php include 'script-header.php'; ?>

