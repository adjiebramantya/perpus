<?php if (!empty($this->session->flashdata('info'))) { ?>
  <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info')?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php } ?>
<div class="row">
  <div class="col-md-12">
    <a href="<?= base_url()?>anggota/tambah_anggota" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Anggota</a>
  </div>
</div>

<br>

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>ID Anggota</th>
        <th>Nama Anggota</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No. Telepon</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>

      </tbody>
      <tfoot>
      <tr>
        <th>ID Anggota</th>
        <th>Nama Anggota</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No. Telepon</th>
        <th>Aksi</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
