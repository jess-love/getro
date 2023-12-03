<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light" data-footer="dark">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | Toner - eCommerce + Admin HTML Template Build with HTML, React, Laravel, Nodejs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="eCommerce + Admin HTML Template" name="description">
    <meta content="Themesbrand" name="author">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">

    <!-- head css -->
    @include('layouts.head-css')
    @livewireStyles
</head>

<body>

    <!-- top tagbar -->
    @include('layouts.top-tagbar')
    <!-- topbar -->
    @include('layouts.topbar')


    @yield('content')

    <!-- footer -->
    @include('layouts.footer')
    <!-- scripts -->
    @include('layouts.vendor-scripts')

    @livewireScripts

</body>

</html>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function AddToCart(id){
        $.ajax({
            url: '{{route("addToCart")}}',
            type: 'post',
            data: {id:id},
            datatype: 'json',
            success: function (response){
                if(response.status === true){
                    window.location.href='{{ route("shopCart") }}';
                }else{
                    alert(response.message);
                    //window.location.href="";
                }
            }
        })
    }

</script>
