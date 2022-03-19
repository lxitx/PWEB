<?php
  try {
    $username = "root";
    $password = "";
  
    $conn = new PDO('mysql:host=localhost;dbname=rf', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch(PDOException $e) {
    echo 'Conexão não realizada. Erro: ' . $e->getMessage();
  }
?>