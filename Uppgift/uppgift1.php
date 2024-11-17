<!DOCTYPE html>
<html>
  <body>
    <?php
    $name = "Youri";
    $nationality = "Korean";
    $languages = array("Korean", "English", "Japanese", "Swedish");
    
    echo "<p>$name</p>";
    echo "<p>$nationality</p>";
    foreach ($languages as $x) {
      echo "$x ";
    }
    echo "<p>Hello, my name is $name, I am $nationality. I can speak $x</p>"; 
    ?>
  </body>
</html>
