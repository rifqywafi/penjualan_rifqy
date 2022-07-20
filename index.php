<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<!doctype html>
<html lang="en">
<head><style>
  .bgnav:hover{
    background-color:red;
    opacity:0.85;
    color:white;
    border-radius:5px;
  }
  .bgnav:active{
    background-color:red;
    opacity:0.85;
    color:white;
    border-radius:5px;
  }
  .font1{
      font-family:serif, "Times New Roman";
      color:white;
      font-size:25px;
  }
  .font2{
      font-family:serif, "Times New Roman";
      color:black;
      font-size:20px;
  }
  .bt-hover:hover{
        color:white;
        background-color:red;
        opacity:0.85;
  }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" a href="https://indomaret.com" target="_blank" ><img src="img/logo.png" width="125px" height="40px" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" aria-current="page" href="index.php">Home </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="supplier/view_supplier.php">Supplier </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="perusahaan/view_perusahaan.php">Perusahaan </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="kategori/view_kategori.php">Kategori </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="member/view_member.php">Member </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="barang/view_barang.php">Barang </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="kasir/view_kasir.php">Kasir </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="metode/view_metode.php">Metode Pembayaran </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="cabang/view_cabang.php">Cabang </a> 
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle bgnav" style="color:white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transaksi
        </a>
        <div class="dropdown-menu bg-primary bgnav" aria-labelledby="navbarDropdown">
          <a class="dropdown-item bgnav" style="color:white;" href="view_trans">Transaksi</a>
          <a class="dropdown-item bgnav" style="color:white;" href="view_dt_trans">Transaksi ( Detail )</a>
        </div>
      </li>
      </ul>
      <span class="navbar-text" style="color:white;"><i class="bi bi-person-circle" style="font-size:23px"></i>&nbsp;
      Selamat Datang, Pengguna !
      </span>
    </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
