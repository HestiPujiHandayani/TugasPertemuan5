<?php
$mysqli = new mysqli("localhost","root","","db_mahasiswa");
if($mysqli->connect_error){
    die("koneksi gagal :".$mysqli->connect_error);
}else{
    echo "koneksi Berhasil";
}
