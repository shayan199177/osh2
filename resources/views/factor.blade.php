<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فاکتور</title>
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
    <div class="row mt-4">
        <div class="col-12 border rounded px-3">
            <div class="text-center border-bottom">
                <img src="{!! asset('assets/images/logo-shayanpet-r.png') !!}" class="logo py-4" alt="shayanpet">
            </div>
            <div class="text-center mt-2 px-3">
                <div class="text-right d-flex">
                    <h6 class="small gray-color">خریدار:</h6><h6 class="pr-1 small">شایان سلیم زاده</h6>
                </div>
                <div class="text-right d-flex">
                    <h6 class="small gray-color">شماره فاکتور:</h6><h6 class="pr-1 small">SH345690</h6>
                </div>
            </div>

            <div class="col-12 mt-2">
                <table class="table table-bordered">
                    <tbody class="text-center small">
                    <tr>
                        <td scope="row">تاریخ خرید</td>
                        <td>ساعت خرید</td>
                        <td>کد تخفیف</td>
                        <td>روش پرداخت</td>
                        <td>مبلغ پرداختی کل (تومان)</td>
                    </tr>
                    <tr>
                        <td scope="row">1399/11/13</td>
                        <td>11:50</td>
                        <td>-</td>
                        <td>آنلاین</td>
                        <td>21.900.000</td>
                    </tr>
                    <tr>
                        <td scope="row">آدرس ارسالی</td>
                        <td colspan="4">خیابان انقلاب، بعد از میدان فردوسی، کوچه موسوی، پلاک 559، طبقه اول، واحد 3</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-12 mt-2">
                <table class="table table-bordered">
                    <thead class="text-center small">
                    <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">نام محصول</th>
                        <th scope="col">جزئیات</th>
                        <th scope="col">قیمت (تومان)</th>
                    </tr>
                    </thead>
                    <tbody class="text-center small">
                    <tr>
                        <th scope="row">1</th>
                        <td>غذا خشک رویال</td>
                        <td>15 کیلویی</td>
                        <td>800.000</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>پد بهداشتی گربه</td>
                        <td>10 عددی</td>
                        <td>23.000</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td >غذای طوطی</td>
                        <td>کاسکو</td>
                        <td>200.000</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td >ظرف آبخوری گربه</td>
                        <td>بزرگ</td>
                        <td>103.900</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>


</body>
</html>

