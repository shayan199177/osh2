@extends('layouts.shop')
@push('styles')
    <link href="{!! asset('assets/libs/owl-carousel/owl.carousel.min.css') !!}" rel="stylesheet">
@endpush

@section('content')

    <div class="container mb-5">
        <div class="row">

            <div class="col-12 d-flex d-xl-none fixed-filter text-center">
                <input type="checkbox" id="hamburger-checkbox"/>
                <label class="hamburger-icon align-self-center" for="hamburger-checkbox">
                    <i class="fas fa-sort-amount-down"></i> فیلتر محصولات
                </label>
                <nav class="nav-d" role="navigation">
                    <ul class="nav__list">
                        <li>
                            <input id="group-1" type="checkbox" hidden/>
                            <label for="group-1"><span class="fa fa-angle-down pt-1 pl-2 align-self-center"></span>ترتیب
                                نمایش</label>
                            <ul class="group-list">
                                <li class="pb-3">
                                    <div id="hamburger-checkbox-brand">
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox2"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox2"><span
                                                    class="pr-1 small">ارزانترین</span>
                                            </label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox2"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox2"><span
                                                    class="pr-1 small">گرانترین</span>
                                            </label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox2"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox2"><span
                                                    class="pr-1 small">پرفروشترین</span>
                                            </label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox2"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox2"><span
                                                    class="pr-1 small">جدیدترین</span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <input id="group-3" type="checkbox" hidden/>
                            <label for="group-3"><span class="fa fa-angle-down pt-1 pl-2 align-self-center"></span>
                              دسته بندی</label>
                            <ul class="group-list">
                                <li><a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a></li>
                                <li><a href="#" class="black-color"><p class="small mb-1">آکواریوم ها</p></a></li>
                                <li><a href="#" class="black-color"><p class="small mb-1">میز آکواریوم</p></a></li>
                                <li><a href="#" class="black-color"><p class="small mb-1">غذای گربه ها</p></a></li>
                                <li><a href="#" class="black-color"><p class="small mb-1">ظرف غذا</p></a></li>
                                <li><a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a></li>
                                <li><a href="#" class="black-color"><p class="small mb-1">آکواریوم ها</p></a></li>
                                <li><a href="#" class="black-color"><p class="small mb-1">میز آکواریوم</p></a></li>
                                <li><a href="#" class="black-color"><p class="small mb-1">غذای گربه ها</p></a></li>
                                <li><a href="#" class="black-color"><p class="small mb-1">ظرف غذا</p></a></li>
                            </ul>
                        </li>
                        <li>
                            <input id="group-2" type="checkbox" hidden/>
                            <label for="group-2"><span class="fa fa-angle-down pt-1 pl-2 align-self-center"></span>
                                برند</label>
                            <ul class="group-list">
                                <li class="pb-3">
                                    <div id="hamburger-checkbox-brand">
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox2"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox2"><span
                                                    class="pr-1 small">آوانتیس</span><span
                                                    class="position-absolute left-0 small">Avantis</span></label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox3"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox3"><span
                                                    class="pr-1 small">نوتری</span><span
                                                    class="position-absolute left-0 small">Nutri</span></label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox4"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox4"><span
                                                    class="pr-1 small">بوش</span><span
                                                    class="position-absolute left-0 small">Bosch</span></label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox5"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox5"><span
                                                    class="pr-1 small">بلکاندو</span><span
                                                    class="position-absolute left-0 small">Belcando</span></label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox6"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox6"><span
                                                    class="pr-1 small">جوسرا</span><span
                                                    class="position-absolute left-0 small">Josera</span></label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox7"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox7"><span
                                                    class="pr-1 small">دکتر کلادرز</span><span
                                                    class="position-absolute left-0 small">Dr.Clauders</span></label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox8"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox8"><span
                                                    class="pr-1 small">رویال فید</span><span
                                                    class="position-absolute left-0 small">Royal Feed</span></label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox9"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox9"><span
                                                    class="pr-1 small">هپی داگ</span><span
                                                    class="position-absolute left-0 small">Happy Dog</span></label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox10"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox10"><span
                                                    class="pr-1 small">مفید</span><span
                                                    class="position-absolute left-0 small">MoFeed</span></label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox11"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox11"><span
                                                    class="pr-1 small">جانگل</span><span
                                                    class="position-absolute left-0 small">Jungle</span></label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox12"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox12"><span
                                                    class="pr-1 small">رویال کنین</span><span
                                                    class="position-absolute left-0 small">Royal Canin</span></label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox13"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox13"><span
                                                    class="pr-1 small">پرامی</span><span
                                                    class="position-absolute left-0 small">Pramy</span></label>
                                        </div>
                                        <div class="form-check-items text-right py-1 mr-3">
                                            <input class="form-check-input my-0" type="checkbox" id="inlineCheckbox14"
                                                   value="option2">
                                            <label class="form-check-label mr-3 justify-content-around"
                                                   for="inlineCheckbox14"><span
                                                    class="pr-1 small">سلبن</span><span
                                                    class="position-absolute left-0 small">Pramy</span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="pr-on mt-3 d-flex">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                                <span class="small mr-2">فقط کالاهای موجود</span>
                            </div>
                        </li>
                        <li>
                            <div class="pr-on mt-3 d-flex">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                                <span class="small mr-2">فقط کالاهای تخفیف دار</span>
                            </div>
                        </li>
                        <li>
                            <div class="pr-on mt-2 d-flex">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="mx-3">
                                <span class="small">
                                از
                               <input type="number" value="0" min="0" max="120000" class="mr-1  ml-2"/>تا
                                <input type="number" value="120000" min="0" max="120000" class="mr-1"/>
