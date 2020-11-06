<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    public function VanGogh(){return view ('menu');}
    public function davinci(){return view ('menu', 'VanGogh');}
    public function picasso(){return view ('menu', 'VanGogh', 'davinci');}
    public function claude(){return view ('menu', 'VanGogh', 'davinci', 'picasso');}
    public function thomas(){return view ('menu', 'VanGogh', 'davinci', 'picasso', 'claude');}
}
