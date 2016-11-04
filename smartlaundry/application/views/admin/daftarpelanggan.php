      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar Pelanggan
            <small>Tabel Daftar Pelanggan</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Daftar Pelanggan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-2">
              <a href="<?php echo base_url();?>admin/formpendaftaran" class="btn btn-block btn-primary"> <i class="fa fa-user-plus"></i> Tambah Pelanggan</a>
              <br>
            </div>

            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Pelanggan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID Pelanggan </th>
                        <th>Nama </th>
                        <th>Alamat </th>
                        <th>NO HP </th>
                        <th>Aksi </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($pelanggan as $p){
                      ?>
                      <tr>
                        <td><?php echo $p->id_pelanggan ?></td>
                        <td><?php echo $p->nama ?></td>
                        <td><?php echo $p->alamat ?></td>
                        <td><?php echo $p->no_hp ?></td>
                        <td>
                          <?php echo anchor('admin/edit_pelanggan/'.$p->id_pelanggan,'Edit'); ?>
                          <?php echo anchor('admin/hapus_pelanggan/'.$p->id_pelanggan,'Hapus'); ?>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID Pelanggan </th>
                        <th>Nama </th>
                        <th>Alamat </th>
                        <th>NO HP </th>
                        <th>Aksi </th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       

