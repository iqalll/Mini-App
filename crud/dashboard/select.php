<?php
require '../config/database.php';

//Menampilkan Data

$query = mysqli_query($conn, "SELECT * FROM user ORDER BY id DESC");
