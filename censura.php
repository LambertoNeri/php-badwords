<?php
    $para = $_GET['paragraph'];
    $cens = $_GET['censure'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Paragrafo non censurato: <?= $para ?></div>
    <div>Lunghezza paragrafo:  <?= strlen($para); ?></div>
    <h3> Censuriamooooo!!! </h2>
    <div>Paragrafo censurato: <?php echo preg_replace( '/' .  $cens  . '/' , '***', $para ); ?> </div>
    <div>ho sostituito la parola: <?php echo $_GET['censure'] ?></div>
    <div>Lunghezza paragrafo:  <?php echo strlen( preg_replace( '/' .  $cens  . '/' , '***', $para)); ?> </div>

   
</body>
</html>


  <!--  echo $_GET['paragraph'];   -->