<div class="card">
    <div class="card-header">
        Form Tambah Data
    </div>
    <div class="card-body">
        <form action="crud.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <div class="mb-3">
                    <label for="">Nama Pengguna</label>
                    <input type="text" name="nama" class="form-control" placeholder="masukan nama pengguna">
                </div>
                <div class="mb-3">
                    <label for="">Nim</label>
                    <input type="text" name="nim" class="form-control" placeholder="masukan nim">
                </div>
                <div class="mb-3">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="masukan alamat">
                </div>
                <div class="mb-3">
                    <label for="">No. Hp</label>
                    <input type="text" name="nmr" class="form-control" placeholder="masukan nomor hp">
                </div>
              
                <div class="mb-3">
                    <label for="">Level</label>
                    <!-- <input type="text" name="level" class="form-control" placeholder="masukan level"> -->
                    <select name="level" class="form-control" id="">
                    <option value="">Pilih</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                     </select>
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="text" name="psw" class="form-control" placeholder="masukan password">
                </div>
                <div class="mb-3">
                    <label for="">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <button type="submit" name="simpan_pengguna" class="btn btn-sm btn-primary">simpan data</button>
            </div>
        </form>
    </div>
</div>