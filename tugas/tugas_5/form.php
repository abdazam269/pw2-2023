<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>BMI Pasien</title>
</head>
<body>
    <div class="container">
        <h1 class=""> FORM NILAI UJIAN</h1>
        <hr>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form method="POST" action="form.php">
            <div class="form-group row">
                <label for="nim" class="col-2 col-form-label">NIM</label> 
                <div class="col-3">
                    <input id="nim" name="nim" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="mk" class="col-2 col-form-label">PILIH MK</label> 
                <div class="col-3">
                    <select id="mk" name="mk" required="required" class="custom-select">
                        <option value="pemrograman web 2">pemrograman web 2</option>
                        <option value="komunikasi efektif">komunikasi efektif</option>
                        <option value="statistika  dan probabilitas">statistika  dan probabilitas</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-2 col-form-label">NILAI</label> 
                <div class="col-3">
                    <input id="nilai" name="nilai" type="text" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-2 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        
        <hr>
        <?php
        if (isset($_POST["submit"])) {
            require_once "nilai.php";
            echo "<br>";
        }
        
        echo"<hr>";

        echo "<h5>Dosen Mata Kuliah</h5>";
        if (isset($_POST["submit"])) {
            require_once "dosen.php";
        }
        
        echo"<p>STT-NF</p>";
        ?>
        <div>
        </div>
            
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
