<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>blog</title>
	<link href="https://fonts.googleapis.com/css?family=Akronim" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/all.css')}}">
</head>
<body>
	@include('layout.navbar')
	<div id="pageContainer">
		@yield('pageContent')
	</div>
	@include('layout.footer')
	<script src="{{asset('js/all.js')}}"></script>
</body>
</html>