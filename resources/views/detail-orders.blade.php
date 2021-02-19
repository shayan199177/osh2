@extends('layouts.shop')
@push('styles')
    <link href="{!! asset('assets/libs/owl-carousel/owl.carousel.min.css') !!}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="container demo">
            <div class="row">
                <div class="col-12 text-right mt-3 mb-2">
                    <div class="col-12 border-bottom-c3"><h5 class="h6">جزییات سفارش</h5>
                    </div>
                </div>

                <div class="col-12 my-2">
                    <div class="card text-center">
                        <div class="card-header tabs-time">
                            <div class="d-flex">
                                <p class="align-self-center">1</p>
                                <p class="pr-1 align-self-center">مهر</p>
                                <p class="pr-1 align-self-center">1398</p>
                                <p class="mx-2">|</p>
                                <p class="align-self-center small">SH239998</p>
                                <p class="mx-2">|</p>
                                <p class="pr-1 yellow-color small align-self-center">در حال ارسال...</p>
                            </div>
                        </div>
                        <div class="card-body tabs-time">


                                <div class="row px-2">

                                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 my-1">
                                        <div class="col bg-white border rounded h-auto alert alert-dismissible fade show" role="alert">
                                            <div>
                                                <a href="#"><img src="temp/product/fish/7.jpg" alt="shayanPet"
                                                                 class="img-item mx-auto position-img-interest"></a>
                                            </div>
                                            <div class="carousel-item-title-interest d-flex">
                                                <a href="#" class="text-right text-decoration-none">
                                                    <h6 class="black-color">غذای خشک گربه رویال برای بزرگسال</h6>
                                                </a>
                                                <h4 class="sub-item-page mr-2">20 کیلویی</h4>
                                            </div>
                                            <div class="d-flex">
                                                <p class="toman-price-off align-self-center">
                                                    3,0۵۰,۰۰۰</p>
                                                <span
                                                    class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">60٪</span>
                                            </div>
                                            <div class="d-flex text-right">
                                                <p class="black-color">1,200,۰۰۰</p><span
                                                    class="toman-price small align-self-center">تومان</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 my-1">
                                        <div class="col bg-white border rounded h-auto alert alert-dismissible fade show" role="alert">
                                            <div>
                                                <a href="#"><img src="temp/product/fish/7.jpg" alt="shayanPet"
                                                                 class="img-item mx-auto position-img-interest"></a>
                                            </div>
                                            <div class="carousel-item-title-interest d-flex">
                                                <a href="#" class="text-right text-decoration-none">
                                                    <h6 class="black-color">غذای خشک گربه رویال برای بزرگسال</h6>
                                                </a>
                                                <h4 class="sub-item-page mr-2">20 کیلویی</h4>
                                            </div>
                                            <div class="d-flex">
                                                <p class="toman-price-off align-self-center">
                                                    3,0۵۰,۰۰۰</p>
                                                <span
                                                    class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">60٪</span>
                                            </div>
                                            <div class="d-flex text-right">
                                                <p class="black-color">1,200,۰۰۰</p><span
                                                    class="toman-price small align-self-center">تومان</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 my-1">
                                        <div class="col bg-white border rounded h-auto alert alert-dismissible fade show" role="alert">
                                            <div>
                                                <a href="#"><img src="temp/product/fish/7.jpg" alt="shayanPet"
                                                                 class="img-item mx-auto position-img-interest"></a>
                                            </div>
                                            <div class="carousel-item-title-interest d-flex">
                                                <a href="#" class="text-right text-decoration-none">
                                                    <h6 class="black-color">غذای خشک گربه رویال برای بزرگسال</h6>
                                                </a>
                                                <h4 class="sub-item-page mr-2">20 کیلویی</h4>
                                            </div>
                                            <div class="d-flex">
                                                <p class="toman-price-off align-self-center">
                                                    3,0۵۰,۰۰۰</p>
                                                <span
                                                    class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">60٪</span>
                                            </div>
                                            <div class="d-flex text-right">
                                                <p class="black-color">1,200,۰۰۰</p><span
                                                    class="toman-price small align-self-center">تومان</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>

