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
    </style>
@endpush

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-right mt-3 mb-3">
                <div class="col-12 border-bottom-c3"><h5 class="h6">علاقه مندی های من</h5>
                </div>
            </div>

            <div class="col-12">
                <div class="row">


                    <div class="col-12 col-lg-6 my-1">
                        <div class="col bg-white border rounded h-177 alert alert-dismissible fade show" role="alert">
                            <div class="float-right">
                                <a href="#"><img src="temp/product/dog/2.jpg" alt="shayanPet"
                                                 class="img-item mx-auto py-3"></a>
                            </div>
                            <div class="carousel-item-title-interest float-right ml-1 mr-3 mt-4">
                                <a href="#" class="text-right text-decoration-none">
                                    <h6 class="black-color">غذای خشک رویال</h6>
                                    <h4 class="sub-item-page">20 کیلویی</h4>
                                </a>
                                <div class="d-flex"><p class="toman-price-off align-self-center">
                                        3,0۵۰,۰۰۰</p>
                                    <span
                                        class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">60٪</span>
                                </div>
                                <div class="d-flex text-right">
                                    <p class="black-color">1,200,۰۰۰</p><span
                                        class="toman-price small align-self-center">تومان</span>
                                </div>
                            </div>
                            <div class="float-left">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-lg-6 my-1">
                        <div class="col bg-white border rounded h-177 alert alert-dismissible fade show" role="alert">
                            <div class="float-right">
                                <a href="#"><img src="temp/product/cat/2.jpg" alt="shayanPet"
                                                 class="img-item mx-auto py-3"></a>
                            </div>
                            <div class="carousel-item-title-interest float-right ml-1 mr-3 mt-4">
                                <a href="#" class="text-right text-decoration-none">
                                    <h6 class="black-color">غذای خشک گربه رویال</h6>
                                    <h4 class="sub-item-page">20 کیلویی</h4>
                                </a>
                                <div class="d-flex"><p class="toman-price-off align-self-center">
                                        6۵۰,۰۰۰</p>
                                    <span
                                        class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">30٪</span>
                                </div>
                                <div class="d-flex text-right">
                                    <p class="black-color">450,۰۰۰</p><span
                                        class="toman-price small align-self-center">تومان</span>
                                </div>
                            </div>
                            <div class="float-left">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-lg-6 my-1">
                        <div class="col bg-white border rounded h-177 alert alert-dismissible fade show" role="alert">
                            <div class="float-right">
                                <a href="#"><img src="temp/product/fish/7.jpg" alt="shayanPet"
                                                 class="img-item mx-auto py-3"></a>
                            </div>
                            <div class="carousel-item-title-interest float-right ml-1 mr-3 mt-4">
                                <a href="#" class="text-right text-decoration-none">
                                    <h6 class="black-color">تانک آکواریوم</h6>
                                    <h4 class="sub-item-page">200 لیتری</h4>
                                </a>
                                <div class="d-flex"><p class="toman-price-off align-self-center">
                                        2,07۰,۰۰۰</p>
                                    <span
                                        class="badge badge-danger badge-pill mr-2 font-size-08rem-color-w font-pill-detail-card">67٪</span>
                                </div>
                                <div class="d-flex text-right">
                                    <p class="black-color">890,۰۰۰</p><span
                                        class="toman-price small align-self-center">تومان</span>
                                </div>
                            </div>
                            <div class="float-left">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
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

