<div class="container mt-3">


    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData " data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Mahasiswa</button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6">
            <form action="<?=BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search" name="keyword" id="keyword" autocomplete="of">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <h3 class="mt-2">Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item ">
                        <b> <?= $mhs['nama']; ?> </b>
                        <a class="btn btn-danger float-end ms-2" href="<?= BASEURL;?>/mahasiswa/hapus/<?=$mhs ['id']; ?>" onclick="return confirm('Yakin Hapus Data?');">Hapus</a>
                        <a data-id="<?=$mhs['id']; ?>" class="tampilModalUbah btn btn-success float-end ms-2" data-bs-toggle="modal" data-bs-target="#formModal" href="<?= BASEURL;?>/mahasiswa/ubah/<?=$mhs ['id']; ?>">Ubah</a>
                        <a class="btn btn-info float-end " href="<?= BASEURL;?>/mahasiswa/detail/<?=$mhs ['id']; ?>">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="Alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>

                    <div class="mb-3">
                        <label for="jurusan" class="form-label"> Jurusan </label>
                        <select id="jurusan" class="form-control" name="jurusan">
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="teknik Arsitektur">Teknik arsitektur</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>