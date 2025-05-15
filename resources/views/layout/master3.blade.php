<!DOCTYPE html>
<html lang="en">

<head>
  @include('bagian.head2')
</head>

<body class="index-page">

  @include('bagian.nav2')
  <main>
    @yield('isi')
  </main>
  @include('bagian.footer')
  @stack('scripts')
</body>

</html>