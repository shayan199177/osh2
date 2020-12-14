@extends('layouts.shop')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right mt-3 mb-2 d-none d-lg-flex">
                    <div class="col bg-white border p-3 rounded">
                        <div class="col d-flex text-center justify-content-around">
                            <div class="col small">
                                مراحل تایید و پرداخت خرید:
                            </div>
                            <div class="col small green-color">
                                تایید سفارش
                            </div>
                            <div class="col green-color small">
                                تایید آدرس و نحوه ارسال
                            </div>
                            <div class="col small">
                                <i class="fas fa-check-circle ml-2 green-color"></i><span>پرداخت نهایی</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none mt-3 mb-2">
                    <ul class="list-group text-right">
                        <li class="list-group-item small bg-main">مراحل تایید و پرداخت خرید:</li>
                        <li class="list-group-item small green-color">تایید سفارش</li>
                        <li class="list-group-item small green-color" aria-disabled="true">
                            <span>تایید آدرس و نحوه ارسال</span></li>
                        <li class="list-group-item small"><i
                                class="fas fa-check-circle ml-2 green-color"></i>پرداخت نهایی
                        </li>
                    </ul>
                </div>
                <div class="col-12 text-right mt-1 mb-3">
                    <div class="col-12 border-bottom-c3"><h5 class="h6">پرداخت و ارسال</h5>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="col-12 card card-basket">
                        <div class="row">
                            <div class="col-12 col-lg-8 text-right mt-4 mb-2">

                                <div class="alert alert-warning alert-dismissible fade show card-confirm" role="alert">
                                    <div class="form-check text-justify">
                                        <input class="form-check-input mt-2" type="radio" name="exampleRadios1"
                                               id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label mr-4 my-1" for="exampleRadios1">
                                            <span class="black-color">پرداخت اینترنتی</span>
                                        </label>
                                    </div>
                                    <div class="form-check text-justify mt-3">
                                        <input class="form-check-input mt-2" type="radio" name="exampleRadios1"
                                               id="exampleRadios2" value="option2">
                                        <label class="form-check-label mr-4 my-1" for="exampleRadios2">
                                            <span class="black-color">پرداخت در محل (نقدی - کارت بانکی)</span>
                                        </label>
                                    </div>
                                    <div class="alert alert-warning alert-dismissible fade show card-confirm mt-3"
                                         role="alert">
                                        <div class="text-justify">
                                            <p class="small"><i class="fas fa-map-marked-alt ml-2"></i>تهران نارمک
                                                خیابان افشاری خیابان گاراپیدی پلاک 333</p>
                                        </div>
                                        <div>
                                            <p class="mb-4 small text-justify"><i class="fas fa-check ml-2"></i>ارسال
                                                توسط
                                                پست
                                                پیشتاز یک الی سه روز کاری</p>
                                        </div>
                                        <p class="small text-justify">
                                            <i class="fas fa-exclamation-circle ml-2"></i>برای ویرایش آدرس و نحوه ارسال
                                            به مرحله قبل بازگردید.
                                        </p>
                                        <div class="text-right my-3">
                                            <a href="confirm-address.html" class="card-link button-return-2"><i class="fas fa-undo pl-2"></i>بازگشت به مرحله قبل</a>
                                        </div>

                                    </div>
                                </div>

                                <div id="accordion">
                                    <div class="card-confirm-acc">
                                        <div class="card-header-confirm" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed btn-confirm-acc"
                                                        data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                    کارت هدیه و کد تخفیف
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="col-12 d-flex mt-2">
                                                    <input class="payment-serial-input" type="text"
                                                           placeholder="افزودن کد تخفیف"
                                                           id="payment-voucher-input">
                                                    <span class="payment-serial-input-icon">ثبت</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="accordion1" class="mt-2">
                                    <div class="card-confirm-acc">
                                        <div class="card-header-confirm" id="headingThree1">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed btn-confirm-acc"
                                                        data-toggle="collapse"
                                                        data-target="#collapseThree1" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                    خلاصه سفارش
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree1" class="collapse"
                                             aria-labelledby="headingThree1" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="col-12 text-center mt-2">

                                                    <table class="table table-bordered table-striped small">
                                                        <thead>
                                                        <tr>
                                                            <th>نام محصول</th>
                                                            <th style="width: 35px;">تعداد</th>
                                                            <th style="width: 80px;">قیمت (تومان)</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>نوتری پت غذا خشک ۳ کیلیویی</td>
                                                            <td>۳</td>
                                                            <td>۳۲۹,۰۰۳۰۰</td>
                                                        </tr>
                                                        <tr>
                                                            <td>نوتری پت غذا خشک ۳ کیلیویی</td>
                                                            <td>۲</td>
                                                            <td>۳۲۹,۳۰۰</td>
                                                        </tr>
                                                        <tr>
                                                            <td>نوتری پت غذا خشک ۳ کیلیویی</td>
                                                            <td>۳</td>
                                                            <td>۳۲۹,۳۰۰</td>
                                                        </tr>
                                                        <tr>
                                                            <td>نوتری پت غذا خشک ۳ کیلیویی</td>
                                                            <td>۳۲</td>
                                                            <td>۳۲۹,۳۰۰</td>
                                                        </tr>
                                                        <tr>
                                                            <td>نوتری پت غذا خشک ۳ کیلیویی</td>
                                                            <td>۳۲</td>
                                                            <td>۳۲۹,۳۰۰</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-none d-lg-block text-right mt-2 mb-3 border-top-c3">
                                    <p class="small gray-color mb-2 mt-2 text-justify"><i
                                            class="fas fa-exclamation-circle ml-2"></i>هزینه و
                                        نوع ارسال را در مراحل قبل تعیین نموده اید.</p>
                                    <p class="small gray-color mb-2 text-justify"><i
                                            class="fas fa-exclamation-circle ml-2"></i>شما
                                        می‌توانید
                                        فاکتور خرید را پس از تحویل سفارش از بخش سفارش های من در حساب کاربری خود دریافت کنید.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 card-basket mt-4">
                                <div class="col-12 d-flex text-right mt-4">
                                    <h5 class="small">قیمت کالاها</h5>
                                    <div class="d-flex left-price-basket">
                                        <h6 class="price-font my-auto small">۳۲۹,۳۰۰,۳۰۰<span
                                                class="toman-price my-auto small">تومان</span></h6>
                                    </div>

                                </div>
                                <div class="col-12 d-flex text-right mt-2">
                                    <p class="small mb-2"><i class="fas fa-truck ml-2"></i>هزینه
                                        ارسال
                                    </p>
                                    <div class="d-flex left-price-basket">
                                        <h6 class="price-font my-auto small">۳۲,۳۰۰<span
                                                class="toman-price my-auto small">تومان</span></h6>
                                    </div>

                                </div>
                                <div class="col-12 d-flex text-right mt-2">

                                    <p class="small-s mb-3 text-justify"><i class="fas fa-check ml-2"></i>هزینه و نوع
                                        ارسال را
                                        در مراحل قبل
                                        تعیین نموده اید.</p>
                                </div>

                                <div class="col-12 d-none d-lg-flex text-right my-1">
                                    <div class="col-12 d-flex border-top-c3"><h6 class="small pt-3">مبلغ قابل پرداخت</h6>
                                        <div class="d-flex left-price-basket h6 pt-3">
                                            <h6 class="price-font my-auto">۳۲۹,۳۰۰,۳۰۰<span
                                                    class="toman-price my-auto">تومان</span></h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-block d-lg-none text-right my-1">
                                    <div class="col-12 border-top-c3"><h6 class="small pt-3">مبلغ قابل پرداخت</h6>
                                        <div class="d-flex left-price-basket h6 pt-3 mb-3">
                                            <h6 class="price-font my-auto">۳۲۹,۳۰۰,۳۰۰<span
                                                    class="toman-price my-auto">تومان</span></h6>
                                        </div>
                                        <div class="text-center my-5 pt-3">
                                            <button class="card-link button-buy btn-buy">پرداخت</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center d-none d-lg-block my-4">
                                    <button class="card-link button-buy btn-buy">پرداخت</button>
                                </div>
                                <div class="col-12 d-block d-lg-none text-right mt-5 mb-3 border-top-c3">
                                    <p class="small gray-color mb-2 mt-5 text-justify"><i
                                            class="fas fa-exclamation-circle ml-2"></i>هزینه و
                                        نوع ارسال را در مراحل قبل تعیین نموده اید.</p>
                                    <p class="small gray-color mb-2 text-justify"><i
                                            class="fas fa-exclamation-circle ml-2"></i>شما
                                        می‌توانید
                                        فاکتور خرید را پس از تحویل سفارش از بخش سفارش های من در حساب کاربری خود دریافت کنید.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

