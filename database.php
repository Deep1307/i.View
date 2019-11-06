<?php

$connection=mysqli_connect('localhost', 'root', '', 'iviewlogin');

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  $weaknesses=$_POST['weaknesses'];
  $strengths=$_POST['strengths'];
  $marks10=$_POST['marks10'];
  $marks12=$_POST['marks12'];
  $dob=$_POST['dob'];
  $gender=$_POST['gender'];


  $query = "INSERT INTO users(name,contact,address,weaknesses,strengths,marks10,marks12,dob,gender) ";
  $query .= "VALUES ('$name', '$contact', '$address', '$weaknesses', '$strengths', '$marks10', '$marks12', '$dob', '$gender')";

  $result = mysqli_query($connection,$query);
  if (!$result) {
    die("Query Failed" . mysqli_error());
  }else{
    echo "<b><h3 align='center'>Thank you $name</h3></b>";
      echo "<br>";
      echo "<h5 align='center'>You may proceed for tests</h5>";
      echo "<hr>";
  }

}
?>
