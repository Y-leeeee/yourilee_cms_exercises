<!DOCTYPE html>
<html>
  <head>
    <title>PHP &amp; MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>
  <body>
  <?php
function is_prime($n){
    if ($n < 2) {
        return "$n is not prime number, "; 
    }
    
    for ($x = 2; $x < $n; $x++) { 
        if ($n % $x == 0){
            return "$n is not prime number. "; 
        }
    }
    return "$n is prime number. "; 
}


echo is_prime(3); 
echo is_prime(11); 
echo is_prime(4);

?>

  </body>
</html>
