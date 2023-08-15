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
 <h1><a href="#"><img style="width: 150px; height: 50px;margin-left: 5px;" src="{{ asset('images/logo.jpg') }}" alt="logo" />
 </a></h1>
</div>
  <div class="container-fluid">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link active" href="{{ route('all') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('create') }}">New Request</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('all') }}">Requests</a>
      </li>


    </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
      </div>


</nav>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
    </div>

    @yield('contents')

    <!-- Content Row -->


  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->





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
