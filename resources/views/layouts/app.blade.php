<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
   <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Tailwinds -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/2da44da5ae.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">

    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body class="bg-gray-200" style="font-family: 'Source Sans Pro', sans-serif;">
    <div class="app">
        <nav class="flex items-center justify-between flex-wrap bg-white p-4 w-full fixed z-40 shadow-md">
          <div class="pl-2"><a href="/"><img src="/images/wewe.png" class="w-10 h-10"></a></div>
            <div class="ml-2"><p class="text-2xl text-red-800 font-bold">iDEYA</p></div>
          <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
            </div>
            <div class="mr-4">
              <a href="{{route('registration')}}" class="inline-block text-sm font-medium px-6 py-2 leading-none border rounded-full text-red-600 border-red-600 hover:border-transparent hover:text-white hover:bg-red-600 mt-4 lg:mt-0">Guest</a>
            </div>
            <div class="mr-4">
              <a href="{{route('office.login')}}" class="inline-block text-sm font-medium px-6 py-2 leading-none border rounded-full text-red-600 border-red-600 hover:border-transparent hover:text-white hover:bg-red-600 mt-4 lg:mt-0">User</a>
            </div>
          </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
