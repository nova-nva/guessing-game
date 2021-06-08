<!DOCTYPE html>
<html>
<head>
  <title>Guessing Game</title>
  <meta charset="utf-8">
<head>

<body>
  <h1>Welcome to my guessing game!</h1>
  <p>Working on new changes...</p>
  <p>
    <?php
      if(!isset($_GET['guess'])){
        echo "Missing guess parameter";
      }
      elseif (strlen($_GET['guess']) < 1) {
        echo "Your guess is too short";
      }
      elseif (!is_numeric($_GET['guess'])) {
        echo "Your guess is not a number";
      }
      elseif ($_GET['guess'] < 24) {
        echo "Your guess is too low";
      }
      elseif ($_GET['guess'] > 24) {
        echo "Your guess is too high";
      }
      else{
        echo "Congratulations - You are right";
      }
    ?>
  </p>

</body>
<html>
