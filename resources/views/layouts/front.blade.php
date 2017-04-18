<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@yield('title')
	@yield('styles')
</head>
<body>
	@yield('content')
	@if(config('app.env') == 'local')
  	<script src="http://localhost:35729/livereload.js"></script>
   @endif
</body>
</html>