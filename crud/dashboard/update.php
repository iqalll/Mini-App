<?php
require '../../config/database.php';

$id = $_POST['id'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$query = mysqli_query($conn, "UPDATE user SET username='$username', nama='$nama', alamat='$alamat' WHERE id='$id'");

echo    "<script>
            alert('User berhasil diupdate');
            document.location.href='../../view/dashboard.php';
            </script>";
