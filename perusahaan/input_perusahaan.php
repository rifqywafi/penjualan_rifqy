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
    <title>Perusahaan | Input</title>
  </head>

  <body>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card border-primary">
            <div class="card-headerborder-dark bg-primary">
            <div class="font1"> <center>Input Perusahaan</center> </div>
            </div>
            <div class="card-body ">
              <form action="simpan_perusahaan.php" method="POST">
              <div class="font2">
                <div class="form-group">
                  <input type="hidden" name="id_perusahaan" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama Perusahaan</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Perusahaan" required>
                </div>
                
                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" class="form-control" name="nomor_telp" placeholder="Masukkan No Telepon Perusahaan"  required>
                </div>
                
                <div class="form-group">
                  <label>Email Perusahaan</label>
                  <input type="email" class="form-control" name="email" placeholder="Masukkan Email Perusahaan" required>
                </div>

                <div class="form-group">
                  <label>Tanggal Berdiri Perusahaan</label><br>
                  <input type="date" name="tanggal_berdiri" placeholder="Masukkan Tanggal Berdiri Perusahaan"  class="form-control" required>
                </div>
                <div class="form-group">
                  <label>NPWP Perusahaan</label>
                  <input type="text" class="form-control" name="npwp" placeholder="Masukkan Input Perusahaan"  required>
                </div>
                </div><br>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-danger">RESET</button>
                <button type="button" onclick="location.href='view_perusahaan.php'" class="btn btn-primary">LIHAT DATA</button>

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
