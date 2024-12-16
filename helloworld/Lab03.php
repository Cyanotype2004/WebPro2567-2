<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set number to mount</title>
</head>
<body>
        <form action=" " method ="get">
            <label>month<label>
            <input type="text" name="month">
            <label>year<label>
            <input type="text" name="year">
            <button type="submit">comfirm</button>
        </form>
        <?php
        echo "<br>";
        $month = $_GET['month'];
        $year = $_GET['year'];

        switch ($_GET['month']){    
            case '1':
                echo "31" - 3 . " January " . $year;
                break;
            case '2':
                echo" Febuary ";
                $year -= 543;
                if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)){
                    $febday = 29;
                }else{
                    $febday = 28;
                }
                if($febday = 29){
                    $febday -= 3;
                }
                if($febday = 28){
                    $febday -= 3;
                }
                $year += 543;
                echo $febday . " " . $year;
                break;
            case '3':
                echo "31" - 3 . " March " . $year;
                break;
            case '4':
                echo "30" - 3 . " Apill " . $year;
                break;
            case '5':
                echo "31" - 3 . " May " . $year;
                break;
            case '6':
                echo "30" - 3 . " June " . $year;
                break;
            case '7':
                echo "31" - 3 ."July " . $year;
                break;
            case '8':
                echo "31" - 3 . " August " . $year;
                break;
            case '9':
                echo "30" - 3 ." September " . $year;
                break;
            case '10':
                echo "31" - 3 ." October " . $year;
                break;
            case '11':
                echo "30" - 3 ." November " . $year;
                break;
            case '12':
                echo "31" - 3 ." December " . $year;
                break;
        };
        ?>
</body>
</html>