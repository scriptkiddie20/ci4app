<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<div class="container pt-4">
  <h1 class="h3 text-center">CodeIgniter Ajax CRUD using Jquery with Ignited Datatables Server-side</h1>
  <p class="small text-center">by <a href="https://simplecodz.blogspot.com">SimpleCodz</a></p>

  <div class="mt-5 mb-4">
    <h4 class="card-title text-center">Data Barang</h4>
    <button class="btn btn-sm btn-primary" onclick="add_barang()"><i class="fa fa-plus"></i> Tambah Barang</button>
    <button class="btn btn-sm btn-secondary" onclick="reload_ajax()"><i class="fa fa-refresh"></i> Reload</button>
  </div>

  <table id="barang" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        <th>Kategori</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
    <tfoot>
      <tr>
        <th>No.</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        <th>Kategori</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>
</div>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_title">Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body form">
        <form action="#" id="form">
          <input type="hidden" value="" name="id" />
          <div class="form-body">
            <div class="form-group">
              <label class="control-label">Nama Barang</label>
              <input name="nama_barang" class="form-control" type="text">
              <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
              <label class="control-label">Stok</label>
              <input name="stok" class="form-control" type="text">
              <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
              <label class="control-label">Kategori</label>
              <select name="kategori" class="form-control">
                <option value="">-- Pilh --</option>

              </select>
              <span class="invalid-feedback"></span>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<?= $this->endSection(); ?>