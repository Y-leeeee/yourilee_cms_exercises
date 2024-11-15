<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");

if ($t < "12") {
  echo "Good morning!";
} elseif ($t < "20") {
  echo "Good afternoon!";
} else {
  echo "Good night!";
}
?>
 
</body>
</html>
