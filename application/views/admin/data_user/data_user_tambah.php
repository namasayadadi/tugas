<?php echo form_open("user/tambah_proses");?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h4 style="padding:0px;margin:0px;">
      <strong>Tambah User</strong>
    </h4>
  </div>
  <div class="panel-body">
    <div class="form-group">
      <label for="">NAMA PENGGUNA :</label>
      <input type="text" class="form-control" id="" placeholder="" name="nama_pengguna">
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">USER LEVEL :</label>
      <select class="form-control" name="user_level">
        <option value="admin" >ADMIN</option>
        <option value="siswa">SISWA</option>
      </select>

      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">USERNAME :</label>
      <input type="text" class="form-control" id="" placeholder="" name="username">
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">PASSWORD :</label>
      <input type="text" class="form-control" id="" placeholder="" name="password">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="panel-footer">
    <button type="submit" name="buttonback" value="button" class="btn btn-warning">Tambah & kembali</button>
    <button type="submit" name="buttonback" value="button" class="btn btn-Primary">Tambahkan</button>
  </div>
</div>

<?php echo form_close(); ?>
