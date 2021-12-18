<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Pegawai
      </button>
      <br><br>
      <!-- End of Button trigger modal -->

      <h3>DAFTAR PEGAWAI</h3>

      <ul class="list-group">
        <?php foreach ($data['asn'] as $pns) : ?>
          <li class="list-group-item">
            <?= $pns['nama']; ?>
            <a href="<?= BASEURL; ?>/pegawai/hapus/<?= $pns['id']; ?>" class="badge bg-danger rounded-pill float-end ms-1" onclick="return confirm('Hapus data ini?')" style="text-decoration:none">Hapus</a>

            <a href="<?= BASEURL; ?>/pegawai/ubah/<?= $pns['id']; ?>" class="badge bg-success  rounded-pill float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $pns['id']; ?>" style="text-decoration:none">Ubah</a>

            <a href="<?= BASEURL; ?>/pegawai/getdetail/<?= $pns['id']; ?>" class="badge bg-primary  rounded-pill float-end ms-1 tampilModalDetail" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $pns['id']; ?>" style="text-decoration:none">Detail</a>

            <!-- <a href="<?= BASEURL; ?>/pegawai/detail/<?= $pns['id']; ?>" class="badge bg-primary rounded-pill float-end ms-1" style="text-decoration:none">Detail</a> -->
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
          <input type="hidden" name="id" id="id">
          <div class="mb-1">
            <label for="nama" class="form-label" id="labelNama" style="font-weight: bold;">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>

          <div class="mb-1">
            <label for="nip" class="form-label" id="labelNip" style="font-weight: bold;">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" placeholder="Ketikkan NIP tanpa spasi" required>
          </div>

          <div class="mb-1">
            <label for="pangkat" id="labelPangkat" style="font-weight: bold;">Pangkat, Gol/Ruang</label>
            <select class="form-select" aria-label="Default select example" id="pangkat" name="pangkat">
              <option selected>-</option>
              <option value="PENGATUR MUDA, II/a">PENGATUR MUDA, II/a</option>
              <option value="PENGATUR MUDA TK.I, II/b">PENGATUR MUDA TK.I, II/b</option>
              <option value="PENGATUR, II/c">PENGATUR, II/c</option>
              <option value="PENGATUR TK.I, II/d">PENGATUR TK.I, II/d</option>
              <option value="PENATA MUDA, III/a">PENATA MUDA, III/a</option>
              <option value="PENATA MUDA TK.I, III/b">PENATA MUDA TK.I, III/b</option>
              <option value="PENATA, III/c">PENATA, III/c</option>
              <option value="PENATA TK.I, III/d">PENATA TK.I, III/d</option>
              <option value="PEMBINA, IV/a">PEMBINA, IV/a</option>
              <option value="PEMBINA TK.I, IV/b">PEMBINA TK.I, IV/b</option>
              <option value="PEMBINA UTAMA MUDA, IV/c">PEMBINA UTAMA MUDA, IV/c</option>
              <option value="PEMBINA UTAMA MADYA, IV/d">PEMBINA UTAMA MADYA, IV/d</option>
              <option value="PEMBINA UTAMA, IV/e">PEMBINA UTAMA, IV/e</option>
            </select>
          </div>

          <div class="mb-1">
            <label for="jabatan" class="form-label" id="labelJabatan" style="font-weight: bold;">Jabatan</label>
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