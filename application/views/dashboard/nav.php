<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" >
    </head>
  <body>
      <nav class="navbar navbar-default" style="background-color:#3c8dbc;">
        <div class="container">
          <ul class="nav navbar-nav" style="margin:10px;">
            <li><a href="#" style="font-size:18px; color:#fff;"><strong>APLIKASI ABSENSI SMKN 1 SUBANG</strong></a></li>
            <li class="btn btn-success btn-sm" style="padding:0; margin-right:10px; position:absolute;right:0; margin-right:200px;"><a href="#" style="color:#fff;">PROSES</a></li>
            <li class="btn btn-danger btn-sm" style="padding:0; color:#fff; position:absolute;right:0;margin-right:100px";><a href="<?php echo base_url('Login/logout');?>" style="color:#fff;">SIGN OUT</a></li>
          </ul>
          </ul>
        </div>
      </nav>

      <div class="container">
        <?php $this->load->view($content); ?>
      </div>

    <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>
