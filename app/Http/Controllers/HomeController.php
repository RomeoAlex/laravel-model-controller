<?php

namespace App\Http\Controllers;
// chiamo il modello per richiamare il database movies

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function Index(){
        // // attingo le informzioni passate dal model
        $movies = Movie::all();
        // stampo per verifica
        
        $data = [
            'movies'=>$movies
        ];

        return view('homepage', $data);
    }
}
?>