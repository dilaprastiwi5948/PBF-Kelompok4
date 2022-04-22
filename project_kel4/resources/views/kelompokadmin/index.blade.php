@extends('layouts.app')
@section('content') 
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Kelompok Arisan Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="css/owl.css">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="admin"><h2>Arisan Online<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="admin">HOME</a>
              </li> 
              <div class="dropdown">
                <button class="btn btn-light dropdown-toggle text-dark active" type="button" data-toggle="dropdown">ARISAN
                <span class="caret"></span></button>
                <ul class="dropdown-menu text-center">
                  <li><a class="nav-link active" href="kelompokadmin">Kelompok Arisan</a></li>
                  <li><a class="nav-link " href="#"><p>Permintaan Arisan</p></a></li>
                </ul>
              </div>
              <li class="nav-item">
                <a class="nav-link" href="#">PROFIL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="post-details.html">Post Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>


    <div id="angotakelompok">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-3"></div>
                <div class="col-md-7 col-sm-9 " >
                    <h2>-</h2>
                    <h2>-</h2>
                    <h4>-</h4>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-4 p-5 bg-primary text-white rounded text-center">
      <h1>Anggota Kelompok 1</h1>
    </div>
    </body>

    @if ($message = Session::get('success')) 
<div class="alert alert-success"> 
    <p>{{ $message }}</p> 
</div> 
@endif
<table class="table table-striped thead-light "> 
    <tr> 
        <th>ID </th> 
        <th>Nama</th> 
        <th>Status Menang Undian</th> 
        <th>Bulan</th> 
        <th width="280px">Action</th> 
    </tr>

    @foreach ($kelompokadmin as $KelompokAdmin) 
    <tr> 
        <td>{{ $KelompokAdmin->id }}</td> 
        <td>{{ $KelompokAdmin->nama }}</td> 
        <td>{{ $KelompokAdmin->status }}</td> 
        <td>{{ $KelompokAdmin->bulan }}</td>  
        <td> <br>
        <form action="{{ route('kelompokadmin.destroy',$KelompokAdmin->id) }}" method="POST"> 
            <a class="btn btn-primary" href="{{ route('kelompokadmin.edit',$KelompokAdmin->id) }}">Edit</a> 
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button> 
        </form> 
    </td> 
</tr>
@endforeach 
</table> 
<div class="float-right my-2"> 
    <a class="btn btn-success" href="{{ route('kelompokadmin.create') }}"> Input Barang</a> 
</div> 
</div> 
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2020 Stand Blog Co.
                    
                 | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="js/custom.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/accordions.js"></script>

  </body>
  @endsection