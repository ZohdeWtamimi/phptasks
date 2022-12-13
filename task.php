<?php
echo filemtime("index.php");
echo "<br>";
echo "Last modified : " . date("F d Y H:i:s.", filemtime("index.php")). "<br>";
?>


<?php
    $filePath = "index.php";
    $lines = count(file($filePath));
    echo $lines;
?>

<?php 
$a = 1000;
$b = 1200;
$c = 1400;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td{
            border: 1px solid #000
        }
        td{
            padding: 5px;
        }
    </style>
</head>
<body>
<table>
  <tr>
    <td>Maria </td>
    <td> <?php echo $a ?> </td>
  </tr>
  <tr>
    <td>Chang</td>
    <td> <?php echo $b ?> </td>
  </tr>
  <tr>
    <td>Chang</td>
    <td> <?php echo $c ?> </td>
  </tr>
</table>
</body>
</html>