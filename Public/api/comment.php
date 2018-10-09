<?php

require '../../App/common.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  require 'workPost.php';
  exit;
}

$id = intval($_GET['id'] ?? 0);

if ($id < 1) {
  throw new Exception('Invalid Task ID');
}


// 1. Go to database and get work associated with task id
$commentarr = Comment::getCommentById($id);

// 2. Convert to json
$jason = json_encode($commentarr, JSON_PRETTY_PRINT);

//3. Print
header('Content-Type: application/json');
echo $json;
