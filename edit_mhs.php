<?php
include('koneksi.php');
?>
 
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>Form Edit Data</h1>
 		<?php
		include ("koneksi.php");
		$nim = $_GET['nim'];
		$query = mysql_query("select * from mhs where nim='$nim'") or die(mysql_error());
		$data = mysql_fetch_array($query);
		?>
		<form action="update_mhs.php" method="POST">
		<input type="hidden" name="nim" value="<?php echo $nim; ?>" />
			<table align="left" border="1">
				<tr>
						<a href="tampil_mhs.php">Back</a> ||
    					<a href="tampil_mhs.php">Lihat Data</a>
				</tr>
				<tr class="satu">
					<td>Nim</td>
					<td>:</td>
					<td>
						<input type="text" name="nim" value="<?php echo $data['nim']; ?>">
					</td>
				</tr>
				<tr class="dua">
					<td>Nama</td>
					<td>:</td>
					<td>
						<input type="text" name="nama" value="<?php echo $data['nama']; ?>">
					</td>
				</tr>
				<tr class="satu">
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<input type="radio" name="jk" value="L">L
						<input type="radio" name="jk" value="P">P
					</td>
				</tr>
				<tr class="dua">
					<td>No Telp</td>
					<td>:</td>
					<td>
						<input type="text" name="notelp" value="<?php echo $data['notelp']; ?>">
					</td>
				</tr>
				<tr class="satu">
					<td colspan=3 align='center'>
						<input type=submit value=Update>
						<input type=reset value=Batal>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
