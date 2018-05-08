<div class="panel panel-default">
  <div class="panel-heading" style="background-color:">
    <h4 style="color:#666";>
      <strong>KELAS : XI RPL 1</strong>
    </h4>
  </div>
  <div class="panel-body">
    <div class="" style="width:100%;">
      <div class="in-line" style="width:30%; float:left;color:#666;">
        <h4>Username : <?php echo $this->session->userdata('nama');?></h4>
        <h4>Tanggal  : <?=date('Y-m-d')?></h4>
      </div>
      <div class="inline" style="width:30%;float:right">
        <form class="" action="<?php echo base_url('dashboard/absen')?>" method="post" style="">
          <div class="form-group" style="width:300px;">
            <input class="form-control "type="text" name="nis" value="" placeholder="NIS"><br>
            <a type="submit" href="" class="btn btn-success" style=" width:300px;">ABSEN</a>
          </div>
        </form>
      </div>
    </div>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="width: 50px;" >NO</th>
          <th style="width: 200px;">NISN</th>
          <th style="width: 200px;">NIS</th>
          <th>NAMA</th>
          <th style="width:125px;">JENIS KELAMIN</th>
          <th style="width:50px;">STATUS</th>
        </tr>
      </thead>
      <tbody>
          <?php
            if ($query->num_rows() > 0) {
                $no=0;
                foreach ($query->result() as $row) {
                  if ($row->siswa_status=='hadir') {
                    $data='<span class="label label-success"> Hadir </span>';
                  }else{
                    $data=null;
                  }
                  echo '
                    <tr>
                    <td>'.$no.'</td>
                    <td>'.$row->siswa_nisn.'</td>
                    <td>'.$row->siswa_nis.'</td>
                    <td>'.$row->siswa_nama.'</td>
                    <td>'.$row->siswa_jk.'</td>
                    <td>'.$data.'</td>
                    </tr>
                  ';$no++;
                }
            }else {
              echo '<td colspan="8" style="text-align:center;">Data Masih Konsong</td>';
            }
           ?>
      </tbody>
    </table>
  </div>
</div>
