<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="">
	{{--AOS Assets--}}
	<link rel="stylesheet" href="{{ url('css/aos.css') }}">
	{{--META__KNIGHT Assets--}}
	<link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('js/app.js') }}">
	{{--META+LAB UI-KIT Assets--}}
	<link rel="stylesheet" type="text/css" href="{{ url('css/meta-ui.css') }}">
	<link rel="stylesheet" type="text/js" href="{{ url('js/meta-ui.js') }}">
  	<link rel="stylesheet" href="{{ url('https://cdn.metalab.csun.edu/fonts/din/MyFontsWebfontsKit.css') }}">
	<link rel="icon" href="http://www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon">
	<title>@yield('title') | META+LAB</title>	
</head>
<body>
	@include('layouts.partials.navbar')
		<div class="main--fullpage">		
			@yield('structure')
		</div>
	@include('layouts.partials.footer')
		<script src="{{ url('js/aos.js') }}"></script>
		<script>
		    AOS.init({
	      		offset: 100,
	      		duration: 700,
	      		easing: 'ease-in-out-sine',
	      		delay: 0,
	      		disable: 'mobile',
	    	});
		</script>

</body>
</html>