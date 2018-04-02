<?php
include("koneksi.php");

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$notelp=$_POST['notelp'];

echo "$nim $nama $jk $notelp";
$query = mysql_query("update mhs set nim='$nim', nama='$nama', jk='$jk', notelp='$notelp' where nim='$nim'") or die(mysql_error());
if ($query) {
    header('location:tampil_mhs.php?message=updated');
}