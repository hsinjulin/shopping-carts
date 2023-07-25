<?php
    session_start();

    $num=$_GET['num'];

    $_SESSION['num']= $num;
    
    if($_SERVER['PHP_SELF'] == "/book.html"){
    header("Location: book.html");
    }else{
    header("Location: cd.html");}
?>