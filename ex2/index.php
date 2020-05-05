<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio 2</title>
  </head>
  <body>
    <?php
    $mail = $_GET['mail'];

    $mailPunto = strpos($mail, '.');
    $mailChiocciola = strpos($mail, '@');
     ?>
     <div class="">
       <h1><?php
         if($mailPunto && $mailChiocciola) echo "OK";
         else echo "KO";
       ?></h1>

     </div>

    <!-- - passare come argomento in GET una mail e stampare un div che contenga OK se contiene un punto e una chiocciola; KO altrimenti -->
  </body>
</html>
