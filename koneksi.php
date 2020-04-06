<?php

$connect = mysqli_connect( "localhost","root","","parkir");	
    if(mysqli_connect_error()){
        print "koneksi gagal : " . mysqli_connect_error(); 
    }
?>