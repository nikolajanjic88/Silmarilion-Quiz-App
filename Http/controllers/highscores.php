<?php

use core\Database;

$db = new Database();

$sql = "SELECT score, username FROM scores JOIN users ON scores.user_id = users.id ORDER BY score DESC LIMIT 10";

$res = $db->query($sql);
$scores = $res->get();

view('highscores.view.php', [
  'scores' => $scores
]);