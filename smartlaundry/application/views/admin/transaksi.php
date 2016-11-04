      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Transaksi
            <small>Data Transaksi</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>admin/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Transaksi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Transaksi</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No </th>
                        <th>ID Transaksi </th>
                        <th>ID Proses </th>
                        <th>Nama </th>
                        <th>Waktu </th>
                        <th>Total </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $no = 1;
                      foreach ($transaksi as $tr) {
                    ?>
                      <tr>
                        <td><?php echo $no++; ?> </td>
                        <td><?php echo $tr->id_transaksi ?> </td>
                        <td><?php echo $tr->id_proses ?> </td>
                        <td><?php echo $tr->nama ?> </td>
                        <td><?php echo $tr->waktu ?> </td>
                        <td><?php echo $tr->total ?> </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No </th>
                        <th>ID Transaksi </th>
                        <th>ID Proses </th>
                        <th>Nama </th>
                        <th>Waktu </th>
                        <th>Total </th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      