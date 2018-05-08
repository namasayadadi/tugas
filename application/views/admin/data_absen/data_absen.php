<section class="content-header">
  <h1>
    Data Absen
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Absen</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box" style="border-top:2px solid #00a65a;">
        <div class="box-header">
          <h3 class="box-title">Data Absen</h3>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
           <thead>
             <tr>
               <th>NO</th>
               <th>NISN</th>
               <th>NIS</th>
               <th>NAMA</th>
               <th>JK</th>
               <th>TEMPAT LAHIR</th>
               <th>TANGGAL LAHIR</th>
               <th>STATUS</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <?php
                 if ($query->num_rows() > 0) {
                     $no=1;
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
                         <td>'.$row->siswa_tmp_lahir.'</td>
                         <td>'.$row->siswa_tgl_lahir.'</td>
                         <td>'.$data.'</td>
                         </tr>
                       ';$no++;
                     }
                 }else {
                   echo '<td colspan="8" style="text-align:center;">Data Masih Konsong</td>';
                 }
                ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
