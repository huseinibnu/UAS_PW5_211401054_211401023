<?php 
  if(!defined('INDEX')) die ("");

  $foto = $_FILES['foto']['name'];
  $lokasi = $_FILES['foto']['tmp_name'];
  $tipefile = $_FILES['foto']['type'];
  $ukuranfile = $_FILES['foto']['size'];

  $error = "";
  if($foto == "") {
    $query = mysqli_query($con, "UPDATE produk SET 
      nama_produk = '$_POST[nama]',
      link = '$_POST[link]',
      keterangan = '$_POST[keterangan]' WHERE id_produk = '$_POST[id]'");
  }
  else {
    if($tipefile != "image/jpeg" AND $tipefile != "image/jpg" AND $tipefile != "image/png") {
      $error = "Tipe file tidak didukung!";
    }
    else if ($ukuranfile > 1000000) {
      echo $ukuranfile;
      $error = 'Ukuran file terlalu besar (lebih dari 1MB)!';
    }
    else {
      $query = mysqli_query($con, "SELECT * FROM produk WHERE id_produk = '$_POST[id]'");
      $data = mysqli_fetch_array($query);
      if (file_exists("images/$data[foto]"))
        unlink("images/$data[foto]");
      move_uploaded_file($lokasi, "images/".$foto);
      $query = mysqli_query($con, "UPDATE produk SET 
        foto = '$foto',
        nama_produk = '$_POST[nama]',
        link = '$_POST[link]',
        keterangan = '$_POST[keterangan]' WHERE id_produk = '$_POST[id]'");
    }
  }

  if ($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='2;url=?hal=produk_edit&id=$_POST[id]'>";
  }
  else if ($query) {
    echo "Data berhasil disimpan!";
    echo "<meta http-equiv='refresh' content='2;url=?hal=produk'>";
  }
  else {
    echo 'Tidak dapat menyimpan data!<br/>';
    echo mysqli_error($con);
  }