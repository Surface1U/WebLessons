<?php
session_start();

$questions = [
  'What is the capital of France?' => 'Paris',
  'What is the highest mountain in the world?' => 'Mount Everest',
  'What is the largest ocean in the world?' => 'Pacific',
  'What the..' => 'Aaa',
];

$numCorrect = 0;
$numQuestions = count($questions);

foreach ($questions as $question => $answer) {
  $sessionKey = 'answer' . md5($question); // Создаем уникальный ключ для каждого вопроса
  if (isset($_SESSION[$sessionKey]) && $_SESSION[$sessionKey] === $answer) {
    $numCorrect++;
  }
}

session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Results</title>
</head>
<body>
  <h1>Results</h1>
  <p>You answered <?php echo $numCorrect; ?> out of <?php echo $numQuestions; ?> questions correctly.</p>

  <h2>Answers:</h2>
  <?php
  foreach ($questions as $question => $answer) {
    $sessionKey = 'answer' . md5($question); // Создаем уникальный ключ для каждого вопроса
    $userAnswer = $_SESSION[$sessionKey] ?? 'No answer provided';
    echo "<p>$question</p>";
    echo "<p><strong>Your answer:</strong> $userAnswer</p>";
    echo "<p><strong>Correct answer:</strong> $answer</p>";
    echo "<hr>";
  }
  ?>
</body>
</html>
