@extends('layouts.shop')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right mt-3 mb-3">
                    <div class="col-12 border-bottom-c3"><h5 class="h6">مشخصات کاربری و آدرس</h5>
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-1 my-4">
                    <form class="text-right">
                        <div class="form-row">
                            <div class="col">
                                <label for="name" class="small">نام</label>
                                <input type="text" class="form-control-profile" id="name">
                            </div>
                            <div class="col">
                                <label for="family" class="small">نام خانوادگی</label>
                                <input type="text" class="form-control-profile" id="family">
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="form-group col-md-6">
                                <label for="inputphone" class="small">تلفن همراه</label>
                                <input type="text" class="form-control-profile" placeholder="مثال: 09125570613" id="inputphone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone" class="small">تلفن ثابت</label>
                                <input type="text" class="form-control-profile demo" placeholder="مثال: 02177704274" id="phone">
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="small">ایمیل</label>
                                <input type="email" class="form-control-profile" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="small">پسورد</label>
                                <input type="password" class="form-control-profile" id="inputPassword4">
                            </div>
                        </div>

                        <div class="form-row mt-3">
                            <div class="form-group col-md-4">
                                <label for="inputState" class="small">استان</label>
                                <select id="inputState" class="form-control-profile">
                                    <option selected>انتخاب کنید...</option>
                                    <option>تهران</option>
                                    <option>کرج</option>
                                    <option>قم</option>
                                    <option>مازندران</option>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputCity" class="small">شهر</label>
                                <input type="text" class="form-control-profile" id="inputCity">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputZip" class="small">کد پستی</label>
                                <input type="text" class="form-control-profile" id="inputZip">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-6 order-1 my-4">
                    <form class="text-right">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="small">آدرس</label>
                            <textarea class="form-control-profile-add" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleFormControlTextarea2" class="small">آدرس دوم (جدید)</label>
                            <textarea class="form-control-profile-add" id="exampleFormControlTextarea2" rows="3"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 text-center mb-3">
                <button type="submit" class="btn btn-success">ذخیره تغییرات</button>
            </div>
            <div class="col-12 text-right mb-3 border-top-c3">
                <p class="small gray-color mb-2 mt-2 text-justify"><i
                        class="fas fa-exclamation-circle ml-2"></i>برای ذخیره و اصلاح اطلاعات کاربری حتما باید دکمه ی ذخیره کلیک شود.</p>
            </div>
        </div>
    </div>
    <!--modals-->
@endsection

@push('scripts')

@endpush

