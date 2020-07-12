  <?php defined('BASEPATH') or exit('No direct script access allowed');
    $this->load->view("admin/_part/head.php") ?>
  <!DOCTYPE html>
  <html lang="en">


  <body class="hold-transition sidebar-mini">
      <div class="wrapper">
          <!-- Navbar -->
          <?php $this->load->view("admin/_part/navbar.php") ?>
          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
          <?php $this->load->view("admin/_part/sidebar.php") ?>

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <div class="content-header">
                  <?php $this->load->view("admin/_part/breadcrumb.php") ?>
              </div>
              <!-- /.content-header -->
              <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

</div>
<!-- /.container-fluid -->
<div class="card mb-3" style="max-width: 540px;">
<div class="row no-gutters">
<div class="col-md-4">
<img src="<?php echo base_url('/assets/img/user.png');?>" class="card-img" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title"><?php echo ucfirst($this->session->userdata('username')); ?></h5>
<h5 class="card-text"><?= $this->db->db_select('users','email'); ?></h5>
</div>
</div>
</div>
</div>

</div>
          <!-- /.content-wrapper -->

          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
              <!-- Control sidebar content goes here -->
          </aside>
          <!-- /.control-sidebar -->

          <!-- Main Footer -->
          <?php $this->load->view("admin/_part/footer.php") ?>
      </div>
      <!-- jQuery -->
      <script src="<?php echo base_url('./assets/plugins/jquery/jquery.min.js') ?>"></script>
      <!-- Bootstrap 4 -->
      <script src="<?php echo base_url('./assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url('./assets/js/adminlte.min.js') ?>"></script>
  </body>

  </html>