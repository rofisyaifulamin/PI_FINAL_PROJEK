      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            History
            <small>History Proses Laundry</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">History</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data History</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No </th>
                        <th>ID History </th>
                        <th>ID Proses </th>
                        <th>Nama </th>
                        <th>Status </th>
                        <th>Waktu Ambil</th>
                        <th>Aksi </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1 ;
                    foreach($history as $h){
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $h->id_history ?></td>
                        <td><?php echo $h->id_proses ?></td>
                        <td>
                          <?php
                          $hasil1 = $h->id_proses;
                          $hasil2;
                          foreach($prosesloundry as $pr){
                            if($pr->id_proses == $hasil1){
                              $hasil2 = $pr->id_pelanggan;
                              foreach($pelanggan as $p){
                                if($p->id_pelanggan == $hasil2){
                                  echo $p->nama;
                                }
                              }
                            }
                          }
                          ?>
                        </td>
                        <td><?php echo $h->status ?></td>
                        <td><?php echo $h->waktu?></td>
                        <td>
                          <?php echo anchor('admin/hapus_history/'.$h->id_history,'Hapus'); ?>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No </th>
                        <th>ID History </th>
                        <th>ID Proses</th>
                        <th>Nama </th>
                        <th>Status </th>
                        <th>Waktu Ambil</th>
                        <th>Aksi </th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       