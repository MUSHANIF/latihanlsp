@extends('layouts.dashboard')
@section('antena')
<h1>layanan</h1>
<nav>
  
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/layanan">layanan</a></li>
    <li class="breadcrumb-item active">Home</li>
  </ol>
@endsection
@section('search')
<div class="search-bar">
    <form action="{{ url('layanan') }}" method="GET" class="search-form d-flex align-items-center" >
      <input type="text" name="cari" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->
@endsection
@section('button')
<a href="{{ route('layanan.create') }}" class="btn btn-primary">Tambah</a>
@endsection
@section('isi')
<div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">layanan</h5>

      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            
            <th scope="col">image</th>
            <th scope="col">Jenis</th>
            <th scope="col">Name</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Status</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Action</th>
       
          </tr>
        </thead>
      
          
        
        <tbody>
          @if ($datas->count())                  
          @foreach ($datas as $key)
          <tr>
            <td id="td"><img src="/assets/images/layanan/{{ $key->image }}" style="height: 100px; width: 150px" /></td>
            <td scope="row">{{ $key->layanan->name }}</td>
            <td scope="row">{{ $key->name }}</td>
            <td scope="row">{{ $key->harga }}</td>
            <td scope="row">{{ $key->stok }}</td>
            <td scope="row">{{ $key->status }}</td>
            <td scope="row">{{ $key->deskripsi }}</td>
            <td> 
              <a href="{{ route('layanan.edit',$key->id) }}" class="btn btn-success"><i class="bi bi-pencil-fill"></i></a>
            
              <form action="{{ url('layanan/'.$key->id) }}" method="POST" >
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                
            </form>
          </td>
          </tr>
          @endforeach
          @else
            <td colspan="8">No products found</td>
          @endif
        </tbody>
       
      </table>
      

    </div>
  </div>
@endsection