<?php echo form_open("siswa/tambah_proses");?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 style="padding:0px;margin:0px;">
      <strong>Tambah Siswa</strong>
    </h4>
  </div>
  <div class="panel-body">
    <div class="form-group">
      <label for="">NIS :</label>
      <input type="text" class="form-control" id="" placeholder="" name="nis">
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">NISN :</label>
      <input type="text" class="form-control" id="" placeholder="" name="nisn">
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">NAMA :</label>
      <input type="text" class="form-control" id="" placeholder="" name="nama">
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">JENIS KELAMIN :</label><br>
      <input type="radio" id="" placeholder="" name="jenis_kelamin" value="L"> Laki - Laki <br>
      <input type="radio" id="" placeholder="" name="jenis_kelamin" value="P"> Perempuan
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">ALAMAT :</label><br>
      <textarea class="form-control" id="" name="alamat" rows="8" cols="88"></textarea>
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">TEMPAT LAHIR :</label><br>
      <input type="text" class="form-control" id="" placeholder="" name="tmp_lahir">
      <p class="help-block"></p>
    </div>
    <div class="form-group">
      <label for="">TANGGAL LAHIR :</label><br>
      <input type="date" class="form-control" id="" placeholder="" name="tgl_lahir">
      <p class="help-block"></p>
    </div>
  </div>
  <div class="panel-footer">
    <button type="submit" name="buttonback" value="button" class="btn btn-warning">Tambah & kembali</button>
    <button type="submit" name="buttonback" value="button" class="btn btn-Primary">Tambahkan</button>
  </div>
</div>

<?php echo form_close(); ?>
