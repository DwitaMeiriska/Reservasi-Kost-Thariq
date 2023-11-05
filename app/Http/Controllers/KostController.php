<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KostController extends Controller
{
    public function index(){
        return view('kamar.tipekamara');
    }
}
