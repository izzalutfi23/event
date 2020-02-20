<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mpeserta;

class Doorprize extends Controller
{
    public function index(){
    	$peserta = Mpeserta::all();
    	return view('doorprize/home', ['peserta' => $peserta]);
    }
    public function pemenang(Request $request){
    	$pemenang = Mpeserta::all()->random();
    	return view('doorprize/pemenang', ['pemenang' => $pemenang]);
    }
}