تومان
                                 </span>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>


                    </ul>
                </nav>

            </div>

            <div class="d-none d-xl-block col-xl-3 mt-4 pt-1">
                <div class="bg-white border rounded">
                    <div class="mt-4 py-2 px-3 bg-white black-color active text-right rounded-top">دسته بندی نتایج</div>
                    <div class="collapse text-right px-4 collapse-more-item" id="collapseExampleMore">
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">آکواریوم ها</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">میز آکواریوم</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای گربه ها</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">ظرف غذا</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                        <a href="#" class="black-color"><p class="small mb-1">غذای ماهیان</p></a>
                    </div>

                    <p class="text-center pt-2">
                        <button class="btn btn-sm btn-light w-75 small" type="button" data-toggle="collapse"
                                data-target="#collapseExampleMore" aria-expanded="true" aria-controls="collapseExampleMore">
                            مشاهده همه
                        </button>
                    </p>

                    <div class="py-2 px-3 mt-5 bg-white  black-color active text-right rounded-top">برند</div>
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
                            </div>
                        </li>
                    </ul>


                    <div class="pr-on mt-5 d-flex">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <span class="small mr-2">فقط کالاهای موجود</span>
                    </div>

                    <div class="pr-on mt-2 d-flex">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <span class="small mr-2">فقط کالاهای تخفیف دار</span>
                    </div>


                    <div class="p-3 mt-5 bg-white  black-color active text-right rounded-top">محدوده قیمت</div>
                    <ul class="list-group mb-5">
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

                </div>

            </div>

            <div class="col-12 mt-xl-4 mr-top-custom col-xl-9">
                <div class="row">
                    <div class="d-none d-xl-block col-12 p-1">
                        <div class="bg-white border d-flex rounded">
                            <div class="align-self-center d-flex mx-3"><i class="fas fa-sort-amount-down"></i>
                                <p class="small pr-2">ترتیب نمایش:</p></div>
                            <div class="p-2">
                                <button type="button" class="btn btn-sm hover-btn-sort p-1">ارزانترین</button>
                            </div>
                            <div class="p-2">
                                <button type="button" class="btn btn-sm hover-btn-sort p-1">گرانترین</button>
                            </div>
                            <div class="p-2">
                                <button type="button" class="btn btn-sm hover-btn-sort p-1">پرفروشترین</button>
                            </div>
                            <div class="p-2">
                                <button type="button" class="btn btn-sm hover-btn-sort p-1">جدیدترین</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/fish/7.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا</h4>
                                    </a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">12,333,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">34٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/fish/8.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
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
                                    <img src="/temp/product/cat/2.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">کنسرو گربه بالغ چانک 200
                                            گرمی</h4>
                                    </a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">3۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">6۹۰,۰۰۰</span><span class="toman-price">تومان</span>
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
                                        <h4 class="black-color mt-3 line-h25 small px-2">غذای خشک گربه بالغ رویال
                                            5 کیلوگرمی</h4>
                                    </a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        {{--                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span--}}
                                        {{--                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>--}}
                                    </div>
                                    <div>
                                        <span class="price-font">2۹2,4۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/dog/2.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">غذای سگ royal canin 20 کیلوگرمی
                                        </h4>
                                    </a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">2,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">1,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
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
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        {{--                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span--}}
                                        {{--                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>--}}
                                    </div>
                                    <div>
                                        <span class="price-font gray-color">ناموجود</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/dog/3.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        {{--                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span--}}
                                        {{--                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>--}}
                                    </div>
                                    <div>
                                        <span class="price-font">8,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-3 px-sm-1 p-1">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2 text-center">
                                <a href="#">
                                    <img src="/temp/product/dog/4.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235">
                                <div class="carousel-item-title-interest pr-2">
                                    <a href="#" class="text-right text-decoration-none">
                                        <h4 class="black-color mt-3 line-h25 small px-2">آکواریوم 150 لیتری آکوا
                                            آکواریوم آکوا آکواریوم 150</h4>
                                    </a>
                                </div>
                                <div class="text-left px-3 mb-4 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        {{--                                        <span class="toman-price-off align-middle">۷3,۸۰۰,۰۰۰</span><span--}}
                                        {{--                                            class="badge badge-danger badge-pill mr-2">5۰٪</span>--}}
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

                    <div class="col-12 my-5">
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
    <script> productPage() </script>
@endpush

