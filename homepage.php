<!DOCTYPE html>
<html lang="en">
<head>
  <title>homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style>

  .carousel-inner img {
    width: 100%;
    height: 100%;
  }


  .btn {
    color: white;
    width: 220px;
    height: 50px;
    align-items:center;
  }

  </style>
</head>
<body>
  <!-- <div class="jumbotron text-center" style="margin-bottom:0">
  <h1>i-View</h1>
  </div> -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="homepage.php">Logo</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="d.jpg" alt="personal details" width="1100" height="500">
      <div class="carousel-caption">
        <a href="proform.php" class="btn btn-info btn-lg" role="button">Personal Details</a>
        <br><br><br><br>
        <h5>This section is meant for entering your personal details. <br>This form covers your academic as well
           as non-academic performance.<br>This will help us to get to know you better. <br>Please enter your
           details carefully and print out your details.</h5>
          <br><br><br><br><br>
      </div>
    </div>
    <div class="carousel-item">
      <img src="e.jpg" alt="personality test" width="1100" height="500">
      <div class="carousel-caption">
        <a href="abcolortest.php" class="btn btn-info btn-lg" role="button">Personality Test</a>
        <br><br><br><br>
        <h5>
          Each of us has a different and unique personality; however, there are commonalities that we share.<br>
          True Colours is a personality test which is an attempt to identify various<br> personality styles and
          label them with colours i.e. Red, Green, Blue or Gold.<br>
          Read the instructions carefully and attempt the quiz and take a printout of your result.
        </h5>
        <br><br><br><br><br>
      </div>
    </div>
    <div class="carousel-item">
      <img src="c.jpg" alt="aptitude test" width="1100" height="500">
      <div class="carousel-caption">
        <a href="abapttest.php" class="btn btn-info btn-lg" role="button">Aptitude Test</a>
        <br><br><br><br>
        <h5>
          This aptitude test consists of 10 programming questions. <br>Feel free to use any language and
           compiler you’re comfortable with. <br>These are some basic coding questions which will test your
            coding skills. <br>All the best!
        </h5>
        <br><br><br><br><br>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>
