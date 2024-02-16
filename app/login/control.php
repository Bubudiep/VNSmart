<?php
  session_start();
  header('Content-Type: application/json; charset=utf-8');
  $_POST = json_decode(file_get_contents('php://input'), true);
  if (isset($_POST['user'])&&isset($_POST['pass'])){
    $_SESSION['user'] = $_POST['user'];
    echo json_encode(array('result' => "OK"));
    http_response_code(200);
    exit();
  }
?>