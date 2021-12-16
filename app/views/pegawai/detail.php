<div class="container mt-5">

  <div class="card" style="width: 25rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['asn']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['asn']['nip']; ?></h6>
      <p class="card-text"><?= $data['asn']['pangkat']; ?></p>
      <p class="card-text"><?= $data['asn']['jabatan']; ?></p>
      <a href="<?= BASEURL; ?>/pegawai" class="btn btn-primary">Kembali</a>
    </div>
  </div>

</div>