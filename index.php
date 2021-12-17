<?php 

  $titolo = 'Bonsenso pratico';
  $paragrafo = 'Quanno de notte sparsero la voce <br/>
  che un Fantasma girava sur castello <br/>
  tutta la Folla corse e, ner vedello, <br/>
  cascò in ginocchio co’ le braccia in croce. <br/>
  Ma un Vecchio restò in piedi, e francamente <br/>
  voleva dije che nun c’era gnente. <br/>
  Poi ripensò: - Sarebbe una pazzia. <br/>
  Io, senza dubbio, vedo ch’è un lenzolo: <br/>
  ma più che di’ la verità da solo, <br/>
  preferisco sbajamme in compagnia. <br/>
  Dunque è un Fantasma, senza discussione. - <br/>
  E pure lui se mise a pecorone.';

  // echo str_replace('pecorone', '***', $paragrafo);

  $parola = $_GET['parola'];
  $parolaDue = $_GET['parolaDue'];
  var_dump($_GET);
 
  $nuovoParagrafo = str_replace( $parola, '***',  $paragrafo);
  $nuovoParagrafoDue = str_replace( $parola, '***',  $paragrafo);
 
   $modifica = strpos($paragrafo, $parolaDue);
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
  <h2> <?php echo  $titolo ?> </h2>
  <p> <?php echo $paragrafo ?></p>
  <p> La poesia è lunga <?php echo strlen($paragrafo) ?> caratteri </p>
  <p> parola da nascondere: <?php echo $_GET['parola']?> e <?php echo $_GET['parolaDue']?> </p>
  <p> <?php echo $nuovoParagrafoDue ?> </p>
  <p> Con la parola censurata la poesia è lunga: <?php echo strlen( $nuovoParagrafoDue) ?> caratteri </p>
</body>
</html>

