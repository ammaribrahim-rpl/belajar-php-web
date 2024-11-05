<?php

require 'functions.php';

$nisn = $_GET['nisn'];
$query = "DELETE FROM students WHERE nisn = '$nisn'";
$query2 = "DELETE FROM students_subjects WHERE nisn = '$nisn'";
$result = mysqli_query($connection, $query);
mysqli_query($connection, $query);
mysqli_query($connection, $query2);
header("Location: index.php");