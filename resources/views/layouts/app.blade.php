<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>EJCM - @yield('title')</title>

  <!-- Fonts -->
  {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>--}}
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Styles -->
  <link href="{{ asset('assets/css/semantic.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

</head>
<body id="app-layout">

  <!-- Header -->
  @include('layouts.header')

  <main>
    <!-- Conteúdo da página -->
    @yield('content')
  </main>

  <!-- Footer -->
  @include('layouts.footer')

  <!-- JavaScripts -->
  {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/semantic.min.js') }}"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
