<?php
require '../config/database.php';
// session_start();

$username = $_POST['username'];
$pass = $_POST['pass'];
$query = "SELECT * FROM  user WHERE username='$username' AND pass='$pass'";
$sql = mysqli_query($conn, $query);
$result = mysqli_num_rows($sql);
// var_dump($result);
if (empty($username) && empty($pass)) {
    echo    "<script>
            alert('Username / Password belom diisi');
            document.location.href='../';
            </script>";
} else {
    if ($result > 0) {
        # code...
        session_start();
        $_SESSION["login"] = session_id();

        echo    "<script>
            alert('Berhasil Login');
            document.location.href='../view/dashboard.php';
            </script>";
    } else {
        echo    "<script>
            alert('Username / Password salah');
            document.location.href='../';
            </script>";
    }
}
