<?php
header('Content-Type: application/json; charset=utf-8');
$username = trim($_GET['username'] ?? '');
if ($username === '') { echo json_encode(['available'=>false,'message'=>'Please provide a username.']); exit; }
$taken = ['admin','vyshnavi','testuser'];
if (in_array(strtolower($username), $taken, true)) {
  echo json_encode(['available'=>false,'message'=>'This username is already taken in the demo.']); exit;
}
echo json_encode(['available'=>true,'message'=>'Username is available in the demo.']);
?>
