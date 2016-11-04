      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Management Pelanggan
            <small>Pengaturan Proses Pelanggan</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>admin/managementpelanggan"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Management Proses Pelanggan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row">
            <div class="col-md-2">
              <a href="<?php echo base_url();?>admin/managementpelanggan_tambah" class="btn btn-block btn-primary"><i class="fa fa-plus-square"></i><span> Tambah Proses</span></a>
              <br>
            </div>

            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Proses Pelanggan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" method="post" >
                    <thead>
                      <tr>
                        <th>ID Proses </th>
                        <th>Nama </th>
                        <th>Proses </th>
                        <th>Waktu </th>
                        <th>Jumlah </th>
                        <th>Berat</th>
                        <th>Keterangan</th>
                        <th>Total</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($prosesloundry as $pr){
                      if($pr->status != "Sudah Diambil"){ 
                      ?>
                      <tr>
                        <td><?php echo $pr->id_proses ?></td>
                        <td>
                          <?php 
                            $hasil = $pr->id_pelanggan;
                            foreach($pelanggan as $p){
                              if($p->id_pelanggan == $hasil){
                                echo $p->nama;
                              }
                            }
                          ?>                       
                        </td>
                        <td><?php echo $pr->proses ?></td>
                        <td><?php echo $pr->waktu ?></td>
                        <td><?php echo $pr->jumlah ?></td>
                        <td><?php echo $pr->berat ?></td>
                        <td><?php echo $pr->keterangan ?></td>
                        <td><?php echo $pr->total ?></td>
                        <td>
                          <?php echo anchor('admin/edit_proses/'.$pr->id_proses,'Edit'); ?>
                          <?php echo anchor('admin/ambil_proses/'.$pr->id_proses,'Ambil'); ?>
                          <?php echo anchor('admin/hapus_proses/'.$pr->id_proses,'Hapus'); ?>
                        </td>
                      </tr>
                      <?php }?>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID Proses </th>
                        <th>Nama </th>
                        <th>Proses </th>
                        <th>Waktu </th>
                        <th>Jumlah </th>
                        <th>Berat</th>
                        <th>Keterangan</th>
                        <th>Total</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <!-- right col (We are only adding the ID to make the widgets sortable)-->
        </div><!-- /.row (main row) -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       

