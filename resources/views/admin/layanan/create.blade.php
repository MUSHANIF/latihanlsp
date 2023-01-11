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
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Name</label>
          <input type="text" name="jns" class="form-control" id="inputNanme4">
        </div>              
        <div class="col-12">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Select</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>

        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>

    </div>
  </div>
@endsection