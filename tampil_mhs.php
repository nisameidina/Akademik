<?php include("koneksi.php"); 
if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
    echo '<h3>Berhasil hapus data!</h3>';
}
elseif (!empty($_GET['message']) && $_GET['message'] == 'updated') {
    echo '<h3>Berhasil update data!</h3>';
}
?>

<html>
    <head>
         <title></title>
         <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Data Mahasiswa</h1>
        <a href="index.php">+ Tambah Data</a>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                 <tr>
                    <td class="head">No.</td>
                    <td class="head">Nim</td>
                    <td class="head">Nama</td>
                    <td class="head">Jenis Kelamin</td>
                    <td class="head">No Telp</td>
                    <td class="head">Opsi</td>
                </tr>
            </thead>
            <tbody>
            <?php
            $query = mysql_query("select * from mhs order by nim ASC ");
            $no = 1;
            while ($data = mysql_fetch_array($query)) {
            ?>
                <tr>
                    <td class="satu"><?php echo $no; ?></td>
                    <td class="dua"><?php echo $data['nim']; ?></td>
                    <td class="satu"><?php echo $data['nama']; ?></td>
                    <td class="dua"><?php echo $data['jk']; ?></td>
                    <td class="satu"><?php echo $data['notelp']; ?></td>
                    <td class="dua">
                        <a href="edit_mhs.php?nim=<?php echo $data['nim']; ?>">Update</a>
                        <a href="hapus_mhs.php?nim=<?php echo $data['nim']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php
            $no++;
            }
            ?>
            </tbody>
        </table>
    </body>
</html>