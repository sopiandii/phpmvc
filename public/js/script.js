$(function () {

  $('.tombolTambahData').on('click', function () {
    $('#judulModal').html('Tambah Data Pegawai');
    $('.modal-footer button[type=submit]').html('Simpan');
    $('#nama').val('');
    $('#nip').val('');
    $('#pangkat').val('-');
    $('#jabatan').val('');
    $('#id').val('');

  });

  $('.tampilModalUbah').on('click', function () {
    $('#judulModal').html('Ubah Data Pegawai');
    $('.modal-footer button[type=submit]').html('Ubah');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/pegawai/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/phpmvc/public/pegawai/getubah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#nip').val(data.nip);
        $('#pangkat').val(data.pangkat);
        $('#jabatan').val(data.jabatan);
        $('#id').val(data.id);
      }
    });

  });

});