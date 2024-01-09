<?php
$login = "admin";
$pass = 123;
$allow = ($login == "admin" && $pass == 123);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php if ($allow): ?>
    Добро пожаловать <?= $login ?>!
<?php else: ?>
    <form action="">
        <input type="text" placeholder="login">
        <input type="text" placeholder="pass">
    </form>
<?php endif; ?>
</body>
</html>