<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'Scholar')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;900&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/templatemo-scholar.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
  <link href="https://unpkg.com/swiper@7/swiper-bundle.min.css" rel="stylesheet" />

  @livewireStyles
</head>
<body>

  {{-- Header --}}
  @include('partials.header')

  {{-- Main Content --}}
  <main>
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('partials.footer')

  {{-- Scripts --}}
  @include('partials.scripts')

  @livewireScripts
</body>
</html>
