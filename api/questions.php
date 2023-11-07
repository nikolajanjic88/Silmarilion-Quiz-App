<?php

use core\Database;

$pdo = new Database();

$sql = "SELECT question, incorrect_answers, correct_answer FROM questions";

$stmt = $pdo->query($sql);

$data = [];
while ($row = $stmt->find()) {
    $row['incorrect_answers'] = json_decode($row['incorrect_answers']);
    $data[] = $row;
}

header('Content-Type: application/json');

echo json_encode($data);