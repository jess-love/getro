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
    <link rel="stylesheet" type="text/css" href={{assert('build/jquery.exzoom.css')}}>

    <!-- head css -->
    @include('layouts.head-css')
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
    <script src="{{ URL::asset('build/jquery.exzoom.js') }}"></script>


</body>

</html>
<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function (){
        $('.increment_btn').click(function (e){
            e.preventDefault();

             var inc_value = $('.qty_input').val();
             var value = parseInt(inc_value,10);
             value = isNaN(value) ? 0: value;
             if(value<10){
                 value++;
                 $('qty_input').val(value);
             }
        });
    });

    {{--function AddToCart(id){--}}
    {{--    $.ajax({--}}
    {{--        url: '{{route("addToCart")}}',--}}
    {{--        type: 'post',--}}
    {{--        data: {id:id},--}}
    {{--        datatype: 'json',--}}
    {{--        success: function (response){--}}
    {{--            if(response.status === true){--}}
    {{--                window.location.reload();--}}
    {{--                --}}{{-- href='{{ route("shopCart") }}'; --}}
    {{--            }else{--}}
    {{--                alert(response.message);--}}
    {{--                //window.location.href="";--}}
    {{--            }--}}
    {{--        }--}}
    {{--    })--}}
    {{--}--}}


    {{--$('.add').click(function(){--}}
    {{--    var qtyElement = $(this).parent().prev(); // Qty Input--}}
    {{--    var qtyValue = parseInt(qtyElement.val());--}}
    {{--    if (qtyValue < 100) {--}}
    {{--        qtyElement.val(qtyValue+1);--}}
    {{--        var rowId = $(this).data('id');--}}
    {{--        var newQty = qtyElement.val();--}}
    {{--        updateCart(rowId, newQty);--}}
    {{--    }--}}
    {{--});--}}

    {{--$('.minus').click(function(){--}}
    {{--    var qtyElement = $(this).parent().next();--}}
    {{--    var qtyValue = parseInt(qtyElement.val());--}}
    {{--    if (qtyValue > 1) {--}}
    {{--        qtyElement.val(qtyValue-1);--}}
    {{--        var rowId = $(this).data('id');--}}
    {{--        var newQty = qtyElement.val();--}}
    {{--        updateCart(rowId, newQty);--}}
    {{--    }--}}
    {{--});--}}

    {{--function updateCart(rowId, qty){--}}
    {{--    $.ajax({--}}
    {{--        url: '{{route("cart_update")}}',--}}
    {{--        type: 'post',--}}
    {{--        data: {rowId:rowId, qty:qty},--}}
    {{--        dataType: 'json',--}}
    {{--        success: function (response){--}}

    {{--            window.location.reload();--}}
    {{--            --}}{{-- location.href='{{ route("shopCart") }}'; --}}
    {{--        }--}}
    {{--    });--}}
    {{--}--}}

    {{--function deleteItem(rowId){--}}
    {{--    if(confirm('are you sure you want to delete?')) {--}}
    {{--        $.ajax({--}}
    {{--            url: '{{route("delete_item")}}',--}}
    {{--            type: 'post',--}}
    {{--            data: {rowId: rowId},--}}
    {{--            dataType: 'json',--}}
    {{--            success: function (response) {--}}

    {{--                window.location.reload();--}}
    {{--                --}}{{-- location.href = '{{ route("shopCart") }}'; --}}
    {{--            }--}}
    {{--        });--}}
    {{--    }--}}
    {{--}--}}

</script>
