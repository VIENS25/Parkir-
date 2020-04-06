<?php 
require_once ("koneksi2.php");
$username = "";
$password = "";
$usererr = "";
$passerr = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
            $username = $_POST['username'];
            $query = "SELECT * FROM akun WHERE username = '$username'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
        if($row['username'] != ""){
            if($row['password'] ==$_POST['password']){
                header ("Location: home.php");
            }else{
                $passerr = "password anda salah!!";
            }
        }else{
            $usererr = "username salah!!";
            $passerr = "password anda salah!!";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Kuy</title>
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
     padding-top: 2vw;
     margin-top: 6vw;
    width:28vw;
    height: 30vw;
    font-family: sans-serif;
    font-size:1vw;
    border-radius:20px;
    text-align: center;
    margin-bottom: -300px;
    padding: 2vw;
    z-index: 2vw;
    background-color: white;
    margin-left: 530px">
<div class="container">
    <img src=note7.png alt="Triangle" style="width: 3vw;height: 3vw;margin-bottom: -3vw;">
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST"  style="margin-top: 5vw;">
    <div class="form-group">
      <label for="email" style="font-size: 22px;color: black;margin-top: -4vw;padding-top: -4vw;">Username:</label >
      <input type="username" class="form-control" id="username" name="username" placeholder="username" value="<?php echo $username?>"> </div>
    <div class="form-group">
      <label for="pwd" style="font-size: 22px;color: black">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?php echo $username?>">  </div>
    <div class="form-group form-check"> </div>
    <button type="submit" class="btn btn-primary"  style="margin-top: 1.3vw;width:-100px;">Submit</button>
        <a href = "regis.php" class = "btn btn-danger" style="margin-top: 1.3vw;width:-100px;">Register</a>   
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