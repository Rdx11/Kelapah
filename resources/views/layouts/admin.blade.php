<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Halaman Admin')</title>
    <link rel="icon" href="{{asset('img/icon.ico')}}" type="image/x-icon" />
    <script src="{{asset('js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
      WebFont.load({
        google: { families: ["Lato:300,400,700,900"] },
        custom: {
          families: [
            "Flaticon",
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{ asset('assets/css/fonts.min.css') }}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
   <link rel="stylesheet" href="{{ asset('css/atlantis.css') }}" />
   <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />

    @yield('styles')
</head>
<body data-background-color="dark">
    <div class="wrapper">
        @include('partials.header')

        <div class="sidebar sidebar-style-2" data-background-color="dark2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                 @include('partials.sidebar')
             </div>
         </div>
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    @yield('content')
                </div>
            </div>
            @include('partials.footer')
        </div>
    </div>
    <!-- Your JS scripts here -->
    @yield('scripts')
    <script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('js/plugin/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/plugin/chart-circle/circles.min.js')}}"></script>
    <script src="{{asset('js/plugin/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('js/plugin/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('js/atlantis.min.js')}}"></script>




    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "rgba(255, 255, 255, .5)",
        fillColor: "rgba(255, 255, 255, .15)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "rgba(255, 255, 255, .5)",
        fillColor: "rgba(255, 255, 255, .15)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "rgba(255, 255, 255, .5)",
        fillColor: "rgba(255, 255, 255, .15)",
      });
    </script>
</body>
</html>
