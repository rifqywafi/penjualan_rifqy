<!doctype html>
<html lang="en">
  <head><a href="../index.php">Home</a><style>
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
    <title>Supplier | Input</title>
  </head>

  <body>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card border-primary">
            <div class="card-headerborder-dark bg-primary">
            <div class="font1"> <center>Input Supplier</center> </div>
            </div>
            <div class="card-body ">
              <form action="simpan_supplier.php" method="POST">
              <div class="font2">
                <div class="form-group">
                  <input type="hidden" name="id_supplier" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama Supplier</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Supplier" required>
                </div>
                
                <div class="form-group">
                  <label>Nomor Handphone</label>
                  <input type="text" class="form-control" name="no_hp" placeholder="Masukkan No HP Supplier"  required>
                </div>
                
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Supplier" rows="3" required></textarea>
                </div>

                <div class="form-group">
                  <label>Nomor Rekening</label>
                  <input type="text" class="form-control" name="no_rekening" placeholder="Masukkan No Rekening Supplier"  required>
                </div></div><br>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-danger">RESET</button>
                <button type="button" onclick="location.href='view_supplier.php'" class="btn btn-primary">LIHAT DATA</button>

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
