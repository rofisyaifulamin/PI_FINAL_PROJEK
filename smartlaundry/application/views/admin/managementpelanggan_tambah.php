      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Management Pelanggan
            <small>Form Proses Pelanggan</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>admin/managementpelanggan"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Form Proses Pelanggan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Tambah Proses</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" role="form" action="<?php echo base_url(). 'admin/tambah_proses'; ?>">
                  <div class="box-body">
                  <?php 
                    $no = 0;
                    foreach ($prosesloundry as $pr) {
                      $no = $pr->id_proses;
                    }
                  ?>
                    <div class="form-group">
                      <label for="exampleInputNumber1">ID Proses </label>
                      <input type="number" readonly="readonly" class="form-control" id="id_proses" name="id_proses" value="<?php echo $no+1; ?>">
                    </div>
                    <div class="form-group">
                      <label>ID Pelanggan</label>
                      <select class="form-control" id="id_pelanggan" name="id_pelanggan" required>
                        <option value=""> == Pilih Pelanggan == </option>
                        <?php
                          foreach($pelanggan as $p) {
                        ?>
                        <option> 
                          <?php 
                            echo $p->id_pelanggan;
                            echo " || ";
                            echo $p->nama;
                          ?>    
                        </option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNumber1">Jumlah </label>
                      <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNumber1">Berat </label>
                      <input type="decimal" class="form-control" id="berat" name="berat" placeholder="Berat" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNumber1">Keterangan </label>
                      <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNumber1">Total </label>
                      <input type="number" class="form-control" id="total" name="total" placeholder="Total" required>
                    </div>
              </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       


