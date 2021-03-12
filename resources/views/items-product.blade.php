@extends('layouts.shop')
@push('styles')
    <link href="{!! asset('assets/libs/owl-carousel/owl.carousel.min.css') !!}" rel="stylesheet">
    <style>
        .zoom-items-pageItem:hover {
            border: 1px solid #ffc107;
        }
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 20px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: -7px;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            top: 1px;
            width: 18px;
            left: 2px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        .pr-on{
            margin-right: 34px;
            margin-top: 45px;
        }
    </style>
@endpush

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 pr-2">
                        <li class="breadcrumb-item"><a href="#">محصولات</a></li>
                        <li class="breadcrumb-item"><a href="#">سگ ها</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#">غذای خشک</a></li>
                    </ol>
                </nav>
            </div>


            <div class="col-12 col-md-3 pt-1">
                <div class="bg-white border rounded">
                    <p class="text-justify small gray-color p-3">برای اعمال فیلتر محصولات بر روی دکمه اعمال
                        تغییرات کلیک
                        نمایید.</p>
                    <div class="py-2 px-3 bg-white black-color active text-right rounded-top">دسته بندی نتایج</div>
                    <div class="text-right px-4">
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                    </div>
                    <div class="collapse text-right px-4" id="collapseExample">
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                    </div>
                    <p class="text-center pt-2">
                        <button class="btn btn-sm btn-light w-75 small" type="button" data-toggle="collapse"
                                data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            مشاهده همه
                        </button>
                    </p>

                    <div class="py-2 px-3 mt-4 bg-white  black-color active text-right rounded-top">برند</div>
                    <ul class="list-group">
                        <li class="list-group-item overflow-auto mr-3">
                            <div class="height-fix-280px">
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                           value="option1">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox1"><span
                                            class="pr-2">فیدار</span><span
                                            class="position-absolute left-0 ">Fidar</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox2"><span
                                            class="pr-2">آوانتیس</span><span
                                            class="position-absolute left-0 ">Avantis</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox3"><span
                                            class="pr-2">نوتری</span><span
                                            class="position-absolute left-0 ">Nutri</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox4"><span
                                            class="pr-2">بوش</span><span
                                            class="position-absolute left-0 ">Bosch</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox5"><span
                                            class="pr-2">بلکاندو</span><span
                                            class="position-absolute left-0 ">Belcando</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox6"><span
                                            class="pr-2">جوسرا</span><span
                                            class="position-absolute left-0 ">Josera</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox7"><span
                                            class="pr-2">دکتر کلادرز</span><span
                                            class="position-absolute left-0 ">Dr.Clauders</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox8"><span
                                            class="pr-2">رویال فید</span><span
                                            class="position-absolute left-0 ">Royal Feed</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox9"><span
                                            class="pr-2">هپی داگ</span><span
                                            class="position-absolute left-0 ">Happy Dog</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox10"><span
                                            class="pr-2">مفید</span><span
                                            class="position-absolute left-0 ">MoFeed</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox11"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox11"><span
                                            class="pr-2">جانگل</span><span
                                            class="position-absolute left-0 ">Jungle</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox12"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox12"><span
                                            class="pr-2">رویال کنین</span><span
                                            class="position-absolute left-0 ">Royal Canin</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox13"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox13"><span
                                            class="pr-2">پرامی</span><span
                                            class="position-absolute left-0 ">Pramy</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox14"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox14"><span
                                            class="pr-2">سلبن</span><span
                                            class="position-absolute left-0 ">Pramy</span>
                                    </label>
                                </div>
                            </div>
                        </li>
                    </ul>


                    <div class="py-2 px-3 mt-4 bg-white  black-color active text-right rounded-top">وزن</div>
                    <ul class="list-group">
                        <li class="list-group-item overflow-auto mr-3">
                            <div class="height-fix-280px">
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                           value="option1">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox1"><span
                                            class="pr-1 font-88">5 کیلوگرمی</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox2"><span
                                            class="pr-1 font-88">10 کیلوگرمی</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox3"><span
                                            class="pr-1 font-88">20 کیلوگرمی</span></label>
                                </div>
                            </div>
                        </li>
                    </ul>


                    <div class="py-2 px-3 mt-4 bg-white  black-color active text-right rounded-top">رنگ</div>
                    <ul class="list-group">
                        <li class="list-group-item overflow-auto mr-3">
                            <div class="height-fix-280px">
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                           value="option1">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox1"><span
                                            class="pr-1 font-88">5 کیلوگرمی</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox2"><span
                                            class="pr-1 font-88">10 کیلوگرمی</span></label>
                                </div>
                                <div class="form-check-items text-right py-1">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                           value="option2">
                                    <label class="form-check-label mr-3 justify-content-around font-88"
                                           for="inlineCheckbox3"><span
                                            class="pr-1 font-88">20 کیلوگرمی</span></label>
                                </div>
                            </div>
                        </li>
                    </ul>


                    <div class="pr-on d-flex">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <span class="small mr-2">فقط کالاهای موجود</span>
                    </div>


                    <div class="p-3 mt-4 bg-white  black-color active text-right rounded-top">محدوده قیمت</div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="price-slider mx-3">
                                <span class="small">
                                از
                               <input type="number" value="0" min="0" max="120000" class="mr-1  ml-2"/>تا
                                <input type="number" value="120000" min="0" max="120000" class="mr-1"/>
