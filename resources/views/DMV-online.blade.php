@extends('layouts.shop')

@section('content')

    <div class="container text-center mt-3">
        <div class="d-inline-flex border-h6">
            <h1 class="h6 m-0 py-2 px-4">بیمارستان ها و کلینیک های منتخب</h1>
        </div>
    </div>

    <div class="container">
        <div class="card-dmv my-3 mx-1 rounded border border">
            <div class="card-body d-flex">
                <div id="carouselExampleIndicators" class="carousel slide carousel-dmv" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner inner-dmv">
                        <div class="carousel-item active">
                            <img class="d-block" src="temp/product/fish/8.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="temp/product/fish/7.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="temp/product/dog/2.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div>
                    <p>sdasdasdas</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w100 bg-dmvo-container">
        <div class="container">
            <div class="py-2">
                <p class="text-right text-justify px-2 small w-color py-1"><i class="fas fa-check-circle ml-1"></i>با
                    توجه به نیاز درمانی پت خود و تخصص دکتر دامپزشک جهت دریافت نوبت اقدام نمایید.</p>
                <p class="text-right text-justify px-2 small w-color py-1"><i class="fas fa-check-circle ml-1"></i>اگر
                    سوالی درباره ی رزرو و نحوه ی ارائه ی خدمات دارید می توانید به صفحه ی <a
                        href="../questions.html" class="yellow-color">سوالی دارید؟</a> مراجعه بفرمایید.</p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{!! asset('assets/libs/owl-carousel/owl.carousel.min.js') !!}"></script>
@endpush

