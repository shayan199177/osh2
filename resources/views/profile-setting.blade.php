@extends('layouts.shop')

@section('content')


    <div class="container">
        <div class="text-right my-3">
            <div class="border-bottom-c3"><h5 class="h6">مشخصات کاربری و آدرس</h5>
            </div>
        </div>
        <form class="text-right pt-3">
            <div class="row">
                <div class="col-12 col-md-6 order-1">
                    <div class="form-row">
                        <div class="col">
                            <label for="name" class="small font-700">نام<i
                                    class="fas fa-asterisk small red-color pr-1"></i></label>
                            <input type="text" class="form-control-profile px-2 py-1" id="name">
                        </div>
                        <div class="col">
                            <label for="family" class="small font-700">نام خانوادگی<i
                                    class="fas fa-asterisk small red-color pr-1"></i></label>
                            <input type="text" class="form-control-profile px-2 py-1" id="family">
                        </div>
                    </div>
                    <div class="form-row mt-4">
                        <div class="form-group col-md-6">
                            <label for="inputphone" class="small font-700">تلفن همراه<i
                                    class="fas fa-asterisk small red-color pr-1"></i></label>
                            <input type="text" class="form-control-profile px-2 py-1" placeholder="مثال: 09125570613"
                                   id="inputphone">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone" class="small font-700">تلفن ثابت</label>
                            <input type="text" class="form-control-profile demo px-2 py-1"
                                   placeholder="مثال: 02177704274" id="phone">
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="small font-700">ایمیل</label>
                            <input type="email" class="form-control-profile px-2 py-1" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="small font-700">پسورد<i
                                    class="fas fa-asterisk small red-color pr-1"></i></label>
                            <input type="password" class="form-control-profile px-2 py-1" id="inputPassword4">
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="form-group col-md-6">
                            <label for="inputState" class="small font-700">استان<i
                                    class="fas fa-asterisk small red-color pr-1"></i></label>
                            <select id="inputState" class="form-control-profile px-2 py-1">
                                <option selected>انتخاب کنید...</option>
                                <option>تهران</option>
                                <option>کرج</option>
                                <option>قم</option>
                                <option>مازندران</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="small font-700">شهر</label>
                            <input type="text" class="form-control-profile px-2 py-1" id="inputCity">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-2 my-3">
                    <form class="text-right">
                        <div class="form-group border-address">
                            <h6 class="h6 mb-3">آدرس<i class="fas fa-asterisk small red-color pr-1"></i></h6>
                            <textarea class="form-control-profile-add px-2 py-1" id="exampleFormControlTextarea1"
                                      rows="3"
                                      placeholder="آدرس خود را وارد نمایید..."></textarea>
                            <div class="form-group mt-2">
                                <input type="text" class="form-control-profile px-2 py-1" id="inputZip"
                                       placeholder="کد پستی">
                            </div>
                        </div>
                        <div class="form-group mt-2 border-address">
                            <h6 class="h6 mb-3">آدرس دوم</h6>
                            <textarea class="form-control-profile-add px-2 py-1" id="exampleFormControlTextarea2"
                                      rows="3"
                                      placeholder="آدرس خود را وارد نمایید..."></textarea>
                            <div class="form-group mt-2">
                                <input type="text" class="form-control-profile px-2 py-1" id="inputZip2"
                                       placeholder="کد پستی">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </form>
        <div class="col-12 text-center mb-3">
            <button type="submit" class="btn btn-success">ذخیره تغییرات</button>
        </div>
        <div class="col-12 text-right mb-3 border-top-c3">
            <p class="small gray-color mb-2 mt-2 text-justify"><i
                    class="fas fa-exclamation-circle ml-2"></i>پر کردن فیلدهای ستاره دار الزامی می باشد.</p>
            <p class="small gray-color mb-2 mt-2 text-justify"><i
                    class="fas fa-exclamation-circle ml-2"></i>برای سهولت در انتخاب آدرس ارسال، امکان افزودن دو آدرس
                وجود دارد.</p>
            <p class="small gray-color mb-2 mt-2 text-justify"><i
                    class="fas fa-exclamation-circle ml-2"></i>برای ذخیره و اصلاح اطلاعات کاربری حتما باید دکمه ی ذخیره
                کلیک شود.</p>
        </div>
    </div>


    <!--modals-->
@endsection

@push('scripts')

@endpush

