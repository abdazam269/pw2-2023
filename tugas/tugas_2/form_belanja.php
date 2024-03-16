<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form belanja php</title>
    <style>
        .price-table {
            margin-top: 20px;
        }
        .price-table th, .price-table td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .form-container {
            flex: 1;
            margin-right: 20px;
        }
        aside {
            flex: 1;
        }
    </style>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="form-container">
        <form action="" method="POST">
          <div class="form-group row">
            <label for="name" class="col-2 col-form-label">Customer</label> 
            <div class="col-6">
              <input id="name" name="name" placeholder="name" type="text" required="required" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-2">Produk</label> 
            <div class="col-10">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="tv"> 
                <label for="produk_0" class="custom-control-label">TV</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="kulkas"> 
                <label for="produk_1" class="custom-control-label">KULKAS</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="mesin cuci"> 
                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-2 col-form-label">JUMLAH</label> 
            <div class="col-3">
              <input id="jumlah" name="jumlah" placeholder="jumlah" type="text" required="required" class="form-control">
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
    </div>
    <aside>
        <table class="price-table">
            <thead>
                <tr>
                <th colspan="2" style="text-align: center;">DAFTAR HARGA</th>                      
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TV</td>
                    <td>Rp 4.200.000</td>
                </tr>
                <tr>
                    <td>KULKAS</td>
                    <td>Rp 3.100.000</td>
                </tr>
                <tr>
                    <td>MESIN CUCI</td>
                    <td>Rp 3.900.000</td>
                </tr>
            </tbody>
        </table>
    </aside>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if(isset($_POST['submit'])){
                $customer = $_POST['name'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];
                $harga = 0;

                if($produk == 'tv') {
                    $harga = 4200000;
                } elseif ($produk == 'kulkas') {
                    $harga = 3100000;
                } elseif ($produk == 'mesin cuci') {
                    $harga = 3900000;
                }

                $total = $harga * $jumlah;

                
                echo "<p>Customer: $customer</p>";
                echo "<p>Produk: $produk</p>";
                echo "<p>Jumlah: $jumlah</p>";
                echo "<p>Total Harga: Rp " . number_format($total, 0, ',', '.') . "</p>";
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>
