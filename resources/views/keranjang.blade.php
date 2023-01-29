@extends('layouts.dashboard')
{{-- @section('button')
<a href="{{ route('layanan.create') }}" class="btn btn-primary">Bayar semua</a>
@endsection --}}
@section('isi')
@if (empty($datas))
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Mohon isi data lengkap anda!</h5>

      <!-- Floating Labels Form -->
      <form method="POST" action="{{ route('validation') }}" class="row g-3" enctype="multipart/form-data" >
        @csrf
        <div class="col-md-12">
          <div class="form-floating">
            <input type="number" class="form-control" name="nik" id="floatingName" placeholder="Your Name">
            <label for="floatingName">Nik</label>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-floating">
            <input type="number" class="form-control" name="no_hp" id="floatingEmail" placeholder="Your Email">
            <label for="floatingEmail">No hp</label>
          </div>
        </div>
      
        <div class="col-12">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Address" name="alamat" id="floatingTextarea" style="height: 100px;"></textarea>
            <label for="floatingTextarea">Address</label>
          </div>
        </div>
        
       
           <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
            <div class="col-sm-10">
                <label for="inputNumber" class="col-sm-2 col-form-label">Masukan foto</label>
              <input class="form-control" name="image" type="file"  id="image" >
              <img id="preview-image-before-upload" src="" alt="" style="width: 250px" class="mt-3" />
            </div>
         
            
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End floating Labels Form -->

    </div>
  </div>
    
@else
@if (!empty($cek))
  

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Keranjang anda</h5>
     
      <!-- Active Table -->
      <table class="table table-borderless text-center">
        <thead class="text-center">
          <tr>
            <th scope="col">Jenis layanan</th>
            <th scope="col">Nama layanan</th>            
            <th scope="col">Waktu</th>
            <th scope="col">jumlah</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cart as $key )
            
          
          <tr>
            
            <td>{{ $key->layanan->name }}</td>
            <td>{{ $key->name }}</td>
            <td>{{ $key->waktu }}</td>
            <td>{{ $key->jumlah }}</td>
            <td>
              @if ( $key->status == 0 )
              <span class="card text-bg-danger p-1 text-white text-center">Belum di bayar</span>
              @else
                Sudah di bayar
              @endif
            </td>
            <td>
              <form action="{{ url('hapus/'.$key->id) }}" method="POST" >
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="nomor" value="{{ $key->jumlah  }}">
                <input type="hidden" name="layananid" value="{{ $key->id  }}">
                <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                
            </form>
            </td>
          </tr>
          @endforeach
        
        </tbody>
      </table>
      <!-- End Tables without borders -->
      @empty($cek)
        @else
        <a href="{{ route('pembayaran',Auth::id()) }}" class="btn btn-primary position-relative  ">Bayar semua </a>
      @endempty
      
    </div>
  </div>
  @else
    <span class="text-center">Keranjang anda kosong</span>
    
  @endif
@endif
@endsection
