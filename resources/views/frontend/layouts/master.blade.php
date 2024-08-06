<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Laravel Role Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('frontend.layouts.partials.styles')
    @yield('styles')
</head>

<body>

    @include('frontend.layouts.partials.header')

    @yield('admin-content')
    <!-- main content area end -->
    @include('frontend.layouts.partials.footer')
    <!-- page container area end -->

    @include('frontend.layouts.partials.offsets')
    @include('frontend.layouts.partials.scripts')
    @yield('scripts')
</body>

</html>