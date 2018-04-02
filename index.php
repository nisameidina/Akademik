<?php
include ("koneksi.php");
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
echo '<h3>Berhasil menambah data!</h3>';
}
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>Form Input Data</h1>
		<form action="simpan.php" method="POST">
			<table align="left" border="1">
				<tr>
					<a href="tampil_mhs.php">Lihat Data</a>
				</tr>
				<tr class="satu">
					<td>Nim</td>
					<td>:</td>
					<td>
						<input type="text" name="nim">
					</td>
				</tr>
				<tr class="dua">
					<td>Nama</td>
					<td>:</td>
					<td>
						<input type="text" name="nama">
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
						<input type="text" name="notelp">
					</td>
				</tr>
				<tr class="satu">
					<td colspan=3 align='center'>
						<input type=submit value=Simpan>
						<input type=reset value=Batal>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
