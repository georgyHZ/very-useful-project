<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Couch Store') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">Couch Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('couches.index') }}">Couches</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('couches.about') }}">About Us</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('couches.admin') }}">Admin</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
        </ul>
    </div>
</nav>

<header class="hero bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Welcome to Couch Store</h1>
        <p class="lead">Find the perfect couch for your home</p>
    </div>
</header>

<main class="container my-5">
    {{ $slot }}
</main>

<footer class="bg-light text-center py-4">
    <div class="container">
        <p>&copy; {{ date('Y') }} Couch Store. All rights reserved.</p>
    </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
