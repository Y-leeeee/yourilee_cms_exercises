<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_REQUEST['username'] ?? '';
    echo "입력된 이름: " . htmlspecialchars($username);
}
?>
<form method="POST">
    <label for="username">이름:</label>
    <input type="text" id="username" name="username" placeholder="이름 입력">
    <input type="submit" value="제출">
</form>
