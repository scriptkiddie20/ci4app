<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Datatables</title>

    <!-- css -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Belajar menampilkan data Mysql dengan datatables serverside.</h2>
        <table class="table" id="table_teman">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Teman</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
        </table>
    </div>



    <script>
        table = $("#table_teman").DataTable({
            "order": [],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "/Datatables/listdata",
                "type": 'POST'
            },
            "columnDefs": [{
                "target": [0],
                "orderable": false
            }]
        })
    </script>
</body>

</html>