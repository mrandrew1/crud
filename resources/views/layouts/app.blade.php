<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<title>crud laravel app</title>
	<link rel="stylesheet" type="text/css" href="/public/css/main.css?{{rand()}}" />
	<link rel="stylesheet" type="text/css" href="/public/css/normalize.css?{{rand()}}" />
    
</head>
<body class="@yield("body")">

	@include('layouts.scripts')

	<div id="black-wrap">
		<div id="black"></div>
		<div id="mod" class="anime-mod">
			<div id="close"></div>
			<div id="modbox"></div>
		</div>
	</div>
	<div class="message">
		{!! @$message !!}
	</div>
	<div class="wrap">

		@include('layouts.header')

			@yield("content")

		@include('layouts.footer')

	</div>

	<script src="/public/js/jquery.js?v=11"></script>
	<script src="/public/js/slick.js?v=2"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
	<script src="/public/js/main.js?{{rand()}}"></script>
	
</body>
</html>
