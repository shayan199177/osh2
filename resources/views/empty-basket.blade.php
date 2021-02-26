@extends('layouts.shop')

@section('content')


    <div class="container">
        <div class="text-right my-3">
            <div class="border-bottom-c3"><h5 class="h6">سبد خرید</h5>
            </div>
        </div>
        <div class="border rounded bg-white text-center w-100 mb-3">
            <div class="mx-auto py-4">
                <div class="mx-auto"><img src="temp/Services/basket/basket.png" class="p-3" style="height: 135px;" alt="empty-basket"></div>
                <div class="mx-auto"><h5 class="px-1 py-2 gray-color">سبد خرید شما خالی است!</h5></div>
                <div class="mx-auto"><h5 class="px-1 py-2 small">می‌توانید برای مشاهده محصولات بیشتر به صفحات زیر بروید</h5></div>
                <div class="d-inline-flex">
                    <h6 class="small pt-1 px-2"><a href="#">صفحه اصلی</a></h6>
                    <span class="gray-color">|</span>
                    <h6 class="small pt-1 px-2"><a href="#">تخفیف ها و پیشنهادها</a></h6>
                </div>
            </div>
        </div>
    </div>


    <!--modals-->
@endsection

@push('scripts')

@endpush

