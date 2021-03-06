@extends('layouts.shop')

@section('content')


    <div class="container">
        <div class="text-right my-3">
            <div class="border-bottom-c3"><h5 class="h6">خرید با موفقیت ثبت شد.</h5>
            </div>
        </div>
        <div class="border rounded bg-white text-center w-100 mb-3">
            <div class="mx-auto py-4">
                <div class="mx-auto"><img src="temp/Services/basket/green-tick.png" class="p-3" style="height: 135px;" alt="empty-basket"></div>
                <div class="mx-auto"><h5 class="px-1 py-2 green-color">خرید شما با موفقیت انجام شد.</h5></div>
                <div class="mx-auto"><h5 class="px-1 py-2 green-color">کد سفارش شما: SH320090</h5></div>
                <div class="mx-auto"><h5 class="px-1 py-2 small">می‌توانید برای مشاهده خرید خود و وضعیت خرید به صفحه سفارش های من بروید.</h5></div>
                <div class="d-inline-flex">
                    <h6 class="small pt-1 px-2"><a href="#">سفارش های من</a></h6>
                    <span class="gray-color">|</span>
                    <h6 class="small pt-1 px-2"><a href="#">صفحه اصلی شایان پت</a></h6>
                </div>
            </div>
        </div>

        <div class="col-12 text-right mb-3 border-top-c3 mt-2">
            <p class="small gray-color mb-2 mt-2 text-justify"><i
                    class="fas fa-exclamation-circle ml-2"></i>جهت بررسی سفارش خود به صفحه سفارش های من در پنل مدیریت کاربر مراجعه کنید.</p>
        </div>

    </div>


    <!--modals-->
@endsection

@push('scripts')

@endpush