{{--                            <div class="col-12">--}}
{{--                                <div class="owl-carousel items-products">--}}
{{--                                    <div class="width-detail-card">--}}
{{--                                        <div class="category-h330">--}}
{{--                                            <div><a href="#"><img src="temp/product/dog/4.jpg" alt="shayanPet"--}}
{{--                                                                  class="img-item mx-auto pt-3"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="carousel-item-title-basket text-center">--}}
{{--                                                <a href="#" class="text-center text-decoration-none">--}}
{{--                                                    <h6 class="black-color small">بند لیش آوانتیس</h6>--}}
{{--                                                    <h4 class="sub-item-page">2 متری</h4>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <h5 class="mt-2 d-flex justify-content-center">--}}
{{--                                                    <div class="d-flex"><p class="toman-price-off align-self-center">--}}
{{--                                                            ۵۰,۰۰۰</p>--}}
{{--                                                        <span--}}
{{--                                                            class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">۲٪</span>--}}
{{--                                                    </div>--}}
{{--                                                </h5>--}}
{{--                                                <div class="d-flex justify-content-center">--}}
{{--                                                    <p class="black-color">48,۰۰۰</p><span--}}
{{--                                                        class="toman-price small align-self-center">تومان</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="width-detail-card">--}}
{{--                                        <div class="category-h330">--}}
{{--                                            <div><a href="#"><img src="temp/product/dog/2.jpg" alt="shayanPet"--}}
{{--                                                                  class="img-item mx-auto pt-3"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="carousel-item-title-basket text-center">--}}
{{--                                                <a href="#" class="text-center text-decoration-none">--}}
{{--                                                    <h6 class="black-color small">بند لیش آوانتیس</h6>--}}
{{--                                                    <h4 class="sub-item-page">2 متری</h4>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <h5 class="mt-2 d-flex justify-content-center">--}}
{{--                                                    <div class="d-flex"><p class="toman-price-off align-self-center">--}}
{{--                                                            ۵۰,۰۰۰</p>--}}
{{--                                                        <span--}}
{{--                                                            class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">۲٪</span>--}}
{{--                                                    </div>--}}
{{--                                                </h5>--}}
{{--                                                <div class="d-flex justify-content-center">--}}
{{--                                                    <p class="black-color">48,۰۰۰</p><span--}}
{{--                                                        class="toman-price small align-self-center">تومان</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="width-detail-card">--}}
{{--                                        <div class="category-h330">--}}
{{--                                            <div><a href="#"><img src="temp/product/dog/2.jpg" alt="shayanPet"--}}
{{--                                                                  class="img-item mx-auto pt-3"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="carousel-item-title-basket text-center">--}}
{{--                                                <a href="#" class="text-center text-decoration-none">--}}
{{--                                                    <h6 class="black-color small">بند لیش آوانتیس</h6>--}}
{{--                                                    <h4 class="sub-item-page">2 متری</h4>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <h5 class="mt-2 d-flex justify-content-center">--}}
{{--                                                    <div class="d-flex"><p class="toman-price-off align-self-center">--}}
{{--                                                            ۵۰,۰۰۰</p>--}}
{{--                                                        <span--}}
{{--                                                            class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">۲٪</span>--}}
{{--                                                    </div>--}}
{{--                                                </h5>--}}
{{--                                                <div class="d-flex justify-content-center">--}}
{{--                                                    <p class="black-color">48,۰۰۰</p><span--}}
{{--                                                        class="toman-price small align-self-center">تومان</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="width-detail-card">--}}
{{--                                        <div class="category-h330">--}}
{{--                                            <div><a href="#"><img src="temp/product/dog/2.jpg" alt="shayanPet"--}}
{{--                                                                  class="img-item mx-auto pt-3"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="carousel-item-title-basket text-center">--}}
{{--                                                <a href="#" class="text-center text-decoration-none">--}}
{{--                                                    <h6 class="black-color small">بند لیش آوانتیس</h6>--}}
{{--                                                    <h4 class="sub-item-page">2 متری</h4>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <h5 class="mt-2 d-flex justify-content-center">--}}
{{--                                                    <div class="d-flex"><p class="toman-price-off align-self-center">--}}
{{--                                                            ۵۰,۰۰۰</p>--}}
{{--                                                        <span--}}
{{--                                                            class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">۲٪</span>--}}
{{--                                                    </div>--}}
{{--                                                </h5>--}}
{{--                                                <div class="d-flex justify-content-center">--}}
{{--                                                    <p class="black-color">48,۰۰۰</p><span--}}
{{--                                                        class="toman-price small align-self-center">تومان</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="width-detail-card">--}}
{{--                                        <div class="category-h330">--}}
{{--                                            <div><a href="#"><img src="temp/product/dog/2.jpg" alt="shayanPet"--}}
{{--                                                                  class="img-item mx-auto pt-3"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="carousel-item-title-basket text-center">--}}
{{--                                                <a href="#" class="text-center text-decoration-none">--}}
{{--                                                    <h6 class="black-color small">بند لیش آوانتیس</h6>--}}
{{--                                                    <h4 class="sub-item-page">2 متری</h4>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <h5 class="mt-2 d-flex justify-content-center">--}}
{{--                                                    <div class="d-flex"><p class="toman-price-off align-self-center">--}}
{{--                                                            ۵۰,۰۰۰</p>--}}
{{--                                                        <span--}}
{{--                                                            class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">۲٪</span>--}}
{{--                                                    </div>--}}
{{--                                                </h5>--}}
{{--                                                <div class="d-flex justify-content-center">--}}
{{--                                                    <p class="black-color">48,۰۰۰</p><span--}}
{{--                                                        class="toman-price small align-self-center">تومان</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="width-detail-card">--}}
{{--                                        <div class="category-h330">--}}
{{--                                            <div><a href="#"><img src="temp/product/dog/2.jpg" alt="shayanPet"--}}
{{--                                                                  class="img-item mx-auto pt-3"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="carousel-item-title-basket text-center">--}}
{{--                                                <a href="#" class="text-center text-decoration-none">--}}
{{--                                                    <h6 class="black-color small">بند لیش آوانتیس</h6>--}}
{{--                                                    <h4 class="sub-item-page">2 متری</h4>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <h5 class="mt-2 d-flex justify-content-center">--}}
{{--                                                    <div class="d-flex"><p class="toman-price-off align-self-center">--}}
{{--                                                            ۵۰,۰۰۰</p>--}}
{{--                                                        <span--}}
{{--                                                            class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">۲٪</span>--}}
{{--                                                    </div>--}}
{{--                                                </h5>--}}
{{--                                                <div class="d-flex justify-content-center">--}}
{{--                                                    <p class="black-color">48,۰۰۰</p><span--}}
{{--                                                        class="toman-price small align-self-center">تومان</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="width-detail-card">--}}
{{--                                        <div class="category-h330">--}}
{{--                                            <div><a href="#"><img src="temp/product/dog/2.jpg" alt="shayanPet"--}}
{{--                                                                  class="img-item mx-auto pt-3"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="carousel-item-title-basket text-center">--}}
{{--                                                <a href="#" class="text-center text-decoration-none">--}}
{{--                                                    <h6 class="black-color small">بند لیش آوانتیس</h6>--}}
{{--                                                    <h4 class="sub-item-page">2 متری</h4>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <h5 class="mt-2 d-flex justify-content-center">--}}
{{--                                                    <div class="d-flex"><p class="toman-price-off align-self-center">--}}
{{--                                                            ۵۰,۰۰۰</p>--}}
{{--                                                        <span--}}
{{--                                                            class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">۲٪</span>--}}
{{--                                                    </div>--}}
{{--                                                </h5>--}}
{{--                                                <div class="d-flex justify-content-center">--}}
{{--                                                    <p class="black-color">48,۰۰۰</p><span--}}
{{--                                                        class="toman-price small align-self-center">تومان</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="width-detail-card">--}}
{{--                                        <div class="category-h330">--}}
{{--                                            <div><a href="#"><img src="temp/product/dog/2.jpg" alt="shayanPet"--}}
{{--                                                                  class="img-item mx-auto pt-3"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="carousel-item-title-basket text-center">--}}
{{--                                                <a href="#" class="text-center text-decoration-none">--}}
{{--                                                    <h6 class="black-color small">بند لیش آوانتیس</h6>--}}
{{--                                                    <h4 class="sub-item-page">2 متری</h4>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <h5 class="mt-2 d-flex justify-content-center">--}}
{{--                                                    <div class="d-flex"><p class="toman-price-off align-self-center">--}}
{{--                                                            ۵۰,۰۰۰</p>--}}
{{--                                                        <span--}}
{{--                                                            class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">۲٪</span>--}}
{{--                                                    </div>--}}
{{--                                                </h5>--}}
{{--                                                <div class="d-flex justify-content-center">--}}
{{--                                                    <p class="black-color">48,۰۰۰</p><span--}}
{{--                                                        class="toman-price small align-self-center">تومان</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="width-detail-card">--}}
{{--                                        <div class="category-h330">--}}
{{--                                            <div><a href="#"><img src="temp/product/dog/2.jpg" alt="shayanPet"--}}
{{--                                                                  class="img-item mx-auto pt-3"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="carousel-item-title-basket text-center">--}}
{{--                                                <a href="#" class="text-center text-decoration-none">--}}
{{--                                                    <h6 class="black-color small">بند لیش آوانتیس</h6>--}}
{{--                                                    <h4 class="sub-item-page">2 متری</h4>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <h5 class="mt-2 d-flex justify-content-center">--}}
{{--                                                    <div class="d-flex"><p class="toman-price-off align-self-center">--}}
{{--                                                            ۵۰,۰۰۰</p>--}}
{{--                                                        <span--}}
{{--                                                            class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">۲٪</span>--}}
{{--                                                    </div>--}}
{{--                                                </h5>--}}
{{--                                                <div class="d-flex justify-content-center">--}}
{{--                                                    <p class="black-color">48,۰۰۰</p><span--}}
{{--                                                        class="toman-price small align-self-center">تومان</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <div class="card-footer tabs-time d-flex">
                            <div class="text-right d-flex"><p class="gray-color small align-self-center">مبلغ کل:</p>
                                <p class="pr-2">230.000</p>
                                <p class="small gray-color align-self-center pr-2">تومان</p>
                            </div>
                            <div class="mr-2">
                                <a href="#" class="align-self-center border-pill-5 black-color small ml-3 gray-color">
                                    <i class="fas fa-file-pdf small align-self-center pl-1"></i>فاکتور</a>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="{!! asset('assets/libs/owl-carousel/owl.carousel.min.js') !!}"></script>
@endpush

@push('custom-scripts')
    <script src="{!! asset('assets/js/owlCarousel.js') !!}"></script>
@endpush

