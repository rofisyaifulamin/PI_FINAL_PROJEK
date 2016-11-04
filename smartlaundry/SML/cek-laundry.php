<?php include('header.php') ?>
    <!--header end-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Cek Laundry
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="index.html">
                  Home
                </a>
              </li>
              <li class="active">
                Profil
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->
        <!--container start-->

    <div class="container">
      <div class="row">
        <div>
          <div class="row">
            <div class="col-md-4">
              <?php include('panel.php') ?>
            </div>
            <div class="col-md-8">
              <div class="blockquote">
                <p><b>Tips</b></p>
                  <p>Masukkan ID kode yang telah tertera didalam nota pembayaran, gunakan kode tersebut untuk mengecek ststus proses pakaian anda</p>
              </div>
              <div id="imaginary_container"> 
                <p>Pencarian Proses </p>
                <div class="input-group stylish-input-group">
                  <input type="text" class="form-control"  placeholder="Masukkan Nomor ID" >
                  <span class="input-group-addon">
                    <button type="submit">
                      <span class="glyphicon glyphicon-search"></span>
                    </button>  
                  </span>
                </div>
              </div>

              <div class="bs-example">
                <form role="form">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Nama</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label>Berat</label> 
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label>Alamat</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label>Keterangan</label> 
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label>No. Telepon/HP</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label>Total</label> 
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label>Jumlah Cuci</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label>Proses</label> 
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
              </div><!-- /.bs-example -->
              <p>*Harap Sabar</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include('footer.php') ?>