<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * home
     */
    public function home() 
    {
        return view('home');
    }


     /**
     * characters
     */
    public function characters() 
    {
        return view('characters');
    }


     /**
     * movies
     */

    public function movies() 
    {
        return view('movies');
    }


     /**
     * tv
     */

    public function tv() 
    {
        return view('tv');
    }

     
     /**
     * games
     */

    public function games() 
    {
        return view('games');
    }

     /**
     * collectibles
     */

    public function collectibles() 
    {
        return view('collectibles');
    }


     /**
     * videos
     */

    public function videos() 
    {
        return view('videos');
    }


     /**
     * fans
     */

    public function fans() 
    {
        return view('fans');
    }
}
