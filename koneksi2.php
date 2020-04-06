<?php

$conn = mysqli_connect( "localhost","root","","parkir2");	
    if(mysqli_connect_error()){
        print "koneksi gagal : " . mysqli_connect_error(); 
    }
?>