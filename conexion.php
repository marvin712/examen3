<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bemjc6r4umnneh413ftd-mysql.services.clever-cloud.com","unesepr2bp793f6z","43dHVU9MPSYY7XlS8s4g","bemjc6r4umnneh413ftd");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }