<div class="card">
    <div class="card-header">
        Form Tambah Data
    </div>
    <div class="card-body">
        <form action="crud.php" method="POST">
            <div class="form-group">
                <div class="mb-3">
                    <label for="">Kode Kategori</label>
                    <input type="text" name="kode" class="form-control" placeholder="masukan kode kategori">
                </div>
                <div class="mb-3">
                    <label for="">Nama Kategori</label>
                    <input type="text" name="nama" class="form-control" placeholder="masukan nama kategori">
                </div>
                <button type="submit" name="simpan_kategori" class="btn btn-sm btn-primary">simpan data</button>
            </div>
        </form>
    </div>
</div>