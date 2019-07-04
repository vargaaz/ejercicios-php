<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>My first PHP page</title>
  </head>
  <body>
  <h1>Hello World</h1>
  <p>What is the current time and date?</p>
  <p>Your current time and date is: 
  <?php 
  echo date("d.m.Y H:i:s");
  ?>.</p>
  </body>
</html>