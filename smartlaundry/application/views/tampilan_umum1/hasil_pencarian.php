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

                <!-- Default box -->
                <div class="callout callout-green">
                <!-- search form -->

                <?php 
                foreach ($pelanggan as $p) {   
                
                ?>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Hasil Pencarian</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i>  ID Pelanggan</strong>
                  <p class="text-muted">
                    <?php echo $p->id_pelanggan?>
                  </p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Name</strong>
                  <p class="text-muted"><?php echo $p->nama?></p>

                  <hr>
                  <?php 

                  foreach ($prosesloundry as $pr) {
                    # code...
                    
                  ?>
                  <strong><i class="fa fa-pencil margin-r-5"></i> Proses</strong>
                  <p>
                    <?php echo $pr->proses ?>
                  </p>
                  
                  <hr>

                  <strong><i class="fa fa-file-text-o margin-r-5"></i> Keterangan</strong>
                  <p>
                  <?php 
                  if ($pr->proses == "Dalam Antrian") {
                    echo "Harap - Harap Sabar";
                  }elseif ($pr->proses == "Di Cuci") { 
                    echo "Pakaian anda Sedang dalam proses pencucian, Harap Sabar ";
                  }elseif ($pr->proses == "Di Jemur") {
                    echo "Pakaian anda Sedang dalam proses penjemuran, Harap Sabar ";
                  }elseif ($pr->proses == "Di Strika") {
                    echo "Pakaian anda sedang dalam proses strika, Harap Sabar";
                  }else {
                    echo "Silahkan anda mengambil pakaian anda, Pakaian anda siap diambil, Horey";
                  }
                  ?>  

                  <?php } ?>
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
                <?php } ?>
                
                </div>
                
            </section><!-- /.content -->



            <!-- right col (We are only adding the ID to make the widgets sortable)-->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      