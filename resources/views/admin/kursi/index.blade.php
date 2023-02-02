@extends('layouts.dashboard')
@section('antena')
<h1>kursi</h1>
<nav>
  
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/jns">kursi</a></li>
    <li class="breadcrumb-item active">Home</li>
  </ol>
@endsection
@section('search')
<form action="{{ url('kursi') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
    <div class="input-group-append">
      <button type="submit" class="btn" style="background-color: #1840a9; color: white" type="button">
        <i class="fa fa-sign-out-alt size-icon-1"></i>
        Cari
      </button>
    </div>
  </div>
</form>
@endsection
@section('button')
<a href="{{ route('kursi.create') }}" class="btn btn-primary">Tambah</a>
@endsection
@section('isi')
<div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Stok</h5>

      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            
            <th scope="col">Nama layanan</th>
            <th scope="col">Stok</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
       
          </tr>
        </thead>
        @foreach ($datas as $key)
          
        
        <tbody>
          <tr>
            <th scope="row">{{ $key->kur->name }}</th>
            <td>{{ $key->nomor }}</td>
            <td>
              @if ($key->status == 1)
                Tersedia
              @else
                Tidak tersedia
              @endif  
            </td>
            <td> 
              <a href="{{ route('kursi.edit',$key->id) }}" class="btn btn-success"><i class="bi bi-pencil-fill"></i></a>
            
              <form action="{{ url('kursi/'.$key->id) }}" method="POST" >
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