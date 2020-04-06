<?php
require_once('koneksi.php');
$nama ="";
$kendaraan="";
$plat="";
$userro="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nama = $_POST['nama'];
    $query = "SELECT * FROM tempat WHERE nama = '$nama'";
    $result = $connect->query($query);
    $row = $result->fetch_assoc();
    if ($row['nama'] != ""){
        $userro = "Username telah terpakai !!";
    }else{
        $nama = $_POST ['nama'];
        $kendaraan = $_POST ['kendaraan'];
        $plat = $_POST ['plat'];
        $query = "insert into tempat (nama,sepeda,plat) values ('$nama','$kendaraan','$plat')";
        $connect->query($query);
        header("Location: home.php");
    } 
}
?>

    <!DOCTYPE html>
        <html lang="en">
        <head>
          <title>Tambah data</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        </head>
        <body>

        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner" >
             <div style="
             padding-top: 15vw;
             margin-top: 4.7vw;
            width:28vw;
            height: 32vw;
            font-family: sans-serif;
            font-size:1vw;
            border-radius:20px;
            text-align: center;
            margin-bottom: -300px;
            padding: 2vw;
            z-index: 2;
            background-color: white;
            margin-left: 530px">
            <img src=note7.png alt="Triangle" style="width: 3vw;height: 3vw;margin-bottom: -3vw;">
        <div class="container"style ="" >
    <form method="POST" action ="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="form-group">
            <label type="text" style="margin-top: 4vw;">Nama :</label>
            <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $nama?>">
        </div>
        <div class="form-group">
            <label type="text" >Kendaraan :</label>
            <input type="text" class="form-control"  placeholder="Kendaraan" name="kendaraan" value="<?php echo $kendaraan?>">
        </div>
        <div class="form-group">
            <label>Plat Nomor :</label>
            <input type="text" class="form-control"  placeholder="Plat Nomor" name="plat" value="<?php echo $plat?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
        </div>
            <div class="carousel-item active" data-interval="10000" style=" z-index: -1; margin-top: -18vw;">
              <img src=note1.jpg class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000" style=" z-index: -1; margin-top: -17vw;">
              <img src="note4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" style=" z-index: -1; margin-top: -18vw;">
              <img src="note6.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        </body>
        </html>