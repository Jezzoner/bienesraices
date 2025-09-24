<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');

      if(!$db) {
         echo "Error: No se logro conectar a la base de datos";
         exit;
      }
      return $db;
   }