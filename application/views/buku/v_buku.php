<?php if (!empty($this->session->flashdata('info'))) { ?>
  <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info')?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php } ?>
<div class="row">
  <div class="col-md-12">
    <a href="<?= base_url()?>buku/tambah_buku" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Buku</a>
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
        <th>ID Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Jumlah</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
        <?php
          foreach ($data->result() as $row) { ?>
            <tr>
              <td><?= $row->id_buku?></td>
              <td><?= $row->judul_buku?></td>
              <td><?= $row->nama_pengarang?></td>
              <td><?= $row->nama_penerbit?></td>
              <td><?= $row->tahun_terbit?></td>
              <td><?= $row->jumlah?></td>
              <td>
                <a href="<?= base_url() ?>buku/edit/<?= $row->id_buku;?>" class="btn btn-success btn-xs">Edit</a>
                <a href="<?= base_url() ?>buku/hapus/<?= $row->id_buku;?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus <?= $row->judul_buku ;?>?');">Hapus</a>
              </td>
            </tr>
        <?php }?>
      </tbody>
      <tfoot>
      <tr>
        <th>ID Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Jumlah</th>
        <th>Aksi</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
