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
      <div id="cinemaApp"></div>
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

    <h4 class="white-text">公開中の作品一覧</h4>
    @foreach($movies as $movie)
      <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-4">
            <div class="card-content white-text">
              <span class="card-title">{{ $movie->title }}</span>
              <p>{{ $movie->detail}}</p>
              <p>上映時間:{{ substr($movie->running_time, 0, 5) }}</p>
            </div>
            <a class='dropdown-trigger btn' data-target='dropdown1'>上映時間を見る</a>
            
            <ul id='dropdown1' class='dropdown-content black'>
              @foreach($movie->schedules as $schedule)
                <li class="card black">
                  <a class="white-text">
                    {{ substr($schedule->start_time, 0, 5) }}〜<span class="yellow-text" style="float: right;">購入　></span>
                  </a>
                </li>
              @endforeach
            </ul>

          </div>
        </div>
      </div>
    @endforeach
  </div>

  <!-- JavaScript -->
  <script src="{{ asset('js/app.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>