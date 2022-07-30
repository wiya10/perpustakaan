<div class="card">
    <div class="card-header">
        Form Tambah Data
    </div>
    <div class="card-body">
        <form action="crud.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <div class="mb-3">
                    <label for="">Kode Buku</label>
                    <input type="text" name="kode" class="form-control" placeholder="masukan kode buku">
                </div>
                <div class="mb-3">
                    <label for="">Judul Buku</label>
                    <input type="text" name="judul" class="form-control" placeholder="masukan judul buku">
                </div>
                <div class="mb-3">
                    <label for="">Nama Pengarang</label>
                    <!-- <input type="text" name="pengarang" class="form-control" placeholder="masukan nama pengarang"> -->
                    
                   <select name="pengarang" class="form-control" id="">
                    <option value="">Pilih Pengarang</option>
                    <?php
                    include "koneksi.php";
                    $kategori = mysqli_query($koneksi, "SELECT *FROM pengarang");

                    while($data = mysqli_fetch_array($kategori)) {
                    ?>
                        <option value="<?php echo $data['kode_pengarang'] ?>"><?php echo $data['nama_pengarang'] ?></option>
                    <?php } ?>
                   </select>
                </div>
                <div class="mb-3">
                    <label for="">Nama Penerbit</label>

                   <select name="penerbit" class="form-control" id="">
                    <option value="">Pilih Penerbit</option>
                    <?php
                    include "koneksi.php";
                    $kategori = mysqli_query($koneksi, "SELECT *FROM penerbit");

                    while($data = mysqli_fetch_array($kategori)) {
                    ?>
                        <option value="<?php echo $data['kode_penerbit'] ?>"><?php echo $data['nama_penerbit'] ?></option>
                    <?php } ?>
                   </select>
                </div>
                <div class="mb-3">
                    <label for="">Kategori</label>
                    <!-- <input type="text" name="kategori" class="form-control" placeholder="masukan kategori"> -->
                    <select name="kategori" class="form-control" id="">
                    <option value="">Pilih Kategori</option>
                    <?php
                    include "koneksi.php";
                    $kategori = mysqli_query($koneksi, "SELECT *FROM kategori");

                    while($data = mysqli_fetch_array($kategori)) {
                    ?>
                        <option value="<?php echo $data['kode_kategori'] ?>"><?php echo $data['nama_kategori'] ?></option>
                    <?php } ?>
                   </select>
                </div>
                <div class="mb-3">
                    <label for="">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" placeholder="masukan jumlah buku">
                </div>
                <div class="mb-3">
                    <label for="">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <button type="submit" name="simpan_buku" class="btn btn-sm btn-primary">simpan data</button>
            </div>
        </form>
    </div>
</div>