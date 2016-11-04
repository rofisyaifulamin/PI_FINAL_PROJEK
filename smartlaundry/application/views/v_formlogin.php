<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstraplogin.css">

  </head>
  <body>
    <div class="vid-container">
      <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
          <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
      </video>
      <div class="inner-container">
        <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
          <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
        </video>
        <div class="box">
          <form action="<?php echo base_url('loginadmin1995/aksi_login'); ?>" method="post">
            <h1>Login</h1>
            <input type="text" placeholder="Username" name="username" />
            <input type="text" placeholder="Password" name="password" />
            <button type="submit">Sign In</button>
          </form>
        </div>
      </div>
    </div>

    <script src="bootstrap/js/bootstraplogin.js"></script>

  </body>
</html>