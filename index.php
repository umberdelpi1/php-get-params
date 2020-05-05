<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php</title>
  </head>
  <body>
  <?php
    $name = $_GET['myname'];
    $mail = $_GET['mymail'];
    $age = $_GET['myage'];
  ?>

   <h1> Il tuo nome è: <?php echo $name ?></h1>
   <h1>La tua mail è: <?php echo $mail ?></h1>
   <h1>La tua et&agrave è: <?php echo $age ?></h1>

   <h2>La lunghezza di name è: <?php echo strlen($name) ?></h2>
   <h2>La posizione della "@" è: <?php echo strpos($mail, '@') ?></h2>
   <h2>La posizione del "." è: <?php echo strpos($mail, '.') ?></h2>
   <h2>La lunghezza di age è: <?php echo is_numeric($age) ?></h2>

 </body>
</html>

<!-- Passare come parametri GET name, mail e age e
-verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
-che mail contenga un punto e
-una chiocciola e
-che age sia un numero.
-Se tutto è ok stampare “Accesso riuscito”,
-altrimenti “Accesso negato” -->
