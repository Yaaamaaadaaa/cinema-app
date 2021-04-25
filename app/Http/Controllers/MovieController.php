<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Schedule;

class MovieController extends Controller
{
    public function getMovies()
    {

    }

    public function index()
    {
        $movies = Movie::with('schedules')->get();

        return view('movie/index', [
          'movies' => $movies,
        ]);
    }
}
