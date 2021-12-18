<?php
class Pegawai extends Controller
{
  public function index()
  {
    $data['judul'] = 'Daftar Pegawai';
    $data['asn'] = $this->model('Pegawai_model')->getAllPegawai();
    $this->view('templates/header', $data);
    $this->view('pegawai/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Pegawai';
    $data['asn'] = $this->model('Pegawai_model')->getPegawaiById($id);
    $this->view('templates/header', $data);
    $this->view('pegawai/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    if ($this->model('Pegawai_model')->tambahDataPegawai($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/pegawai');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/pegawai');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Pegawai_model')->hapusDataPegawai($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/pegawai');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/pegawai');
      exit;
    }
  }

  public function getubah()
  {
    echo json_encode($this->model('Pegawai_model')->getPegawaiById($_POST['id']));
  }

  public function ubah()
  {
    if ($this->model('Pegawai_model')->ubahDataPegawai($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/pegawai');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/pegawai');
      exit;
    }
  }

  public function getdetail()
  {
    echo json_encode($this->model('Pegawai_model')->getPegawaiById($_POST['id']));
  }

  public function cari()
  {
    $data['judul'] = 'Daftar Pegawai';
    $data['asn'] = $this->model('Pegawai_model')->cariDataPegawai();
    $this->view('templates/header', $data);
    $this->view('pegawai/index', $data);
    $this->view('templates/footer');
  }
}
