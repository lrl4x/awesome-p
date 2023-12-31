<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
@vite(['resources/css/app.css','resources/js/app.js'])
    
</head>
<body>
    <div id="app">
        

  
      <header>
        @include('layouts.header')
      </Header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('layouts.footer')
        </footer>
    </div>



    
    <script src="resources/js/app.js"></script>
    
</body>
</html>
