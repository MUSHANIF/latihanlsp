@extends('layouts.dashboard')
@section('antena')
<h1>Jenis layanan</h1>
<nav>
  
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/jns">Jenis layanan</a></li>
    <li class="breadcrumb-item active">Create</li>
  </ol>
@endsection
@section('isi')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Form tambah jenis layanan</h5>      
      <form action="{{ route('jns.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="inputNanme4">
        </div>              
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>

    </div>
  </div>
@endsection