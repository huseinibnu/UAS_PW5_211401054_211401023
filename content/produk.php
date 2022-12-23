<!-- Card -->
<div id="foods">
    <div class="judul-card">
        <h1 class="display-4 text-center font-weight-normal">Pakan Guppy terbaik di Guppy Kita</h1>
    </div>
    <a href="?hal=produk_tambah" class="btn btn-primary tombol-detail">Tambah</a>
    <div class="row row-cols-1 row-cols-md-2">
        <?php
        $query = mysqli_query($con, "SELECT * FROM produk");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <div class="col mb-4">
            <div class="card">
                <img src="images/<?php echo $data['foto']; ?>" class="card-img-top" alt="JBL Novo Artemio">
                <div class="card-body">
                <h5 class="card-title"><?php echo $data['nama_produk']; ?></h5>
                <p class="card-text"><?php echo $data['keterangan']; ?></p>
                <p class="card-text"><?php echo $data['link']; ?></p>
                <a class="btn btn-primary tombol-detail" href="?hal=produk_edit&id=<?php echo $data['id_produk']; ?>">Edit</a>
                <a class="btn btn-primary tombol-detail"
                    href="?hal=produk_hapus&id=<?php echo $data['id_produk']; ?>&foto=<?php echo $data['foto']; ?>">Hapus</a>
            </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<!-- Akhir Card -->