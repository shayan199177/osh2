@extends('layouts.shop')
@push('styles')
    <link href="{!! asset('assets/libs/owl-carousel/owl.carousel.min.css') !!}" rel="stylesheet">
    <style>
        .line-h25{
            line-height: 25px;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right mt-3 mb-2">
                    <div class="col-12 border-bottom-c3"><h5 class="h6">جزییات سفارش</h5>
                    </div>
                </div>

                <div class="col-12 my-2">
                    <div class="card text-center">
                        <div class="card-header tabs-time">
                            <div class="d-flex">
                                <p class="align-self-center pb-0">17</p>
                                <p class="pr-1 pb-0 align-self-center">شهریور</p>
                                <p class="pr-1 pb-0 align-self-center">1398</p>
                                <p class="mx-2 pb-0">|</p>
                                <p class="align-self-center pb-0">11:30</p>
                                <p class="mx-2 d-none d-sm-block pb-0">|</p>
                                <p class="small border-title-success d-none d-sm-block">تحویل داده شده</p>
                            </div>
                            <div class="mt-2 d-flex float-left">
                                <p class="small border-title-success d-block d-sm-none">تحویل داده شده</p>
                            </div>
                        </div>
                        <div class="card-body tabs-time">
                            <div class="col">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-1">
                                        <div class="bg-white border rounded h-auto text-center">
                                            <div>
                                                <a href="#"><img src="temp/product/dog/3.jpg" alt="shayanPet"
                                                                 class="img-item pt-3"></a>
                                                <div class="badge-number">24</div>
                                            </div>
                                            <div class="carousel-item-title-interest">
                                                <a href="#" class="text-center text-decoration-none">
                                                    <h6 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا آکواریوم 150</h6>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-center text-decoration-none"><h4 class="black-color small">قرمز</h4></a>
                                            </div>
                                            <div class="mb-3">
                                                <span class="toman-price-off align-middle">56,۸۰۰,۰۰۰</span><span
                                                    class="badge badge-danger badge-pill mr-2">9۰٪</span>
                                                <span class="price-font">23,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-1">
                                        <div class="bg-white border rounded h-auto text-center">
                                            <div>
                                                <a href="#"><img src="temp/product/dog/2.jpg" alt="shayanPet"
                                                                 class="img-item pt-3"></a>
                                                <div class="badge-number">8</div>
                                            </div>
                                            <div class="carousel-item-title-interest">
                                                <a href="#" class="text-center text-decoration-none">
                                                    <h6 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا آکواریوم 150</h6>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-center text-decoration-none"><h4 class="black-color small">140 کیلوگرم</h4></a>
                                            </div>
                                            <div class="mb-3">
                                                <span class="price-font">۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-1">
                                        <div class="bg-white border rounded h-auto text-center">
                                            <div>
                                                <a href="#"><img src="temp/product/cat/2.jpg" alt="shayanPet"
                                                                 class="img-item pt-3"></a>
                                                <div class="badge-number">21</div>
                                            </div>
                                            <div class="carousel-item-title-interest">
                                                <a href="#" class="text-center text-decoration-none">
                                                    <h6 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا آکواریوم 150</h6>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-center text-decoration-none"><h4 class="black-color small">140 کیلوگرم</h4></a>
                                            </div>
                                            <div class="mb-3">
                                                <span class="price-font">1۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-1">
                                        <div class="bg-white border rounded h-auto text-center">
                                            <div>
                                                <a href="#"><img src="temp/product/cat/1.jpg" alt="shayanPet"
                                                                 class="img-item pt-3"></a>
                                                <div class="badge-number">21</div>
                                            </div>
                                            <div class="carousel-item-title-interest">
                                                <a href="#" class="text-center text-decoration-none">
                                                    <h6 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا آکواریوم آکواریوم 150 لیتری آکوا آکواریوم 150</h6>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-center text-decoration-none"><h4 class="black-color small">140 کیلوگرم</h4></a>
                                            </div>
                                            <div class="mb-3">
                                                <span class="price-font">۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-1">
                                        <div class="bg-white border rounded h-auto text-center">
                                            <div>
                                                <a href="#"><img src="temp/product/fish/7.jpg" alt="shayanPet"
                                                                 class="img-item pt-3"></a>
                                                <div class="badge-number">21</div>
                                            </div>
                                            <div class="carousel-item-title-interest">
                                                <a href="#" class="text-center text-decoration-none">
                                                    <h6 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا آکواریوم 150</h6>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-center text-decoration-none"><h4 class="black-color small">140 کیلوگرم</h4></a>
                                            </div>
                                            <div class="mb-3">
                                                <span class="toman-price-off align-middle">56,۸۰۰,۰۰۰</span><span
                                                    class="badge badge-danger badge-pill mr-2">9۰٪</span>
                                                <span class="price-font">23,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="card-footer tabs-time">
                            <div class="text-center d-flex mb-2 border-bottom py-2">
                                مشخصات خرید
                            </div>
                            <div class="text-right mb-2 d-flex">
                                <p class="black-color small align-self-center">ساعت سفارش:</p>
                                <p class="pr-2 small">11:30</p>
                            </div>
                            <div class="text-right mb-2 d-flex">
                                <p class="black-color small align-self-center">آدرس ارسال:</p>
                                <p class="pr-2 small">آکواریوم 150 لیتری آکوا آکواریوم 150</p>
                            </div>
                            <div class="text-right d-flex mb-2">
                                <p class="black-color small align-self-center">هزینه ارسال:</p>
                                <p class="pr-2 small">25.000</p>
                                <p class="small black-color align-self-center pr-2">تومان</p>
                            </div>
                            <div class="text-right mb-2 d-flex">
                                <p class="black-color small align-self-center">نحوه ارسال:</p>
                                <p class="pr-2 small">پیک</p>
                            </div>
                            <div class="text-right mb-2 d-flex">
                                <p class="black-color small align-self-center">روش پرداخت:</p>
                                <p class="pr-2 small">آنلاین</p>
                            </div>
                            <div class="text-right mb-2 d-flex">
                                <p class="black-color small align-self-center">کد تخفیف استفاده شده:</p>
                                <p class="pr-2 small">-</p>
                            </div>
                            <div class="text-right mb-2 d-flex">
                                <p class="black-color small align-self-center">تخفیف:</p>
                                <p class="pr-2 small">26.000</p>
                                <p class="small black-color align-self-center pr-2">تومان</p>
                            </div>
                            <div class="d-flex">
                                <div class="text-right d-flex"><p class="black-color small align-self-center">مبلغ کل:</p>
                                    <p class="pr-2">230.000</p>
                                    <p class="small black-color align-self-center pr-2">تومان</p>
                                </div>
                            </div>
                            <div class="mt-2 py-3 border-top">
                                <a href="#" class="align-self-center border-pill-5 black-color ml-3">
                                    <i class="fas fa-file-pdf align-self-center pl-1"></i>دریافت فاکتور</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-right mb-3 border-top-c3 mt-2">
                <p class="small gray-color mb-2 mt-2 text-justify"><i class="fas fa-exclamation-circle ml-2"></i>
                    برای دریافت فاکتور و مشخصات خرید بر روی فاکتور خرید مورد نظر کلیک نمایید.</p>
            </div>
        </div>
    </div>




@endsection

@push('scripts')
    <script src="{!! asset('assets/libs/owl-carousel/owl.carousel.min.js') !!}"></script>
@endpush

@push('custom-scripts')
    <script src="{!! asset('assets/js/owlCarousel.js') !!}"></script>
@endpush

