<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FDL MARKET</title>
    @livewireStyles()

    <link href="{{ url('home/assets/img/fdl1.png')}}" rel="icon">
  <link href="{{ url('home/assets/img/fdl1.png')}}" rel="apple-touch-icon">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('shop/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('shop/css/style.css')}}" type="text/css">
    @yield('extra-css')

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    @include('partials._menu')
    @yield('content')
    @include('partials._footer')
    @livewireScripts()
  <!-- Js Plugins -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ url('shop/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('shop/js/bootstrap.min.js')}}"></script>
    <script src="{{url('shop/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('shop/js/jquery-ui.min.js')}}"></script>
    <script src="{{url('shop/js/jquery.slicknav.js')}}"></script>
    <script src="{{url('shop/js/mixitup.min.js')}}"></script>
    <script src="{{url('shop/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('shop/js/main.js')}}"></script>
    <!--<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>-->
    <script>
        var path="{{route('p_search')}}";

        $('input.typehead').typeahead({
            source: function(terms,process){
                return $.get(path,{terms:terms},function(data){
                    return process(data);
                });
            }
        });    /*var availableTags = [];
    $.ajax({
        method:"GET",
        url: "/p_search",
        
        success: function(response){
            //console.log(response);
            startAutoComplete(response)
        }
    });
    function startAutoComplete(availableTags) {*/
       // $( "#search_p" ).on('keyup',function())
      //source: availableTags
    
    
  
  </script>

</body>

</html>