<div class="card">
    <div class="card-header">
        Data Pengguna
    </div>
    <div class="card-body">
        <a href="media.php?halaman=tambah_pengguna" class="btn btn-sm btn-primary mb-3">tambah data</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Nim</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Level</th>
                    <th>Pasword</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $no = 1;
                    // untuk melakukan relasi JOIN (dilakukan sebanyak yg direlasikan) / ON
                    $ambil_data = mysqli_query($koneksi, "SELECT * FROM pengguna");
                    // end relasi
                    while ($data = mysqli_fetch_array($ambil_data)) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['nama_pengguna'] ?></td> 
                            <td><?php echo $data['nim'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td><?php echo $data['no_hp'] ?></td>
                            <td><?php echo $data['level'] ?></td>
                            <td><?php echo $data['password'] ?></td>
                            <td><img src="gambar/<?php echo $data['image'] ?>" alt="" width="40px"></td>
                            <td>
                                <a href="media.php?halaman=ubah_pengguna&&id=<?php echo $data['nama_pengguna']  ?>" class="btn btn-sm btn-success">edit</a>
                            </td>
                            <td>
                                <a href="media.php?halaman=crud&&hapus_pengguna=<?php echo $data['id_pengguna'] ?>" class="btn btn-sm btn-danger">hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


