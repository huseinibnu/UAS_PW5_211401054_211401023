<?php
if (!defined('INDEX')) die("");

$halaman = array(
    "produk", "produk_tambah", "produk_insert", "produk_edit", "produk_update",
    "produk_hapus"
);
if (isset($_GET['hal']))
    $hal = $_GET['hal'];
else
    $hal = "dashboard";

foreach ($halaman as $h) {
    if ($hal == $h) {
        include 'content/' . $h . '.php';
        break;
    }
}