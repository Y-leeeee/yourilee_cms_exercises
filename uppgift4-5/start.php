
<!DOCTYPE html>
<html>
<body>

<?php 
include "header.php";
echo "<br>";


$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name" value="<?php echo $name; ?>">
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php 
if (!empty($name)) {
    $t = date("H");

    if ($t < "12") {
        echo "Good morning, " . $name . "!";
    } elseif ($t < "20") {
        echo "Good afternoon, " . $name . "!";
    } else {
        echo "Good night, " . $name . "!";
    }
}

echo "<br>";
include "footer.php";
?>

</body>
</html>
