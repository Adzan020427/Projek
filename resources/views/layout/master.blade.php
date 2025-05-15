<!DOCTYPE html>
<html lang="en">

<head>
  @include('bagian.head')
</head>

<body class="index-page">

  @include('bagian.nav')
  <main>
    @yield('isi')
  </main>

  @include('bagian.footer')
  @stack('scripts')
</body>

</html>