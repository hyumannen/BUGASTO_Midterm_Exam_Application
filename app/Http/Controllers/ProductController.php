<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){

        $AnimeData = array(
            "anime1" => "One piece",
            "anime2" => "Bleach",
            "anime3" => "Hitman: Reborn",
            "anime4" => "Gintama",
            "anime5" => "Hyakkimaru"
        );

        return view('Anime', ['AnimeData'=>$AnimeData]);
    }
}
