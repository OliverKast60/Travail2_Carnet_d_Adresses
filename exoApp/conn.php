<?php
$conn = mysqli_connect("localhost","root","","contact");
$dbh = mysqli_connect("localhost","root","","contact");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Impossible de se connecter à la base des données!: " . mysqli_connect_error();
  }
