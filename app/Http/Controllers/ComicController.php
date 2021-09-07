<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comic;

class ComicController extends Controller
{
    /**
     * comics
     */

    public function comics()
    {

    //     $comics = config('comics');
    //     $data = ['series' => $comics];

    // dd( Comic::all() );

    //     return view('comics', $data);

        $comics = Comic::all();

        return view('comics')->with('series',$comics);

        // come alternativa
        // return view('comics', ['series' => $comics ] );
        

    }
}
