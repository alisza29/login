<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

@include 'koneksi.php';

session_start();

if (!isset($_SESSION['username'])) {
    header('location:formlogin.php');
 }
?>
    
    <h1>Halaman Siswa</h1>
    <p>Halo <?php echo $_SESSION['username'];?> Anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>
    <a href="../logout.php">LOGOUT</a>


</body>
</html>