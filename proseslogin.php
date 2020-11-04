<?php 
    session_start();
    include 'conn.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = mysqli_query($conn, "SELECT * FROM t_user WHERE username='$username' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['login'] = true;
        header("location:admin/index.php");
    }
    else{
       header("location:login.php");
    }
?>