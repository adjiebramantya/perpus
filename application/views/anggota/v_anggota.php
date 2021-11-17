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
    <h3 class="box-title"><?= $judul ?></h3>
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
        <?php
          foreach ($data as $row) { ?>
            <tr>
              <td><?= $row->id_anggota?></td>
              <td><?= $row->nama_anggota?></td>
              <td><?= $row->jenis_kelamin?></td>
              <td><?= $row->alamat?></td>
              <td><?= $row->no_hp?></td>
              <td>
                <a href="<?= base_url() ?>anggota/edit/<?= $row->id_anggota;?>" class="btn btn-success btn-xs">Edit</a>
                <a href="<?= base_url() ?>anggota/hapus/<?= $row->id_anggota;?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus?');">Hapus</a>
              </td>
            </tr>
        <?php }?>
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
