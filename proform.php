<?php

include 'database.php';

?>

<!DOCTYPE html>
<html lang = "en">
<head>
 <title>User form</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="homepage.php">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
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
<div class="jumbotron" style="margin-bottom:0">
<h1>User Details</h1>
<hr>
</div>

<?php

// if($result){
//   echo "<b><h3 align='center'>Thank you $name</h3></b>";
//   echo "<br>";
//   echo "<h5 align='center'>You may proceed for tests</h5>";
//   echo "<hr>";
// }else{
//  die("<p align='center'><b>Complete information required!!!</b><p>");
// }
?>


<div class="container">
  <div class="col-sm-6">
    <form action="proform.php" method="post">
      <!-- <h1><b><font color="#5D6D7E">User Login</font></b></h1> -->
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Enter name" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group">
        <label for="contact">Contact:</label>
        <input type="number" name="contact" class="form-control" placeholder="Enter contact" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group">
        <label for="weaknesses">Weaknesses:</label>
        <input type="text" name="weaknesses" class="form-control" placeholder="Enter your weaknesses" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group">
        <label for="strengths">Strengths:</label>
        <input type="text" name="strengths" class="form-control" placeholder="Enter your strengths" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group">
        <label for="marks10">Marks in 10th:</label>
        <input type="number" name="marks10" class="form-control" placeholder="Enter your marks in %age" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>

      </div>

      <div class="form-group">
        <label for="marks12">Marks in 12th:</label>
        <input type="number" name="marks12" class="form-control" placeholder="Enter your marks in %age" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" class="form-control" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group">
        <label for="gender">Gender:</label><br>
        <label><input type="radio" name="gender">Male</label><br>
        <label><input type="radio" name="gender">Female</label>
      </div>

        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </form>
    <br>
  </div>
</div>

</body>
</html
