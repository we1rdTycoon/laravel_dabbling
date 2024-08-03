<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumeralsTrainingController extends Controller
{
    public function index()
    {       
        return view('numerals', ['name' => 'Finn'])->with('occupation', 'Astronaut');
    }


    public function start_training()
    {     

        $fdf = 5;
        dd($fdf);
    }
}
