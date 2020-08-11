var save_label;
var table;

$(document).ready(function () {

    table = $('#barang').DataTable({
        "order": [],
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "/ajaxcontroller/listdata",
            "type": "POST",
        },
        "columnDefs": [{
            "targets": [0],
            "orderable": false
        }]
    });
});


function reload_ajax() {
    table.ajax.reload(null, false);
}

function add_barang() {
    save_label = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Tambah Barang'); // Set Title to Bootstrap modal title
}

function edit_barang(id) {
    save_label = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url: "/ajaxcontroller/detail/" + id,
        type: "GET",
        dataType: "JSON",
        success: function (data) {
            $('[name="id"]').val(data.Id);
            $('[name="nama_barang"]').val(data.NamaTeman);
            $('[name="stok"]').val(data.Alamat);
            $('[name="kategori"]').val(data.JenisKelamin);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Barang'); // Set title to Bootstrap modal title
            console.log(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
        }
    });
}