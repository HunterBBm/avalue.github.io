<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "avalue";

    $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName)
    or die("error");
    echo"ติดต่อได้"."<br><br><br>";
    
    mysqli_set_charset($objCon,"utf8");
    $strSQL = "select year,sum(stotal_sales) from `avalue` group by year";
    $strSQL2 = "select count(distinct salesperson_name) from `avalue` order by salesperson_name ";
    $strSQL3 = "select year,sum(sales_order) from `avalue` where salesperson_name = 'adison' group by year";

    $objQuery = mysqli_query($objCon,$strSQL);
    $objQuery2 = mysqli_query($objCon,$strSQL2);
    $objQuery3 = mysqli_query($objCon,$strSQL3);
    echo "หาผลรวมของ total_sales แยกตาม year<br>";
    echo "หาจำนวนของ salesperson ว่ามีทั้งหมดกี่คน<br>";
    echo "หาผลรวมของ sales_order แยกตามปี ของ adison<br>";
    echo"<br><hr>";

    echo"SELECT year,SUM(stotal_sales) FROM `avalue` GROUP by year <br> ";
    if($objQuery){
        while($objResult = mysqli_fetch_array($objQuery,MYSQLI_BOTH)){
            echo $objResult[0]." : ".$objResult[1];
            echo "<br>";
        }
    }
    echo"<hr>";
    echo"SELECT COUNT(DISTINCT salesperson_name) FROM `avalue` ORDER BY salesperson_name <br> ";
    if($objQuery2){
        while($objResult = mysqli_fetch_array($objQuery2,MYSQLI_BOTH)){
            echo $objResult[0];
            echo "<br>";
        }
    }
    echo"<hr>";
    echo"SELECT year,SUM(sales_order) FROM `avalue` WHERE salesperson_name = 'adison' GROUP by year <br>";
    if($objQuery3){
        while($objResult = mysqli_fetch_array($objQuery3,MYSQLI_BOTH)){
            echo $objResult[0]." : ".$objResult[1];
            echo "<br>";
        }
    }
    echo '<A HREF = "avalue_home.php">back</A>';

?>


