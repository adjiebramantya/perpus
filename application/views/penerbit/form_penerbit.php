<?php if (!empty($this->session->flashdata('info'))) { ?>
  <div class="alert alert-danger" role="alert"><?= $this->session->flashdata('info')?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php } ?>
<div class="col-md-12">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?= $judul?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="POST" action="<?= base_url()?>penerbit/simpan" class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nama Penerbit</label>
          <div class="col-sm-10">
            <input type="text" name="nama_penerbit" class="form-control" placeholder="Nama Penerbit" required>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?= base_url()?>pengarang" class="btn btn-warning pull-left">Batal</a>
        <button type="submit" class="btn btn-info pull-right">Simpan</button>
      </div>
    </form>
  </div>
</div>
