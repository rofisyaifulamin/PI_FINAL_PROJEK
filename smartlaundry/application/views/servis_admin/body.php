<?php
  if ($this->session->userdata('username')==null) {
    redirect('');
  }else{
?>
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url();?>admin" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>S</b>T</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Smart</b>LAUNDRY</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>dist/img/logoSML1.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url();?>dist/img/logoSML1.jpg" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $_SESSION['username']; ?> - Web Developer
                      <small>Owner since Nov. 2016</small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?php echo base_url();?>loginadmin1995/logout" class="btn btn-warning btn-flat" onclick="return confirm ('Anda yakin ?')"> <i class="fa fa-sign-out"></i> <span> Sign out</span></a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>dist/img/logoSML1.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Hai.. <?php echo $_SESSION['username']; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Nice to Meet You</a>
            </div>
          </div>

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="<?php echo base_url();?>admin/index">
                <i class="fa fa-dashboard"></i> <span> Dashboard</span></i>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url();?>admin/formpendaftaran">
                <i class="fa fa-user-plus"></i> <span> Pendaftaran</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url();?>admin/daftarpelanggan">
                <i class="fa fa-users"></i> <span> Daftar Pelanggan</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url();?>admin/managementpelanggan">
                <i class="fa fa-list"></i> <span> Manage Pelanggan</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url();?>admin/history">
                <i class="fa fa-history"></i> <span> History</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url();?>admin/transaksi">
                <i class="fa fa-dollar"></i> <span> Transaksi</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url();?>admin/managementpengguna">
                <i class="fa fa-user"></i> <span> Manage Pengguna</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

<?php } ?>