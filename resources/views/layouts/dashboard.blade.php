<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Mumus</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/boxicons.min.css') }}" />
  <script src="https://cdn.statically.io/gh/devanka761/notipin/v1.24.49/all.js"></script>
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style3.css') }}" rel="stylesheet">


</head>

<body>
  <div class="topbar transition">
    <div class="bars">
      <button type="button" class="btn transition" id="sidebar-toggle">
        <i class="fa fa-bars"></i>
      </button>
    </div>

    <div class="menu">
      <ul>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/assets/images/profile/{{ Auth::user()->validationn->image }}" alt="" />
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            
            
            <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out-alt size-icon-1"></i> <span>Log out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                        </form>
          </ul>
        </li>
      </ul>
    </div>
    <div class="search">
      @yield('search')
    </div>
  </div>
  <div class="sidebar transition overlay-scrollbars">
    <div class="sidebar-content">
      <div id="sidebar">
        <div class="logo">
          <h2 class="mb-0">Travel</h2>
        </div>
@can('superadmin')
<ul class="side-menu">
  {{-- <li>
    <a href="/dashboardsuperamdin" class="active"> <i class="bx bxs-dashboard icon"></i> Dashboard </a>
  </li> --}}

  <li>
    <a href="/dataadmin">
      <i class="bx bx-columns icon"></i>
      Admin
    </a>
  </li>
  <li>
    <a href="/datauser">
      <i class="bx bx-columns icon"></i>
      User
    </a>
  </li>
 
</ul>
@elsecan('admin')
<ul class="side-menu">
  <li>
    <a href="index.html" class="active"> <i class="bx bxs-dashboard icon"></i> Dashboard </a>
  </li>

  <li>
    <a href="/jns">
      <i class="bx bx-collection icon"></i>
      Jenis layanan 
    </a>
  </li>
  <li>
    <a href="/layanan">
      <i class="bx bx-folder icon"></i>
      Paket Travel
    </a>
  </li>
  <li>
    <a href="/kursi">
      <i class="bx bx-menu icon"></i>
      Stok
    </a>
  </li>
  <li>
    <a href="/detailgambar">
      <i class="bx bx-movie-play icon"></i>
      Galeri
    </a>
  </li>
  <li>
    <a href="/laporan">
      <i class="bx bx-columns icon"></i>
      Laporan
    </a>
  </li>
</ul>
@elsecan('user')
<ul class="side-menu">


  <li>
    <a href="{{ route('keranjang',Auth::id()) }}">
      <i class="bx bx-columns icon"></i>
      Keranjang
    </a>
  </li>
  <li>
    <a href="/">
      <i class="bx bx-columns icon"></i>
      Kembali ke menu
    </a>
  </li>
  <li>
    <a href="{{ route('berhasil',Auth::id()) }}">
      <i class="bx bx-columns icon"></i>
      Tiket yang anda pesan
    </a>
  </li>
</ul>
@endcan
       
      </div>
    </div>
  </div>
  <div class="sidebar-overlay"></div>
      <section class="section dashboard">
  <div class="content-start transition">
    <div class="container-fluid dashboard">
      <div class="row">
        <div class="col mb-4">
          @yield('button')
        </div>
      </div>
      <div class="row">

				<!--Start Carousel-->
				
      
      @yield('isi')
           
          </div>
        
    </div>
  
  </div>
      </section>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="jquery/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#sidebar-toggle, .sidebar-overlay").click(function () {
        $(".sidebar").toggleClass("sidebar-show");
        $(".sidebar-overlay").toggleClass("d-block");
      });
    });
    const allDropdown = document.querySelectorAll("#sidebar .side-dropdown");
    const sidebar = document.getElementById("sidebar");
  </script>
</body>





 
  <script type="text/javascript">
    $(document).ready(function (e) {
       $("#image").change(function () {
          let reader = new FileReader();

          reader.onload = (e) => {
             $("#preview-image-before-upload").attr("src", e.target.result);
          };

          reader.readAsDataURL(this.files[0]);
       });
    });
 </script>
  <!-- Vendor JS Files -->
  @if (Session::has('success'))
  <script>
 
    Notipin.Alert({
        msg: "{{ Session::get('success') }}", 
        yes: "OKE",
        
        type: "NORMAL",
        mode: "DARK",
        })
        
  
    
</script>
  @endif
  <script>
    @foreach($errors->all() as $error)
    Notipin.Alert({
        msg: "{{ $error }}", 
        yes: "OKE",
        
        type: "NORMAL",
        mode: "DARK",
        })
        
    @endforeach
    
</script>
  
 

  
  

</body>

</html>