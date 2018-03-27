<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115499255-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-115499255-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, 
    maximum-scale=1.0, user-scalable=no" /> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css" />
    <title>Vision International</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('page-css')
</head>
<body>
    <div class="container-fluid content parallax">
        @yield('content')

        @if(Request::getPathInfo() == '/application')
            @include('layouts.prefooter-applynow')
        @elseif(Request::getPathInfo()  == '/aboutus')
            @include('layouts.prefooter-about')
        @else
            @include('layouts.prefooter')
        @endif
        @include('layouts.footer')
    </div>
    


<script>
    $.fn.followTo = function (pos) {
    var $this = this,
        $window = $(window);

    $window.scroll(function (e) {
        if ($window.scrollTop() > pos) {
            $this.css({
                position: 'absolute',
                top: pos,
            });
        } else {
            $this.css({
                position: 'fixed',
                top: 50,
            });
        }
    });
};

$('.sticky').followTo(3200);
</script>
<script type="text/javascript" charset="utf8" src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="{{ asset('/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="{{ asset('/js/dataTables.buttons.min.js') }}"></script>



</body>


</html>