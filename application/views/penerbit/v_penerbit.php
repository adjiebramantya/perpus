<?php if (!empty($this->session->flashdata('info'))) { ?>
  <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info')?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php } ?>
<div class="row">
  <div class="col-md-12">
    <a href="<?= base_url()?>penerbit/tambah_penerbit" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Penerbit</a>
  </div>
</div>

<br>

<div class="box">
  <div class="box-header">
    <h3 class="box-title"><?= $judul ?></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>ID Penerbit</th>
        <th>Nama Penerbit</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
        <?php
          foreach ($data as $row) { ?>
            <tr>
              <td><?= $row->id_penerbit?></td>
              <td><?= $row->nama_penerbit?></td>
              <td>
                <a href="<?= base_url() ?>penerbit/edit/<?= $row->id_penerbit;?>" class="btn btn-success btn-xs">Edit</a>
                <a href="<?= base_url() ?>penerbit/hapus/<?= $row->id_penerbit;?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus <?= $row->nama_penerbit ;?>?');">Hapus</a>
              </td>
            </tr>
        <?php }?>
      </tbody>
      <tfoot>
      <tr>
        <th>ID Penerbit</th>
        <th>Nama Penerbit</th>
        <th>Aksi</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
