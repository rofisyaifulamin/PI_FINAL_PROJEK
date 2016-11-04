      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Pendaftaran
            <small> Form Edit Pendaftaran</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Pendaftaran</li>
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
                  <h3 class="box-title"> Form Edit Pendaftaran Loundry</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php foreach($pelanggan as $p) { ?>
                <form method="post" role="form" action="<?php echo base_url().'admin/update_pelanggan'; ?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputText1">ID Pelanggan</label>
                      <input type="number" readonly="readonly" class="form-control" id="id_pelanggan" name="id_pelanggan" value="<?php echo $p->id_pelanggan ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputText1">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $p->nama ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputText1">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $p->alamat ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNumber1">No. HP</label>
                      <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?php echo $p->no_hp ?>">
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
       


