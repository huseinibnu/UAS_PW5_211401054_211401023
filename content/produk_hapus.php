<?php
if (!defined('INDEX')) die("");

if (file_exists("images/$_GET[foto]"))
    unlink("images/$_GET[foto]");

$query = mysqli_query($con, "DELETE FROM produk WHERE id_produk ='$_GET[id]'");

if ($query) {
    echo 'Data berhasil dihapus!';
    echo "<meta http-equiv='refresh' content='1;url=?hal=produk'>";
} else {
    echo 'Tidak dapat menghapus data!<br/>';
    echo mysqli_error($con);
}