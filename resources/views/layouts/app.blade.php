<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Laravel Pagination With Datatable</title>
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="bg-gray-200 md:px-20 px-4 py-4">
    <h1 class="text-center text-4xl mb-6 font-bold">Laravel Pagination With Datatable</h1>
    @include('layouts.flashMessage')
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        var base_url = "{{ url('') }}";
        var token = $('meta[name="csrf-token"]').attr('content');
    </script>
    @yield('js')
</body>

</html>
