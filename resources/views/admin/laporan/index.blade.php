@extends('layouts.dashboard')
@section('button')
<a href="/laporanexcel" class="btn btn-success">Download Excel</a>
<a href="/laporanpdf" class="btn btn-danger">Download Pdf</a>
@endsection
@section('isi')
<div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Laporan transaksi</h5>

      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nama pembeli</th>
            <th scope="col">Nama layanan</th>
            <th scope="col">Metode pembayaran</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Total bayar</th>
            <th scope="col">Action</th>
       
          </tr>
        </thead>
        @foreach ($datas as $key)
          
        
        <tbody>
          <tr>
            
            <th scope="row">{{ $key->transaksiuser->name }}</th>
            <td>{{ $key->transaksi->name }}</td>
            <td>{{ $key->metode_pembayaran }}</td>
            <td>{{ $key->jumlah }}</td>
            <td>Rp. {{number_format($key->bayar, 0, '', '.') }}</td>
            <td> 
              <a href="{{ route('jns.edit',$key->id) }}" class="btn btn-success"><i class="bi bi-pencil-fill"></i></a>
            
              <form action="{{ url('jns/'.$key->id) }}" method="POST" >
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                
            </form>
          </td>
          </tr>
         
        </tbody>
        @endforeach
      </table>
      

    </div>
  </div>
@endsection