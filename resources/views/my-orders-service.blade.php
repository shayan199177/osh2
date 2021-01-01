@extends('layouts.shop')

@section('content')
    <div class="container-fluid">
        <div class="container demo">
            <div class="row">
                <div class="col-12 text-right mt-3 mb-3">
                    <div class="col-12 border-bottom-c3"><h5 class="h6">لیست سفارش ها<span
                                class="badge bg-main mr-1">4</span></h5>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-striped table-bordered text-center table-responsive-md">
                        <thead>
                        <tr class="small">
                            <th scope="col">تاریخ رزرو</th>
                            <th scope="col">ساعت رزرو</th>
                            <th scope="col">نوع سفارش</th>
                            <th scope="col">وضعیت</th>
                            <th scope="col">جزئیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="small">
                            <th scope="row">1400/01/22</th>
                            <td>01:22</td>
                            <td class="min-w-150">دامپزشک در محل</td>
                            <td class="min-w-150"><p>تحویل داده شده</p></td>
                            <td><a href=""><i class="fas fa-bars"></i></a></td>
                        </tr>
                        <tr class="small">
                            <th scope="row">1399/05/03</th>
                            <td>01:22</td>
                            <td class="min-w-150">دامپزشکی</td>
                            <td class="min-w-150">انجام شده</td>
                            <td><a href=""><i class="fas fa-bars"></i></a></td>
                        </tr>
                        <tr class="small">
                            <th scope="row">1399/09/12</th>
                            <td>01:22</td>
                            <td class="min-w-150">شست و شو و پیرایش</td>
                            <td class="min-w-150">انجام شده</td>
                            <td><a href=""><i class="fas fa-bars"></i></a></td>
                        </tr>
                        <tr class="small">
                            <th scope="row">1399/12/01</th>
                            <td>01:22</td>
                            <td class="min-w-150">Thornton</td>
                            <td class="min-w-150">در حال ارسال</td>
                            <td><a href=""><i class="fas fa-bars"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12 text-right mb-3 border-top-c3">
                    <p class="small gray-color mb-2 mt-2 text-justify"><i
                            class="fas fa-exclamation-circle ml-2"></i>لیست سفارش ها بر اساس زمان خرید از جدیدترین خرید تا
                        سوابق خرید گذشته در جدول سفارشات قرار گرفته است.</p>
                    <p class="small gray-color mb-2 text-justify"><i class="fas fa-exclamation-circle ml-2"></i>
                        برای دریافت فاکتور و مشخصات خرید بر روی فاکتور خرید مورد نظر کلیک نمایید.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush

