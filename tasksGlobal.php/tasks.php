<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <form method="post">
        <label>Enter first number:</label>
        <input type="text" name="num1"><br>

        <label>Enter second number:</label>
        <input type="text" name="num2"><br>

        <label>Select operation:</label>
        <input type="text" name="operation"><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        if (is_numeric($num1) && is_numeric($num2)) {
            if ($operation == '+') {
                $result = $num1 + $num2;
            } elseif ($operation == '-') {
                $result = $num1 - $num2;
            } elseif ($operation == '') {
                $result = $num1 $num2;
            } elseif ($operation == '/') {
                $result = $num1 / $num2;
            }

            echo "Result: $result";
        } else {
            echo 'Error: please enter a valid number';
        }
    }
    ?>
</body>
</html>
<?php

session_start();


if (isset($_POST['submit'])) {

  $_SESSION['tasks'][] = $_POST['task'];
}


if (isset($_POST['clear'])) {

  unset($_SESSION['tasks']);
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>To-Do List</title>
</head>
<body>
  <h1>To-Do List</h1>
  <form method="post" action="">
    <input type="text" name="task" placeholder="Add a task">
    <input type="submit" name="submit" value="Add">
    <input type="submit" name="clear" value="Clear">
  </form>
  <h2>Tasks:</h2>
  <ul>
    <?php
 
    if (isset($_SESSION['tasks'])) {
      foreach ($_SESSION['tasks'] as $task) {
        echo "<li>$task</li>";
      }
    } else {
      echo "<li>No tasks to do</li>";
    }
    ?>
  </ul>
</body>
</html>
<?php
$script_name = $_SERVER['SCRIPT_NAME'];
$project_root = $_SERVER['DOCUMENT_ROOT'];
echo $script_name."<br>";
echo $project_root."<br>";

?>

$request_time = $_SERVER['REQUEST_TIME'];
echo "Page requested at: " . date("Y-m-d H:i:s", $request_time);
<?php
error_reporting(0);
$count_my_page = ("counter.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
echo $hits[0];


?>
<?php
$cookie_name = "user";
$cookie_value = "Zohde";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>