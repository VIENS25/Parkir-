<html>
<head>
    <title>Parkir</title>
</head>
<body>

    <div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" style="color: white;" href="#" ><img src = 'note12.png' style="width: 1.8vw;height: 1.8vw;float: right;">Menu Utama</a>
                </li>
                </li>
                <li class="nav-item active">
                    <div class="dropdown ">
                        <button type="button" class="btn btn-dark btn-block dropdown-toggle" data-toggle="dropdown">
                            Bantuan
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="contact.php">Contack Us</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" style="color: white;" href="login.php" ><img src = 'note11.png' style="width: 2vw;height: 2vw;float: right;">Logout</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="jumbotron jumbotron-fluid bg-dark" style="color:white;margin-left: 40px;margin-right: 40px;margin-top: 20px;">
        <div class="container">
            <h1 class="display-4">Parkir Angkringan</h1>
            <p class="lead">Merupakan salah satu tempat parkir di dekat alun-alun yang mempunyai sistem cctv dan aman dari pencurian sekaligus rest area menyediakan tempat ngopi, masjid, gereja dll. Semua ada disini</p>
        </div>
    </div>

    <div class="container">
        <h2>Tempat parkir ketika pagi di akhir tahun </h2>
        <img src="parkir2.jpg" class="img-thumbnail" alt="parkirlo" width="850" height="553">
    </div>

    <div class="container" style="margin-top: 30px;margin-bottom: 40px;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kendaraan</th>
                    <th>Plat Nomor</th>
                    <th>Waktu masuk</th>
                    <th>Edit </th>
                    <th>Delete</th>
                    <th>Tambah Data</th>
                </tr>
         </thead>
        <tbody>
     
        <?php 

    include "koneksi.php";
    $query ="SELECT * FROM tempat";
    $Data = $connect->query($query);
    while($result = $Data->fetch_assoc()){
    echo "<tr>";
    echo"<td>".$result['nama']."</td>";
    echo"<td>".$result['sepeda']."</td>";
    echo"<td>".$result['plat']."</td>";
    echo "<td> ".$result["waktu_masuk"]."</td>";
    echo "<td><a class= 'btn btn-primary' href ='update.php?nama=".$result["nama"]."'>Edit Data</a></td>";
    echo "<td><a class= 'btn btn-danger' href ='delete.php?nama=".$result["nama"]."'>Delete</a></td>";
    echo "<td><a class= 'btn btn-primary' href ='regis2.php?nama=".$result["nama"]."'>Tambah Data</a></td>";
    echo"</tr>";
    }
    ?>
           </tbody>
        </table>
    </div>
     <div class="jumbotron jumbotron-fluid bg-dark" style="color:white;margin-top: 20px;margin-bottom: -30px;">
        <div class="container">
         <h2 class="display-4" style="color: white;" >Bussines Partner<img src = 'insta.png' style="width: 4vw;height:4vw;margin-left: 3vw;">
            <img src = 'twiter.png' style="width: 4vw;height:3vw;margin-left: 3vw;">
            <img src = 'facebook.png' style="width: 4.6vw;height:3.7vw;margin-left: 3vw;"></h2>
            <img src = 'honda.png'      style="width:8vw;height:8vw; margin-top: 0.5vw;margin-left: 3vw;">
            <img src = 'yamaha2.png'    style="width:9vw;height:9vw; margin-top: 1vw;float: left;">
            <img src = 'kawasaki2.png'  style="width:26vw;height:6vw; margin-top: 0.5vw;margin-left: 3vw;">
            <img src = 'suzuki.png'     style="width:16vw;height:6vw; margin-top: 0.5vw;margin-left: 3vw;">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</body>

</html>