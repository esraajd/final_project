<!DOCTYPE html>
<html lang="en">
<head>
  <title>Almounkez Requests</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="p-5 text-white text-center" style="background-color: coral">
  <h1>How we can help you?</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div id="logo">
 <h1><a href="index.html"><img style="width: 150px; height: 50px;margin-left: 5px;" src="{{ asset('images/logo.jpg') }}" alt="logo" />
 </a></h1>
</div>
  <div class="container-fluid">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

    </ul>
    </div>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">My Account</a>
        <ul class="dropdown-menu shadow dropdown-menu-end" style="text-align: right">
        <li><a class="dropdown-item" href="register">Sign up</a>
        </li>
        <li><a class="dropdown-item" href="login">Sign in</a></li>
       </ul>
        </ul>
      </div>

</nav>

<section id="about" >

    <div class="container mt-5" data-aos="fade-up">
      <div class="row">


        <div class="col-lg-7 col-md-6">
            <div class="content" data-aos="fade-left" data-aos-delay="100">
                <h2 style="color: rgb(240, 117, 30);margin-top:80px">Request any think</h2>
                <h5 style="color:rgb(243, 176, 129)">in any time</h5>

              <h3>
                We are here to receive your requests through our website in all fields

              </h3>
            </div>
          </div>
        <div class="col-lg-5 col-md-6">
          <div class="about-img" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('images/pic2.jpg') }}" alt="description of myimage" style="height: 350px;">
          </div>
        </div>



      </div>
    </div>

  </section>




  <footer class="sticky-footer" style="background-color: bisque;" id="footer">
    <div class="container my-auto">
        <div class="copyright text-center">
            &copy;2023 All Rights Reserved By <strong>Innovative Systems</strong>
          <div class="credits">

            Designed by Esraa JD  <a href=""></a>
          </div>
        </div>

    </div>
  </footer>
</body>
</html>
