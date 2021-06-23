<?php
require_once "private/db.php";
$connectDB = mysqli_connect($hostDB, $userDB, $passwordDB, $nameDB);
require_once "private/salt.php";
$key = $salt;

session_start();

