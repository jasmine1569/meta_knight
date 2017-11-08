<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="{{ url('../bower_components/meta-ui/dist/css/meta-ui.css') }}">
	<link rel="stylesheet" type="text/js" href="{{ url('../bower_components/meta-ui/dist/js/meta-ui.js') }}">
	
	<title>@yield('title', 'Project Title')</title>	
</head>

<body>
	{{-- @include('layouts.partials.footer') --}}
		<div class="main--fullpage">
			@yield('structure')
		</div>
	@include('layouts.partials.footer')
</body>

<!-- CSUN Branded Fonts -->
<script src="//use.typekit.net/gfb2mjm.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
{{-- <script src="//cdn.metalab.csun.edu/metaphor/js/metaphor.js"></script> --}}

</html>