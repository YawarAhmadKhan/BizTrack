<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{  asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1')}}" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
           @include('partials.sidebar')
            <!-- Page Content -->
            <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
            @livewire('navigation-menu')
                {{ $slot }}
            </main>
        

        @stack('modals')

        @livewireScripts
          <!-- plugin for charts  -->

    
</body>
<script src="{{ asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <!-- plugin for scrollbar  -->
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
  <!-- main script file  -->
  <script src="{{  asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1')}}" async></script>
</html>
