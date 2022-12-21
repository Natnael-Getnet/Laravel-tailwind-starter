<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @section('title')
        @show
    </title>
    @yield('header_styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <section class="text-gray-600 body-font overflow-hidden">
        @include('layouts/header')

        @yield('content')

        @include('layouts/footer')
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    </section>
</body>

</html>
