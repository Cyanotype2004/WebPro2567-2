<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set number to mount</title>
</head>
<body>
        <form action=" " method ="get">
            <label>name mount<label>
            <input type="text" name="month">
            <button type="submit">comfirm</button>
        </form>

<?php
switch ($_GET['month']){    
    case '1':
        echo"January";
        break;
    case '2':
        echo"Febuary";
        break;
    case '3':
         echo"March";
        break;
    case '4':
         echo"Apill";
         break;
    case '5':
         echo"May";
         break;
    case '6':
        echo"June";
        break;
    case '7':
         echo"July";
         break;
    case '8':
          echo"August";
         break;
    case '9':
        echo"JSeptember";
        break;
    case '10':
        echo"October";
        break;
    case '11':
        echo"JNovember";
        break;
    case '12':
        echo"December";
        break;
};
?>
</body>
</html>