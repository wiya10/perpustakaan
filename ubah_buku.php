<?php
if (isset($_GET['id'])) {

    include "koneksi.php";

    $ambil_data = mysqli_query($koneksi, "SELECT *FROM buku WHERE kode_buku='$_GET[id]'");
    $data = mysqli_fetch_array($ambil_data);
    // var_dump($data);
?>

    <div class="card">
        <div class="card-header">
            Form Edit Data
        </div>
        <div class="card-body">
            <form action="crud.php?ubah_data=<?php echo $data['kode_buku'] ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="">Kode Buku</label>
                        <input type="text" value="<?php echo $data['kode_buku'] ?>" name="kode" class="form-control" placeholder="masukan kode buku">
                    </div>
                    <div class="mb-3">
                        <label for="">Judul Buku</label>
                        <input type="text" name="judul" value="<?php echo $data['judul_buku'] ?>" class="form-control" placeholder="masukan judul buku">
                    </div>
                    <div class="mb-3">
                        <label for="">Nama Pengarang</label>
                        <input type="text" name="pengarang" value="<?php echo $data['pengarang'] ?>" class="form-control" placeholder="masukan nama pengarang">
                    </div>
                    <div class="mb-3">
                        <label for="">Nama Penerbit</label>
                        <input type="text" name="penerbit" value="<?php echo $data['penerbit'] ?>" class="form-control" placeholder="masukan nama penerbit">
                    </div>
                    <div class="mb-3">
                        <label for="">Kategori</label>
                        <input type="text" name="kategori" value="<?php echo $data['kategori'] ?>" class="form-control" placeholder="masukan kategori">
                    </div>
                    <div class="mb-3">
                        <label for="">Jumlah</label>
                        <input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>" class="form-control" placeholder="masukan jumlah buku">
                    </div>
                    <div class="mb-3">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                        <img style="margin-top: 30px;" class="img-thumbnail" src="gambar/<?php echo $data['foto'] ?>" width="100px" alt="">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">simpan data</button>
                </div>
            </form>
        </div>
    </div>

<?php } ?>