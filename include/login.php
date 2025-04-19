<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once 'env.config.php';

//get request method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //check is post emoty??
    if (!empty($_POST)) {

        //prevent sql inject with escaping string
 $username    =  $_POST['username'];
 $password    =  $_POST['password'];
    }
    $login    = $conn->query( "SELECT * FROM tblusers WHERE username='" . $username . "' AND password='" .  MD5($password) . "'")  ;
    $row    = $login->num_rows;
  
    if ($row > 0) {
 
        $row = $login->fetch_assoc();
        $_SESSION['level']  = $row['level'];
        $_SESSION['name']  = $row['username'];
        
        $_SESSION['id'] = $row['userid'];
        header('location:../index.php');
    } else {
		$_SESSION['error'] = " Login error";
         header('location:../login.php');
    }
}
