<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Table as Table;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Entrada Evento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body style="padding:10px">
      <div class="w3-row">
        <div class="w3-col w3-container" style="width:30%"></div>
        <div class="w3-col w3-card-4" style="width:40%">
          <div class="w3-container w3-blue">
            <h2>Registro en el evento</h2>
          </div>
          <form class="w3-container" action="registro.php" method="post">
            <label class="w3-text-blue"><b>Nombre</b></label>
            <input class="w3-input w3-border" type="text" name="nombre" id="nombre">
            <br>
            <button class="w3-btn w3-blue">Registro</button>
          </form>
        </div>
        <div class="w3-col w3-container" style="width:30%"></div>
      </div>
  </body>
</html>
