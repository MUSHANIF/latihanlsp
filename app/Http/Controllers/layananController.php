<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\layanan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class layananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $datas =  layanan::where('name','like',"%".$cari."%")->get();
        return view('admin.layanan.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas =  DB::table('layanans')->get();
        return view('admin.layanan.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $model = new layanan;
      
        $model->name = $request->name;
        $validasi = Validator::make($data, [
            'name' => 'required|max:191|unique:layanans',
        ]);
        if ($validasi->fails()) {
            return redirect()->route('jns.create')->withInput()->withErrors($validasi);
        }
       
        $model->save();

        toastr()->success('Berhasil di buat!', 'Sukses');
        return redirect('/jns');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = layanan::find($id);
        return view('admin.layanan.ubah',compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = layanan::findOrFail($id);
        $data = $request->all();
    
      
        
        $model->name = $request->name;
       

        $validasi = Validator::make($data, [
            'name' => 'required|max:191|unique:layanans',
        ]);
        if ($validasi->fails()) {
            return redirect()->route('jns.edit', $id)->withInput()->withErrors($validasi);
        }
       
        $model->save();

        toastr()->success('Berhasil di ubah!', 'Sukses');
        return redirect('/jns');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = layanan::find($id);
        $hapus->delete();
        toastr()->info('Berhasil di hapus!', 'Sukses');
        return redirect('jns');
    }
}
