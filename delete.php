<?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        include('koneksi.php');

        $sql = "DELETE FROM clients where id=$id";
        $conn->query($sql);
    }
    header("Location: index.php"); // Redirect ke halaman index.php saat tombol "batal" ditekan
    exit;

?>