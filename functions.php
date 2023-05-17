<?php
    // if(empty($passwordLenght)){
    $passwordLenght = '';
    // $passwordLenght = $_GET['passwordLenght'];
    if(empty($passwordLenght) && isset($passwordLenght)){
      $passwordLenght = $_GET['passwordLenght'];
      echo "<h1>$passwordLenght</h1>";
    }else{
      echo "errore";
    }
  ?>    