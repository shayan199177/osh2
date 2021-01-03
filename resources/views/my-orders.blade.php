@extends('layouts.shop')

@section('content')
    <div class="container-fluid">
        <div class="container demo">
            <div class="row">
                <div class="col-12 text-right mt-3 mb-2">
                    <div class="col-12 border-bottom-c3"><h5 class="h6">لیست سفارش ها<span
                                class="badge bg-main mr-1">4</span></h5>
                    </div>
                </div>

                <div class="col-12 my-2">
                    <div class="card text-center">
                        <div class="card-header tabs-time">
                            <div class="d-flex">
                                <p class="align-self-center">1</p>
                                <p class="pr-1 align-self-center">مهر</p>
                                <p class="pr-1 align-self-center">1398</p><i
                                    class="fas fa-circle align-self-center px-2 gray-color small-s"></i>
                                <p class="align-self-center small">SH239998</p><i
                                    class="fas fa-circle align-self-center px-2 gray-color small-s"></i>
                                <p class="pr-1 yellow-color small align-self-center">در حال ارسال...</p>
                            </div>
                            <div class="text-right d-flex mt-2"><p class="gray-color small align-self-center">مبلغ کل:</p>
                                <p class="pr-2">230.000</p>
                                <p class="small gray-color align-self-center pr-2">تومان</p></div>
                        </div>
                        <div class="card-body tabs-time text-left">

                            <a href="#" class="align-self-center border-pill-5 black-color ml-3 gray-color">مشاهده سفارش<i
                                    class="fas fa-chevron-left small gray-color align-self-center pr-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 my-2">
                    <div class="card text-center">
                        <div class="card-header tabs-time">
                            <div class="d-flex">
                                <p class="align-self-center">23</p>
                                <p class="pr-1 align-self-center">خرداد</p>
                                <p class="pr-1 align-self-center">1398</p><i
                                    class="fas fa-circle align-self-center px-2 gray-color small-s"></i>
                                <p class="align-self-center small">SH239998</p><i
                                    class="fas fa-circle align-self-center px-2 gray-color small-s"></i>
                                <p class="pr-1 green-color small align-self-center">تحویل داده شده</p>
                            </div>
                            <div class="text-right d-flex mt-2"><p class="gray-color small align-self-center">مبلغ کل:</p>
                                <p class="pr-2">600.000</p>
                                <p class="small gray-color align-self-center pr-2">تومان</p></div>
                        </div>
                        <div class="card-body tabs-time text-left">

                            <a href="#" class="align-self-center border-pill-5 black-color ml-3 gray-color">مشاهده سفارش<i
                                    class="fas fa-chevron-left small gray-color align-self-center pr-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 my-2">
                    <div class="card text-center">
                        <div class="card-header tabs-time">
                            <div class="d-flex">
                                <p class="align-self-center">17</p>
                                <p class="pr-1 align-self-center">شهریور</p>
                                <p class="pr-1 align-self-center">1398</p><i
                                    class="fas fa-circle align-self-center px-2 gray-color small-s"></i>
                                <p class="align-self-center small">SH236668</p><i
                                    class="fas fa-circle align-self-center px-2 gray-color small-s"></i>
                                <p class="pr-1 green-color small align-self-center">تحویل داده شده</p>
                            </div>
                            <div class="text-right d-flex mt-2"><p class="gray-color small align-self-center">مبلغ کل:</p>
                                <p class="pr-2">2.677.500</p>
                                <p class="small gray-color align-self-center pr-2">تومان</p></div>
                        </div>
                        <div class="card-body tabs-time text-left">

                            <a href="#" class="align-self-center border-pill-5 black-color ml-3 gray-color">مشاهده سفارش<i
                                    class="fas fa-chevron-left small gray-color align-self-center pr-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 my-2">
                    <div class="card text-center">
                        <div class="card-header tabs-time">
                            <div class="d-flex">
                                <p class="align-self-center">1</p>
                                <p class="pr-1 align-self-center">مهر</p>
                                <p class="pr-1 align-self-center">1398</p><i
                                    class="fas fa-circle align-self-center px-2 gray-color small-s"></i>
                                <p class="align-self-center small">SH239998</p><i
                                    class="fas fa-circle align-self-center px-2 gray-color small-s"></i>
                                <p class="pr-1 green-color small align-self-center">تحویل داده شده</p>
                            </div>
                            <div class="text-right d-flex mt-2"><p class="gray-color small align-self-center">مبلغ کل:</p>
                                <p class="pr-2">1.400.000</p>
                                <p class="small gray-color align-self-center pr-2">تومان</p></div>
                        </div>
                        <div class="card-body tabs-time text-left">

                            <a href="#" class="align-self-center border-pill-5 black-color ml-3 gray-color">مشاهده سفارش<i
                                    class="fas fa-chevron-left small gray-color align-self-center pr-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-right mb-3 border-top-c3 mt-2">
                    <p class="small gray-color mb-2 mt-2 text-justify"><i
                            class="fas fa-exclamation-circle ml-2"></i>لیست سفارش ها بر اساس زمان خرید از جدیدترین خرید
                        تا
                        سوابق خرید گذشته در جدول سفارشات قرار گرفته است.</p>
                    <p class="small gray-color mb-2 text-justify"><i class="fas fa-exclamation-circle ml-2"></i>
                        برای دریافت فاکتور و مشخصات خرید بر روی فاکتور خرید مورد نظر کلیک نمایید.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush

