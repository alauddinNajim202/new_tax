<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('user_dashboard/assets/css/plugins/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="./assets/css/common/common.css"> -->
    <link rel="stylesheet" href="{{ asset('user_dashboard/assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('user_dashboard/assets/css/calendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_dashboard/assets/css/tDashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('user_dashboard/assets/css/common/table.css') }}">
    <link rel="stylesheet" href="{{ asset('user_dashboard/assets/css/common/client-common.css') }}">
    <link rel="stylesheet" href="{{asset('user_dashboard/assets/css/common/common.css')}}" />
    <link rel="stylesheet" href="{{asset('user_dashboard/assets/css/categories.css')}}" />
    <link rel="stylesheet" href="{{asset('user_dashboard/assets/css/plugins/nice-select.min.css')}} ">

     <link rel="stylesheet" href="{{asset('user_dashboard/assets/css/profile.css')}} ">

     <link rel="stylesheet" href="{{asset('user_dashboard/assets/css/rate-type.css')}}">

     @stack('style')


</head>

<body>
    <!-- header start -->
        @include('user_dashboard.partials.header')
    <!-- header end -->

    <div class="main-container">


        <!-- sidebar start -->
            @include('user_dashboard.partials.sidebar_menu')
        <!-- sidebar end -->



        <!-- main-container start -->
            @yield('user_dashboard_content')
        <!-- main-container end -->


        <!-- script js -->
        @include('user_dashboard.partials.scripts')

</body>

</html>
