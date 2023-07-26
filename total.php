<?php
    session_start();
    
    if(isset($_SESSION['book']))
        $book =  $_SESSION['book'];
    if(isset($_SESSION['cd']))
        $cd =  $_SESSION['cd'];

    echo "<tr><td colspan='4' style='text-align:center'>您購買的商品資訊如下</td></tr>";
    echo "<tr style='text-align:center'><td>項次</td><td>產品代號</td><td>產品名稱</td><td>價格</td></tr>";
    $iIndex = 1;
    $total = 0;
    if(isset($book)){
        $bookInfo=array(
			array('book1','超圖解 Arduino 互動設計入門 第3版',680),
			array('book2','第一次學 Python 就上手！',480)
			);
		foreach($book as $value){
			//找出該book資訊
			foreach($bookInfo as $indexBook)
				if(in_array($value,$indexBook))  //一定會找到該本書的資訊
					break;
			echo "<tr><td>$iIndex</td>";
			for($i=0;$i<count($indexBook);$i++)
				echo "<td>".$indexBook[$i]."</td>";
			echo "</tr>";
			$total += $indexBook[2];
			$iIndex++;
		}//end of foreach
	}//end if book

	if(isset($cd)){
		$cdInfo=array(
			array('cd1','LIR: 王友良+松岡李那+R-ICE 松岡李那《全彩寫真》+卡通版野口資料夾 (CD+贈品A)',328),
			array('cd2','李千娜 / 愛 到站了',459)
			);
		foreach($cd as $value){
			//找出該cd資訊
			foreach($cdInfo as $indexcd)
				if(in_array($value,$indexcd))  //一定會找到該cd的資訊
					break;
			echo "<tr><td>$iIndex</td>";
			for($i=0;$i<count($indexcd);$i++)
				echo "<td>".$indexcd[$i]."</td>";
			echo "</tr>";
			$total += $indexcd[2];
			$iIndex++;
		}//end of foreach
	}//end if cd	   
      
    echo "<tr><td colspan='4' style='text-align:right'>總金額=".$total."元</td></tr></table>";

    session_unset();
?>