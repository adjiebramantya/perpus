<?php if (!empty($this->session->flashdata('info'))) { ?>
  <div class="alert alert-danger" role="alert"><?= $this->session->flashdata('info')?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php } ?>

<?php
    $tgl_pinjam = date('Y-m-d');

    $tujuh_hari = mktime(0,0,0,date("m"),date("d")+7,date("Y"));
    $tgl_kembali = date('Y-m-d',$tujuh_hari);
?>
<div class="col-md-12">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><?= $judul?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="POST" action="<?= base_url()?>peminjaman/simpan" class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">ID Peminjaman</label>
          <div class="col-sm-10">
            <input type="text" name="id_pm" class="form-control" placeholder="ID Peminjaman" value="<?= $id_peminjaman?>" require readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Peminjam</label>
          <div class="col-sm-10">
            <select class="form-control select2" style="width: 100%;" name="id_anggota">
              <option value="">- Pilih Peminjam -</option>
                <?php foreach ($peminjam as $row ): ?>
                  <option value="<?=  $row->id_anggota;?>"><?=  $row->nama_anggota;?></option>
                <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Buku</label>
          <div class="col-sm-10">
            <select class="form-control select2" id="id_buku" style="width: 100%;" name="id_buku">
              <option value="">- Pilih Buku -</option>
                <?php foreach ($buku as $row ): ?>
                  <option value="<?=  $row->id_buku;?>"><?=  $row->judul_buku;?></option>
                <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Peminjaman</label>
          <div class="col-sm-10">
            <input type="date" name="tgl_pinjam" class="form-control" value="<?= $tgl_pinjam?>" readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Pengembalian</label>
          <div class="col-sm-10">
            <input type="date" name="tgl_kembali" class="form-control" value="<?= $tgl_kembali?>"required readonly>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="<?= base_url()?>buku" class="btn btn-warning pull-left">Batal</a>
        <button type="submit" class="btn btn-info pull-right">Simpan</button>
      </div>
    </form>
  </div>
</div>

<script>
  $('#id_buku').change(function(){
    var id = $(this).val();
    $.ajax({
      url       : '<?= base_url()?>peminjaman/jumlah_buku',
      data      : {id:id},
      method    : 'POST',
      dataType  : 'json',
      success   :function(hasil){
          var jumlah  = JSON.stringify(hasil.jumlah);
          var jumlah1 = jumlah.split('"').join('');
          if(jumlah1<=0){
            alert('Maaf, stok untuk buku ini sedang kosong');
            location.reload();
          }
      }
    });
  });
</script>
