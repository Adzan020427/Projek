<!DOCTYPE html>
<html lang="en">

<head>
  @include('bagian.contoh_head')
</head>

<body class="index-page">

  @include('bagian.contoh_nav')
  <main>
    @yield('isi')
  </main>

  @include('bagian.contoh_footer')
  @stack('scripts')
</body>

</html>