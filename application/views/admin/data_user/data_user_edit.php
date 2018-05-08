<?php echo form_open("user/update");?>
<input type="hidden" name="id" value="<?php echo $edit->user_id; ?>">
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 style="padding:0px;margin:0px;">
      <strong>Tambah User</strong>
    </h4>
  </div>
  <div class="panel-body">
    <div class="form-group">
      <label for="">NAMA PENGGUNA :</label>
      <input type="text" class="form-control" id="" placeholder="" name="nama_pengguna" value="<?php echo $edit->user_nama; ?>">
      <p class="help-block"></p>
    </div>
    <?php
      if ($edit->user_level=='admin') {
        $admin = 'checked';
        $siswa = null;
      }else{
        $admin = null;
        $siswa = 'checked';
      }
    ?>
    <div class="form-group">
      <label for="">USER LEVEL :</label><br>
        <input type="radio" name="user_level" value="admin" <?php echo $admin; ?>>Admin <br>
        <input type="radio" name="user_level" value="siswa" <?php echo $siswa; ?>>Siswa
      <p class="help-block"></p>
    </div>

    <div class="form-group">
      <label for="">USERNAME :</label>
      <input type="text" class="form-control" id="" placeholder="" name="username" value="<?php echo $edit->user_username;?>">
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">PASSWORD :</label>
      <input type="text" class="form-control" id="" placeholder="" name="password" value="<?php echo $edit->user_password;?>">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="panel-footer">
    <button type="submit" name="buttonback" value="button" class="btn btn-warning">Tambah & kembali</button>
    <button type="submit" name="buttonback" value="button" class="btn btn-Primary">Tambahkan</button>
  </div>
</div>

<?php echo form_close(); ?>
