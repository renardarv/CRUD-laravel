<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() 
    {
         
        $nama = 'Fulan';
        return view ('about', [
            'nama' => $nama,
        ]);
    }
}
