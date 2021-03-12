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
            height: 75px;
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
    </style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right mt-4">
                    <div class="row pb-3">
                        <div class="col-12 col-md-4 col-lg-2 py-2"><h5 class="h6">ویدیوها و مقاله ها</h5>
                        </div>
                        <div class="col-12 col-md-7 col-lg-6 col-xl-4 justify-content-end">
                            <form class="form-inline justify-content-end">
                                <input class="form-control-vr input-search" type="search"
                                       placeholder="ویدیو یا مقاله مورد نظرتون را جستجو کنید..."
                                       aria-label="Search">
                                <button class="btn button-search btn-search-vr" type="submit">
                                    <i class="fas fa-search m-6p"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 p-1">
                    <div class="card">
                        <img class="card-img-top" src="/temp/product/article/rabbit.jpg" alt="Card image cap">
                        <div class="badge-video badge-article">مقاله</div>
                        <div class="card-body">
                            <a href="#" class="a-title"><h5 class="card-title">محیط زندگی خرگوش shangol و بازیگوش خاک تو
                                    سر متن طولانی حوصله میخواد ... برو بابا</h5></a>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                                کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و
                                متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                الخصوص</p>
                            <a href="#" class="btn btn-sm btn-light mt-3">ادامه مطلب</a>
                            <p href="#" class="float-right gray-color small mt-4"><span
                                    class="pl-1 small">تاریخ انتشار:</span><span>1399/07/09</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 p-1">
                    <div class="card">
                        <img class="card-img-top" src="/temp/product/article/rabbit.jpg" alt="Card image cap">
                        <div class="badge-video">ویدئو</div>
                        <div class="card-body">
                            <a href="#" class="a-title"><h5 class="card-title">محیط زندگی خرگوش</h5></a>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                                کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و
                                متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                الخصوص</p>
                            <a href="#" class="btn btn-sm btn-light mt-3">ادامه مطلب</a>
                            <p href="#" class="float-right gray-color small mt-4"><span
                                    class="pl-1 small">تاریخ انتشار:</span><span>1399/07/09</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 p-1">
                    <div class="card">
                        <img class="card-img-top" src="/temp/product/article/rabbit.jpg" alt="Card image cap">
                        <div class="badge-video badge-article">مقاله</div>
                        <div class="card-body">
                            <a href="#" class="a-title"><h5 class="card-title">محیط زندگی خرگوش</h5></a>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                                کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و
                                متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                الخصوص</p>
                            <a href="#" class="btn btn-sm btn-light mt-3">ادامه مطلب</a>
                            <p href="#" class="float-right gray-color small mt-4"><span
                                    class="pl-1 small">تاریخ انتشار:</span><span>1399/07/09</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 p-1">
                    <div class="card">
                        <img class="card-img-top" src="/temp/product/article/rabbit.jpg" alt="Card image cap">
                        <div class="badge-video badge-article">مقاله</div>
                        <div class="card-body">
                            <a href="#" class="a-title"><h5 class="card-title">محیط زندگی خرگوش</h5></a>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                                کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و
                                متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                الخصوص</p>
                            <a href="#" class="btn btn-sm btn-light mt-3">ادامه مطلب</a>
                            <p href="#" class="float-right gray-color small mt-4"><span
                                    class="pl-1 small">تاریخ انتشار:</span><span>1399/07/09</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 p-1">
                    <div class="card">
                        <img class="card-img-top" src="/temp/product/article/rabbit.jpg" alt="Card image cap">
                        <div class="badge-video">ویدئو</div>
                        <div class="card-body">
                            <a href="#" class="a-title"><h5 class="card-title">محیط زندگی خرگوش</h5></a>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                                کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و
                                متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                الخصوص</p>
                            <a href="#" class="btn btn-sm btn-light mt-3">ادامه مطلب</a>
                            <p href="#" class="float-right gray-color small mt-4"><span
                                    class="pl-1 small">تاریخ انتشار:</span><span>1399/07/09</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 p-1">
                    <div class="card">
                        <img class="card-img-top" src="/temp/product/article/rabbit.jpg" alt="Card image cap">
                        <div class="badge-video">ویدئو</div>
                        <div class="card-body">
                            <a href="#" class="a-title"><h5 class="card-title">محیط زندگی خرگوش</h5></a>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                                کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و
                                متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                الخصوص</p>
                            <a href="#" class="btn btn-sm btn-light mt-3">ادامه مطلب</a>
                            <p href="#" class="float-right gray-color small mt-4"><span
                                    class="pl-1 small">تاریخ انتشار:</span><span>1399/07/09</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 p-1">
                    <div class="card">
                        <img class="card-img-top" src="/temp/product/article/cat.jpg" alt="Card image cap">
                        <div class="badge-video">ویدئو</div>
                        <div class="card-body">
                            <a href="#" class="a-title"><h5 class="card-title">گربه ها ....</h5></a>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                                کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و
                                متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص
                                طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که
                                تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز
                                شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                                استفاده قرار گیرد.</p>
                            <a href="#" class="btn btn-sm btn-light mt-3">ادامه مطلب</a>
                            <p href="#" class="float-right gray-color small mt-4"><span
                                    class="pl-1 small">تاریخ انتشار:</span><span>1399/07/09</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 p-1">
                    <div class="card">
                        <img class="card-img-top" src="/temp/product/article/rabbit.jpg" alt="Card image cap">
                        <div class="badge-video">ویدئو</div>
                        <div class="card-body">
                            <a href="#" class="a-title"><h5 class="card-title">خرگوش خرگوش</h5></a>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                                کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و
                                متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                الخصوص</p>
                            <a href="#" class="btn btn-sm btn-light mt-3">ادامه مطلب</a>
                            <p href="#" class="float-right gray-color small mt-4"><span
                                    class="pl-1 small">تاریخ انتشار:</span><span>1399/07/09</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 p-1">
                    <div class="card">
                        <img class="card-img-top" src="/temp/product/article/dog.jpg" alt="Card image cap">
                        <div class="badge-video badge-article">مقاله</div>
                        <div class="card-body">
                            <a href="#" class="a-title"><h5 class="card-title">نحوه بازی با سگ ها</h5></a>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده
                                از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای
                                کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و
                                متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                الخصوص</p>
                            <a href="#" class="btn btn-sm btn-light mt-3">ادامه مطلب</a>
                            <p href="#" class="float-right gray-color small mt-4"><span
                                    class="pl-1 small">تاریخ انتشار:</span><span>1399/07/09</span></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 my-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link black-color" href="#" tabindex="-1">بعدی</a>
                        </li>
                        <li class="page-item"><a class="page-link black-color" href="#">3</a></li>
                        <li class="page-item"><a class="page-link black-color" href="#">2</a></li>
                        <li class="page-item"><a class="page-link black-color" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link black-color disabled" href="#">قبلی</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-12 text-right mb-3 border-top-c3 mt-2">
                <p class="small gray-color mb-2 mt-2 text-justify"><i
                        class="fas fa-exclamation-circle ml-2"></i>مقالات و ویدئوها به ترتیب انتشار از جدید به قدیم قرار
                    گرفته اند.</p>
            </div>
        </div>
    </div>




@endsection



