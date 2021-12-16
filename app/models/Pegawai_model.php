<?php

class Pegawai_model
{
  private $table = 'pegawai';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }


  public function getAllPegawai()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }


  public function getPegawaiById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahDataPegawai($data)
  {
    $query = "INSERT INTO pegawai 
              VALUES
              ('', :nip, :nama, :pangkat, :jabatan)";

    $this->db->query($query);
    $this->db->bind('nip', $data['nip']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('pangkat', $data['pangkat']);
    $this->db->bind('jabatan', $data['jabatan']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusDataPegawai($id)
  {
    $query = "DELETE FROM pegawai WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();

    // echo '<script>
    //     swal({
    //       title: "Anda yakin akan menghapus data ini?",
    //       text: "Setelah dihapus, data tidak dapat dikembalikan!",
    //       icon: "warning",
    //       buttons: ["Tidak!", "Ya!"],
    //       dangerMode: true,
    //     })
    //     .then((willDelete) => {
    //       if (willDelete) {
    //         swal("Data berhasil dihapus!", {
    //           icon: "success",
    //         });
    //       } else {
    //         swal("Data tidak dihapus!");
    //       }
    //     });
    //   </script>';
  }
}
