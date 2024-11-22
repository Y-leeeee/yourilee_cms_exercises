<!DOCTYPE html>
<html lang="en">
<body>
<?php include "header.php";
echo "<br>";
echo "Today is " . date("l, ") . date("Y.m.d") . "
<br>";
    $dag = date("d");
    if($dag % 2 == 0){
        echo date("Y.m.d") . " is an even date."; 
    }else{
        echo date("Y.m.d") . " is an odd date";
    }
    echo "<br>";
    include "footer.php";
    
?>    
</body>
</html>