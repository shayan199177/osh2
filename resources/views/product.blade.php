@extends('layouts.shop')

@push('styles')
    <link href="{!! asset('assets/libs/owl-carousel/owl.carousel.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/libs/css-zoom/xzoom.css') !!}" media="all" rel="stylesheet">
    <link href="{!! asset('assets/libs/js-zoom/fancybox/source/jquery.fancybox.css') !!}" media="all" rel="stylesheet">
@endpush

@section('content')
    <div>
        <!--begin breadcrumbs-->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">سگ‌ها</a></li>
                            <li class="breadcrumb-item"><a href="#">غذای خشک سگ</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!--end breadcrumbs-->

        <div class="container-fluid">
            <div class="container">
                <div class="row bg-white">
                    <div id="fancy" class="border-left col-12 col-md-6 col-lg-4 my-3 my-lg-4">
                        <p class="mt-2 mb-3 text-center font-weight-bold h6 d-block d-md-none">
                            غذای خشک سگ نوتری پت
                        </p>
                        <div class="xzoom-container float-right">
                            <div class="col-12 text-right">
                                <p class="mb-2 zoom-text">
                                    برای بزرگنمایی محصول روی تصویر کلیک کنید.
                                </p>
                            </div>
                            <img alt="غذای خشک سگ نوتری پت" class="xzoom4" id="xzoom-fancy"
                                 src="/temp/product/_sample/46/conversions/dog-food1-preview.jpg"
                                 xoriginal="/temp/product/_sample/46/dog-food1.png">
                            <div class="xzoom-thumbs">
                                <a href="/temp/product/_sample/46/dog-food1.png">
                                    <img alt="غذای خشک سگ نوتری پت" class="xzoom-gallery4"
                                         src="/temp/product/_sample/46/conversions/dog-food1-thumbnail.jpg"
                                         xpreview="/temp/product/_sample/46/conversions/dog-food1-preview.jpg">
                                </a>
                                <a href="/temp/product/_sample/47/dog-food2.png">
                                    <img alt="غذای خشک سگ نوتری پت" class="xzoom-gallery4"
                                         src="/temp/product/_sample/47/conversions/dog-food2-thumbnail.jpg"
                                         xpreview="/temp/product/_sample/47/conversions/dog-food2-preview.jpg">
                                </a>
                                <a href="/temp/product/_sample/45/dog-food3.png">
                                    <img alt="غذای خشک سگ نوتری پت" class="xzoom-gallery4"
                                         src="/temp/product/_sample/45/conversions/dog-food3-thumbnail.jpg"
                                         xpreview="/temp/product/_sample/45/conversions/dog-food3-preview.jpg">
                                </a>
                                <a href="/temp/product/_sample/44/dog-food4.png">
                                    <img alt="غذای خشک سگ نوتری پت" class="xzoom-gallery4"
                                         src="/temp/product/_sample/44/conversions/dog-food4-thumbnail.jpg"
                                         xpreview="/temp/product/_sample/44/conversions/dog-food4-preview.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 text-right">
                        <div class="mr-4 mt-4 mb-2 border-bottom">
                            <p class="font-weight-bold h5 d-none d-md-block">
                                غذای خشک سگ نوتری پت
                            </p>
                        </div>
                        <div class="mr-4 small my-3">
                            <div class="text-right small mb-2">
                                <span>امتیاز محصول:</span>
                                <span>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                                 </span>
                            </div>
                            <div class="d-flex justify-content-between justify-content-md-start">

                                <div class="ml-md-5">
                                    <span class="px-1">برند:</span>
                                    <a href="#" class="cat-item-page">نوتری</a>
                                </div>
                                <div>
                                    <span class="px-1">دسته‌بندی:</span>
                                    <a href="#" class="cat-item-page">غذای خشک سگ</a>
                                </div>
                            </div>
                        </div>
                        <div class="mr-4 ml-4 mt-2 mt-sm-5">
                            <p>ویژگی های محصول</p>
                            <p class="mt-2 sub-item-page text-justify">
                                <i class="fas fa-check-circle ml-2"></i><span>مناسب برای سگ بالغ نژاد بزرگ</span>
                            </p>
                            <p class="mt-2 sub-item-page text-justify">
                                <i class="fas fa-check-circle ml-2"></i><span>کمک به سلامت استخوان ها و مفاصل</span>
                            </p>
                            <p class="mt-2 sub-item-page text-justify">
                                <i class="fas fa-check-circle ml-2"></i><span>خوش خوراک و مطبوع</span>
                            </p>
                            <p class="mt-2 sub-item-page text-justify">
                                <i class="fas fa-check-circle ml-2"></i><span>جهت سلامت دستگاه گوارش و هضم آسان</span>
                            </p>
                            <p class="mt-2 sub-item-page text-justify">
                                <i class="fas fa-check-circle ml-2"></i><span>نسبت متعادل امگا ۳ و ۶ برای سلامت پوست و پوشش بدن</span>
                            </p>
                        </div>
                        <div class="col-12 text-right mb-3 mt-5 d-none d-lg-block position-absolute bottom-0">
                            <div class="border-top mx-2"></div>
                            <img src="/assets/images/product/badge-1.jpg" alt="" class="my-3 px-3">
                            <img src="/assets/images/product/badge-2.jpg" alt="" class="my-3 px-3">
                            <img src="/assets/images/product/badge-3.jpg" alt="" class="my-3 px-3">
                            <img src="/assets/images/product/badge-4.jpg" alt="" class="my-3 px-3">
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 mt-3 mt-lg-5">
                        <div class="card mt-2">
                            <p class="d-lg-none text-center mt-3 mb-0 font-weight-bold h6">غذای خشک سگ نوتری پت</p>
                            <div class="price-font-item text-center border-bottom-item">
                                <div class="toman-price-off-item mb-2">
                                    <span id="original-price" class="align-middle"
                                          data-price="450000">465,000</span><span
                                        id="off-percent" class="badge badge-danger badge-pill mr-2">35٪</span>
                                </div>
                                <span id="price" data-price="290000">300,000</span><span
                                    class="toman-price">تومان</span>
                            </div>

                            <div class="border-bottom-item text-center py-3">
                                <label for="variation" class="small">انتخاب کنید:</label>
                                <select id="variation" class="d-block mx-auto w-50 p-1 rounded">
                                    <option value="3" data-original-price="15000" data-price="10000">
                                        5 کیلویی
                                    </option>
                                    <option value="4" data-original-price="600000" data-price="550000">
                                        15 کیلویی
                                    </option>
                                </select>
                            </div>

                            <div class="text-center border-bottom-item py-3">
                                <div class="d-flex justify-content-center">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-check"
                                         fill="currentColor"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"></path>
                                        <path fill-rule="evenodd"
                                              d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                    </svg>
                                    <p class="card-link small mr-2">گارانتی اصالت و سلامت فیزیکی کالا</p>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <form action="">
                                    <button class="button-buy">افزودن به سبد خرید</button>
                                </form>
                            </div>

                            <div class="text-center my-3">
                                <form action="">
                                    <button class="love-item">
                                        <i class="fas fa-heart ml-2 text-danger"></i>افزودن به علاقه‌مندی‌ها
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 text-center d-lg-none my-3 mt-lg-0">
                            <img src="/assets/images/product/badge-1.jpg" alt="" class="my-2 px-3">
                            <img src="/assets/images/product/badge-2.jpg" alt="" class="my-2 px-3">
                            <img src="/assets/images/product/badge-3.jpg" alt="" class="my-2 px-3">
                            <img src="/assets/images/product/badge-4.jpg" alt="" class="my-2 px-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid my-3">
            <div class="container">
                <div class="row">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-lin active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                               role="tab"
                               aria-controls="nav-home" aria-selected="true"><i class="fas fa-align-justify ml-2"></i>مشخصات
                                محصول</a>
                            <a class="nav-item nav-lin" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                               role="tab"
                               aria-controls="nav-profile" aria-selected="false"><i class="fas fa-glasses ml-2"></i>نقد
                                و بررسی</a>
                            <a class="nav-item nav-lin" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                               role="tab"
                               aria-controls="nav-contact" aria-selected="false"><i class="far fa-comments ml-2"></i>نظرات
                                کاربران</a>
                        </div>
                    </nav>
                    <div class="tab-content col-12" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            <div class="row my-4">
                                <div class="col-4 col-md-2 mb-2">
                                    <div class="text-item-cat text-right h-100">
                                        <p>ابعاد محصول</p>
                                    </div>
                                </div>
                                <div class="col-8 col-md-10 mb-2">
                                    <div class="text-item-cat text-right">
                                        <p>۱۴ × ۲۳ × ۱۳ سانتی متر</p>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2 mb-2">
                                    <div class="text-item-cat text-right h-100">
                                        <p>انرژی</p>
                                    </div>
                                </div>
                                <div class="col-8 col-md-10 mb-2">
                                    <div class="text-item-cat text-right">
                                        <p>۳۰۰۰-۳۲۰۰ کیلوکالری درکیلوگرم</p>
                                    </div>
                                </div>
                                <div class="col-4 col-md-2 mb-2">
                                    <div class="text-item-cat text-right h-100">
                                        <p>ترکیبات</p>
                                    </div>
                                </div>
                                <div class="col-8 col-md-10 mb-2">
                                    <div class="text-item-cat text-right">
                                        <p>گوشت مرغ تازه ، ذرت ، پودر گوشت مرغ ، پودرگوشت قرمز ، گندم ، گلوتن ، ماکارونی
                                            ، پودر استخوان ،
                                            پودر تخم مرغ کامل ، مولتی ویتامین مواد معدنی کمیاب ، طعم دهنده طبیعی ،
                                            ویتامین E ، و آنتی اکسیدان
                                            ، روغن گیاهی ، چربی حیوانی و لیزین</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade text-justify px-4 py-4 " id="nav-profile" role="tabpanel"
                             aria-labelledby="nav-profile-tab">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                                است،
                                <strong>چاپگرها و متون</strong> بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و
                                برای شرایط فعلی
                                تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای
                                زیادی در شصت و
                                سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها
                                شناخت بیشتری
                                را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد،
                                در این صورت
                                می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان
                                رسد و
                                زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود
                                طراحی
                                اساسا مورد استفاده قرار گیرد.</p>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-12 col-lg-5 px-4 py-4 text-right order-1 order-lg-2">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">امتیازدهی به محصول از 1 تا 5</label>
                                            <select class="form-control-textbox-item" id="exampleFormControlSelect1">
                                                <option>امتیاز دهید...</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">متن نظر شما</label>
                                            <textarea class="form-control-textbox-item form1"
                                                      id="exampleFormControlTextarea1" rows="3"
                                                      placeholder="متن نظر خود را اینجا بنویسید..."></textarea>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">ثبت نظر</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 col-lg-7 order-2 order-lg-1">
                                    <div>
                                        <div class="d-flex my-3 border-bottom">
                                            <div class="mr-3">
                                                نظرات کاربران
                                            </div>
                                        </div>
                                        <div class="text-right d-flex my-3">
                                            <div class="box-comment-user">
                                                آیدین خدادادی
                                                <div class="small">
                                                    در تاریخ ۱۳ مرداد ۱۳۹۹
                                                </div>
                                                <div class="small">امتیاز به محصول:</div>
                                                <div>
                        <span>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                        </span>
                                                </div>
                                            </div>
                                            <div class="box-comment text-justify">
                                                به نظرم بابت پولی که میدین کیفیت خوبی داره البته با توجه به این گرونی ها
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-right d-flex my-3">
                                            <div class="box-comment-user">
                                                محمد شمس کیا
                                                <div class="small">
                                                    در تاریخ 25 فروردین ۱۳۹۹
                                                </div>
                                                <div class="small">امتیاز به محصول:</div>
                                                <div>
                        <span>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                        </span>
                                                </div>
                                            </div>
                                            <div class="box-comment text-justify">
                                                از نظر قیافه و آنتن دهی مناسب هست و ارزش خرید داره البته کیفیت بدنه
                                                پلاستیک خیلی
                                                بالا نیست و ایستگاههای دیجیتالی را نمیگیره
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-right d-flex my-3">
                                            <div class="box-comment-user">
                                                محمد شمس کیا
                                                <div class="small">
                                                    در تاریخ 25 فروردین ۱۳۹۹
                                                </div>
                                                <div class="small">امتیاز به محصول:</div>
                                                <div>
                        <span>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                        </span>
                                                </div>
                                            </div>
                                            <div class="box-comment text-justify">
                                                سلام هر کی میخواد پولشو بریز دور بخره من خریدم با توجه به تعریفای که
                                                دوستان کرده
                                                بودن ولی دو هفته بیشتر کار نکرد داخلش باطری شارژی داره که به علت زیاد
                                                موندن
                                                رادیو در انبار باطری خالی کرده برای تعویض باطری حدود ۲۰۰ هزار تومان
                                                هزینه داره
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-right d-flex my-3">
                                            <div class="box-comment-user">
                                                محمد شمس کیا
                                                <div class="small">
                                                    در تاریخ 25 فروردین ۱۳۹۹
                                                </div>
                                                <div class="small">امتیاز به محصول:</div>
                                                <div>
                        <span>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                        </span>
                                                </div>
                                            </div>
                                            <div class="box-comment text-justify">
                                                به نظرم بابت پولی که میدین کیفیت خوبی داره البته با توجه به این گرونی ها
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-right d-flex my-3">
                                            <div class="box-comment-user">
                                                محمد شمس کیا
                                                <div class="small">
                                                    در تاریخ 25 فروردین ۱۳۹۹
                                                </div>
                                                <div class="small">امتیاز به محصول:</div>
                                                <div>
                        <span>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                        </span>
                                                </div>
                                            </div>
                                            <div class="box-comment text-justify">
                                                به نظرم بابت پولی که میدین کیفیت خوبی داره البته با توجه به این گرونی ها

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-right d-flex my-3">
                                            <div class="box-comment-user">
                                                محمد شمس کیا
                                                <div class="small">
                                                    در تاریخ 25 فروردین ۱۳۹۹
                                                </div>
                                            </div>
                                            <div class="box-comment text-justify">
                                                سلام هر کی میخواد پولشو بریز دور بخره من خریدم با توجه به تعریفای که
                                                دوستان کرده
                                                بودن ولی دو هفته بیشتر کار نکرد داخلش باطری شارژی داره که به علت زیاد
                                                موندن
                                                رادیو در انبار باطری خالی کرده برای تعویض باطری حدود ۲۰۰ هزار تومان
                                                هزینه داره
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-right d-flex my-3">
                                            <div class="box-comment-user">
                                                محمد شمس کیا
                                                <div class="small">
                                                    در تاریخ 25 فروردین ۱۳۹۹
                                                </div>
                                            </div>
                                            <div class="box-comment text-justify">
                                                به نظرم بابت پولی که میدین کیفیت خوبی داره البته با توجه به این گرونی ها
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-right d-flex my-3">
                                            <div class="box-comment-user">
                                                محمد شمس کیا
                                                <div class="small">
                                                    در تاریخ 25 فروردین ۱۳۹۹
                                                </div>
                                                <div class="small">امتیاز به محصول:</div>
                                                <div>
                        <span>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                        </span>
                                                </div>
                                            </div>
                                            <div class="box-comment text-justify">
                                                به نظرم بابت پولی که میدین کیفیت خوبی داره البته با توجه به این گرونی ها
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--begin related products-->
        <div class="container-fluid ">
            <div class="container bg-white my-3">
                <div class="col-12 pt-4">
                    <div class="text-right border-bottom">
                        <h6 class="h5">محصولات مرتبط</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel slider-page-item py-3">
                        <div class="card-category p-2">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/fish/7.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>
                                    <div class="text-center small">
                                        <span>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                            <i class="fas fa-star star-gold"></i>
                                       </span>
                                    </div>
                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۴۵۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۲۳٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۲۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-category p-2">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/fish/8.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>تانک آکواریوم با پایه چوبی</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۵۵۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۲۳٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۲۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-category p-2">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/dog/2.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-category p-2">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/dog/3.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۹۰۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-category p-2">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/dog/4.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-category p-2">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/cat/1.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-category p-2">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/cat/2.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end related products-->
    </div>
@endsection

@push('scripts')
    <script src="{!! asset('assets/libs/owl-carousel/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/js-zoom/fancybox/source/jquery.fancybox.js') !!}"></script>
    <script src="{!! asset('assets/libs/js-zoom/xzoom.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/js-zoom/setup.js') !!}"></script>
    <script src="{!! asset('assets/libs/js-zoom/vendor/placeholder.js') !!}"></script>
    <script src="{!! asset('assets/libs/js-zoom/vendor/fastclick.js') !!}"></script>
    <script src="{!! asset('assets/libs/js-zoom/vendor/jquery.cookie.js') !!}"></script>
@endpush

@push('custom-scripts')
    <script> productPage() </script>
@endpush
