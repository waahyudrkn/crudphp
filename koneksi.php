<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "myshop";

     //membuat koneksi
     $conn = new mysqli($servername, $username, $password, $database);   

     //check koneksi
     if ($conn->connect_error) {
         die("gagal terhubung" . $conn->connect_error);
     };
?>