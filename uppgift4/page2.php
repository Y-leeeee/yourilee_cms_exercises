<!DOCTYPE html>
<html lang="en">
<body>
<?php include "header.php";
echo "<br>";
$a=9;
$b=1;
while($b<=9) {
    $sum = $a * $b;
    echo $a . " * " . $b . " = " . $sum . "<br>";
    $b++;
}
echo "<br>";
include "footer.php";
?>    
</body>
</html>
