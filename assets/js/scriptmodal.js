$(function (Mahasiswas) {

    //Mahasiswas--------------
    $('.addMenuButton').on('click', function () {

        $('#mhsModalLabel').html('Add New Menu');
        $('.modal-footer button[type=submit]').html('Tambah');
        $('#id').val('');
        $('#nim').val('');
        $('#nama_mhs').val('');
        $('#jenkel_mhs').val('');
        $('#alamat_lengkap').val('');
        $('#no_hp').val('');
    });

    $('.showModalEdit').on('click', function () {

        $('#mhsModalLabel').html('Edit Menu');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-content form').attr('action', 'http://localhost/uts_pwfl/mahasiswas/updatemhs');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/uts_pwfl/mahasiswas/geteditmhs',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#nim').val(data.nim);
                $('#nama_mhs').val(data.nama_mhs);
                $('#jenkel_mhs').val(data.jenkel_mhs);
                $('#alamat_lengkap').val(data.alamat_lengkap);
                $('#no_hp').val(data.no_hp);
            }
        });

    });

  //View Mahasiswa--------------
    $('.infoMhsModal').on('click', function () {

        $('#infoMhsModalLabel').html('Info Mahasiswa');
        $('#nama_mhs2').html('Namanya');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/uts_pwfl/mahasiswas/geteditmhs',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama_mhs2').val(data.nama_mhs);
                $('#nim2').val(data.nim);
                $('#jenkel_mhs2').val(data.jenkel_mhs);
                $('#alamat_lengkap2').val(data.alamat_lengkap);
                $('#no_hp2').val(data.no_hp);
            }
        });

    });

});