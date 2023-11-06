<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE from biodata where id='$id'");
header("location:read.php");
