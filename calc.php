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

<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <div class="container">
        <form action="process.php" method="post">
            <p>Number1</p>
            <input type="number" name="number1">
            <p>Number2</p>
            <input type="number" name="number2">
            <select name="calculater">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="submit" value="Calculate">
        </form>
    </div>
</body>
</html>
