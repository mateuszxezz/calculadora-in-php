<?php

$number1 = 0;
$numbee2 = 0;
$result = 0;
$calculater = "+";

  if(isset($_POST["number1"], $_POST["number2"], ($_POST["calculater"] {
      $number1 = $_POST["number1"];
      $number2 = $_POST["number2"];
      $calculater = $_POST["calculater"];

      switch($calculater) {
          case "+":
          $result = $number1 + $number2;
          break;
          case "-":
          $result = $number1 - $number2;
          break;
          case "*":
          $result = $number1 * $number2;
          break;
          case "/":
          $result = $number1 / $number2;
          break;
      }
}

?>
