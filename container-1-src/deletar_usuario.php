<?php
  $id = $_GET["id"];

  $conexao = mysqli_connect("db", "livro", "Admsys!23","livro") or die('erro');
  
  mysqli_select_db($conexao, "livro") or die('erro 2');
  
  $query = "delete usuario where id = $id";
  
  $resultado = mysqli_query($conexao, $query);
  
  mysqli_close($conexao);
  
  header('Location: users.php');
?>
