      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Management Pengguna
            <small>Form Tambah Management Pengguna</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Management Pengguna</li>
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
                <?php foreach($user as $u){ ?>
                <form method="post" role="form" action="<?php echo base_url(). 'admin/update_user'; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputText1">ID</label>
                      <input type="text" readonly="readonly" class="form-control" id="id_user" name="id_user" value="<?php echo $u->id_user?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputText1">Username </label>
                      <input type="text" class="form-control" id="username" name="username" value="<?php echo $u->username ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNumber1">Realname </label>
                      <input type="text" class="form-control" id="realname" name="realname" value="<?php echo $u->realname ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNumber1">Password </label>
                      <input type="text" class="form-control" id="password" name="password" value="<?php echo $u->password ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNumber1">Nomor HP </label>
                      <input type="number" class="form-control" id="phone_number" name="phone_number" value="<?php echo $u->phone_number?>" ">
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
       


