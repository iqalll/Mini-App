<?php
require '../../config/database.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM user WHERE id=$id");
echo    "<script>
            alert('User berhasil dihapus');
            document.location.href='../../view/dashboard.php';
            </script>";
