<?php
$data = "A woman who fell 10 meters from High Peak was lifted to safety by a helicopter. The woman fell while climbing. The rescue is the latest in a series of incidents on High Peak. In January last year two men walking on the peak were killed in a fall. Allen walk in to a garden.";
$key1 = "peak";
$key2 = "walk";

$pieces = explode(" ", $data);
$p = 0;
$w = 0;
for($x=0;$x<count($pieces);$x++){
    
    echo $pieces[$x]."&nbsp;";
    $text = strtolower($pieces[$x]);
    if(strstr($text, $key1 )) { 
        if($text == $key1 ){
        $p++;
        }else {
         $substr = substr($text,0,4);
         if($substr == $key1){
            $p++;
         }
        }
    }elseif (strstr($text, $key2 )) {
        if($text == $key2 ){
        $w++;
        }
    }
}
echo "<br>";
echo "peak ที่มีในข้อความ : ".$p." คำ<br>";
echo "walk ที่มีในข้อความ : ".$w." คำ<br>";

echo '<A HREF = "avalue_home.php">back</A>';
?>
