<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view("home", compact("movies"));
    }

    public function show($id){
        $movie = Movie::find($id);
        return view("singleMovie", compact('movie'));
    }
}
