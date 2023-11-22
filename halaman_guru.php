

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

if ($_SESSION ['role']==""){
    header("location: login.php?pesan=gagal");
 }
 
?>
    <h1>Halaman Guru</h1>
    <p>Halo <?php echo $_SESSION['username'];?> Anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>
    <a href="../logout.php">LOGOUT</a>

</body>
</html>