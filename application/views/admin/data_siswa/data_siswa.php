<section class="content-header">
  <h1>
    Data Siswa
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Siswa</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box" style="border-top:2px solid #00c0ef;">
        <div class="box-header">
          <h3 class="box-title">Data Siswa Kelas : XI RPL1</h3>
        </div>
        <div class="box-body">
          <table id="dataTables-example" class="table table-bordered table-hover">
            <a href="<?php echo base_url('siswa/tambah');?>" class="btn btn-success">Tambah Data</a><br><br>
            <thead>
              <tr>
                <th>NO</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>NAMA</th>
                <th>JK</th>
                <th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                  if ($query->num_rows() > 0) {
                      $no=1;
                      foreach ($query->result() as $row) {
                        echo '
                          <tr>
                          <td>'.$no.'</td>
                          <td>'.$row->siswa_nisn.'</td>
                          <td>'.$row->siswa_nis.'</td>
                          <td>'.$row->siswa_nama.'</td>
                          <td>'.$row->siswa_jk.'</td>
                          <td>'.$row->siswa_tmp_lahir.'</td>
                          <td>'.$row->siswa_tgl_lahir.'</td>
                          <td>
                          <a href="'.base_url('siswa/edit/'.$row->siswa_id).'" class="btn btn-success btn-xs">Edit</a>
                          <a href="'.base_url('siswa/hapus/'.$row->siswa_id).'" class="btn btn-danger btn-xs">Hapus</a>
                          </td>
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
