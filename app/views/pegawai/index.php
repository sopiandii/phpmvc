<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Pegawai
      </button>
      <br><br>

      <h3>DAFTAR PEGAWAI</h3>

      <ul class="list-group">
        <?php foreach ($data['asn'] as $pns) : ?>
          <li class="list-group-item">
            <?= $pns['nama']; ?>
            <a href="<?= BASEURL; ?>/pegawai/hapus/<?= $pns['id']; ?>" class="badge bg-danger rounded-pill float-end ms-1" style="text-decoration:none">Hapus</a>

            <a href="<?= BASEURL; ?>/pegawai/detail/<?= $pns['id']; ?>" class="badge bg-primary rounded-pill float-end ms-1" style="text-decoration:none">Detail</a>
          </li>
        <?php endforeach; ?>
      </ul>

    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/pegawai/tambah" method="post" autocomplete="off">
          <div class="mb-1">
            <label for="nama" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>

          <div class="mb-1">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" required>
          </div>

          <div class="mb-1">
            <label for="pangkat">Pangkat, Gol.</label>
            <select class="form-select" aria-label="Default select example" id="pangkat" name="pangkat">
              <option selected>Pilih Pangkat, Gol.</option>
              <option value="Pengatur Muda, II/a">Pengatur Muda, II/a</option>
              <option value="Pengatur Muda TK.I, II/b">Pengatur Muda TK.I, II/b</option>
              <option value="Pengatur, II/c">Pengatur, II/c</option>
              <option value="Pengatur TK.I, II/d">Pengatur TK.I, II/d</option>
              <option value="Penata Muda, III/a">Penata Muda, III/a</option>
              <option value="Penata Muda TK.I, III/b">Penata MudaTK.I, III/b</option>
              <option value="Penata, III/c">Penata, III/c</option>
              <option value="Penata TK.I, III/d">Penata TK.I, III/d</option>
              <option value="Pembina, IV/a">Pembina, IV/a</option>
              <option value="Pembina TK.I, IV/b">Pembina TK.I, IV/b</option>
              <option value="Pembina Utama Muda, IV/c">Pembina Utama Muda, IV/c</option>
              <option value="Pembina Utama Madya, IV/d">Pembina Utama Madya, IV/d</option>
              <option value="Pembina Utama, IV/e">Pembina Utama, IV/e</option>
            </select>
          </div>

          <div class="mb-1">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>