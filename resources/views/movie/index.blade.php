@extends('layout')

@section('content')
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
@endsection