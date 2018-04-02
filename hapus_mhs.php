<?php
include ("koneksi.php");

$nim = $_GET['nim'];
$query = mysql_query("delete from mhs where nim='$nim'") or die(mysql_error());
if ($query) {
    header('location:tampil_mhs.php?message=delete');
}
?>