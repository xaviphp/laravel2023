<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;

class EjemploController extends Controller
{
    public function inicio(){
        return "Estamos en la home gracias al EjemploController";
    }
}
