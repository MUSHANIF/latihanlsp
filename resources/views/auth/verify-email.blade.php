
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Verifikas Email anda | Sitravel</title>
  

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



  
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <main>
    <div class="container">

      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>{{ __('A new verification link has been sent to the email address you provided during registration.') }}</h2>
       
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
               
            <button type="submit" class="btn btn-success">
                {{ __('Kirim ulang email') }}
            </button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn-danger mt-5">
                {{ __('Log Out') }}
            </button>
        </form>
       
      </section>

    </div>
  </main>  
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>
