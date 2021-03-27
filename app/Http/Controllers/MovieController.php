<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CinemaController extends Controller
{
    public function getMovies()
    {

    }

    public function index()
    {
        $movies = Movie::all();
        
        return view('welcome', [
          'movies'=>$movies,
        ]);
    }
}
