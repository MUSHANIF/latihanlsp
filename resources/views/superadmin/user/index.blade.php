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
    <form action="{{ url('dataUser') }}" method="GET" class="search-form d-flex align-items-center">
      <input type="text" name="cari" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->
@endsection
@section('button')
<a href="{{ route('dataUser.create') }}" class="btn btn-primary">Tambah</a>
@endsection
@section('isi')
<div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">User</h5>

      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Level</th>
            <th scope="col">Action</th>
       
          </tr>
        </thead>
        @foreach ($datas as $key)
          
        
        <tbody>
          <tr>
            <th scope="row">{{ $key->name }}</th>
            <td scope="row">{{ $key->email }}</td>
            <th scope="row">User</th>
            <td> 
                  <a href="{{ route('datauser.edit',$key->id) }}" class="btn btn-success"><i class="bi bi-pencil-fill"></i></a>
            
              <form action="{{ url('datauser/'.$key->id) }}" method="POST" >
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