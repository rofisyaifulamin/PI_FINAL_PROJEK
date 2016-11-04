      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Management User
            <small>Pengaturan Pengguna</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>admin/managementpengguna"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Management Pengguna</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-2">
              <a href="<?php echo base_url();?>admin/managementpengguna_tambah" class="btn btn-block btn-primary">Tambah User</a>
              <br>
            </div>

            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data User</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No </th>
                        <th>Username </th>
                        <th>Realname </th>
                        <th>Password </th>
                        <th>No.HP </th>
                        <th>Aksi </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1 ;
                    foreach($user as $u){
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u->username ?></td>
                        <td><?php echo $u->realname ?></td>
                        <td><?php echo $u->password ?></td>
                        <td><?php echo $u->phone_number ?></td>
                        <td>
                          <?php echo anchor('admin/edit_user/'.$u->username,'Edit'); ?>
                          <?php echo anchor('admin/hapus_user/'.$u->username,'Hapus'); ?>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No </th>
                        <th>Username </th>
                        <th>Realname </th>
                        <th>Password </th>
                        <th>No.HP </th>
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
