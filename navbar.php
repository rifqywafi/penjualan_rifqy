
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
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" a href="https://indomaret.com" target="_blank" ><img src="../img/logo.png" width="125px" height="40px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" aria-current="page" href="../index.php">Home </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="../supplier/view_supplier.php">Supplier </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="../perusahaan/view_perusahaan.php">Perusahaan </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="../kategori/view_kategori.php">Kategori </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="../member/view_member.php">Member </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="../barang/view_barang.php">Barang </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="../kasir/view_kasir.php">Kasir </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="../metode/view_metode.php">Metode Pembayaran </a> 
        </li>
        <li class="nav-item">
          <a class="nav-link bgnav" style="color:white;" href="../cabang/view_cabang.php">Cabang </a> 
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle bgnav" style="color:white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transaksi
        </a>
        <div class="dropdown-menu bg-primary bgnav" aria-labelledby="navbarDropdown">
          <a class="dropdown-item bgnav " style="color:white;" href="view_trans">Transaksi</a>
          <a class="dropdown-item bgnav" style="color:white; " href="view_dt_trans">Transaksi ( Detail )</a>
        </div>
      </li>
      </ul>
      <span class="navbar-text" style="color:white;"><i class="bi bi-person-circle" style="font-size:23px"></i>&nbsp;
      Selamat Datang, Pengguna !
      </span>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>