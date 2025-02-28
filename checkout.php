<?php include 'header-desktop.php'; ?>
<?php include 'loginModal.php'; ?>
<?php include 'header-mobile.php'; ?>

<meta name="viewport" content="width=device-width, initial-scale=1">

<section class="s-checkout max-[900px]:px-[12px] mt-[7rem]">
    <div class="c-container">
        <div class="p-checkout max-[900px]:mb-[2rem] gap-[1.5rem] flex max-[900px]:flex-col items-start justify-between mx-auto">
            <div class="start gap-[1rem] flex flex-col items-center w-[57%]">
                <div class="box-basket w-full border-[#263238] border-[1px] rounded-[8px] h-[550px]"></div>
                <div class="box-address w-full border-[#263238] border-[1px] rounded-[8px] h-[250px]"></div>

            </div>
            <div class="end w-[43%]  bg-[#f2f2f2] rounded-[8px] px-[3.2rem] py-[1.2rem]">
                <h3 class="font-bold md:text-[15px] mb-[1rem] xl:text-[16px]">جمع سبد خرید شما</h3>
                <div class="item-simple w-full flex items-center mt-[12px] justify-between">
                    <span class="font-bold text-[14px]">مبلغ محصولات :</span>
                    <div class="price-column flex items-center justify-end gap-[1rem] w-[50%]">
                        <div class="w-[20%]"></div>
                        <div class="price flex items-center w-[65%] justify-between">
                            <strong class="text-[14px]">23,000,000</strong>
                            <span class="text-[14px]">تومان</span>
                        </div>
                    </div>
                </div>
                <div class="item-simple w-full flex items-center mt-[12px] justify-between">
                    <span class="font-bold text-[14px]">هزینه ارسال : ( آدرس )</span>
                    <div class="price-column flex items-center justify-end gap-[1rem] w-[50%]">
                        <div class="w-[20%]"></div>
                        <div class="price flex items-center w-[65%] justify-between">
                            <strong class="text-[14px]">100,000</strong>
                            <span class="text-[14px]">تومان</span>
                        </div>
                    </div>
                </div>
                <div class="my-[1rem] border-b-[1px] border-[#000] w-full"></div>
                <div class="item-simple w-full flex items-center mt-[12px] justify-between">
                    <span class="font-bold text-[14px]">جمع کل قابل پرداخت :</span>
                    <div class="price-column flex items-center justify-end gap-[1rem] w-[50%]">
                        <div class="w-[20%]"></div>
                        <div class="price flex items-center w-[65%] justify-between">
                            <strong class="text-[14px]">23,100,000</strong>
                            <span class="text-[14px]">تومان</span>
                        </div>
                    </div>
                </div>
                <div class="w-full my-[1rem] text-[14px]">
                    <span class="font-bold">پرداخت از :</span>
                </div>
                <div class="item-advance w-full flex items-center mt-[12px] justify-between">
                    <div class="title-price flex items-center justify-start">
                        <div class="title-price flex items-center justify-start">
                            <input type="hidden" name="payment_method" value="0" class="toggle-value">
                            <div class="custom-toggle cursor-pointer" onclick="toggleSwitch(this)">
                                <div class="toggle-circle"></div>
                            </div>
                            <span class="font-bold text-[14px]">ایکات کارت</span>
                        </div>
                    </div>
                    <div class="price-column flex items-center justify-end gap-[1rem] w-[50%]">
                        <div class="w-[10%]">
                            <span class="text-[14px] font-bold">مبلغ </span>
                        </div>
                        <div class="price flex items-center w-[90%] justify-between">
                            <div class="box-strong gap-[14px] w-[80%] h-[35px] rounded-[5px] bg-white flex items-center justify-center">
                                <strong class="text-[14px]">23,100,000</strong>
                                <span class="text-[14px]">تومان</span>
                            </div>
                            <button class="text-[13px] w-[18%] mr-[1rem]">ویرایش</button>
                        </div>
                    </div>
                </div>
                <div class="item-advance w-full flex items-center mt-[12px] justify-between">
                    <div class="title-price flex items-center justify-start">
                        <div class="title-price flex items-center justify-start">
                            <input type="hidden" name="payment_method" value="0" class="toggle-value">
                            <div class="custom-toggle cursor-pointer" onclick="toggleSwitch(this)">
                                <div class="toggle-circle"></div>
                            </div>
                            <span class="font-bold text-[14px]">اعتبار</span>
                        </div>
                    </div>
                    <div class="price-column flex items-center justify-end gap-[1rem] w-[50%]">
                        <div class="w-[10%]">
                            <span class="text-[14px] font-bold">مبلغ </span>
                        </div>
                        <div class="price flex items-center w-[90%] justify-between">
                            <div class="box-strong gap-[14px] w-[80%] h-[35px] rounded-[5px] bg-white flex items-center justify-center">
                                <strong class="text-[14px]">23,100,000</strong>
                                <span class="text-[14px]">تومان</span>
                            </div>
                            <button class="text-[13px] w-[18%] mr-[1rem]">ویرایش</button>
                        </div>
                    </div>
                </div>
                <div class="item-advance w-full flex items-center mt-[12px] justify-between">
                    <div class="title-price flex items-center justify-start">
                        <div class="title-price flex items-center justify-start">
                            <input type="hidden" name="payment_method" value="0" class="toggle-value">
                            <div class="custom-toggle cursor-pointer" onclick="toggleSwitch(this)">
                                <div class="toggle-circle"></div>
                            </div>
                            <span class="font-bold text-[14px]">کیف پول</span>
                        </div>
                    </div>
                    <div class="price-column flex items-center justify-end gap-[1rem] w-[50%]">
                        <div class="w-[10%]">
                            <span class="text-[14px] font-bold">مبلغ </span>
                        </div>
                        <div class="price flex items-center w-[90%] justify-between">
                            <div class="box-strong gap-[14px] w-[80%] h-[35px] rounded-[5px] bg-white flex items-center justify-center">
                                <strong class="text-[14px]">23,100,000</strong>
                                <span class="text-[14px]">تومان</span>
                            </div>
                            <button class="text-[13px] w-[18%] mr-[1rem]">ویرایش</button>
                        </div>
                    </div>
                </div>
                <div class="item-advance w-full flex items-center mt-[12px] justify-between">
                    <div class="title-price flex items-center justify-start">
                        <div class="title-price flex items-center justify-start">
                            <input type="hidden" name="payment_method" value="0" class="toggle-value">
                            <div class="custom-toggle cursor-pointer" onclick="toggleSwitch(this)">
                                <div class="toggle-circle"></div>
                            </div>
                            <span class="font-bold text-[14px]">کد تخفیف</span>
                        </div>
                    </div>
                    <div class="price-column flex items-center justify-end gap-[1rem] w-[50%]">
                        <div class="w-[10%]">
                            <span class="text-[14px] font-bold">مبلغ </span>
                        </div>
                        <div class="price flex items-center w-[90%] justify-between">
                            <div class="box-strong gap-[14px] w-[80%] h-[35px] rounded-[5px] bg-white flex items-center justify-center">
                                <strong class="text-[14px]">23,100,000</strong>
                                <span class="text-[14px]">تومان</span>
                            </div>
                            <button class="text-[13px] w-[18%] mr-[1rem]">ویرایش</button>
                        </div>
                    </div>
                </div>
                <div class="item-advance border-t-[1px] border-b-[1px] border-[#000] py-[12px] mt-[12px] w-full flex items-center mt-[12px] justify-between">
                    <div class="title-price flex items-center justify-start">
                        <span class="font-bold text-[14px]">جمع کل</span>
                    </div>

                    <div class="price-column flex items-center justify-end gap-[1rem] w-[50%]">
                        <div class="w-[10%]"></div>
                        <div class="price flex items-center w-[90%] justify-between">
                            <div class="box-strong gap-[14px] w-[80%] h-[35px] rounded-[5px] bg-white flex items-center justify-center">
                                <strong class="text-[14px]">24,100,000</strong>
                                <span class="text-[14px]">تومان</span>
                            </div>
                            <div class="mr-[1rem] text-[13px] invisible">ویرایش</div>
                        </div>
                    </div>
                </div>
                <div class="item-advance  border-b-[1px] border-[#000] py-[12px]  w-full flex items-center  justify-between">
                    <div class="title-price flex items-center justify-start">
                        <span class="font-bold text-[14px] text-base-two">مانده قابل پرداخت :</span>
                    </div>

                    <div class="price-column flex items-center justify-end gap-[1rem] w-[50%]">
                        <div class="w-[10%]"></div>
                        <div class="price flex items-center w-[90%] justify-between">
                            <div class="box-strong gap-[14px] w-[80%] h-[35px] rounded-[5px] bg-white flex items-center justify-center">
                                <strong class="text-[14px]">24,100,000</strong>
                                <span class="text-[14px]">تومان</span>
                            </div>
                            <div class="mr-[1rem] text-[13px] invisible">ویرایش</div>
                        </div>

                    </div>
                </div>
                <div class="choose-payment w-full flex flex-col items-start mt-[2rem]">
                    <span class="text-[13px] mb-[1.5rem] font-bold">انتخاب درگاه :</span>
                    <button onclick="changeSelectPayment('one')"
                            class="w-full border-[2px] border-white h-[40px] text-[14px] bg-white rounded-[6px]  flex items-center justify-center">
                        به پرداخت
                    </button>
                    <button onclick="changeSelectPayment('two')"
                            class="w-full border-[2px] border-white h-[40px] bg-white text-[14px] rounded-[6px] mt-[6px] flex items-center justify-center">
                        سامان
                    </button>
                </div>
                <button class="w-full btn-payment h-[40px] rounded-[6px] mt-[1rem] btn-base-two">پرداخت</button>
            </div>
        </div>
    </div>
</section>


<?php include 'script-header.php'; ?>

<script>
    function toggleSwitch(element) {
        element.classList.toggle('active');

        // آپدیت کردن مقدار input مخفی
        const isActive = element.classList.contains('active');
        const hiddenInput = element.previousElementSibling; // input مخفی
        hiddenInput.value = isActive ? "1" : "0";

        console.log('Toggle state:', isActive);
        console.log('Input value:', hiddenInput.value);
    }

    function changeSelectPayment(activeItem) {
        $('.choose-payment button').removeClass('active');
        $(event.target).addClass('active');
    }
</script>