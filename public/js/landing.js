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