<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود به شایان پت</title>
    <link href="{!! asset('assets/libs/bootstrap-4.5.2/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/fonts/yekan/css/fontiran.css') !!}" rel="stylesheet">
    <style>
        body {
            font-family: iranyekan, sans-serif;
            background-color: #f7fafc;
            direction: rtl;
            padding: 0 !important;
            overflow-x: hidden;
        }

        .form-control-profile {
            display: block;
            width: 100% !important;
            font-weight: 400;
            line-height: 1;
            height: 35px;
            color: #323232 !important;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c4c4c4 !important;
            font-size: 0.89rem !important;
        }

        .form-control-profile:focus {
            display: block;
            width: 100% !important;
            font-weight: 400;
            line-height: 1;
            height: 35px;
            color: #212121;
            background-clip: padding-box;
            border: 2px solid #f1c40f !important;
            box-shadow: none;
        }

        .logo {
            width: 210px;
        }

        .top-margin {
            margin-top: 110px;
        }

        .google-size {
            width: 16px;
            margin-top: -4px;
            margin-right: 4px;
        }

        .gray-color {
            color: #919191;
        }

        a:hover {
            text-decoration: none;
            color: #f1c40f;
        }

        @media (max-width: 576px) {
            .top-margin {
                margin-top: 30px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-7 col-lg-5 text-right">
            <form action="#" class="bg-white border rounded top-margin" method="POST"
                  style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;">
                <div class="text-center mt-4 mb-5">
                    <a href="../index.html">
                        <img src="{!! asset('assets/images/logo-shayanpet-r.png') !!}" class="logo" alt="shayanpet">
                    </a>
                </div>
                <div class="form-group mx-4 mx-md-5 mx-lg-5">
                    <label for="exampleInputEmail1" class="small">شماره موبایل یا ایمیل خود را وارد کنید</label>
                    <input type="email" class="form-control form-control-profile px-2 py-1" id="exampleInputEmail1">
                </div>
                <div class="form-group mx-4 mx-md-5 mx-lg-5">
                    <label for="exampleInputPassword1" class="small">رمز عبور</label>
                    <input type="password" class="form-control form-control-profile px-2 py-1"
                           id="exampleInputPassword1">
                </div>
                <div class="text-center mx-4 mx-md-5 mt-5 mb-4">
                    <button type="submit" class="btn btn-success btn-sm btn-block py-2">ورود به شایان پت</button>
                </div>

                <p class="text-inverse text-center small mt-3">حساب کاربری ندارید؟<a href="#" data-abc="true"
                                                                                       class="pr-2">ثبت نام کنید</a>
                </p>
                <p class="text-justify small gray-color px-4 mt-3">با ورود و یا ثبت نام در شایان پت شما <a href="#"
                                                                                                      data-abc="true">شرایط
                        و قوانین</a> استفاده از
                    سرویس های سایت شایان پت و <a href="#" data-abc="true">قوانین حریم خصوصی</a> آن را می‌پذیرید.
                </p>
            </form>
        </div>
    </div>
</div>
</body>
</html>

