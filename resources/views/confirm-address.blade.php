@extends('layouts.shop')

@push('styles')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right mt-3 mb-2 d-none d-lg-flex">
                    <div class="col bg-white border p-3 rounded">
                        <div class="col d-flex text-center justify-content-around">
                            <div class="col small">
                                مراحل تایید و پرداخت خرید:
                            </div>
                            <div class="col small green-color">
                                تایید سفارش
                            </div>
                            <div class="col active-pages-cart small">
                                <i class="fas fa-check-circle ml-2 green-color"></i><span>تایید آدرس و نحوه ارسال</span>
                            </div>
                            <div class="col small gray-color">
                                پرداخت نهایی
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none mt-3 mb-2">
                    <ul class="list-group text-right">
                        <li class="list-group-item small bg-main">مراحل تایید و پرداخت خرید:</li>
                        <li class="list-group-item small green-color">تایید سفارش</li>
                        <li class="list-group-item small" aria-disabled="true"><i
                                class="fas fa-check-circle ml-2 green-color"></i><span>تایید آدرس و نحوه ارسال</span></li>
                        <li class="list-group-item small gray-color">پرداخت نهایی</li>
                    </ul>
                </div>
                <div class="col-12 text-right mt-1 mb-3">
                    <div class="col-12 border-bottom-c3"><h5 class="h6">آدرس تحویل سفارش</h5>
                    </div>
                </div>
                <div class="col-12 order-1 order-lg-2 col-lg-8 col-xl-9 mb-3">
                    <div class="card card-basket">
                        <!--                    <div class="col-12 text-right mt-4 mb-3">-->
                        <!--                        <div class="col-12 d-flex border-bottom-c3"><h5 class="small">آدرس های تحویل مرسوله شما</h5>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <div class="col-12 text-right mt-4 mb-2">
                            <p class="mb-2"><i class="fas fa-map-marked-alt ml-2"></i>آدرس تحویل سفارش</p>
                            <div class="col-12">
                                <div class="mb-5">
                                    <div class="form-check text-justify mt-4">
                                        <input class="form-check-input mt-2" type="radio" name="exampleRadios1"
                                               id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label font-88 mr-4 my-1" for="exampleRadios1">
                                            <span>تهران نارمک خیابان افشاری خیابان گاراپیدی پلاک 333</span>
                                        </label>
                                    </div>
                                    <div class="form-check text-justify mt-2">
                                        <input class="form-check-input mt-2" type="radio" name="exampleRadios1"
                                               id="exampleRadios2" value="option2">
                                        <label class="form-check-label font-88 mr-4 my-1" for="exampleRadios2">
                                            <span>تهران ولی عصر خیابان مدنی خیابان گلها پلاک 355 طبقه اول</span>
                                        </label>
                                    </div>
                                    <div class="mt-3 text-left"><a href="../user/profile-setting.html" class="button-return-3"><i class="fas fa-pencil-alt ml-2"></i>ویرایش آدرس</a></div>
                                </div>
                                <div>
                                    <!--                                <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">-->
                                    <!--                                    <p class="small text-justify">برای افزودن یا ویرایش آدرس خود از منوی تنظیمات حساب-->
                                    <!--                                        کاربری استفاده نمایید.</p>-->
                                    <!--                                    <div class="text-center my-3">-->
                                    <!--                                        <a href="../user/profile-setting.html" class="card-link button-return">افزودن آدرس</a>-->
                                    <!--                                    </div>-->
                                    <!--                                </div>-->
                                    <!--                                <div class="row d-flex d-md-none">-->
                                    <!--                                    <div class="col-5">-->
                                    <!--                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"-->
                                    <!--                                             aria-orientation="vertical">-->
                                    <!--                                            <a class="nav-link right-day-items active" id="v-pills-home-tab" data-toggle="pill"-->
                                    <!--                                               href="#v-pills-home" role="tab" aria-controls="v-pills-home"-->
                                    <!--                                               aria-selected="true">شنبه</a>-->
                                    <!--                                            <a class="nav-link right-day-items" id="v-pills-profile-tab" data-toggle="pill"-->
                                    <!--                                               href="#v-yekshanbe-profile" role="tab" aria-controls="v-pills-profile"-->
                                    <!--                                               aria-selected="false">یک شنبه</a>-->
                                    <!--                                            <a class="nav-link right-day-items" id="v-pills-messages-tab" data-toggle="pill"-->
                                    <!--                                               href="#v-doshanbe-messages" role="tab" aria-controls="v-pills-messages"-->
                                    <!--                                               aria-selected="false">دوشنبه</a>-->
                                    <!--                                            <a class="nav-link right-day-items" id="v-pills-seshanbe-tab" data-toggle="pill"-->
                                    <!--                                               href="#v-seshanbe-settings" role="tab" aria-controls="v-pills-settings"-->
                                    <!--                                               aria-selected="false">سه شنبه</a>-->
                                    <!--                                            <a class="nav-link right-day-items" id="v-pills-charshanbe-tab" data-toggle="pill"-->
                                    <!--                                               href="#v-charshanbe-settings" role="tab" aria-controls="v-pills-settings"-->
                                    <!--                                               aria-selected="false">چهار شنبه</a>-->
                                    <!--                                            <a class="nav-link right-day-items" id="v-pills-panjshanbe-tab" data-toggle="pill"-->
                                    <!--                                               href="#v-panjshanbe-settings" role="tab" aria-controls="v-pills-settings"-->
                                    <!--                                               aria-selected="false">پنج شنبه</a>-->
                                    <!--                                            <a class="nav-link right-day-items" id="v-pills-jome-tab" data-toggle="pill"-->
                                    <!--                                               href="#v-jome-settings" role="tab" aria-controls="v-pills-settings"-->
                                    <!--                                               aria-selected="false">جمعه</a>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="col-7">-->
                                    <!--                                        <div class="tab-content" id="v-pills-tabContent">-->
                                    <!--                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"-->
                                    <!--                                                 aria-labelledby="v-pills-home-tab">-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRadio11" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRadio11">-->
                                    <!--                                                        <span>ساعت 9 تا 12</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRadio22" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRadio22">-->
                                    <!--                                                        <span>ساعت 12 تا 15</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRadio33" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRadio33">-->
                                    <!--                                                        <span>ساعت 15 تا 18</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRadio44" value="option1" disabled>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRadio44">-->
                                    <!--                                                        <span>ساعت 18 تا 21</span><span-->
                                    <!--                                                            class="badge badge-pill badge-warning mr-2">ظرفیت تکمیل است</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="tab-pane fade" id="v-yekshanbe-profile" role="tabpanel"-->
                                    <!--                                                 aria-labelledby="v-pills-profile-tab">-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRadi11" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRadi11">-->
                                    <!--                                                        <span>ساعت 9 تا 12</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRadi22" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRadi22">-->
                                    <!--                                                        <span>ساعت 12 تا 15</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRadi33" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRadi33">-->
                                    <!--                                                        <span>ساعت 15 تا 18</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRadi44" value="option1" disabled>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRadi44">-->
                                    <!--                                                        <span>ساعت 18 تا 21</span><span-->
                                    <!--                                                            class="badge badge-pill badge-warning mr-2">ظرفیت تکمیل است</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="tab-pane fade" id="v-doshanbe-messages" role="tabpanel"-->
                                    <!--                                                 aria-labelledby="v-pills-messages-tab">-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRa11" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRa11">-->
                                    <!--                                                        <span>ساعت 9 تا 12</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRa22" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRa22">-->
                                    <!--                                                        <span>ساعت 12 تا 15</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRa33" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRa33">-->
                                    <!--                                                        <span>ساعت 15 تا 18</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRa44" value="option1" disabled>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRa44">-->
                                    <!--                                                        <span>ساعت 18 تا 21</span><span-->
                                    <!--                                                            class="badge badge-pill badge-warning mr-2">ظرفیت تکمیل است</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="tab-pane fade" id="v-seshanbe-settings" role="tabpanel"-->
                                    <!--                                                 aria-labelledby="v-pills-settings-tab">-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleR11" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleR11">-->
                                    <!--                                                        <span>ساعت 9 تا 12</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleR22" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleR22">-->
                                    <!--                                                        <span>ساعت 12 تا 15</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleR33" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleR33">-->
                                    <!--                                                        <span>ساعت 15 تا 18</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleR44" value="option1" disabled>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleR44">-->
                                    <!--                                                        <span>ساعت 18 تا 21</span><span-->
                                    <!--                                                            class="badge badge-pill badge-warning mr-2">ظرفیت تکمیل است</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="tab-pane fade" id="v-charshanbe-settings" role="tabpanel"-->
                                    <!--                                                 aria-labelledby="v-pills-settings-tab">-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="example11" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="example11">-->
                                    <!--                                                        <span>ساعت 9 تا 12</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="example22" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="example22">-->
                                    <!--                                                        <span>ساعت 12 تا 15</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="example33" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="example33">-->
                                    <!--                                                        <span>ساعت 15 تا 18</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="example44" value="option1" disabled>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="example44">-->
                                    <!--                                                        <span>ساعت 18 تا 21</span><span-->
                                    <!--                                                            class="badge badge-pill badge-warning mr-2">ظرفیت تکمیل است</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="tab-pane fade" id="v-panjshanbe-settings" role="tabpanel"-->
                                    <!--                                                 aria-labelledby="v-pills-settings-tab">-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampl11" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampl11">-->
                                    <!--                                                        <span>ساعت 9 تا 12</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampl22" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampl22">-->
                                    <!--                                                        <span>ساعت 12 تا 15</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampl33" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampl33">-->
                                    <!--                                                        <span>ساعت 15 تا 18</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampl44" value="option1" disabled>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampl44">-->
                                    <!--                                                        <span>ساعت 18 تا 21</span><span-->
                                    <!--                                                            class="badge badge-pill badge-warning mr-2">ظرفیت تکمیل است</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="tab-pane fade" id="v-jome-settings" role="tabpanel"-->
                                    <!--                                                 aria-labelledby="v-pills-settings-tab">-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRad11" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRad11">-->
                                    <!--                                                        <span>ساعت 9 تا 12</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRad22" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRad22">-->
                                    <!--                                                        <span>ساعت 12 تا 15</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check border-bottom-c3 my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRad33" value="option1" checked>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRad33">-->
                                    <!--                                                        <span>ساعت 15 تا 18</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="form-check my-1 p-0">-->
                                    <!--                                                    <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                           id="exampleRad44" value="option1" disabled>-->
                                    <!--                                                    <label class="form-check-label mr-4 my-2 small" for="exampleRad44">-->
                                    <!--                                                        <span>ساعت 18 تا 21</span><span-->
                                    <!--                                                            class="badge badge-pill badge-warning mr-2">ظرفیت تکمیل است</span>-->
                                    <!--                                                    </label>-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                </div>-->
                                    <!--                                <ul class="nav nav-tabs tabs-time d-none d-md-flex" id="myTab" role="tablist">-->
                                    <!--                                    <li class="nav-item">-->
                                    <!--                                        <a class="nav-link active small" id="shanbe" data-toggle="tab" href="#home"-->
                                    <!--                                           role="tab" aria-controls="home" aria-selected="true">شنبه</a>-->
                                    <!--                                    </li>-->
                                    <!--                                    <li class="nav-item">-->
                                    <!--                                        <a class="nav-link small" id="yekshanbe" data-toggle="tab" href="#profile2"-->
                                    <!--                                           role="tab" aria-controls="profile" aria-selected="false">یکشنبه</a>-->
                                    <!--                                    </li>-->
                                    <!--                                    <li class="nav-item">-->
                                    <!--                                        <a class="nav-link small" id="doshanbe" data-toggle="tab" href="#profile3"-->
                                    <!--                                           role="tab" aria-controls="contact" aria-selected="false">دوشنبه</a>-->
                                    <!--                                    </li>-->
                                    <!--                                    <li class="nav-item">-->
                                    <!--                                        <a class="nav-link small" id="seshanbe" data-toggle="tab" href="#profile4"-->
                                    <!--                                           role="tab" aria-controls="contact" aria-selected="false">سه شنبه</a>-->
                                    <!--                                    </li>-->
                                    <!--                                    <li class="nav-item">-->
                                    <!--                                        <a class="nav-link small" id="charshanbe" data-toggle="tab" href="#profile5"-->
                                    <!--                                           role="tab" aria-controls="contact" aria-selected="false">چهارشنبه</a>-->
                                    <!--                                    </li>-->
                                    <!--                                    <li class="nav-item">-->
                                    <!--                                        <a class="nav-link small" id="panjshanbe" data-toggle="tab" href="#profile6"-->
                                    <!--                                           role="tab" aria-controls="contact" aria-selected="false">پنج شنبه</a>-->
                                    <!--                                    </li>-->
                                    <!--                                    <li class="nav-item">-->
                                    <!--                                        <a class="nav-link small" id="jome" data-toggle="tab" href="#profile7"-->
                                    <!--                                           role="tab" aria-controls="contact" aria-selected="false">جمعه</a>-->
                                    <!--                                    </li>-->
                                    <!--                                </ul>-->
                                    <!--                                <div class="tab-content d-none d-md-block" id="myTabContent22">-->
                                    <!--                                    <div class="tab-pane fade show active" id="home" role="tabpanel"-->
                                    <!--                                         aria-labelledby="shanbe">-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios11" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios11">-->
                                    <!--                                                <span>ساعت 9 تا 12</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios22" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios22">-->
                                    <!--                                                <span>ساعت 12 تا 15</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios33" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios33">-->
                                    <!--                                                <span>ساعت 15 تا 18</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios44" value="option1" disabled>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios44">-->
                                    <!--                                                <span>ساعت 18 تا 21</span><span-->
                                    <!--                                                    class="badge badge-pill badge-warning mr-2">ظرفیت تکمیل است</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="tab-pane fade" id="profile2" role="tabpanel"-->
                                    <!--                                         aria-labelledby="yekshanbe">-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios1221" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios1221">-->
                                    <!--                                                <span>ساعت 9 تا 12</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios22222" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios22222">-->
                                    <!--                                                <span>ساعت 12 تا 15</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios3233" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios3233">-->
                                    <!--                                                <span>ساعت 15 تا 18</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios4234" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios4234">-->
                                    <!--                                                <span>ساعت 18 تا 21</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="doshanbe">-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios121" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios121">-->
                                    <!--                                                <span>ساعت 9 تا 12</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios2222" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios2222">-->
                                    <!--                                                <span>ساعت 12 تا 15</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios323" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios323">-->
                                    <!--                                                <span>ساعت 15 تا 18</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios424" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios424">-->
                                    <!--                                                <span>ساعت 18 تا 21</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="seshanbe">-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios131" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios131">-->
                                    <!--                                                <span>ساعت 9 تا 12</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios232" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios232">-->
                                    <!--                                                <span>ساعت 12 تا 15</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios3333" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios3333">-->
                                    <!--                                                <span>ساعت 15 تا 18</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios4444" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios4444">-->
                                    <!--                                                <span>ساعت 18 تا 21</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="tab-pane fade" id="profile5" role="tabpanel"-->
                                    <!--                                         aria-labelledby="charshanbe">-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios151" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios151">-->
                                    <!--                                                <span>ساعت 9 تا 12</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios252" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios252">-->
                                    <!--                                                <span>ساعت 12 تا 15</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios353" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios353">-->
                                    <!--                                                <span>ساعت 15 تا 18</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios454" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios454">-->
                                    <!--                                                <span>ساعت 18 تا 21</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="tab-pane fade" id="profile6" role="tabpanel"-->
                                    <!--                                         aria-labelledby="panjshanbe">-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios161" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios161">-->
                                    <!--                                                <span>ساعت 9 تا 12</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios262" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios262">-->
                                    <!--                                                <span>ساعت 12 تا 15</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios363" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios363">-->
                                    <!--                                                <span>ساعت 15 تا 18</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios464" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios464">-->
                                    <!--                                                <span>ساعت 18 تا 21</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="tab-pane fade" id="profile7" role="tabpanel" aria-labelledby="jome">-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios1661" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios1661">-->
                                    <!--                                                <span>ساعت 9 تا 12</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios272" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios272">-->
                                    <!--                                                <span>ساعت 12 تا 15</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check border-bottom-c3 my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios373" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios373">-->
                                    <!--                                                <span>ساعت 15 تا 18</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="form-check my-1">-->
                                    <!--                                            <input class="form-check-input mt-2" type="radio" name="exampleRadios"-->
                                    <!--                                                   id="exampleRadios474" value="option1" checked>-->
                                    <!--                                            <label class="form-check-label mr-4 my-1 small" for="exampleRadios474">-->
                                    <!--                                                <span>ساعت 18 تا 21</span>-->
                                    <!--                                            </label>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                </div>-->
                                </div>
                            </div>

                            <!--                        نحوه ارسال-->
                            <p class="mb-2"><i class="fas fa-truck ml-2"></i>نحوه ارسال سفارش</p>
                            <div class="col-12 mb-5">
                                <div class="form-check text-justify mt-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios2"
                                           id="exampleRadios3" value="option1" checked>
                                    <label class="form-check-label mr-4 font-88" for="exampleRadios3">
                                        پیک شایان پت
                                    </label>
                                    <p class="small mr-4 my-2">(ارسال سریع مخصوص شهرهای تهران و کرج ۳۲,۳۰۰ تومان)</p>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios2"
                                           id="exampleRadios4" value="option2">
                                    <label class="form-check-label mr-4 font-88" for="exampleRadios4">
                                        پست پیشتاز
                                    </label>
                                    <p class="small mr-4 my-2">(یک تا سه روز کاری ۳۲,۳۰۰ تومان)</p>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="exampleRadios2"
                                           id="exampleRadios5" value="option3" disabled>
                                    <label class="form-check-label mr-4 font-88" for="exampleRadios5">
                                        ارسال رایگان
                                    </label>
                                    <p class="small mr-4 my-2">(خرید بالای ۳۰۰ هزار تومان)</p>
                                </div>
                            </div>
                            <div class="col-12 text-right mt-2 mb-3 border-top-c3">
                                <p class="small gray-color mb-2 mt-2 text-justify"><i
                                        class="fas fa-exclamation-circle ml-2"></i>برای افزودن یا ویرایش آدرس خود از منوی
                                    تنظیمات حساب کاربری استفاده نمایید.</p>
                                <p class="small gray-color mb-2 text-justify"><i class="fas fa-exclamation-circle ml-2"></i>شما
                                    می‌توانید
                                    فاکتور خرید را پس از تحویل سفارش از بخش سفارش های من در حساب کاربری خود دریافت کنید.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 order-1 order-lg-2 col-lg-4 col-xl-3 mb-3">
                    <div class="card card-basket">
                        <div class="col-12 text-right mt-4">
                            <div class="col-12 d-flex"><h5 class="small">قیمت کالاها</h5>
                                <div class="d-flex left-price-basket">
                                    <h6 class="price-font my-auto small">۳۲۹,۳۰۰,۳۰۰<span
                                            class="toman-price my-auto small">تومان</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-right mt-2 mb-3">
                            <div class="col-12 d-flex"><p class="small mb-2"><i class="fas fa-truck ml-2"></i>هزینه ارسال
                                </p>
                                <div class="d-flex left-price-basket">
                                    <h6 class="price-font my-auto small">۳۲,۳۰۰<span
                                            class="toman-price my-auto small">تومان</span></h6>
                                </div>
                            </div>
                        </div>
                        <!--                    <div class="col-12 text-right mt-2">-->
                        <!--                        <div class="col-12 d-flex">-->
                        <!--                            <p class="small-s mb-3 text-justify"><i class="fas fa-check ml-2"></i>هزینه و نوع ارسال را-->
                        <!--                                در مرحله قبل-->
                        <!--                                تعیین نموده اید.</p>-->
                        <!--                        </div>-->

                        <!--                    </div>-->
                        <div class="text-center mb-3">
                            <a href="basket.html" class="card-link button-return-2"><i class="fas fa-undo pl-2"></i>بازگشت
                                به مرحله قبل</a>
                        </div>
                        <div class="col-12 text-right my-1">
                            <div class="col-12 d-flex border-top-c3"><h6 class="small pt-3">مبلغ قابل پرداخت</h6>
                                <div class="d-flex left-price-basket h6 pt-3">
                                    <h6 class="price-font my-auto">۳۲۹,۳۰۰,۳۰۰<span
                                            class="toman-price my-auto">تومان</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-4">
                            <a href="confirm-payment.html" class="card-link button-buy">تایید و ادامه</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--            <div class="modal-header">-->
                <!--                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
                <!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                <!--                    <span aria-hidden="true">&times;</span>-->
                <!--                </button>-->
                <!--            </div>-->
                <div class="modal-body text-right">
                    آدرس انتخابی شما حذف شود؟
                </div>
                <div class="modal-footer text-right">
                    <button type="button" class="btn btn-light" data-dismiss="modal">خیر</button>
                    <button type="button" class="btn btn-danger">حذف</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush

@push('custom-scripts')
  <script> productPage() </script>
@endpush
