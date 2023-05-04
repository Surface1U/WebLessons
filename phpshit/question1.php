<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['answer1'] = $_POST['answer'];
  header('Location: question2.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Question 1</title>
</head>
<body>
  <h1>Question 1</h1>
  <p>What is the capital of France?</p>
  <form method="post">
    <input type="text" name="answer" required>
    <button type="submit">Next</button>
  </form>
</body>
</html>
