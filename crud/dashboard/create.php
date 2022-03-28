<?php
require '../../config/database.php';

$username = $_POST['username'];
$nama = $_POST['nama'];
$pass = $_POST['pass'];
$alamat = $_POST['alamat'];

$result = mysqli_query($conn, "INSERT INTO user(username,nama,pass,alamat) VALUES('$username','$nama','$pass','$alamat')");

echo    "<script>
            alert('User berhasil ditambahkan');
            document.location.href='../../view/dashboard.php';
            </script>";
