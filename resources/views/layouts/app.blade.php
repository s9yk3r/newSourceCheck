<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="" />
		<meta name="author" content="" />
        <title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Favicon-->
		<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

		<!-- Bootstrap icons-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
		<!-- Core theme CSS (includes Bootstrap)-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
	</head>

    <body class="font-sans antialiased">
		@include('layouts.navigation')
		@include('layouts.header')

		<!-- Page Content -->
		<main>
			{{ $slot }}
		</main>

		@include('layouts.footer')
    </body>
</html>
