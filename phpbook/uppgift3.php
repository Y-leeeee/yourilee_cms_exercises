<!DOCTYPE html>
<html>
  <body>
  <?php
function orderJuice($item_array) {
    $table = $item_array["table"];
    $fruit = $item_array["fruit"];
    $extra = $item_array["extra"] ? " with extra: " . $item_array["extra"] : "";
    $message = "Order from table $table: A juice with the following fruit: $fruit" . $extra . ".";
    echo $message;
}
orderJuice(array("table" => "1", "fruit" => "orange", "extra" => "lemon"));
?>
  </body>
</html>
