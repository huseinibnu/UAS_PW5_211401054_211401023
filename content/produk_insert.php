<?php
if (!defined('INDEX')) die("");

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipefile = $_FILES['foto']['type'];
$ukuranfile = $_FILES['foto']['size'];

$error = "";
if ($foto == "") {
    $query = mysqli_query($con, "INSERT INTO produk SET nama_produk ='$_POST[nama]',
    link = '$_POST[link]',
    keterangan = '$_POST[keterangan]'");
} else {
    if ($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png") {
        $error = "Tipe File Tidak Didukung!";
    } else if ($ukuranfile >= 1000000) {
        echo $ukuranfile;
        $error = 'Ukuran file terlalu besar (lebih dari 1MB)!';
    } else {
        move_uploaded_file($lokasi, "images/" . $foto);
        $query = mysqli_query($con, "INSERT INTO produk SET
        foto = '$foto',
        nama_produk = '$_POST[nama]',
        link = '$_POST[link]',
        keterangan = '$_POST[keterangan]'");
    }
}
if ($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='2;url=?hal=produk_tambah'>";
} else if ($query) {
    echo 'Data berhasil di simpan';
    echo "<meta http-equiv='refresh' content='1;url=?hal=produk'>";
} else {
    echo 'Tidak dapat menyimpan data!<br/>';
    echo mysqli_error($con);
}