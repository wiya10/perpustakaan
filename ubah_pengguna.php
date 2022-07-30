<?php
if (isset($_GET['id'])) {

    include "koneksi.php";

    $ambil_data = mysqli_query($koneksi, "SELECT *FROM pengguna WHERE nama_pengguna='$_GET[id]'");
    $data = mysqli_fetch_array($ambil_data);
    // var_dump($data);
?>

<div class="card">
  <div class="card-header">Form Edit Data Pengguna</div>
  <div class="card-body">
    <form action="crud.php?ubah_pengguna=<?php echo $data['nama_pengguna'] ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <div class="mb-3">
          <label for="">Nama Pengguna</label>
          <input type="text" value="<?php echo $data['nama_pengguna'] ?>" name="nama" class="form-control" placeholder="masukan nama pengguna" />
        </div>
        <div class="mb-3">
          <label for="">Nim</label>
          <input type="text" name="nim" value="<?php echo $data['nim'] ?>" class="form-control" placeholder="masukan nim" />
        </div>
        <div class="mb-3">
          <label for="">Alamat</label>
          <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control" placeholder="masukanalamat" />
        </div>
        <div class="mb-3">
          <label for="">NO Hp</label>
          <input type="text" name="nmr" value="<?php echo $data['no_hp'] ?>" class="form-control" placeholder="masukan nomor hp" />
        </div>
        <div class="mb-3">
          <label for="">Level</label>
          <input type="text" name="level" value="<?php echo $data['level'] ?>" class="form-control" placeholder="masukan level" />
        </div>
        <div class="mb-3">
          <label for="">Password</label>
          <input type="text" name="psw" value="<?php echo $data['password'] ?>" class="form-control" placeholder="masukan password" />
        </div>
        <div class="mb-3">
          <label for="">Gambar</label>
          <input type="file" name="gambar" class="form-control" />
          <img style="margin-top: 30px" class="img-thumbnail" src="gambar/<?php echo $data['image'] ?>" width="100px" alt="" />
        </div>
        <button type="submit" class="btn btn-sm btn-primary">simpan data</button>
      </div>
    </form>
  </div>
</div>

<?php } ?>
