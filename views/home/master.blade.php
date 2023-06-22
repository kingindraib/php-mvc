<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Majja KO TV</title>
		@include('home.includes.css')

	<!-- sweet alert 2 -->
</head>

<body>
	@include('home.includes.header')

    {{-- ************************  BODY START  ************************ --}}

            @yield('body')

    {{-- ************************  BODY END  ************************ --}}


@include('home.includes.footer')
@include('home.includes.js')
</body>
</html>