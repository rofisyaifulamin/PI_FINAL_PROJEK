      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Management Pelanggan
            <small>Proses Edit Pelanggan</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>admin/managementpelanggan"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Management Proses Pelanggan</li>
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
                  <h3 class="box-title">Form Edit Pengguna</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php foreach($prosesloundry as $pr){ ?>
                <form method="post" role="form" action="<?php echo base_url(). 'admin/update_proses'; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputText1">ID Proses </label>
                      <input type="text" readonly="readonly" class="form-control" id="id_proses" name="id_proses" value="<?php echo $pr->id_proses?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputText1">Nama </label>
                      <input type="text" readonly="readonly" class="form-control" id="id_pelanggan" name="id_pelanggan" value="
                      <?php 
                        $hasil = $pr->id_pelanggan;
                            foreach($pelanggan as $p){
                              if($p->id_pelanggan == $hasil){
                                echo $p->nama;
                              }
                            }
                      ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputText1">Proses </label>
                      <select type="text" class="form-control" id="proses" name="proses">
                        <option><?php echo $pr->proses ?></option>
                        <option>Di Cuci</option>
                        <option>Di Jemur</option>
                        <option>Di Strika</option>
                        <option>Siap Diambil</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputText1">Waktu</label>
                      <input type="text" class="form-control" id="waktu" name="waktu" value="<?php echo $pr->waktu?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputText1">Jumlah</label>
                      <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo $pr->jumlah?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputText1">Berat</label>
                      <input type="decimal" class="form-control" id="berat" name="berat" value="<?php echo $pr->berat?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputText1">Keterangan</label>
                      <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $pr->keterangan?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputText1">Total</label>
                      <input type="text" class="form-control" id="total" name="total" value="<?php echo $pr->total?>">
                    </div>
              </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
                <?php } ?>
              </div><!-- /.box -->
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       


