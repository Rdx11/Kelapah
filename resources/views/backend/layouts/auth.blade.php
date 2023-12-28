<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('backend/img/logo_kelapah.png') }}" type="image/x-icon"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts and icons -->
	<script src="{{ asset('backend/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["{{ asset('backend/css/fonts.min.css') }}"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/css/auth-style.css') }}">

  </head>
  <body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <div class="logo-brand">
                <img src="{{ asset('backend/img/logo2.png') }}" alt="" width="50%">
            </div>
            @if ($errors->any())
                <x-alert />
            @endif

            @yield('form')
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('backend/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/atlantis.min.js') }}"></script>

    <!-- javascript custom file -->
    @stack('script')
  </body>
</html>
