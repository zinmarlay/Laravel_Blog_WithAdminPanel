<!DOCTYPE html>
<html>
<head>
	@include('admin/layouts/head')
	@yield('require-css')
</head>
<body class="theme-red">
    
	@include('admin/layouts/header')
	@include('admin/layouts/sidebar')

	@yield('main-content')

	@include('admin/layouts/footer')

	@yield('require-script')

</body>
</html>