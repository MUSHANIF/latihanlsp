@extends('layouts.dashboard')
@section('antena')
<h1>User</h1>
<nav>
  
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/dataUser">User</a></li>
    <li class="breadcrumb-item active">Home</li>
  </ol>
@endsection
@section('search')
<div class="search-bar">
    <form action="{{ url('datauser') }}" method="GET" class="search-form d-flex align-items-center">
      <input type="text" name="cari" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->
@endsection

@section('isi')
<div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">User yang sudah validasi</h5>

      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">No hp</th>
            <th scope="col">Nik</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Level</th>
            <th scope="col">Action</th>
       
          </tr>
        </thead>
        @foreach ($datas as $key)
          
        
        <tbody>
          <tr>
            <td id="td"><img src="/assets/images/profile/{{ $key->image }}" style="height: 100px; width: 150px" /></td>
            <th scope="row">{{ $key->name }}</th>
            <td scope="row">{{ $key->no_hp }}</td>
            <td scope="row">{{ $key->nik }}</td>
            <td scope="row">{{ $key->email }}</td>
            <td scope="row">{{ $key->alamat }}</td>
            <th scope="row">User</th>
            <td> 
                  
            
              <form action="{{ url('hapususer/'.$key->userid) }}" method="POST" >
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
