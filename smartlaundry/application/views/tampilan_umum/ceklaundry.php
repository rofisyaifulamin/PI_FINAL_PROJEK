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
                <form role="form" action="<?php echo base_url();?>umum/ceklaundry" method="post" >
                <div class="input-group stylish-input-group">
                  <input type="text" id="id_proses" name="id_proses" class="form-control"  placeholder="Masukkan Nomor ID Proses" >
                  <span class="input-group-addon">
                    <button type="submit"><span class="glyphicon glyphicon-search"></span>
                    </button>  
                  </span>
                  </div>
                </form>
              </div>

              <div class="bs-example">
                <?php 
                foreach ($prosesloundry as $pr) {   
                ?>
                <form role="form" a>
                  <div class="row">
                    <div class="col-md-6">
                      <label>ID Proses</label>
                      <input readonly="readonly"  name="id_proses" id="id_proses" type="text" class="form-control" value="<?php echo $pr->id_proses?>">
                    </div>
                    <?php
                    $hasil_id_pelanggan = $pr->id_pelanggan;
                    $nama_pelanggan = "";
                    foreach ($pelanggan as $p) {
                        if($p->id_pelanggan == $hasil_id_pelanggan){
                          $nama_pelanggan = $p->nama;
                        }
                      }
                    ?>
                    <div class="col-md-6">
                      <label>Nama</label>
                      <input readonly="readonly" id="nama" name="nama" type="text" class="form-control" value="<?php echo $nama_pelanggan?>">
                    </div>
                    <div class="col-md-6">
                      <label>Alamat</label>
                      <input readonly="readonly" id="alamat" name="alamat" type="text" class="form-control" value="<?php echo $p->alamat?>">
                    </div>

                    <div class="col-md-6">
                      <label>No. Telepon/HP</label>
                      <input readonly="readonly" id="no_hp" name="no_hp" type="text" class="form-control" value="<?php echo $p->no_hp?>">
                    </div>

                    <div class="col-md-6">
                      <label>Keterangan</label> 
                      <input readonly="readonly" id="keterangan" name="keterangan" type="text" class="form-control" value="<?php echo $pr->keterangan ?>">
                    </div>

                    <div class="col-md-6">
                      <label>Total</label> 
                      <input readonly="readonly" id="total" name="total" type="text" class="form-control" value="<?php echo $pr->total ?>">
                    </div>

                    <div class="col-md-6">
                      <label>Jumlah Cuci</label>
                      <input readonly="readonly" id="jumlah" name="jumlah" type="text" class="form-control" value="<?php echo $pr->jumlah ?>">
                    </div>

                    <div class="col-md-6">
                      <label>Proses</label> 
                      <input readonly="readonly" id="proses" name="proses" type="text" class="form-control" value="<?php echo $pr->proses ?>">
                    </div>
                    <?php } ?>
                  </div>
                </form>
              </div><!-- /.bs-example -->
              <p>*ID Pelanggan Wajib di Isi</p>
            </div>
          </div>
        </div>
      </div>
    </div>