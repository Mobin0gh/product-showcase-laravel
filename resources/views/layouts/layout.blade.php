<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    @vite(['resources/css/app.css' , 'resources/js/app.js'])
</head>
<body>
@include('partials.header')


@yield('content')

@include('partials.footer')
</body>
</html>
