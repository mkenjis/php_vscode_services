<?php
  $id = $_GET['id'];
#  $id = '1';
  $conexao = mysqli_connect("db", "livro", "Admsys!23","livro") or die('erro');
  
  mysqli_select_db($conexao, "livro") or die('erro 2');
  
  $query = "select id,nome,email,data_cadastro from usuario where id = $id";
  $resultado = mysqli_query($conexao, $query);
  
  $linha = mysqli_fetch_array($resultado);
  $nome = $linha['nome'];
  $email = $linha['email'];
  
  mysqli_close($conexao);
?>
<html>
  <head>
    <title>Form</title>
  </head>
  <body>
  <?php include_once('template.html') ?>
  <main>
  <h1>Cadastro de Usuarios</h1>
  <form method="post" action="salvar_usuario.php">
    <dl>
    <input type="hidden" id="id" name="id" value="<?php echo $id ?>" />
    <p>Nome:</p>
    <input type="text" id="nome" name="nome" value="<?php echo $nome ?>" />
    <p>Email:</p>
    <input type="text" id="email" name="email" value="<?php echo $email ?>" />
    <br>
    <p><input type="submit" value="Salvar" /></p>
    </dl>
  </form>
  </main>
  </body>
</html>
