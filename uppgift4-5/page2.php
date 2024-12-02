<!DOCTYPE html>
<html lang="en">
<body>
<?php include "header.php";
?>
<form method="POST">
    <input type="text" name="number">
    <input type="submit" value="Multiplicationtable">
</form>
<?php 
if($_POST) {
    $num = $_POST["number"];
    if (is_numeric($num) && $num>= 1 && $num <= 9) {
    echo "<p>table of $num</p>";
    for ($i = 1; $i <=10; $i++) {
        echo ("<p>$num" . " X " . "$i" . " = " . $num * $i . "</p>)");
    }
}
}
?>
<?php include "footer.php"; ?>

</body>
</html>
