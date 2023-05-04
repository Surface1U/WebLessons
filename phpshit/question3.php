<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['answer3'] = $_POST['answer'];
  header('Location: question4.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Question 3</title>
</head>
<body>
  <h1>Question 3</h1>
  <p>What is the largest ocean in the world?</p>
  <form method="post">
    <input type="text" name="answer" required>
    <button type="submit">Finish</button>
  </form>
</body>
</html>
