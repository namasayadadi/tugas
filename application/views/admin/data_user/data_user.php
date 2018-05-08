<section class="content-header">
  <h1>
    Data User
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data User</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box" style="border-top:2px solid #00a65a;">
        <div class="box-header">
          <h3 class="box-title">Data User</h3>
        </div>
        <div class="box-body">
          <a href="<?php echo base_url('user/tambah');?>" class="btn btn-success">Tambah Data</a><br><br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>PENGGUNA</th>
                <th>USER LEVEL</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
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
                          <td>'.$row->user_nama.'</td>
                          <td>'.$row->user_level.'</td>
                          <td>'.$row->user_username.'</td>
                          <td>'.$row->user_password.'</td>
                          <td>
                          <a href="'.base_url('user/edit/'.$row->user_id).'" class="btn btn-success btn-xs">Edit</a>
                          <a href="'.base_url('user/hapus/'.$row->user_id).'" class="btn btn-danger btn-xs">Hapus</a>
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
