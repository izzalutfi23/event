<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Macara;

class Utamacontroller extends Controller
{
    public function index(){
    	$acara = Macara::all();

    	return view('utama/home', ['acara' => $acara]);
    }
}
