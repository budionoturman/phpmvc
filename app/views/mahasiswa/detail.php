
<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><b><?= $data['mhs']['nama']; ?></b></h5>
            <p class="card-text mt-4"><b> NIM :  <?= $data['mhs']['nim']; ?></b></p>
            <p class="card-text"> <b> Email : <?= $data['mhs']['email']; ?></b></p>
            <p class="card-text"> <b> Jurusan :  <?= $data['mhs']['jurusan']; ?></b></p>
            <p class="card-text"> <b> Alamat :  <?= $data['mhs']['alamat']; ?></b></p>
            <a class="btn btn-warning" href="<?= BASEURL;?>/mahasiswa" class="card-link">Kembali</a>
   
        </div>
    </div>	
</div>
