<?php
  function conectar() {
    $servidor = "localhost";
    $password = "";
    $usuario = "root";
    $bd = "mydb";
    $link = mysqli_connect($servidor
      ,$usuario, $password, $bd);
    return $link;
  }

  function desconectar($link) {
    mysqli_connect($link);
  }

  function query($sql) {
    $link = conectar();
    return mysqli_connect($link, $sql);
  }
