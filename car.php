<?php
    session_start();

    $num=$_GET['num'];
    $nums=$_GET['num'];

    $_SESSION['num']= $num;
    $_SESSION['nums']= $_SESSION['nums'].$num.",";
    
    if($_SERVER['PHP_SELF'] == "/book.html"){
    header("Location: book.html");
    }else{
    header("Location: cd.html");}
?>