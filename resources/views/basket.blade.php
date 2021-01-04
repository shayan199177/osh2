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
                            <div class="col active-pages-cart small">
                                <i class="fas fa-check-circle ml-2 text-warning"></i><span class="font-700 text-warning">تایید سفارش</span>
                            </div>
                            <div class="col small gray-color">
                                آدرس و نحوه ارسال
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
                        <li class="list-group-item small" aria-disabled="true"><i
                                class="fas fa-check-circle ml-2 text-warning"></i><span class="font-700 text-warning">تایید سفارش</span></li>
                        <li class="list-group-item small gray-color">آدرس و نحوه ارسال</li>
                        <li class="list-group-item small gray-color">پرداخت نهایی</li>
                    </ul>
                </div>
                <div class="col-12 text-right mt-1 mb-3">
                    <div class="col-12 border-bottom-c3"><h5 class="h6">سبد خرید<span class="badge bg-main mr-1">2</span></h5>
                    </div>
                </div>
                <div class="col-12 order-2 order-lg-1 col-lg-8 col-xl-9">
                    <div class="card card-basket mb-4">
                        <div class="card-category">
                            <div><a href="#" class="d-block d-sm-none text-center"><img src="temp/product/cat/2.jpg" alt="shayanPet"
                                                                                        class="img-item m-3"></a></div>
                            <div class="d-inline-flex category-w350 border-bottom-c3">
                                <a href="#" class="d-none d-sm-block"><img src="temp/product/cat/2.jpg" alt="shayanPet"
                                                                           class="img-item m-3"></a>
                                <div class="category-w235 text-right py-4 pr-2 pb-1 pl-2">
                                    <div class="carousel-item-title-basket">
                                        <a href="#" class="text-right text-decoration-none text-card">
                                            <h6>غذای خشک سگ نوتری</h6>
                                        </a>
                                    </div>
                                    <p class="mt-3 sub-item-page text-justify"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-check ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"></path>
                                            <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                        </svg>گارانتی
                                        اصالت و سلامت فیزیکی کالا</p>
                                    <p class="mt-1 sub-item-page text-justify"><i class="fas fa-check-circle ml-2"></i>
                                        5 کیلوگرمی</p>
                                    <div class="d-none d-sm-flex mt-4">
                                        <div class="my-auto qty d-flex justify-content-start">
                                            <div class="d-flex">
                                                <div class="number-down-up number-down-up-basket ml-3">
                                                    <div class="custom-qty pull-left">
                                                        <button type="button" class="increase items items-count"
                                                                onclick="var result = document.getElementById('qty1'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;">
                                                            <i class="fa fa-plus small"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" name="qty" id="qty1" maxlength="12" value="1"
                                                           title="تعداد"
                                                           class="number-item qty">
                                                    <div class="custom-left-btn-item pull-left">
                                                        <button type="button" class="reduced items  items-count"
                                                                onclick="var result = document.getElementById('qty1'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;">
                                                            <i class="fa fa-minus small"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="far fa-trash-alt ml-1"></i>
                                                        <span>حذف</span></button>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <button class="love-item">
                                                        <i class="fas fa-heart ml-1 mr-0 mr-sm-3 text-danger"></i>
                                                        <span>افزودن به علاقه مندی ها</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex left-price-basket mt-2 ml-4">
                                            <h6 class="price-font my-auto">۳۲۹,۳۰۰,۳۰۰<span
                                                    class="toman-price my-auto">تومان</span></h6>
                                        </div>
                                    </div>
                                    <!--                                device xs-->
                                    <div class="d-block d-sm-none mt-4">
                                        <div class="my-auto qty d-flex justify-content-start">
                                            <div class="d-flex">
                                                <div class="number-down-up number-down-up-basket ml-3">
                                                    <div class="custom-qty pull-left">
                                                        <button type="button" class="increase items items-count"
                                                                onclick="var result = document.getElementById('qty11'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;">
                                                            <i class="fa fa-plus small"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" name="qty" id="qty11" maxlength="12" value="1"
                                                           title="تعداد"
                                                           class="number-item qty">
                                                    <div class="custom-left-btn-item pull-left">
                                                        <button type="button" class="reduced items  items-count"
                                                                onclick="var result = document.getElementById('qty11'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;">
                                                            <i class="fa fa-minus small"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="my-auto d-none d-xl-block delete-item">
                                                    <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="far fa-trash-alt ml-1"></i><span
                                                            class="ft_6">حذف</span></button>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <a href="#">
                                                        <i class="fas fa-heart ft_5 ml-1 mr-0 mr-sm-3"></i><span
                                                            class="ft_6">افزودن به علاقه مندی ها</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex left-price-basket mt-4 ml-4">
                                            <h6 class="price-font my-auto">۳۲۹,۳۰۰,۳۰۰<span
                                                    class="toman-price my-auto">تومان</span></h6>
                                        </div>

                                    </div>
                                    <div class="mt-3 d-none d-sm-flex">
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                    class="far fa-trash-alt ml-1"></i>
                                                <span>حذف</span></button>
                                        </div>
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="love-item">
                                                <i class="fas fa-heart ml-1 mr-0 mr-sm-3 text-danger"></i>
                                                <span>افزودن به علاقه مندی ها</span></button>
                                        </div>
                                    </div>
                                    <div class="d-block d-sm-none mt-5">
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                    class="far fa-trash-alt ml-1"></i>
                                                <span>حذف</span></button>
                                        </div>
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="love-item">
                                                <i class="fas fa-heart ml-1 mr-0 mr-sm-3 text-danger"></i>
                                                <span>افزودن به علاقه مندی ها</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-category">
                            <div><a href="#" class="d-block d-sm-none text-center"><img src="temp/product/cat/1.jpg" alt="shayanPet"
                                                                                        class="img-item m-3"></a></div>
                            <div class="d-inline-flex category-w350 border-bottom-c3">
                                <a href="#" class="d-none d-sm-block"><img src="temp/product/cat/1.jpg" alt="shayanPet"
                                                                           class="img-item m-3"></a>
                                <div class="category-w235 text-right py-4 pr-2 pb-1 pl-2">
                                    <div class="carousel-item-title-basket">
                                        <a href="#" class="text-right text-decoration-none text-card">
                                            <h6>غذای خشک سگ نوتری</h6>
                                        </a>
                                    </div>
                                    <p class="mt-3 sub-item-page text-justify"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-check ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"></path>
                                            <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                        </svg>گارانتی
                                        اصالت و سلامت فیزیکی کالا</p>
                                    <div class="d-none d-sm-flex mt-4">
                                        <div class="my-auto qty d-flex justify-content-start">
                                            <div class="d-flex">
                                                <div class="number-down-up number-down-up-basket ml-3">
                                                    <div class="custom-qty pull-left">
                                                        <button type="button" class="increase items items-count"
                                                                onclick="var result = document.getElementById('qty2'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;">
                                                            <i class="fa fa-plus small"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" name="qty" id="qty2" maxlength="12" value="1"
                                                           title="تعداد"
                                                           class="number-item qty">
                                                    <div class="custom-left-btn-item pull-left">
                                                        <button type="button" class="reduced items  items-count"
                                                                onclick="var result = document.getElementById('qty2'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;">
                                                            <i class="fa fa-minus small"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="far fa-trash-alt ml-1"></i>
                                                        <span>حذف</span></button>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <button class="love-item">
                                                        <i class="fas fa-heart ml-1 mr-0 mr-sm-3 text-danger"></i>
                                                        <span>افزودن به علاقه مندی ها</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex left-price-basket mt-2 ml-4">
                                            <h6 class="price-font my-auto">۳۲۹,۳۰۰,۳۰۰<span
                                                    class="toman-price my-auto">تومان</span></h6>
                                        </div>
                                    </div>
                                    <!--                                device xs-->
                                    <div class="d-block d-sm-none mt-4">
                                        <div class="my-auto qty d-flex justify-content-start">
                                            <div class="d-flex">
                                                <div class="number-down-up number-down-up-basket ml-3">
                                                    <div class="custom-qty pull-left">
                                                        <button type="button" class="increase items items-count"
                                                                onclick="var result = document.getElementById('qty22'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;">
                                                            <i class="fa fa-plus small"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" name="qty" id="qty22" maxlength="12" value="1"
                                                           title="تعداد"
                                                           class="number-item qty">
                                                    <div class="custom-left-btn-item pull-left">
                                                        <button type="button" class="reduced items  items-count"
                                                                onclick="var result = document.getElementById('qty22'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;">
                                                            <i class="fa fa-minus small"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="far fa-trash-alt ml-1"></i><span
                                                            class="ft_6">حذف</span></button>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <a href="#">
                                                        <i class="fas fa-heart ft_5 ml-1 mr-0 mr-sm-3"></i><span
                                                            class="ft_6">افزودن به علاقه مندی ها</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex left-price-basket mt-4 ml-4">
                                            <h6 class="price-font my-auto">۳۲۹,۳۰۰,۳۰۰<span
                                                    class="toman-price my-auto">تومان</span></h6>
                                        </div>

                                    </div>
                                    <div class="mt-3 d-none d-sm-flex">
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                    class="far fa-trash-alt ml-1"></i>
                                                <span>حذف</span></button>
                                        </div>
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="love-item">
                                                <i class="fas fa-heart ml-1 mr-0 mr-sm-3 text-danger"></i>
                                                <span>افزودن به علاقه مندی ها</span></button>
                                        </div>
                                    </div>
                                    <div class="d-block d-sm-none mt-5">
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                    class="far fa-trash-alt ml-1"></i>
                                                <span>حذف</span></button>
                                        </div>
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="love-item">
                                                <i class="fas fa-heart ml-1 mr-0 mr-sm-3 text-danger"></i>
                                                <span>افزودن به علاقه مندی ها</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-category">
                            <div><a href="#" class="d-block d-sm-none text-center"><img src="temp/product/fish/7.jpg" alt="shayanPet"
                                                                                        class="img-item m-3"></a></div>
                            <div class="d-inline-flex category-w350 border-bottom-c3">
                                <a href="#" class="d-none d-sm-block"><img src="temp/product/fish/7.jpg" alt="shayanPet"
                                                                           class="img-item m-3"></a>
                                <div class="category-w235 text-right py-4 pr-2 pb-1 pl-2">
                                    <div class="carousel-item-title-basket">
                                        <a href="#" class="text-right text-decoration-none text-card">
                                            <h6>غذای خشک سگ نوتری</h6>
                                        </a>
                                    </div>
                                    <p class="mt-3 sub-item-page text-justify"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-check ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"></path>
                                            <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                        </svg>گارانتی
                                        اصالت و سلامت فیزیکی کالا</p>
                                    <div class="d-none d-sm-flex mt-4">
                                        <div class="my-auto qty d-flex justify-content-start">
                                            <div class="d-flex">
                                                <div class="number-down-up number-down-up-basket ml-3">
                                                    <div class="custom-qty pull-left">
                                                        <button type="button" class="increase items items-count"
                                                                onclick="var result = document.getElementById('qty3'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;">
                                                            <i class="fa fa-plus small"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" name="qty" id="qty3" maxlength="12" value="1"
                                                           title="تعداد"
                                                           class="number-item qty">
                                                    <div class="custom-left-btn-item pull-left">
                                                        <button type="button" class="reduced items  items-count"
                                                                onclick="var result = document.getElementById('qty3'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;">
                                                            <i class="fa fa-minus small"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="far fa-trash-alt ml-1"></i>
                                                        <span>حذف</span></button>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <button class="love-item">
                                                        <i class="fas fa-heart ml-1 mr-0 mr-sm-3 text-danger"></i>
                                                        <span>افزودن به علاقه مندی ها</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex left-price-basket mt-2 ml-4">
                                            <h6 class="price-font my-auto">۳۲۹,۳۰۰,۳۰۰<span
                                                    class="toman-price my-auto">تومان</span></h6>
                                        </div>
                                    </div>
                                    <!--                                device xs-->
                                    <div class="d-block d-sm-none mt-4">
                                        <div class="my-auto qty d-flex justify-content-start">
                                            <div class="d-flex">
                                                <div class="number-down-up number-down-up-basket ml-3">
                                                    <div class="custom-qty pull-left">
                                                        <button type="button" class="increase items items-count"
                                                                onclick="var result = document.getElementById('qty33'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;">
                                                            <i class="fa fa-plus small"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" name="qty" id="qty33" maxlength="12" value="1"
                                                           title="تعداد"
                                                           class="number-item qty">
                                                    <div class="custom-left-btn-item pull-left">
                                                        <button type="button" class="reduced items  items-count"
                                                                onclick="var result = document.getElementById('qty33'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;">
                                                            <i class="fa fa-minus small"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="far fa-trash-alt ml-1"></i><span
                                                            class="ft_6">حذف</span></button>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <a href="#">
                                                        <i class="fas fa-heart ft_5 ml-1 mr-0 mr-sm-3"></i><span
                                                            class="ft_6">افزودن به علاقه مندی ها</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex left-price-basket mt-4 ml-4">
                                            <h6 class="price-font my-auto">۳۲۹,۳۰,۳۰۰<span
                                                    class="toman-price my-auto">تومان</span></h6>
                                        </div>

                                    </div>
                                    <div class="mt-3 d-none d-sm-flex">
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                    class="far fa-trash-alt ml-1"></i>
                                                <span>حذف</span></button>
                                        </div>
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="love-item">
                                                <i class="fas fa-heart ml-1 mr-0 mr-sm-3 text-danger"></i>
                                                <span>افزودن به علاقه مندی ها</span></button>
                                        </div>
                                    </div>
                                    <div class="d-block d-sm-none mt-5">
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                    class="far fa-trash-alt ml-1"></i>
                                                <span>حذف</span></button>
                                        </div>
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="love-item">
                                                <i class="fas fa-heart ml-1 mr-0 mr-sm-3 text-danger"></i>
                                                <span>افزودن به علاقه مندی ها</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-category">
                            <div><a href="#" class="d-block d-sm-none text-center"><img src="temp/product/fish/8.jpg" alt="shayanPet"
                                                                                        class="img-item m-3"></a></div>
                            <div class="d-inline-flex category-w350">
                                <a href="#" class="d-none d-sm-block"><img src="temp/product/fish/8.jpg" alt="shayanPet"
                                                                           class="img-item m-3"></a>
                                <div class="category-w235 text-right py-4 pr-2 pb-1 pl-2">
                                    <div class="carousel-item-title-basket">
                                        <a href="#" class="text-right text-decoration-none text-card">
                                            <h6>غذای خشک سگ نوتری</h6>
                                        </a>
                                    </div>
                                    <p class="mt-3 sub-item-page text-justify"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-check ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"></path>
                                            <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                        </svg>گارانتی
                                        اصالت و سلامت فیزیکی کالا</p>
                                    <div class="d-none d-sm-flex mt-4">
                                        <div class="my-auto qty d-flex justify-content-start">
                                            <div class="d-flex">
                                                <div class="number-down-up number-down-up-basket ml-3">
                                                    <div class="custom-qty pull-left">
                                                        <button type="button" class="increase items items-count"
                                                                onclick="var result = document.getElementById('qty4'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;">
                                                            <i class="fa fa-plus small"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" name="qty" id="qty4" maxlength="12" value="1"
                                                           title="تعداد"
                                                           class="number-item qty">
                                                    <div class="custom-left-btn-item pull-left">
                                                        <button type="button" class="reduced items  items-count"
                                                                onclick="var result = document.getElementById('qty4'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;">
                                                            <i class="fa fa-minus small"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="far fa-trash-alt ml-1"></i>
                                                        <span>حذف</span></button>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <button class="love-item">
                                                        <i class="fas fa-heart ml-1 mr-0 mr-sm-3 text-danger"></i>
                                                        <span>افزودن به علاقه مندی ها</span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex left-price-basket mt-2 ml-4">
                                            <h6 class="price-font my-auto">۳۲۹,۳۰۰,۳۰۰<span
                                                    class="toman-price my-auto">تومان</span></h6>
                                        </div>
                                    </div>
                                    <!--                                device xs-->
                                    <div class="d-block d-sm-none mt-4">
                                        <div class="my-auto qty d-flex justify-content-start">
                                            <div class="d-flex">
                                                <div class="number-down-up number-down-up-basket ml-3">
                                                    <div class="custom-qty pull-left">
                                                        <button type="button" class="increase items items-count"
                                                                onclick="var result = document.getElementById('qty44'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;">
                                                            <i class="fa fa-plus small"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" name="qty" id="qty44" maxlength="12" value="1"
                                                           title="تعداد"
                                                           class="number-item qty">
                                                    <div class="custom-left-btn-item pull-left">
                                                        <button type="button" class="reduced items  items-count"
                                                                onclick="var result = document.getElementById('qty44'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;">
                                                            <i class="fa fa-minus small"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="far fa-trash-alt ml-1"></i><span
                                                            class="ft_6">حذف</span></button>
                                                </div>
                                                <div class="my-auto d-none d-xl-block">
                                                    <a href="#">
                                                        <i class="fas fa-heart ft_5 ml-1 mr-0 mr-sm-3"></i><span
                                                            class="ft_6">افزودن به علاقه مندی ها</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex left-price-basket mt-4 ml-4">
                                            <h6 class="price-font my-auto">۳۲۹,۳۰۰,۳۰۰<span
                                                    class="toman-price my-auto">تومان</span></h6>
                                        </div>

                                    </div>
                                    <div class="mt-3 d-none d-sm-flex">
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                    class="far fa-trash-alt ml-1"></i>
                                                <span>حذف</span></button>
                                        </div>
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="love-item">
                                                <i class="fas fa-heart ml-1 mr-0 mr-sm-3 text-danger"></i>
                                                <span>افزودن به علاقه مندی ها</span></button>
                                        </div>
                                    </div>
                                    <div class="d-block d-sm-none mt-5">
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="delete-item" data-toggle="modal" data-target="#exampleModal"><i
                                                    class="far fa-trash-alt ml-1"></i>
                                                <span>حذف</span></button>
                                        </div>
                                        <div class="my-auto d-block d-xl-none">
                                            <button class="love-item">
                                                <i class="fas fa-heart ml-1 mr-0 mr-sm-3 text-danger"></i>
                                                <span>افزودن به علاقه مندی ها</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 order-1 order-lg-2 col-lg-4 col-xl-3 mb-3">
                    <div class="card card-basket">
                        <div class="col-12 text-right mt-4 mb-3">
                            <div class="col-12 d-flex border-bottom-c3"><h5 class="small">قیمت کالاها</h5>
                                <div class="d-flex left-price-basket">
                                    <h6 class="price-font my-auto small">۳۲۹,۳۰۰,۳۰۰<span
                                            class="toman-price my-auto small">تومان</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-4">
                            <button class="card-link button-buy">تایید و ادامه</button>
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
                    محصول از سبد خرید شما حذف شود؟
                </div>
                <div class="modal-footer text-right">
                    <button type="button" class="btn btn-light" data-dismiss="modal">خیر</button>
                    <button type="button" class="btn btn-danger">حذف</button>
                </div>
            </div>
        </div>
    </div>
@endsection
