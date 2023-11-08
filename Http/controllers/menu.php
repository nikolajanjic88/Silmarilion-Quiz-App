<?php

use core\Database;
$db = new Database();

$sql = "SELECT username FROM users WHERE id = ?";
$user = $db->query($sql, [$_SESSION['user']['id']])->find();
$username = $user['username'];

view('menu.view.php', [
  'username' => $username
]);