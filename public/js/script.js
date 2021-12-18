$(function () {

  $('.tombolTambahData').on('click', function () {
    $('#judulModal').html('Tambah Data Pegawai');
    $('.modal-body input, select').show();
    $('.modal-footer button[type=submit]').show();
    $('.modal-footer button[type=button]').attr('class', 'btn btn-secondary');
    $('.modal-footer button[type=button]').html('Batal');
    $('.modal-footer button[type=submit]').html('Simpan');
    $('#nama').val('');
    $('#nip').val('');
    $('#pangkat').val('-');
    $('#jabatan').val('');
    $('#id').val('');

    $('#labelNama').html('Nama Pegawai');
    $('#labelNip').html('NIP');
    $('#labelPangkat').html('Pangkat, Gol.');
    $('#labelJabatan').html('Jabatan');


  });

  $('.tampilModalUbah').on('click', function () {
    $('#judulModal').html('Ubah Data Pegawai');
    $('.modal-body input, select').show();
    $('.modal-footer button[type=submit]').show();
    $('.modal-footer button[type=button]').attr('class', 'btn btn-secondary');
    $('.modal-footer button[type=button]').html('Batal');
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

        $('#labelNama').html('Nama Pegawai');
        $('#labelNip').html('NIP');
        $('#labelPangkat').html('Pangkat, Gol.');
        $('#labelJabatan').html('Jabatan');
        // $('#id').html(data.id);
      }
    });

  });


  $('.tampilModalDetail').on('click', function () {
    $('#judulModal').html('Data Pegawai');
    $('.modal-body input, select').hide();
    // $('.modal-body label[style="font-weight: normal"]').attr('style', 'font-weight: bold');
    $('.modal-footer button[type=submit]').hide();
    $('.modal-footer button').attr('class', 'btn btn-primary');
    $('.modal-footer button[type=button]').html('Ok');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/phpmvc/public/pegawai/getdetail',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#labelNama').html(data.nama);
        $('#labelNip').html(data.nip);
        $('#labelPangkat').html(data.pangkat);
        $('#labelJabatan').html(data.jabatan);
        // $('#id').html(data.id);
      }
    });




  });

});