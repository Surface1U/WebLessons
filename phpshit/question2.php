<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['answer2'] = $_POST['answer'];
  header('Location: question3.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Question 2</title>
</head>
<body>
  <h1>Question 2</h1>
  <p>What is the highest mountain in the world?</p>
  <form method="post">
    <input type="text" name="answer" required>
    <button type="submit">Next</button>
  </form>
</body>
</html>
