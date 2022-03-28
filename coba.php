<?php
require 'config/database.php';
$query = "SELECT * FROM  user";
$sql = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($sql);
var_dump($result);
