<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php 
  
    function sumar($a, $b) {
      return  $a + $b;
    }

    function restar($a, $b) {
      return  $a - $b;
    }

    function multiplicar($a, $b) {
      return  $a * $b;
    }

    function dividir($a, $b) {
      return  $a / $b;
    }

    $a = $_POST['num1'];
    $b = $_POST['num2'];

    $sum = $_POST['sumar'];
    $res = $_POST['restar'];
    $mul = $_POST['multiplicar'];
    $div = $_POST['dividir'];


    if(isset($a) && isset($b)){

      switch(true){
        case $sum:
          $res = $a . " + " . $b . " = " . sumar($a, $b);
        break;
        case $res:
          $res = $a . " - " . $b . " = " . restar($a, $b);
        break;
        case $mul:
          $res = $a . " * " . $b . " = " . multiplicar($a, $b);
        break;
        case $div:
          $res = $a . " / " . $b . " = " . dividir($a, $b);
        break;
      }
    } 
    // else {
    //   $res = "No hay numeros valores";
    // }

  ?>
  <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <input type="number" name="num1" id="">
    <input type="number" name="num2" id="">
    <br>
    <br>
    <input type="submit" value="+" name="sumar">
    <input type="submit" value="-" name="restar">
    <input type="submit" value="*" name="multiplicar">
    <input type="submit" value="/" name="dividir">
  </form>
  <p><?php echo $res?></p>
  
</body>
</html>