<div class="row" style="margin-top:20px;margin-left:8px;margin-right:8px;">
    <div class="col-sm-3">
        <div class="card border-primary">
            <h5 class="card-header bg-primary font1" style="color:white;">Supplier</h5>
                <div class="card-body font2">
                    <p class="card-text"><?php
                    include 'koneksi.php';
                    $sqljumlah= "SELECT COUNT(*) FROM supplier";
                    $result=mysqli_query($koneksi,$sqljumlah);
                    while($jumlah_sup=mysqli_fetch_array($result)){
                    echo "Jumlah Supplier : ",$jumlah_sup['COUNT(*)']?><br><br>
                    <a href="view_supplier.php" class="btn btn-warning bt-hover">Lihat</a>
                    <a href="input_supplier.php" class="btn btn-warning bt-hover">Tambah</a>
                </div>
            </div>
        </div>
    <div class="col-sm-3">
        <div class="card border-primary">
            <h5 class="card-header bg-primary font1" style="color:white;">Perusahaan</h5>
                <div class="card-body font2">
                    <p class="card-text"><?php
                    include 'koneksi.php';
                    $sqljumlah= "SELECT COUNT(*) FROM perusahaan";
                    $result=mysqli_query($koneksi,$sqljumlah);
                    while($jumlah_pt=mysqli_fetch_array($result)){
                    echo "Jumlah Perusahaan : ",$jumlah_pt['COUNT(*)']?><br><br>
                    <a href="view_perusahaan.php" class="btn btn-warning bt-hover">Lihat</a>
                    <a href="input_perusahaan.php" class="btn btn-warning bt-hover">Tambah</a>
                </div>
            </div>
        </div>
    <div class="col-sm-3">
        <div class="card border-primary">
            <h5 class="card-header bg-primary font1" style="color:white;">Cabang</h5>
                <div class="card-body font2">
                    <p class="card-text"><?php
                    include 'koneksi.php';
                    $sqljumlah= "SELECT COUNT(*) FROM cabang";
                    $result=mysqli_query($koneksi,$sqljumlah);
                    while($jumlah_cb=mysqli_fetch_array($result)){
                    echo "Jumlah Cabang : ",$jumlah_cb['COUNT(*)']?><br><br>
                    <a href="view_cabang.php" class="btn btn-warning bt-hover">Lihat</a>
                    <a href="input_cabang.php" class="btn btn-warning bt-hover">Tambah</a>
                </div>
            </div>
        </div>
    <div class="col-sm-3">
        <div class="card border-primary">
            <h5 class="card-header bg-primary font1" style="color:white;">Member</h5>
                <div class="card-body font2">
                    <p class="card-text"><?php
                    include 'koneksi.php';
                    $sqljumlah= "SELECT COUNT(*) FROM member";
                    $result=mysqli_query($koneksi,$sqljumlah);
                    while($jumlah_mb=mysqli_fetch_array($result)){
                    echo "Jumlah Member : ",$jumlah_mb['COUNT(*)']?><br><br>
                    <a href="view_member.php" class="btn btn-warning bt-hover">Lihat</a>
                    <a href="input_member.php" class="btn btn-warning bt-hover">Tambah</a>
                </div>
            </div>
        </div>
</div><br>
<div class="row" style="margin-top:20px;margin-left:8px;margin-right:8px;">
<div class="col-sm-3">
    <div class="card border-primary">
            <h5 class="card-header bg-primary font1" style="color:white;">Kasir</h5>
                <div class="card-body font2">
                    <p class="card-text"><?php
                    include 'koneksi.php';
                    $sqljumlah= "SELECT COUNT(*) FROM kasir";
                    $result=mysqli_query($koneksi,$sqljumlah);
                    while($jumlah_ks=mysqli_fetch_array($result)){
                    echo "Jumlah Kasir : ",$jumlah_ks['COUNT(*)']?><br><br>
                    <a href="view_kasir.php" class="btn btn-warning bt-hover">Lihat</a>
                    <a href="input_kasir.php" class="btn btn-warning bt-hover">Tambah</a>
                </div>
            </div>
        </div>
    <div class="col-sm-3">
        <div class="card border-primary">
            <h5 class="card-header bg-primary font1" style="color:white;">Barang</h5>
                <div class="card-body font2">
                    <p class="card-text"><?php
                    include 'koneksi.php';
                    $sqljumlah= "SELECT COUNT(*) FROM barang";
                    $result=mysqli_query($koneksi,$sqljumlah);
                    while($jumlah_ks=mysqli_fetch_array($result)){
                    echo "Jumlah Barang : ",$jumlah_ks['COUNT(*)']?><br><br>
                    <a href="view_barang.php" class="btn btn-warning bt-hover">Lihat</a>
                    <a href="input_barang.php" class="btn btn-warning bt-hover">Tambah</a>
                </div>
            </div>
        </div>
    <div class="col-sm-3">
        <div class="card border-primary">
            <h5 class="card-header bg-primary font1" style="color:white;">Metode Pembayaran</h5>
                <div class="card-body font2">
                    <p class="card-text"><?php
                    include 'koneksi.php';
                    $sqljumlah= "SELECT COUNT(*) FROM metode_pembayaran";
                    $result=mysqli_query($koneksi,$sqljumlah);
                    while($jumlah_mp=mysqli_fetch_array($result)){
                    echo "Jumlah Metode : ",$jumlah_mp['COUNT(*)']?><br><br>
                    <a href="view_metode.php" class="btn btn-warning bt-hover">Lihat</a>
                    <a href="input_metode.php" class="btn btn-warning bt-hover">Tambah</a>
                </div>
            </div>
        </div>
    <div class="col-sm-3">
        <div class="card border-primary">
            <h5 class="card-header bg-primary font1 " style="color:white;">Kategori</h5>
                <div class="card-body font2">
                    <p class="card-text"><?php
                    include 'koneksi.php';
                    $sqljumlah= "SELECT COUNT(*) FROM kategori";
                    $result=mysqli_query($koneksi,$sqljumlah);
                    while($jumlah_kt=mysqli_fetch_array($result)){
                    echo "Jumlah Kategori : ",$jumlah_kt['COUNT(*)']?><br><br>
                    <a href="view_kategori.php" class="btn btn-warning bt-hover">Lihat</a>
                    <a href="input_kategori.php" class="btn btn-warning bt-hover">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php } } } } } } } } ?>
</body>
</html>