<?php
    include "assets/navbar.php";
?>
<body>

    <br>
    <h4 class="text-center">Profil</h3>
    <div class="container">
        <br>
        <img class="gbr" src="assets/gambar/prof.jpg" style="border-radius:50%"class="img-thumbnail"alt="">
        <br>
    </div>
    <div class="container">
    <div class="col">
      <h5 class="text-center">YOHAN SURYADI</h5>
      <hr class="text-center" style="width:80%; margin: 0 10% 0 10%; color:black;">
      </div>
      <div class="row justify-content-center">
    <div class="col-2">
        <i class="far fa-envelope"></i>
    </div>
    <div class="col-7">
        yohansuryadi@gmail.com
    </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-2">
        <i class="fa fa-lock"></i>
    </div>
    <div class="col-7">
        e****************8
    </div>
  </div>
        <br><br>
        <div class="row justify-content-center">
        <button type="button" class="btn btn-outline-secondary btn-sm" onclick="location.href='donasi.php';" style="width: 80%;" >
        <i class="fas fa-hand-holding-heart" style="margin-right: 24px;"></i>    Donasi Saya
    </button>
        </div>
        </div>
      </div>
      <br>
      <div class="container">
          
        <div class="row justify-content-center">
            <button type="button" class="btn btn-outline-secondary btn-sm" onclick="location.href='pengaturan.php';" style="width: 80%;" >
            <div>
        <i class="fas fa-cog"></i>    Pengaturan Akun
    </button>
         
      </div>
          
    </div>
    <div class="container">
        <br>
        <img class="gbr gbr2" src="assets/logo.png" style="border-radius:50%"class="img-thumbnail"alt="">
        <br>
    </div>
</body>
<?php
    include "assets/footer.php";
?>