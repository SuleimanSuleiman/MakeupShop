<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shope extends Controller
{
    public function index()
    {
        return "this is shop <a href='shop/makeup'>Makeup</a>";
    }
}
