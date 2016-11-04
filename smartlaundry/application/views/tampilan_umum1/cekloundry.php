      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Cek Loundry
            <small>Cek Status Loundry Anda</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>umum/cekloundry"><i class="fa fa-dashboard"></i> Cek Loundry</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <!-- Main row -->
          <div class="row">
            <!-- Main content -->
            <section class="content">
                <div class="callout callout-info">
                  <h4>Tips</h4>
                  <p>Masukkan id kode yang telah tertera didalam nota pembayaran, gunakan kode tersebut untuk mengecek status proses pakaian anda </p>
                </div>
                <!-- Default box -->
                <div class="callout callout-info">
                <!-- search form -->
                <form action="<?php echo base_url();?>umum/hasil_pencarian" method="post" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="id_pelanggan" class="form-control" id="id_pelanggan" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
                </div>
                </form>
                </div>
                
            </section><!-- /.content -->



            <!-- right col (We are only adding the ID to make the widgets sortable)-->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      