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
    <form method="POST" action="<?= base_url()?>anggota/update" class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">ID Anggota</label>
          <div class="col-sm-10">
            <input type="text" name="id_anggota" class="form-control" value="<?= $data['id_anggota']?>" readonly>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>
          <div class="col-sm-10">
            <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota" value="<?= $data['nama_anggota']?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <select class="form-control" name="jenis_kelamin" required>
              <?php
                if ($data['jenis_kelamin'] == "Laki-laki") { ?>
                  <option value="Laki-laki" selected>Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                <?php } else{ ?>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan"  selected>Perempuan</option>
                <?php }
               ?>

            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
          <textarea name="alamat" class="form-control" onkeyup="textAreaAdjust(this)" style="overflow:hidden" required><?= $data['alamat']?></textarea>
            <script type="text/javascript">
              function textAreaAdjust(element) {
              element.style.height = "1px";
              element.style.height = (25+element.scrollHeight)+"px";
              }
            </script>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">No. Hp</label>
          <div class="col-sm-10">
            <input type="text" name="no_hp" class="form-control" placeholder="No. Hp" required value="<?= $data['no_hp']?>">
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?= base_url()?>anggota" class="btn btn-warning pull-left">Batal</a>
        <button type="submit" class="btn btn-info pull-right">Update</button>
      </div>
    </form>
  </div>
</div>
