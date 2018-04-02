<?php
include("koneksi.php");

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$notelp=$_POST['notelp'];

$query = mysql_query("insert into mhs values('$nim','$nama','$jk','$notelp')") or die(mysql_error());
echo "$nim $nama $jk $notelp";
 
if ($query) {
    header('location:index.php?message=success');
}