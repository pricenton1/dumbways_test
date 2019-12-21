<?php 
	$koneksi = new mysqli ("localhost","root","","count");

  if (mysqli_connect_errno()) {
  	echo "Koneksi Database Gagal";
  }

  $id= $_GET['id'];
  $koneksi->query("UPDATE tb_caleg SET earned_vote = earned_vote + 1 WHERE id='$id'");

  header("location: 6.php");

 ?>