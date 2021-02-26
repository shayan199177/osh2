@extends('layouts.shop')
@push('styles')
    <link href="{!! asset('assets/libs/owl-carousel/owl.carousel.min.css') !!}" rel="stylesheet">
    <style>
        .alert-dismissible .close {
            position: absolute;
            top: 0;
            left: 0 !important;
            right: unset !important;
            padding: 11px 15px;
            color: inherit;
            float: left !important;
        }
        .alert {
            margin-bottom: 0 !important;
        }
        .line-h25{
            line-height: 25px;
        }
    </style>
@endpush

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-right mt-3 mb-3">
                <div class="border-bottom-c3"><h5 class="h6">علاقه مندی های من</h5>
                </div>
            </div>

            <div class="col-12 mb-4">
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 px-3 px-md-1 p-1">
                        <div class="bg-white border rounded h-auto alert alert-dismissible fade show text-center" role="alert">
                            <div>
                                <a href="#"><img src="temp/product/fish/7.jpg" alt="shayanPet"
                                                 class="img-item pt-3"></a>
                            </div>
                            <div class="carousel-item-title-interest">
                                <a href="#" class="text-center text-decoration-none">
                                    <h6 class="black-color mt-3 line-h25">آکواریوم 150 لیتری آکوا آکواریوم 150 لیتری آکوا آکواریوم 150 لیتری آکوا آکواریوم 150 لیتری آکوا</h6>
                                </a>
                            </div>
                            <div class="float-left">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="far fa-trash-alt small"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 px-3 px-md-1 p-1">
                        <div class="bg-white border rounded h-auto alert alert-dismissible fade show text-center" role="alert">
                            <div>
                                <a href="#"><img src="temp/product/fish/8.jpg" alt="shayanPet"
                                                 class="img-item pt-3"></a>
                            </div>
                            <div class="carousel-item-title-interest">
                                <a href="#" class="text-center text-decoration-none">
                                    <h6 class="black-color mt-3 line-h25">غذای خشک گربه رویال برای بزرگسال</h6>
                                </a>
                            </div>
                            <div class="float-left">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="far fa-trash-alt small"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 px-3 px-md-1 p-1">
                        <div class="bg-white border rounded h-auto alert alert-dismissible fade show text-center" role="alert">
                            <div>
                                <a href="#"><img src="temp/product/cat/2.jpg" alt="shayanPet"
                                                 class="img-item pt-3"></a>
                            </div>
                            <div class="carousel-item-title-interest">
                                <a href="#" class="text-center text-decoration-none">
                                    <h6 class="black-color mt-3 line-h25">غذای خشک گربه رویال برای بزرگسال</h6>
                                </a>
                            </div>
                            <div class="float-left">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="far fa-trash-alt small"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 px-3 px-md-1 p-1">
                        <div class="bg-white border rounded h-auto alert alert-dismissible fade show text-center" role="alert">
                            <div>
                                <a href="#"><img src="temp/product/cat/1.jpg" alt="shayanPet"
                                                 class="img-item pt-3"></a>
                            </div>
                            <div class="carousel-item-title-interest">
                                <a href="#" class="text-center text-decoration-none">
                                    <h6 class="black-color mt-3 line-h25">غذای خشک گربه رویال برای زیر 6 ماه</h6>
                                </a>
                            </div>
                            <div class="float-left">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="far fa-trash-alt small"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 px-3 px-md-1 p-1">
                        <div class="bg-white border rounded h-auto alert alert-dismissible fade show text-center" role="alert">
                            <div>
                                <a href="#"><img src="temp/product/dog/2.jpg" alt="shayanPet"
                                                 class="img-item pt-3"></a>
                            </div>
                            <div class="carousel-item-title-interest">
                                <a href="#" class="text-center text-decoration-none">
                                    <h6 class="black-color mt-3 line-h25">غذای خشک سگ رویال برای بزرگسال</h6>
                                </a>
                            </div>
                            <div class="float-left">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="far fa-trash-alt small"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 px-3 px-md-1 p-1">
                        <div class="bg-white border rounded h-auto alert alert-dismissible fade show text-center" role="alert">
                            <div>
                                <a href="#"><img src="temp/product/dog/3.jpg" alt="shayanPet"
                                                 class="img-item pt-3"></a>
                            </div>
                            <div class="carousel-item-title-interest">
                                <a href="#" class="text-center text-decoration-none">
                                    <h6 class="black-color mt-3 line-h25">جای خواب گربه مدل سبز</h6>
                                </a>
                            </div>
                            <div class="float-left">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="far fa-trash-alt small"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 px-3 px-md-1 p-1">
                        <div class="bg-white border rounded h-auto alert alert-dismissible fade show text-center" role="alert">
                            <div>
                                <a href="#"><img src="temp/product/dog/4.jpg" alt="shayanPet"
                                                 class="img-item pt-3"></a>
                            </div>
                            <div class="carousel-item-title-interest">
                                <a href="#" class="text-center text-decoration-none">
                                    <h6 class="black-color mt-3 line-h25"> بند لیش سه متری آوین بند لیش سه متری آوین بند لیش سه متری آوین</h6>
                                </a>
                            </div>
                            <div class="float-left">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="far fa-trash-alt small"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>

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

