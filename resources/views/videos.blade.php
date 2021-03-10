@extends('layouts.shop')
@push('styles')
    <style>
        .card {
            background-color: #fff !important;
        }

        .card-body {
            padding: 1.25rem !important;
        }

        .card-text {
            overflow-y: hidden;
            height: 73px;
            text-align: right;
            font-size: 0.8rem;
            color: slategray;
        }

        .card-title {
            overflow-y: hidden;
            height: 46px;
            text-align: right;
            font-size: 1rem;
            line-height: 25px;
        }

        .a-title {
            color: inherit;
        }

        .video-size-main {
            width: auto;
            height: 210px;
        }

        /*// Extra small devices (portrait phones, less than 576px)*/
        @media (max-width: 576px) {
            .video-size-main {
                width: 100%;
                height: auto;
            }
        }

        /*// Small devices (landscape phones, 576px and up)*/
        @media (min-width: 576px) and (max-width: 768px) {
            .video-size-main {
                width: 100%;
                height: auto;
            }

        }

        /*// Medium devices (tablets, 768px and up)*/
        @media (min-width: 768px) and (max-width: 992px) {

        }

        /*/ Large devices (desktops, 992px and up) */
        @media (min-width: 992px) and (max-width: 1199.98px) {


        }
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right mt-3 mb-2">
                    <div class="col-12 border-bottom-c3"><h5 class="h6">ویدیوهای آموزشی و خبری</h5>
                    </div>
                </div>
                <div class="col-12 mt-4 mt-md-2 d-md-flex">
                    <div>
                        <video class="video-size-main rounded" playsinline="playsinline" autoplay="autoplay"
                               muted="muted"
                               loop="loop">
                            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4"
                                    type="video/mp4">
                        </video>
                    </div>
                    <div class="p-3">
                        <a href="#" class="a-title"><h5 class="card-title">محیط زندگی خرگوش shangol و بازیگوش
                                خاک تو
                                سر متن طولانی حوصله میخواد ... برو بابا</h5></a>
                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده
                            از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                            کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                            جامعه و
                            متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                            الخصوص</p>
                        <p href="#" class="float-right gray-color small mt-3">تاریخ انتشار:1399/07/09</p>
                    </div>
                </div>

                <div class="col-12 mt-4 mt-md-2 d-md-flex">
                    <div>
                        <video class="video-size-main rounded" playsinline="playsinline" autoplay="autoplay"
                               muted="muted"
                               loop="loop">
                            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4"
                                    type="video/mp4">
                        </video>
                    </div>
                    <div class="p-3">
                        <a href="#" class="a-title"><h5 class="card-title">محیط زندگی خرگوش shangol و بازیگوش
                                خاک تومحیط زندگی خرگوش shangol و بازیگوش
                                خاک تو
                                سر متن طولانی حوصله میخواد ... برو بابا</h5></a>
                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده
                            الخصوص</p>
                        <p href="#" class="float-right gray-color small mt-3">تاریخ انتشار:1400/07/09</p>
                    </div>
                </div>

                <div class="col-12 mt-4 mt-md-2 d-md-flex">
                    <div>
                        <video class="video-size-main rounded" playsinline="playsinline" autoplay="autoplay"
                               muted="muted"
                               loop="loop">
                            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4"
                                    type="video/mp4">
                        </video>
                    </div>
                    <div class="p-3">
                        <a href="#" class="a-title"><h5 class="card-title">محیط زندگی خرگوش shangol و بازیگوش
                                خاک تو
                                سر متن طولانی حوصله میخواد ... برو بابا</h5></a>
                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده
                            از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                            کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                            جامعه و
                            متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                            الخصوص</p>
                        <p href="#" class="float-right gray-color small mt-3">تاریخ انتشار:1399/07/09</p>
                    </div>
                </div>

                <div class="col-12 mt-4 mt-md-2 d-md-flex">
                    <div>
                        <video class="video-size-main rounded" playsinline="playsinline" autoplay="autoplay"
                               muted="muted"
                               loop="loop">
                            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4"
                                    type="video/mp4">
                        </video>
                    </div>
                    <div class="p-3">
                        <a href="#" class="a-title"><h5 class="card-title">محیط زندگی خرگوش shangol و بازیگوش
                                خاک تو
                                سر متن طولانی حوصله میخواد ... برو بابا</h5></a>
                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده
                            از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                            کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                            جامعه و
                            متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                            الخصوص</p>
                        <p href="#" class="float-right gray-color small mt-3">تاریخ انتشار:1399/07/09</p>
                    </div>
                </div>

                <div class="col-12 mt-4 mt-md-2 d-md-flex">
                    <div>
                        <video class="video-size-main rounded" playsinline="playsinline" autoplay="autoplay"
                               muted="muted"
                               loop="loop">
                            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4"
                                    type="video/mp4">
                        </video>
                    </div>
                    <div class="p-3">
                        <a href="#" class="a-title"><h5 class="card-title">محیط زندگی خرگوش shangol و بازیگوش
                                خاک تو
                                سر متن طولانی حوصله میخواد ... برو بابا</h5></a>
                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده
                            از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                            کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                            جامعه و
                            متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                            الخصوص</p>
                        <p href="#" class="float-right gray-color small mt-3">تاریخ انتشار:1399/07/09</p>
                    </div>
                </div>

                <div class="col-12 my-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link gray-color" href="#" tabindex="-1">بعدی</a>
                            </li>
                            <li class="page-item"><a class="page-link gray-color" href="#">3</a></li>
                            <li class="page-item"><a class="page-link gray-color" href="#">2</a></li>
                            <li class="page-item"><a class="page-link gray-color" href="#">1</a></li>
                            <li class="page-item">
                                <a class="page-link gray-color disabled" href="#">قبلی</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 text-right mb-3 border-top-c3 mt-2">
                    <p class="small gray-color mb-2 mt-2 text-justify"><i
                            class="fas fa-exclamation-circle ml-2"></i>مقالات و ویدئوها به ترتیب انتشار از جدید به قدیم
                        قرار
                        گرفته اند.</p>
                </div>
            </div>
        </div>




@endsection



