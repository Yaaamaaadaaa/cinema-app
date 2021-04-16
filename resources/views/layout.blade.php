<!doctype html>
<html lang="ja">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <title>Cinema App</title>
</head>

<body>
  <div id="app" class="black">
    <div class="container">
    </div>
    <nav>
      <div class="nav-wrapper red accent-4">
        <a href="/" class="brand-logo white-space:nowrap">ララベル シネマワールド</a>
        <a href="#" data-target="mobile-menu" class="sidenav-trigger">menu</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">上映スケジュール</a></li>
          <li><a href="#">上映作品</a></li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav black" id="mobile-menu">
      <li><a href="#" class="white-text red accent-4">上映スケジュール</a></li>
      <li><a href="#" class="white-text red accent-4">上映作品</a></li>
    </ul>

    @yield('content')
  </div>

  <!-- JavaScript -->
  <script src="{{ asset('js/app.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>