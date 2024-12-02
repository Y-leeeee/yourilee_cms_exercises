<!DOCTYPE html>
<html lang="en">
<body>
<?php include "header.php";?>
<form method="POST">
    <label for="price">Current electricity price (kr/KwH):</label><br>
    <input type="text" id="price" name="price"><br><br>
    <label for="consumption">Current consumption (KwH):</label><br>
    <input type="text" id="consumption" name="consumption"><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $price = $_POST["price"];
    $consumption = $_POST["consumption"];
    if (is_numeric($price) && is_numeric($consumption)){
        $totalCost = $price * $consumption;
        $totalCost = round($totalCost, 2);
        echo "<p>Estimated electricity price: $totalCost SEK</p>";
    }
}
?>

 
<?php include "footer.php"; ?>

</body>
</html>
