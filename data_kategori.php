<div class="card">
    <div class="card-header">
        Data Kategori
    </div>
    <div class="card-body">
        <a href="media.php?halaman=tambah_kategori" class="btn btn-sm btn-primary mb-3">tambah data</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Kode Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $no = 1;
                    $ambil_data = mysqli_query($koneksi, "SELECT * FROM kategori");
                    while ($data = mysqli_fetch_array($ambil_data)) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['kode_kategori'] ?></td>
                            <td><?php echo $data['nama_kategori'] ?></td>
                            <td>
                                <a href="" class="btn btn-sm btn-success">edit</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-danger">hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>