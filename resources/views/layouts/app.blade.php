<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Job Offers Search')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feedback.css') }}">
    <link href="https://fonts.cdnfonts.com/css/kakuro" rel="stylesheet">
                
                
</head>
<body>
    <div id="app">
       
        <x-header />
        <main>
            @yield('content')
        </main>
        <x-footer />
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body> 
</html>