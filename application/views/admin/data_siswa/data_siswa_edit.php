<?php echo form_open("siswa/update");?>
<input type="hidden" name="" value="<?php echo $edit->siswa_id; ?>">
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 style="padding:0px;margin:0px;">
      <strong>Edit Data Siswa</strong>
    </h4>
  </div>
  <div class="panel-body">
    <div class="form-group">
      <label for="">NIS :</label>
      <input type="text" class="form-control" id="" placeholder="" name="nis" value="<?php echo $edit->siswa_nis; ?>">
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">NISN :</label>
      <input type="text" class="form-control" id="" placeholder="" name="nisn" value="<?php echo $edit->siswa_nisn; ?>">
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">NAMA :</label>
      <input type="text" class="form-control" id="" placeholder="" name="nama" value="<?php echo $edit->siswa_nama; ?>">
      <p class="help-block"></p>
    </div>
    <?php
      if ($edit->siswa_jk=='L') {
        $pria = 'checked';
        $wanita = null;
      }else{
        $pria = null;
        $wanita = 'checked';
      }
    ?>
    <div class="form-group">
      <label for="">JENIS KELAMIN :</label><br>
      <input type="radio" id="" placeholder="" name="jenis_kelamin" value="L" <?php echo $pria; ?>> Laki - Laki <br>
      <input type="radio" id="" placeholder="" name="jenis_kelamin" value="P" <?php echo $wanita; ?>> Perempuan
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">ALAMAT :</label><br>
      <textarea class="form-control" id="" name="alamat" rows="8" cols="88" value="<?php echo $edit->siswa_alamat; ?>"></textarea>
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">TEMPAT LAHIR :</label><br>
      <input type="text" class="form-control" id="" placeholder="" name="tmp_lahir" value="<?php echo $edit->siswa_tmp_lahir; ?>">
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">TANGGAL LAHIR :</label><br>
      <input type="date" class="form-control" id="" placeholder="" name="tgl_lahir" value="<?php echo $edit->siswa_tgl_lahir; ?>">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="panel-footer">
    <button type="submit" name="buttonback" value="button" class="btn btn-warning">Tambah & kembali</button>
    <button type="submit" name="buttonback" value="button" class="btn btn-Primary">Tambahkan</button>
  </div>
</div>

<?php echo form_close(); ?>
