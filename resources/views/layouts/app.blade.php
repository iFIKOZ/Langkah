<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name') }}</title>
        <link rel="icon" href="{{ asset('library/images/logo/logo pth.png') }}">

        <!-- Fonts -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen ">
            @include('layouts.navigation')


            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

  <!-- Footer -->
  <footer class=" text-center text-lg-start text-dark tpbt border-top footerr">
    <div class="text-center p-1">
      <ul class="nav col-12 col-md-auto mb-1 justify-content-center mb-md-0" style="font-size: 25px;">
        <li class="ms-3"><a class="text-muted" href="#"><i class="fab fa-twitter"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i class="fab fa-instagram"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i class="fab fa-facebook"></i></a></li>
      </ul>
    </div>
  </footer>
  <!-- Footer -->

        </div>
    </body>
</html>
