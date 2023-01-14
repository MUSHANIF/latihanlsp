<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\validation;
use App\Models\kursi;
use App\Models\cart;
use App\Models\layanan;
use App\Models\jnslayanan;
Use Alert;
use Illuminate\Support\Facades\DB;
use Redirect;
use Carbon\Carbon;
use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
use Illuminate\Http\Request;    
use Auth;
class TransaksiController extends Controller
{
    //Status = 0 adalah belum melakukan pembayaran
     //Status = 1 adalah sudah melakukan pembayaran
    //status = 2 adalah motor sudah di kembalikan
    //status = 3  adalah motor yang terlambat di kembalikan
    public function keranjang(Request $request , $id)
    {
        $cek =  cart::where('userid', $id)->where('status', 0)->first();
       $cart = layanan::with(['carts', 'layanan'])
       ->join('carts', 'carts.layananid', '=', 'layanans.id')
       ->where('carts.userid',Auth::id()) 
       ->where('carts.status', 0) 
       ->get();
        
        $datas = validation::where('userid',  auth()->user()->id)->first();
    
        return view('keranjang',compact('datas','cart','cek'));
       
    }
    public function tambah(Request $request , $id)
    {
        $data = cart::where('userid',$id)->where('layananid',$request->layananid )->where('status',0)->first();
        if( $data){
            toastr()->error('sudah ada dikeranjang anda!', 'gagal');
            return Redirect::back();
        }else{
            $model = new cart;
            $model->userid = $request->userid;
            $model->jnsid = $request->jnsid;
            $model->layananid = $request->layananid;
            $model->waktu = $request->waktu;
            $model->jumlah = $request->nomor;
            
            
            $model->save(); 
        }

      
        $kursi = kursi::where('status', 1)->first();
        $datas = kursi::where('layananid', $request->layananid )->update(['nomor' => $kursi->nomor - $request->nomor]);
        
        toastr()->success('Berhasil di tambah ke keranjang anda!', 'Sukses');
        return redirect()->route('keranjang', Auth::id());
       
    }
    public function hapus(Request $request, $id)
    {
        //error
    //     $prod = kursi::where('status',  1 )->first();
    //     kursi::where('layananid',$request->layananid)->update([
    //        'nomor' => $prod->nomor + $request->nomor,
         
    //    ]);
        $hapus = cart::find($id);
        $hapus->delete();
       
       
        toastr()->info('Berhasil di hapus!', 'Sukses');
        return redirect()->route('keranjang', Auth::id());
    }
    public function pembayaran($id)
    {
        $layanan =  cart::with(['user','cart'])->where('userid', $id)->where('status', 0)->get();
        $ORG =  cart::where('userid', $id)->where('status', 0)->first();
        
        $orang = $ORG->jumlah;
        $layanan2 =  layanan::with([
            'carts'])
        ->join('carts', 'carts.layananid', '=', 'layanans.id')
        ->where('carts.userid',Auth::id()) 
        ->get();
        $jmlh =  cart::with(['user','cart'])->where('userid', $id)->where('status', 0)->count();
        $total =  layanan::with([
            'carts'])
        ->join('carts', 'carts.layananid', '=', 'layanans.id')
        ->where('carts.userid',Auth::id()) 
        ->where('carts.status', 0) 
        ->sum('harga')   
        ;
       return view('pembayaran',compact('layanan','jmlh','total','layanan2','orang'));
    }
    public function bayar(Request $request,$id){
         $total =   layanan::with([
            'carts'])
        ->join('carts', 'carts.layananid', '=', 'layanans.id')
        ->where('carts.userid',Auth::id()) 
        ->where('carts.status', 0) 
        ->sum('harga')   
        ;
        $data =   layanan::with([
            'carts'])
        ->join('carts', 'carts.layananid', '=', 'layanans.id')
        ->where('carts.userid',Auth::id())
        ->where('carts.status', 0) 
        ;
        $kursi = kursi::where('status', 1)->first();
        $jumlah = $data->sum('harga');
        $stok = $kursi->nomor;
        if($request->total >= $jumlah){
            
            
            $cart = layanan::with([
                'carts'])
            ->join('carts', 'carts.layananid', '=', 'layanans.id')
            ->where('carts.userid',Auth::id()) 
            ->update(['layanans.stok' => $stok ,'carts.status' => 1]);
        
            $model = new transaksi;
            $model->userid = $request->userid;
            $model->layananid = $request->layananid;
            $model->waktu = $request->waktu;
            $model->metode_pembayaran = $request->metode_pembayaran;
            $model->bayar = $request->total;
            $model->jumlah = $request->jumlah;
            $model->total = $total;
            $model->kembalian = $request->total - $jumlah;
            $model->save();
            Alert::success('Pembayaran anda berhasil', 'Success');
            alert()->success('Pembayaran anda berhasil', 'Success');
            
            return redirect()->route('keranjang', Auth::id());
        }else{  
            $layanan =  cart::with(['user','cart'])->where('userid', $id)->where('status', 0)->get();
        $ORG =  cart::where('userid', $id)->where('status', 0)->first();
        
        $orang = $ORG->jumlah;
        $layanan2 =  layanan::with([
            'carts'])
        ->join('carts', 'carts.layananid', '=', 'layanans.id')
        ->where('carts.userid',Auth::id()) 
        ->get();
        $jmlh =  cart::with(['user','cart'])->where('userid', $id)->where('status', 0)->count();
        $total =  layanan::with([
            'carts'])
        ->join('carts', 'carts.layananid', '=', 'layanans.id')
        ->where('carts.userid',Auth::id()) 
        ->where('carts.status', 0) 
        ->sum('harga')   
        ;
        Alert::error('Duit anda kurang!', 'Gagal!');

        return view('pembayaran',compact('layanan','jmlh','total','layanan2','orang'));
        }

    }
   
   
    
}
