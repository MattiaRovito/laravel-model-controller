<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * comics
     */

    public function comics()
    {

         /**
        * @comics
        */

        $comics = Comic::all();
         
        // dd (Comic::all())
        return view('comics')->with('series',$comics);

        // come alternativa
        // return view('comics', ['series' => $comics ] );
        

    }

         /**
        * @show
        */

        public function show($id) 
        {

        $serie = Comic::where('id',$id)->first();
        // dd($serie);
        return view('detail', compact('serie'));
        }

}

