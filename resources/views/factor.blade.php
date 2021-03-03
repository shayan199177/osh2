<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت نام</title>
    <link href="{!! asset('assets/libs/bootstrap-4.5.2/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/fonts/yekan/css/fontiran.css') !!}" rel="stylesheet">
    <style>
        body {
            font-family: iranyekan, sans-serif;
            background-color: white;
            direction: rtl;
            padding: 0 !important;
            overflow-x: hidden;
        }

        a:hover {
            text-decoration: none;
            color: #f1c40f;
        }

        .logo {
            width: 210px;
        }
        .bg-gray{
            background-color: #e7e7e7;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="border rounded p-3" style="width: 20rem;">
            <div class="text-center">
                <img src="{!! asset('assets/images/logo-shayanpet-r.png') !!}" class="logo" alt="shayanpet">
            </div>
            <div class="row">
                <div class="col-12 text-center mt-4 border-bottom border-top bg-gray">
                    <div class="py-2 small">مشخصات سفارش</div>
                </div>
                <div class="col-12 text-center border-bottom">
                    <div class="py-2 small">شایان سلیم زاده</div>
                </div>
                <div class="col-12 text-center border-bottom d-flex justify-content-around">
                    <div class="col-6 border-left">
                        <div class="py-2 small text-right">شماره سفارش</div>
                    </div>
                    <div class="col-6">
                        <div class="py-2 small text-right">SH239998</div>
                    </div>
                </div>
                <div class="col-12 text-center border-bottom d-flex justify-content-around">
                    <div class="col-6 border-left">
                        <div class="py-2 small text-right">مبلغ سفارش</div>
                    </div>
                    <div class="col-6">
                        <div class="py-2 small text-right">
                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span class="toman-price mr-2">تومان</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center border-bottom d-flex justify-content-around">
                    <div class="col-6 border-left">
                        <div class="py-2 small text-right">هزینه ارسال</div>
                    </div>
                    <div class="col-6">
                        <div class="py-2 small text-right">
                            <span class="price-font">15,۰۰۰</span><span class="toman-price mr-2">تومان</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center border-bottom d-flex justify-content-around">
                    <div class="col-6 border-left">
                        <div class="py-2 small text-right">روش ارسال</div>
                    </div>
                    <div class="col-6">
                        <div class="py-2 small text-right">پست</div>
                    </div>
                </div>
                <div class="col-12 text-center border-bottom d-flex justify-content-around">
                    <div class="col-6 border-left">
                        <div class="py-2 small text-right">آدرس تحویل</div>
                    </div>
                    <div class="col-6">
                        <div class="py-2 small text-justify">خیابان دماوند اتوبان باقری جنب فلان پلاک فلان 34</div>
                    </div>
                </div>
                <div class="col-12 text-center border-bottom d-flex justify-content-around">
                    <div class="col-6 border-left">
                        <div class="py-2 small text-right">روش پرداخت</div>
                    </div>
                    <div class="col-6">
                        <div class="py-2 small text-right">آنلاین</div>
                    </div>
                </div>

                <div class="col-12 border-bottom d-flex justify-content-around bg-gray">
                    <div class="col-12">
                        <div class="py-2 small text-center">جزییات سفارش</div>
                    </div>
                </div>

                <div class="col-12 text-center border-bottom d-flex">
                    <div class="col-6 border-left">
                        <div class="py-2 small text-center">محصول<br>(محصولات)</div>
                    </div>
                    <div class="col-2 px-0 border-left">
                        <div class="py-2 small text-center">تعداد</div>
                    </div>
                    <div class="col-4">
                        <div class="py-2 small text-center">قیمت (تومان)</div>
                    </div>
                </div>

                <div class="col-12 text-center border-bottom d-flex">
                    <div class="col-6 border-left">
                        <div class="py-2 small text-right">غذای طوطی کاسکو</div>
                        <h4 class="text-right black-color small">140 کیلوگرم</h4>
                    </div>
                    <div class="col-2 px-0 border-left">
                        <div class="py-2 small text-center">2</div>
                    </div>
                    <div class="col-4">
                        <div class="py-2 small text-center">123.000</div>
                    </div>
                </div>

                <div class="col-12 text-center border-bottom d-flex">
                    <div class="col-6 border-left">
                        <div class="py-2 small text-right">غذای طوطی کاسکو</div>
                        <h4 class="text-right black-color small">140 کیلوگرم</h4>
                    </div>
                    <div class="col-2 px-0 border-left">
                        <div class="py-2 small text-center">2</div>
                    </div>
                    <div class="col-4">
                        <div class="py-2 small text-center">123.000</div>
                    </div>
                </div>

                <div class="col-12 text-center border-bottom d-flex">
                    <div class="col-6 border-left">
                        <div class="py-2 small text-right">غذای سگ رویال</div>
                        <h4 class="text-right black-color small">140 کیلوگرم</h4>
                    </div>
                    <div class="col-2 px-0 border-left">
                        <div class="py-2 small text-center">32</div>
                    </div>
                    <div class="col-4">
                        <div class="py-2 small text-center">120.000</div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>


</body>
</html>

