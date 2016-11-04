      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-2 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <?php 
                  $no = 0;
                  foreach ($prosesloundry as $pr) {
                    # code...   
                    if($pr->proses == "Dalam Antrian"){
                      $no++;  
                    }            
                  ?>
                  <?php } ?>
                  <h3><?php echo $no ?></h3>

                  <p>Dalam Antrian</p>
                </div>
                <div class="icon">
                  <i class="fa fa-frown-o"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/managementpelanggan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <?php 
                  $no = 0;
                  foreach ($prosesloundry as $pr) {
                    # code...   
                    if($pr->proses == "Di Cuci"){
                      $no++;  
                    }            
                  ?>
                  <?php } ?>
                  <h3><?php echo $no ?></h3>

                  <p>Di Cuci</p>
                </div>
                <div class="icon">
                  <i class="fa fa-recycle"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/managementpelanggan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <?php 
                  $no = 0;
                  foreach ($prosesloundry as $pr) {
                    # code...   
                    if($pr->proses == "Di Jemur"){
                      $no++;  
                    }            
                  ?>
                  <?php } ?>
                  <h3><?php echo $no ?></h3>

                  <p>Di Jemur</p>
                </div>
                <div class="icon">
                  <i class="fa fa-sun-o"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/managementpelanggan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <?php 
                  $no = 0;
                  foreach ($prosesloundry as $pr) {
                    # code...   
                    if($pr->proses == "Di Strika"){
                      $no++;  
                    }            
                  ?>
                  <?php } ?>
                  <h3><?php echo $no ?></h3>

                  <p>Di Strika</p>
                </div>
                <div class="icon">
                  <i class="fa fa-strikethrough "></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/managementpelanggan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-olive">
                <div class="inner">
                  <?php 
                  $no = 0;
                  foreach ($prosesloundry as $pr) {
                    # code...   
                    if($pr->proses == "Siap Diambil" && $pr->status == "Belum Diambil"){
                      $no++;  
                    }            
                  ?>
                  <?php } ?>
                  <h3><?php echo $no ?></h3>

                  <p>Siap Diambil</p>
                </div>
                <div class="icon">
                  <i class="fa fa-smile-o"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/managementpelanggan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <div class="col-md-12">
              <!-- AREA CHART -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Grafik Transaksi </h3>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="areaChart" style="height:250px"></canvas>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (RIGHT) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       