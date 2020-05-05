<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio 1</title>
  </head>
  <body>
    <?php
      $name = $_GET['name'];
      $surname = $_GET['surname'];
    ?>
    <h1>Benvenuto <?php echo $name . " " . $surname?> </h1>
    - passare come argomenti in GET nome e cognome; e salutare l'interlocutore
  </body>
</html>
