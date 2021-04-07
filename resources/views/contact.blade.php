@extends('layouts.shop')

@push('styles')
    <style>
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
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-4 mb-5 mx-1 row-article">
                <div class="col-12 mt-4 text-right">
                    <h6>تماس با شایان پت</h6>
                </div>
                <div class="col-12 pt-3">
                    <p class="text-right font-88 py-1">
                        همکاران ما در فروشگاه اينترنتی شایان‌پت همه روزه از ساعت ۹ صبح تا ۹ شب آماده پاسخگويی هستند.
                    </p>
                    <p class="text-right font-88 py-1">
                        پت شاپ آنلاین شایان پت فروشگاهی اینترنتی است و پذیرش حضوری ندارد.
                    </p>
                    <p class="text-right font-88 py-1">
                        از طریق آدرس وب سایت و شماره تماس‌های فروشگاه می‌توانید با ما در ارتباط باشید.
                    </p>
                    <p class="text-right font-88 py-1">
                        لطفا درخواست خود را با استفاده از فرم زير با ما مطرح نمایید.
                    </p>
                </div>
                <div class="col-12 text-right mt-3">
                    <p class="py-1">شماره تلفن: <span>021-77777777</span></p>
                    <p class="py-1">ایمیل: <span>info@shayanpet.com</span></p>
                </div>
                <div class="col-12 mt-5">
                    <form action="/contact-us" method="post" class="row text-right">
                        @csrf
                        <div class="form-group col-md-6 col-xl-3">
                            <label for="subject" class="small">انتخاب موضوع</label>
                            <select id="subject" name="subject" class="form-control form-control-profile">
                                <option selected>انتخاب کنید...</option>
                                <option value="پیگیری سفارش">پیگیری سفارش</option>
                                <option value="ثبت شکایت">ثبت شکایت</option>
                                <option value="درخواست همکاری">درخواست همکاری</option>
                                <option value="ارتباط با مدیر سایت">ارتباط با مدیر سایت</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                            <label for="name" class="small">نام و نام خانوادگی</label>
                            <input type="text" class="form-control form-control-profile px-2 py-1" id="name" name="name">
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                            <label for="email" class="small">ایمیل</label>
                            <input type="email" class="form-control form-control-profile px-2 py-1" id="email" name="email">
                        </div>
                        <div class="form-group col-md-6 col-xl-3">
                            <label for="phone" class="small">شماره تماس</label>
                            <input type="text" class="form-control form-control-profile px-2 py-1" id="phone" name="phone">
                        </div>
                        <div class="form-group col-12">
                            <label for="text" class="small">متن شما</label>
                            <textarea class="form-control-textbox-item form1" id="text" name="text" rows="3"
                                      placeholder="متن خود را اینجا بنویسید..."></textarea>
                        </div>
                        <div class="text-center mx-auto mt-3 mb-4">
                            <button type="submit" class="btn btn-primary btn-sm btn-block py-2">ثبت و ارسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
