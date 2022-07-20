<!doctype html>
<html lang="en">
  <head>
  <a href="../index.php">Home</a><style>
    .font1{
      font-family:serif, "Times New Roman";
      color:white;
      font-size:25px;
    }
    .font2{
      font-family:serif, "Times New Roman";
      color:#333;
      font-size:18px;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Kasir | Input</title>
  </head>

  <body>
    <div class="container" style="margin-top: 10px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card border-primary">
            <div class="card-headerborder-dark bg-primary">
            <div class="font1"> <center>Input Kasir</center> </div>
            </div>
            <div class="card-body ">
              <form action="simpan_kasir.php" method="POST">
              <div class="font2">
                <div class="form-group">
                  <input type="hidden" name="id_kasir" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>ID Cabang</label>
                  <?php
                      include '../koneksi.php';
                      $sql= "SELECT * FROM cabang";
                      $query=mysqli_query($koneksi,$sql);
                      $a= " ( ";
                      $b= " ) ";
                  ?>
                  <select name="id_cabang" class="form-control">
                  <?php while($row=mysqli_fetch_array($query)){?>
                  <option value= "<?php echo $row['id_cabang']?>"><?php echo $row['id_cabang'].$a.$row['nama_cabang'].$b;?></option>
                  <?php }   ?>
                  </select></div>

                <div class="form-group">
                  <label for="nama">Nama Kasir</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Kasir" required>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Kasir" rows="3" required></textarea>
                </div>
                
                <div class="form-group">
                <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" required>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" class="form-control" name="nomor_telp" placeholder="Masukkan Nomor Telepon Kasir" required>
                </div><br>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-danger">RESET</button>
                <button type="button" onclick="location.href='view_kasir.php'" class="btn btn-primary">LIHAT DATA</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
