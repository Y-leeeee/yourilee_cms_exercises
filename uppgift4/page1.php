<!DOCTYPE html>
<html lang="en">
<body>
<?php
echo "Today is " . date("l, ") . date("Y.m.d") . "
<br>";
    $dag = date("d");
    if($dag % 2 == 0){
        echo date("Y.m.d") . " is an even date."; 
    }else{
        echo date("Y.m.d") . " is an odd date";
    }

    
?>    
</body>
</html>