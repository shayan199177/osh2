<div class="container-fluid bg-main sticky-top">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-md-3 col-lg-3 col-xl-2 order-md-1 order-lg-1 py-2 text-center text-md-right">
        <a href="../index.html">
          <img src="{!! asset('assets/images/logo-shayanpet.png') !!}" class="logo_size_30" alt="shayanpet">
        </a>
      </div>
      <div class="col-md-8 col-lg-5 col-xl-6 order-md-2 order-lg-2 py-md-2 justify-content-start pb-2">
        <form class="form-inline justify-content-start">
          <input class="form-control input-search" type="search"
                 placeholder="دسته یا محصول خود را پیدا کن..."
                 aria-label="Search">
          <button class="btn button-search btn-search" type="submit">
            <i class="fas fa-search m-6p"></i>
          </button>
        </form>
      </div>

      <div class="d-none d-lg-flex col-lg-4 col-xl-4 order-lg-3 align-items-center justify-content-end">
        <div class="ml-4 profile">
          <button class="btn btn-s dropdown-toggle" type="button" id="profileDropdown"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-alt i-top ml-2"></i>
            <span class="small">شایان سلیم زاده</span>
            <i class="fas fa-angle-down i-top mr-2"></i>
          </button>
          <div class="dropdown-menu user-menu-dropdown" aria-labelledby="profileDropdown">
              <a href="../user/my-orders-service.html" class="dropdown-item small py-2">
                  <i class="fas fa-shopping-basket pl-2 black-color"></i>
                  سبد خرید
              </a>
            <a href="../user/my-interests.html" class="dropdown-item small py-2">
              <i class="fas fa-heart pl-2 red-color"></i>
              علاقه‌مندی‌ها
            </a>
            <a href="../user/my-orders.html" class="dropdown-item small py-2">
              <i class="fas fa-box pl-2 black-color"></i>
              سفارش‌های من
            </a>

            <a href="../user/profile-setting.html" class="dropdown-item small py-2">
              <i class="fas fa-user-cog pl-2 black-color"></i>
              تنظیمات حساب کاربری
            </a>
            <a href="#" class="dropdown-item small py-2">
              <i class="fas fa-sign-out-alt pl-2 red-r-color"></i>
              خروج از حساب کاربری
            </a>
          </div>
        </div>
        <div>
          <a href="../cart/basket.html">
            <img src="{!! asset('assets/images/cart-icon.png') !!}" class="basket" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-white w-100 h-nav-top d-flex align-items-center border-bottom smart-scroll">
  <div class="container">
    <div class="row">
{{--      <div class="d-block d-md-none menu-wrap">--}}
{{--        <input type="checkbox" class="toggler">--}}
{{--        <div class="hamburger">--}}
{{--          <div></div>--}}
{{--        </div>--}}
{{--        <div class="menu">--}}
{{--          <div>--}}
{{--            <div>--}}
{{--              <ul>--}}
{{--                <li><a href="../index.html">صفحه اصلی</a></li>--}}
{{--                <li><a href="../all-products.html">دسته بندی محصولات</a></li>--}}
{{--                <li><a href="../all-services.html">خدمات شایان پت</a></li>--}}
{{--                <li><a href="../articles.html">مقاله ها</a></li>--}}
{{--                <li><a href="../videos.html">ویدیو ها</a></li>--}}
{{--                <li><a href="../contacts.html">تماس با ما</a></li>--}}
{{--              </ul>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
      <div class="col-12 col-md-12">
        <nav class="navbar-top navbar-expand-lg navbar-light bg-white d-flex">
          <ul class="navbar-nav">
            <li class="nav-item dropdown px-3 d-none d-lg-block my-auto dropdown menu-area">
              <a class="nav-link-2 a-link-header dropdown-toggle" href="../all-products.html" id="mega-one"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bars"></i>
                <span class="mr-2">دسته بندی محصول ها</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="mega-one">
                <div class="row">
                  <div class="col-sm-6 col-lg-3 px-5 my-3 dog-img">
                    <h4><a href="../category/dogs.html" class="title-item-more">سگ ها</a></h4>
                    <a href="../items/items-products.html" class="dropdown-item small">غذای خشک سگ</a>
                    <a href="../items/items-products.html" class="dropdown-item small">کنسرو و پوچ</a>
                    <a href="../items/items-products.html" class="dropdown-item small">تشویقی و مکمل</a>
                    <a href="../items/items-products.html" class="dropdown-item small">اسباب بازی و جویدنی</a>
                    <a href="../items/items-products.html" class="dropdown-item small">قلاده و بند و پلاک</a>
                    <a href="../items/items-products.html" class="dropdown-item small">ظروف و لوازم نگهداری</a>
                    <a href="../items/items-products.html" class="dropdown-item small">لوازم بهداشتی و پوشاک</a>
                  </div>
                  <div class="col-sm-6 col-lg-3 px-5 my-3 cat-img">
                    <h4><a href="../category/cats.html" class="title-item-more">گربه ها</a></h4>
                    <a href="../items/items-products.html" class="dropdown-item small">غذای خشک گربه</a>
                    <a href="../items/items-products.html" class="dropdown-item small">کنسرو و پوچ</a>
                    <a href="../items/items-products.html" class="dropdown-item small">تشویقی و ویتامین ها</a>
                    <a href="../items/items-products.html" class="dropdown-item small">اسباب بازی و سرگرمی</a>
                    <a href="../items/items-products.html" class="dropdown-item small">گردن آویز و پلاک</a>
                    <a href="../items/items-products.html" class="dropdown-item small">ظروف و لوازم نگهداری</a>
                    <a href="../items/items-products.html" class="dropdown-item small">لوازم بهداشتی و توالت</a>
                  </div>
                  <div class="col-sm-6 col-lg-3 px-5 my-3 fish-img">
                    <h4><a href="../category/fish.html" class="title-item-more">آبزیان</a></h4>
                    <a href="../items/items-products.html" class="dropdown-item small">غذا و مکمل ماهیان</a>
                    <a href="../items/items-products.html" class="dropdown-item small">آکواریوم و بستر</a>
                    <a href="../items/items-products.html" class="dropdown-item small">ماهیان آب شیرین</a>
                    <a href="../items/items-products.html" class="dropdown-item small">ماهیان آب شور</a>
                    <a href="../items/items-products.html" class="dropdown-item small">ماهیان پلنت</a>
                    <a href="../items/items-products.html" class="dropdown-item small">گیاهان و دکوراسیون آکواریوم</a>
                    <a href="../items/items-products.html" class="dropdown-item small">لوازم آکواریوم</a>
                  </div>
                  <div class="col-sm-6 col-lg-3 px-5 my-3 bird-img">
                    <h4><a href="../category/birds.html" class="title-item-more">پرندگان</a></h4>
                    <a href="../items/items-products.html" class="dropdown-item small">غذای خشک</a>
                    <a href="../items/items-products.html" class="dropdown-item small">کنسرو و پوچ</a>
                    <a href="../items/items-products.html" class="dropdown-item small">تشویقی و مکمل</a>
                    <a href="../items/items-products.html" class="dropdown-item small">اسباب بازی و جویدنی</a>
                    <a href="../items/items-products.html" class="dropdown-item small">قلاده و بند</a>
                    <a href="../items/items-products.html" class="dropdown-item small">ظروف و لوازم نگهداری</a>
                    <a href="../items/items-products.html" class="dropdown-item small">لوازم بهداشتی و پوشاک</a>
                  </div>
                  <div class="col-sm-6 col-lg-3 px-5 my-3 rabbit-img">
                    <h4><a href="../category/rodents.html" class="title-item-more">جوندگان</a></h4>
                    <a href="../items/items-products.html" class="dropdown-item small">غذای همستر و خوکچه هندی</a>
                    <a href="../items/items-products.html" class="dropdown-item small">کنسرو و پوچ</a>
                    <a href="../items/items-products.html" class="dropdown-item small">تشویقی و مکمل</a>
                    <a href="../items/items-products.html" class="dropdown-item small">اسباب بازی و جویدنی</a>
                    <a href="../items/items-products.html" class="dropdown-item small">قلاده و بند</a>
                    <a href="../items/items-products.html" class="dropdown-item small">ظروف و لوازم نگهداری</a>
                    <a href="../items/items-products.html" class="dropdown-item small">لوازم بهداشتی و پوشاک</a>
                  </div>
                  <div class="col-sm-6 col-lg-3 px-5 my-3">
                    <h4><a href="../category/reptiles.html" class="title-item-more">خزندگان</a></h4>
                    <img src="{!! asset('assets/images/coming-soon.png') !!}" class="float-right" style="    height: 25px;
    top: 31%;
    position: relative;
    right: 37%;" alt="بزودی">
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item px-3 d-none d-lg-block my-auto dropdown menu-area">
              <a class="nav-link-2 a-link-header dropdown-toggle" href="../articles-videos.html" id="mega-three"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                مقاله ها و ویدیوهای آموزشی
              </a>
              <div class="dropdown-menu" aria-labelledby="mega-three">
                <div class="row">
                  <div class="col-sm-6 col-lg-3 px-5 my-3">
                    <h5>مقالات</h5>
                    <a href="#" class="dropdown-item small">نحوه تربیت</a>
                    <a href="#" class="dropdown-item small">راهنمای خرید سگ</a>
                    <a href="#" class="dropdown-item small">راهنمای خرید گربه</a>
                    <a href="#" class="dropdown-item small">راهنمای خرید سگ</a>
                    <a href="#" class="dropdown-item small">راهنمای خرید گربه</a>
                    <a href="#" class="dropdown-item small">راهنمای خرید گربه</a>
                  </div>
                  <div class="col-sm-6 col-lg-3 px-5 my-3">
                    <h5>ویدیوها</h5>
                    <a href="#" class="dropdown-item small">آموزش دستشویی</a>
                    <a href="#" class="dropdown-item small">خرگوش لوپ</a>
                    <a href="#" class="dropdown-item small">ورزش طوطی</a>
                    <a href="#" class="dropdown-item small">خرگوش لوپ</a>
                    <a href="#" class="dropdown-item small">ورزش طوطی</a>
                    <a href="#" class="dropdown-item small">ورزش طوطی</a>
                  </div>
                  <div class="col-sm-6 col-lg-3 px-5 my-3 text-right">
                    <h5>برچسب ها</h5>
                    <a href="#"><span class="badge badge-secondary">سگ</span></a>
                    <a href="#"><span class="badge badge-secondary">گربه</span></a>
                    <a href="#"><span class="badge badge-secondary">طوطی</span></a>
                    <a href="#"><span class="badge badge-secondary">همستر</span></a>
                    <a href="#"><span class="badge badge-secondary">آموزش سگ</span></a>
                    <a href="#"><span class="badge badge-secondary">آموزش دستشویی</span></a>
                    <a href="#"><span class="badge badge-secondary">نحوه غذا دادن</span></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item px-3 d-none d-lg-block my-auto">
              <a class="nav-link-2 a-link-header" href="../questions.html">سوالی دارید؟</a>
            </li>
            <li class="nav-item px-3 d-none d-lg-block my-auto">
              <a class="nav-link-2 a-link-header" href="../contacts.html">تماس با ما</a>
            </li>
          </ul>
          <ul class="col d-flex d-lg-none align-items-center justify-content-end">
            <div class="ml-4 text-left z-22">
              <button class="btn btn-s dropdown-toggle" type="button" id="profileDropdown1"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-alt i-top ml-2"></i>
                <span class="small">شایان سلیم زاده</span>
                <i class="fas fa-angle-down i-top mr-2"></i>
              </button>
              <div class="dropdown-menu user-menu-dropdown" aria-labelledby="profileDropdown1">
                <a href="../user/my-orders-service.html" class="dropdown-item small py-2">
                      <i class="fas fa-shopping-basket black-color pl-2"></i>
                      سبد خرید
                </a>
                <a href="../user/my-interests.html" class="dropdown-item small py-2">
                  <i class="fas fa-heart pl-2 red-r-color"></i>
                  علاقه‌مندی‌ها
                </a>
                <a href="../user/my-orders.html" class="dropdown-item small py-2">
                  <i class="fas fa-box pl-2 black-color"></i>
                  سفارش‌های من
                </a>
                <a href="../user/profile-setting.html" class="dropdown-item small py-2">
                  <i class="fas fa-user-cog  pl-2 black-color"></i>
                  تنظیمات حساب کاربری
                </a>
                <a href="#" class="dropdown-item small py-2">
                  <i class="fas fa-sign-out-alt pl-2 red-color"></i>
                  خروج از حساب کاربری
                </a>
              </div>
            </div>
            <div class="z-22">
              <a href="../cart/basket.html">
                <img src="{!! asset('assets/images/cart-icon.png') !!}" class="basket" alt="">
              </a>
            </div>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
