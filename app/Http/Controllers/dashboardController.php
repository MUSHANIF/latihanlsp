<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(Request $request) {
        return view('layouts.dashboard',[
                
            // 'user' => User::where('level','=', 1)->count(),
            // 'admin' => User::where('level', '=', 2)->count(),
            // 'motor' => motor::where('status', '=', 'Ada di gudang')->count(),
            // 'motorpake' => motor::where('status', '=', 'Sedang di pakai')->count(),
            // 'jenis' => jnsmotor::where('name', '=', 'matic')->count(),
            // 'keranjang' => cart::where('userid', '=', auth()->user()->id)->where('status',0)->count(),
        
        ]);
    }
}