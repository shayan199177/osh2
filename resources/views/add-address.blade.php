@extends('layouts.shop')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right mt-3 mb-2 d-none d-lg-flex">
                    <div class="col bg-white border p-3 rounded">
                        <div class="col d-flex text-center justify-content-around">
                            <div class="col small font-700">
                                مراحل تایید و پرداخت خرید:
                            </div>
                            <div class="col small green-color">
                                <i class="fas fa-check-circle ml-2 green-color"></i>تایید سفارش
                            </div>
                            <div class="col active-pages-cart small">
                                <i class="fas fa-check-circle ml-2 font-700 text-warning"></i><span class="text-warning">تایید آدرس و نحوه ارسال</span>
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
                        <li class="list-group-item small green-color"><i class="fas fa-check-circle ml-2 green-color"></i>تایید سفارش</li>
                        <li class="list-group-item small" aria-disabled="true"><i
                                class="fas fa-check-circle ml-2 font-700 text-warning"></i><span class="text-warning">تایید آدرس و نحوه ارسال</span></li>
                        <li class="list-group-item small gray-color">پرداخت نهایی</li>
                    </ul>
                </div>
                <div class="col-12 text-right mt-1 mb-3">
                    <div class="col-12 border-bottom-c3"><h5 class="h6">آدرس تحویل سفارش</h5>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="card card-basket">
                        <div class="col-12 text-right mt-4 mb-2">
                            <div class="d-flex justify-content-between">
                                <div><p class="mb-2"><i class="fas fa-map-marked-alt ml-2"></i>آدرس تحویل سفارش</p></div>
                            </div>
                            <div class="col-12">
                                <div class="mb-5">
                                    <div class="mt-1 px-1 py-3">
                                        <div class="text-center"><img src="temp/Services/address/address.jpg" class="p-3" style="height: 145px;" alt="empty-basket"></div>
                                        <p class="text-justify text-md-center small px-2">هنوز هیچ آدرسی ثبت نکرده اید! برای ادامه ی فرآیند خرید آدرس خود را ثبت کنید.</p>
                                        <div class="mt-4 mb-2 text-center"><button href="#" class="btn btn-success small"><i class="fas fa-pencil-alt ml-2"></i>افزودن آدرس</button></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 text-right mt-2 mb-3 border-top-c3">
                                <p class="small gray-color mb-2 mt-2 text-justify"><i
                                        class="fas fa-exclamation-circle ml-2"></i>برای افزودن یا ویرایش آدرس خود از منوی
                                    تنظیمات حساب کاربری استفاده نمایید.</p>
                            </div>
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

