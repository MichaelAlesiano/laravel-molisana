<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Molisana Laravel Test')</title>
    {{-- Link Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    {{-- Link Google Font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;600&display=swap" rel="stylesheet">
    {{-- Link Foglio di stile --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    {{-- HEADER --}}
    @include('partials.header')
    {{-- MAIN --}}
    <main>@yield('content')</main>
    {{-- FOOTER --}}
    @include('partials.footer')

    {{-- Link file JS --}}
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>