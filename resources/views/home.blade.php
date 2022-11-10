<!DOCTYPE html>
<html lang="en" class="scroll-auto md:scroll-smooth">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Inspections provided by HomeSitters4u.com</title>

    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Google Icons --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  </head>
  <body class="bg-slate-200">
    <div id="app">
      <Home-Page></Home-Page>
    </div>

    {{-- Laravel JS --}}
    <script src="{{ mix('/js/app.js') }}"></script>
    {{-- Custom JS --}}
    <script src="{{ asset('/js/scripts.js') }}"></script>
  </body>
</html>