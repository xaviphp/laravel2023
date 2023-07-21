<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeportesController extends Controller
{
    public function index()
    {
        return view('index');
    }
}