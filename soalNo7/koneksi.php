<?php 
 
$koneksi = mysqli_connect("localhost","root","","dbperpus");
 
// Check connection
if( !$koneksi ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
 
?>