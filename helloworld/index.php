<?php
$bath10 = 0;
$bath5 = 0;
$bath1 = 0 ;  
$total = 100;
$price = 22;

$result = $total - $price;

echo "change = $result <br>";
for ($i = 0; $i < 100; $i++) {
    if ($result >= 10) { 
        $bath10++;
        $result -= 10;
    } elseif ($result >= 5) { 
        $bath5++;
        $result -= 5;
    } elseif ($result >= 1) {
        $bath1++;
        $result -= 1;
    }
}
echo "10 bath coin = $bath10<br>";
echo "5 bath coin = $bath5<br>";
echo "1 bath coin = $bath1<br>";

?>


