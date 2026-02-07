
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
   <!-- awal navbar -->
    
    <nav class="navbar bg-primary navbar-expand-lg bg-body-primary  shadow" data-bs-theme="dark">
        <div class="container">
                <a href="../index.php" class="navbar-brand fw-bold">Aduin</a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="" class="nav-link">Fitur</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Tentang</a></li>
                        <li class="nav-item"><a href="" class="btn btn-light">Masuk</a></li>
                    </ul>
                </div>
        </div>
    </nav>
  
    <!-- akhir navbar -->

    <div class="container vh-custom d-flex justify-content-center align-items-center mt-5 ">
    <section class="">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="aduin.png.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="cek_login.php" method="POST">
         

        
          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input name="email" type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">email</label>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Sandi</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
          

          <div class="text-center text-lg-start mt-4 pt-2">
           <input type="submit" class="btn btn-primary" value="login" name="" id="">
          </div>

        </form>
      </div>
    </div>
  </div>
    

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
  </div>
</section>

</body>
</html>