<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta name="HandheldFriendly" content="true">
  <title>
    @yield('title', 'فروشگاه اینترنتی شایان پت') {{ env('PAGE_TITLE_PREFIX') }}
  </title>
  <link href="{!! asset('assets/libs/bootstrap-4.5.2/css/bootstrap.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('assets/libs/fontawesome-5.15.0/css/all.min.css') !!}" rel="stylesheet">
  @stack('styles')
  <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet">
  @stack('custom-styles')
</head>
<body>
  <!--begin header-->
  @include('layouts._header')
  <!--end header-->

  <!-- begin content -->
  @yield('content')
  <!-- end content -->

  <!--begin footer-->
  @include('layouts._footer')
  <!--end footer-->

  <!--begin scripts-->
  @include('layouts._scripts')
  <!--end scripts-->
</body>
</html>