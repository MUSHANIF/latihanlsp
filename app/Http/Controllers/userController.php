<?php

namespace App\Http\Controllers;
use App\Models\cart;
use App\Models\validation;
use App\Models\User;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function data(Request $request)
    {
        $cari = $request->cari;
        
        $tanggal = date("Y-m-d");   
        // $data1 = User::where('level', 1)->get();
        // $data2 = User::get(['id']);
        // $data  = validation::where('userid',$data2)->first();
        // $data2 = $data5->userid;
        // $data3 = $data1->id;
        // $data6 = $data2 === $data3;
        $data =  User::with([
            'validationn'])
            ->Join('validations', 'validations.userid', '=', 'users.id')
            ->where('validations.userid','users.id')
            ->get();
        $datas =  DB::table('users')->rightJoin('validations',  'users.id' , '=', 'validations.userid')
              ->where('users.name','like',"%".$cari."%")
            ->where('users.level',1)
            
            ->get();
        return view('superadmin.user.index', compact('datas','data'));
    }
    public function delete($id){
        $hapus = User::find($id);
        $hapus->delete();
        
        return redirect('datauser')->with('success','data berhasil di hapus');
    }
}