تومان
                                 </span>

                                <input class="small" value="120000" min="0" max="120000" step="500" type="range"/>
                                <input value="0" min="0" max="120000" step="500" type="range"/>

                            </div>
                        </li>
                    </ul>
                    <div class="text-center justify-content-center mt-5">
                        <input class="btn btn-primary mb-3 w-75 btn-sm" type="submit" value="اعمال تغییرات">
                    </div>

                </div>

            </div>

            <div class="col-12 col-md-9">
                <div class="row">
                    <div class="col-12 p-1">
                        <div class="bg-white border rounded">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">محصولات</a></li>
                                <li class="breadcrumb-item"><a href="#">سگ ها</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">غذای خشک</a></li>
                            </ol>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
                                </div>
                                <div class="px-3">
                                    <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                            140 کیلوگرم</h4></a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
                                </div>
                                <div class="px-3">
                                    <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                            140 کیلوگرم</h4></a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
                                </div>
                                <div class="px-3">
                                    <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                            140 کیلوگرم</h4></a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
                                </div>
                                <div class="px-3">
                                    <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                            140 کیلوگرم</h4></a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
                                </div>
                                <div class="px-3">
                                    <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                            140 کیلوگرم</h4></a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
                                </div>
                                <div class="px-3">
                                    <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                            140 کیلوگرم</h4></a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
                                </div>
                                <div class="px-3">
                                    <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                            140 کیلوگرم</h4></a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
                                </div>
                                <div class="px-3">
                                    <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                            140 کیلوگرم</h4></a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
                                </div>
                                <div class="px-3">
                                    <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                            140 کیلوگرم</h4></a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
                                </div>
                                <div class="px-3">
                                    <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                            140 کیلوگرم</h4></a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
    <!--begin related products-->
    <div class="container-fluid">
        <div class="container mb-4">
            <div class="row bg-white border rounded">
                <div class="col-12 pt-3">
                    <div class="text-right border-bottom">
                        <h6 class="h6 pb-1 black-color">محصولات مرتبط</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel slider-page-index">
                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2 text-center">
                                    <a href="#">
                                        <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title-interest pr-2">
                                        <a href="#" class="text-right text-decoration-none">
                                            <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                                آکواریوم آکوا آکواریوم 150</h4>
                                        </a>
                                    </div>
                                    <div class="px-3">
                                        <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                                140 کیلوگرم</h4></a>
                                    </div>
                                    <div class="text-left px-3 mb-4 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2 text-center">
                                    <a href="#">
                                        <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title-interest pr-2">
                                        <a href="#" class="text-right text-decoration-none">
                                            <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                                آکواریوم آکوا آکواریوم 150</h4>
                                        </a>
                                    </div>
                                    <div class="px-3">
                                        <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                                140 کیلوگرم</h4></a>
                                    </div>
                                    <div class="text-left px-3 mb-4 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2 text-center">
                                    <a href="#">
                                        <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title-interest pr-2">
                                        <a href="#" class="text-right text-decoration-none">
                                            <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                                آکواریوم آکوا آکواریوم 150</h4>
                                        </a>
                                    </div>
                                    <div class="px-3">
                                        <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                                140 کیلوگرم</h4></a>
                                    </div>
                                    <div class="text-left px-3 mb-4 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2 text-center">
                                    <a href="#">
                                        <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title-interest pr-2">
                                        <a href="#" class="text-right text-decoration-none">
                                            <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                                آکواریوم آکوا آکواریوم 150</h4>
                                        </a>
                                    </div>
                                    <div class="px-3">
                                        <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                                140 کیلوگرم</h4></a>
                                    </div>
                                    <div class="text-left px-3 mb-4 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2 text-center">
                                    <a href="#">
                                        <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title-interest pr-2">
                                        <a href="#" class="text-right text-decoration-none">
                                            <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                                آکواریوم آکوا آکواریوم 150</h4>
                                        </a>
                                    </div>
                                    <div class="px-3">
                                        <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                                140 کیلوگرم</h4></a>
                                    </div>
                                    <div class="text-left px-3 mb-4 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2 text-center">
                                    <a href="#">
                                        <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title-interest pr-2">
                                        <a href="#" class="text-right text-decoration-none">
                                            <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                                آکواریوم آکوا آکواریوم 150</h4>
                                        </a>
                                    </div>
                                    <div class="px-3">
                                        <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                                140 کیلوگرم</h4></a>
                                    </div>
                                    <div class="text-left px-3 mb-4 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2 text-center">
                                    <a href="#">
                                        <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title-interest pr-2">
                                        <a href="#" class="text-right text-decoration-none">
                                            <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                                آکواریوم آکوا آکواریوم 150</h4>
                                        </a>
                                    </div>
                                    <div class="px-3">
                                        <a href="#" class="text-right text-decoration-none"><h4 class="black-color small">
                                                140 کیلوگرم</h4></a>
                                    </div>
                                    <div class="text-left px-3 mb-4 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">3۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
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
    <!--end related products-->



@endsection

@push('scripts')
    <script src="{!! asset('assets/libs/owl-carousel/owl.carousel.min.js') !!}"></script>
@endpush

@push('custom-scripts')
    <script src="{!! asset('assets/js/owlCarousel.js') !!}"></script>
    <script> productPage() </script>
@endpush

