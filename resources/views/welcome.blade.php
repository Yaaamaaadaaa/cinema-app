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
        <a href="" class="brand-logo">ララベルリアクト シネマワールド</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="">上映スケジュール</a></li>
          <li><a href="">上映作品</a></li>
        </ul>
      </div>
    </nav>
    <h4 class="white-text">公開中の作品一覧</h4>
    @foreach($movies as $movie)
      <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-4">
            <div class="card-content white-text">
              <span class="card-title">{{ $movie->title }}</span>
              <p>{{ $movie->detail}}</p>
              <p>上映時間:{{ substr($movie->running_time, 0, 5) }}
            </div>
            <div class="card-action">
              <a href="#">上映時間を見る</a>
         　　</div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <!-- JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>