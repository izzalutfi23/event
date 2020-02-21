<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Usercontroller extends Controller
{
    public function index(){
    	$admin = User::all();
    	return view('admin/admin', ['admin' => $admin]);
    }

    public function store(Request $request){
    	User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password)
    	]);

    	return redirect('/user')->with('status', 'Admin baru berhasil ditambahkan');
    }

    public function destroy(User $user){
    	User::destroy('id', $user->id);

    	return redirect('/user')->with('status', 'Admin berhasil dihapus');
    }
}
