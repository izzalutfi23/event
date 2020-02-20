<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Macara;
use App\Mpeserta;

class DashboardController extends Controller
{
    public function index(){
    	$acara = Macara::all();
    	$peserta = Mpeserta::all();

    	$tacara = $acara->count();
    	$tpeserta = $peserta->count();

    	$data = array(
    		'acara' => $tacara,
    		'peserta' => $tpeserta
    	);
    	return view('admin/dashboard', $data);
    }
}
