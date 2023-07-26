<?php
    session_start();

    $num=$_GET['num'];
    $page=$_GET['page'];

    // strcmp: 比較兩個字串符
	// 0-兩個字串符相等 <0-$page<'book' >0-$page>'book'
	if(strcmp($page,'book') == 0){  
        //from book.html
		$book = $_SESSION['book'];
		if(!isset($book))
			$book = array();
		$book[] = $num;
		$_SESSION['book']=$book;
		header("Location: book.html");
	}else{  
        //from cd.html
		$cd = $_SESSION['cd'];
		if(!isset($cd))
			$cd = array();
		$cd[] = $num;
		$_SESSION['cd'] = $cd;
		header("Location: cd.html");
	}
?>