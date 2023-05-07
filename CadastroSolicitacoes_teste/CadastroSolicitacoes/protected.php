<?php

if(!isset($_SESSION)){
    session_start();
}


if (!isset($_SESSION["id"])) {
    die("Faça Login para ter acesso <a href='../index.php'>Fazer Login</a>");
  } 

?>