<!DOCTYPE html>
<html>
<head>
	@include('user/layouts/head')	

</head>
<body id="page-top">
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=2453389648265993&autoLogAppEvents=1"></script>
	@include('user/layouts/sidebar')
	  <div class="container-fluid p-0">
		@yield('main-content')
	</div>
	@include('user/layouts/footer')
</body>
</html>