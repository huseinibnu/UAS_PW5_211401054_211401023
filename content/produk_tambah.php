<?php
if (!defined('INDEX')) die("");
?>

<div class="container">
    <div class="produk_tambah">
    <h2 class="judul">Tambah Produk</h2>
    <form action="?hal=produk_insert" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="foto">Foto</label>
            <div class="input">
                <input type="file" id="foto" name="foto">
            </div>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <div class="input">
                <input type="text" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group">
            <label for="link">Link</label>
            <div class="input">
                <input type="text" id="link" name="link">
            </div>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <div class="input">
                <textarea style="width:100%;" name="keterangan" id="keterangan" rows="5"></textarea>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-primary tombol-detail">
            <input type="reset" value="Batal" class="btn btn-primary tombol-detail">
        </div>
    </form>
</div>

</div>