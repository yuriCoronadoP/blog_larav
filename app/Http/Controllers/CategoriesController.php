<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        echo 'Hola Mundo';
        dd(CategoriesController::class);
    }
}
