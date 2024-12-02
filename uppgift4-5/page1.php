<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undersida 1</title>
</head>
<body>
<?php 
include "header.php"; 
?>

<h1>Select a Date</h1>
<form method="post" action="">
    <label for="selected_date">Choose a date:</label>
    <input type="date" id="selected_date" name="selected_date" required>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_date = $_POST['selected_date'];

    if (!empty($selected_date)) {
        $formatted_date = date("F j, Y", strtotime($selected_date));
        $day = date("d", strtotime($selected_date));

        if ($day % 2 == 0) {
            echo "<p>$formatted_date is an even date.</p>";
        } else {
            echo "<p>$formatted_date is an odd date.</p>";
        }
    } else {
        echo "<p>Please select a date.</p>";
    }
}
?>

<?php 
include "footer.php"; 
?>
</body>
</html>
