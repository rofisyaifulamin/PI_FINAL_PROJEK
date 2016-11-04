      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Pendaftaran
            <small>Form Pendaftaran</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pendaftaran</li>
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
                  <h3 class="box-title">Form Pendaftaran Loundry</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" role="form" action="<?php echo base_url(). 'admin/form_tambah'; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputText1">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputText1">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNumber1">No. HP</label>
                      <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP" required>
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
       


