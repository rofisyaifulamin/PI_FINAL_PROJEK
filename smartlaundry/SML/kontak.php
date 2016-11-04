<?php include('header.php') ?>
	<div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Hubungi Kami
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
                Kontak
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->
    <div class="contact-map">
      <div id="map-canvas" style="width: 100%; height: 400px">
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-5 address">
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              Alamat
            </h4>
            <address>
              Jl. Arjuna No. 12, Pendrikan Kidul
              <br>
              Semarang Tengah, Semarang
              <br>
              52311
            </address>
          </section>
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              Jam Kerja
            </h4>
            <p>
              Senin - Jum'at (08.00 - 17.00 WIB)
              <br>
              Sabtu - Minggu (08.00 - 12.00 WIB)
            </p>
          </section>
          <section class="contact-infos">
            <h4>
              Telepon
            </h4>
            <p>
              <i class="icon-phone">
              </i>
              (024) 890-8244
            </p>

            <p>
              <i class="icon-phone">
              </i>
              +62857-8710-7171
            </p>

          </section>
        </div>
        <div class="col-lg-7 col-sm-7 address">
          <h4>
            Jika anda mempunyai pertanyaan silahkan mengisikan form kontak dibawah ini. Akan kami response 1×24 Jam setelah pengiriman pesan Anda:
          </h4>
          <div class="contact-form">
            <form role="form">
              <div class="form-group">
                <label for="name">
                  Nama
                </label>
                <input type="text" placeholder="" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">
                  Email
                </label>
                <input type="text" placeholder="" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  Telepon
                </label>
                <input type="text" id="phone" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  Pesan
                </label>
                <textarea placeholder="" rows="5" class="form-control">
                </textarea>
              </div>
              <button class="btn btn-info" type="submit">
                Submit
              </button>
            </form>

          </div>
        </div>
      </div>

    </div>
<?php include('footer.php') ?>