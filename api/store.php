<?php

use core\Database;

$pdo = new Database();

$input = json_decode(file_get_contents('php://input'), true);
$score = $input['score'];

$sql = "INSERT INTO scores (score, user_id) VALUES (:score, :user_id)";

$res = $pdo->query($sql, ['score' => $score, 'user_id' => $_SESSION['user']['id']]);

if ($res) {
  echo json_encode(['message' => 'Score inserted successfully']);
} else {
  echo json_encode(['message' => 'Failed to insert score']);
}