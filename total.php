<table  border="1px gray solid">
    <?php
    session_start();
    
    $num = $_SESSION['num'];
    echo "<tr><td colspan='4' style='text-align:center'>您購買的商品資訊如下</td></tr>";
    echo "<tr style='text-align:center'><td>項次</td><td>產品代號</td><td>產品名稱</td><td>價格</td></tr>";
    switch ($num) {
        case 'book1':
            $name='超圖解 Arduino 互動設計入門 第3版';
            $cost='680';
            break;

        case 'book2':
            $name='第一次學 Python 就上手！';
            $cost='480';
            break;

        case 'cd1':
            $name='LIR: 王友良+松岡李那+R-ICE 松岡李那《全彩寫真》+卡通版野口資料夾 (CD+贈品A)';
            $cost='359';
            break;

        default:
            $name='李千娜 / 愛 到站了';
            $cost='459';
            break;
    }
    $total = 0;
    $total += $cost;
    $numberOfStrings = count($num);
    if(isset($_SESSION['num'])){       
        for ($i = 0; $i < $numberOfStrings-1; $i++) {
            echo "<tr><td>".($i+1)."</td><td>".$num[$i]."</td><td>".$name[$i]."</td><td>".$cost[$i]."元</td></tr>";
        }
    }    
    echo "<tr><td colspan='4' style='text-align:right'>總金額=".$total."元</td></tr>";

    session_unset();

    //產品代號 $bnum=explode(',', $_SESSION['bnum']);
    //產品名稱 $bname=explode(',', $_SESSION['bname']);
    //價格顯示 $cost1=explode(',', $_SESSION['cost1']);
    //總價格 $cost=$_SESSION['cost'];    
    //陣列數(項次) $numberOfStrings = count($bnum);
    ?>
</table>

