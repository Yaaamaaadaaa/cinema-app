<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cinema;

class CinameController extends Controller
{
    public function getCinemas()
    {
        $cinemas = Cinema::all();
        return $cinemas;
    }
}
