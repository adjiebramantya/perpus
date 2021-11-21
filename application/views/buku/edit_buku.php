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
    <form method="POST" action="<?= base_url()?>buku/update" class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">ID Buku</label>
          <div class="col-sm-10">
            <input type="text" name="id_buku" class="form-control" placeholder="ID Buku" value="<?= $data['id_buku']?>" require readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Judul Buku</label>
          <div class="col-sm-10">
            <input type="text" name="judul_buku" class="form-control" placeholder="Judul Buku" value="<?= $data['judul_buku']?>" required >
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Pengarang</label>
          <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="id_pengarang">
                <?php foreach ($pengarang as $row ):
                  if ($data['id_pengarang'] == $row->id_pengarang) {?>
                  <option value="<?= $row->id_pengarang?>" selected><?= $row->nama_pengarang?></option>
                <?php }else {?>
                  <option value="<?=  $row->id_pengarang;?>"><?=  $row->nama_pengarang;?></option>
                <?php }?>
                <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Penerbit</label>
          <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="id_penerbit">
              <?php foreach ($penerbit as $row ):
                if ($data['id_penerbit'] == $row->id_penerbit) {?>
                <option value="<?= $row->id_penerbit?>" selected><?= $row->nama_penerbit?></option>
              <?php }else {?>
                <option value="<?=  $row->id_penerbit;?>"><?=  $row->nama_penerbit;?></option>
              <?php }?>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Tahun Terbit</label>
          <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="tahun_terbit">
              <option value="">- Pilih Tahun -</option>
              <?php
                    for ($tahun=2000; $tahun <=2050 ; $tahun++) {
                        if ($data['tahun_terbit'] == $tahun) {?>
                          <option value="<?= $tahun?>" selected><?= $tahun?></option>
                        <?php }else{?>
                          <option value="<?= $tahun?>"><?= $tahun?></option>
                        <?php }
               } ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Buku</label>
          <div class="col-sm-10">
            <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Buku" value="<?= $data['jumlah']?>" required>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?= base_url()?>buku" class="btn btn-warning pull-left">Batal</a>
        <button type="submit" class="btn btn-info pull-right">Update</button>
      </div>
    </form>
  </div>
</div>
