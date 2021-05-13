<!doctype html>
<html lang="it">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<title>Digitalion Server</title>

	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<!-- Favicons -->
	<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
	<meta name="theme-color" content="#7952b3">


	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>


	<!-- Custom styles for this template -->
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body>
	<div class="container py-3">
		<header>
			<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
				<a href="/" class="d-flex align-items-center text-dark text-decoration-none">
					<img src="{{asset('images/logo_small.jpg')}}">
					<span class="fs-4 ml-1">Digitalion Server</span>
				</a>

				<nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
					<a class="me-3 py-2 text-dark text-decoration-none" href="{{route('home')}}">Home</a>
					<a class="me-3 py-2 text-dark text-decoration-none" href="{{route('php')}}">PHP</a>
					<a class="me-3 py-2 text-dark text-decoration-none" href="{{route('db')}}">Database</a>
				</nav>
			</div>
			<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
				<h1 class="display-4 fw-normal">@yield('title')</h1>
			</div>
		</header>

		<main>
			@yield('content')
		</main>

		<footer class="pt-4 my-md-5 pt-md-5 border-top">
			<div class="row">
				<div class="col-12 col-md">
					<small class="d-block mb-3 text-muted">Creato da Digitalion</small>
				</div>
			</div>
		</footer>
	</div>



</body>

</html>