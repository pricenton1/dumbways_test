<?php
  $koneksi = new mysqli ("localhost","root","","count");

  if (mysqli_connect_errno()) {
  	echo "Koneksi Database Gagal";
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quick Count</title>
</head>

<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
	}

	.container{
		width: 40%;
		padding: 20px;
		background-color: #fff;
		margin:20px auto;
	
	}
	.container .table{
		width: 100%
		padding:0;
		margin: 0;
	
	}
	.table tr{
		width: 50%;
		border: solid 1px;
	}


</style>

<body>

	<div class="container">
		<?php 
			$ambil = $koneksi->query("SELECT * FROM tb_caleg");
			while($pecah = $ambil->fetch_assoc()){
			
		 ?>

		 <table class="table" style="width: 100%;height: 80px;">
		 	<form method="post">
		 		
		 	<tr>
		 		<td style="border: solid 1px;width: 50%;"><?php echo $pecah['name']; ?></td>
		 		<td rowspan="2" style="border: solid 1px;text-align: center;"><a href="tambah.php?id=<?php echo $pecah['id']; ?>" style="background: #f00;color: #fff;text-decoration: none;">TOMBOL TAMBAH</a></td>
		 		
		 	</tr>
		 	

		 	<tr>
		 		<td style="border: solid 1px;width: 50%;">Perolehan Suara :<?php echo $pecah['earned_vote']; ?></td>


		 	</tr>
		<?php } ?>
		 	
		 </table>


		</form>
	</div>


</body>
</html>