<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class MainPageController extends Controller
{
    public function index(): View
    {
        
        return view('main_page', ['name' => 'Finn'])->with('occupation', 'Astronaut');
    }
}
