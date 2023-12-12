<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ _site_settings('site_title') }} || @yield('title')</title>

    @include('admin.includes.css')
</head>
<body>

	<div class="container">
        @include('admin.includes.sidebar')
        @include('admin.includes.nav')


	<!-- main part star -->
	<main>
		<h1>@yield('page_title')</h1>
		<div class="date">
			<input type="date" name="" value="2020-02-23">
		</div>

        @yield('body')
    </main>
	<!-- main part end -->

	
</div>

@include('admin.includes.js')
</body>
</html>