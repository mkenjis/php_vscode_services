<html>
<head>
  <title>Lista de Usuarios</title>
</head>
<body>
<?php include_once('template.html') ?>
<main>
<div>
<h1>Lista de Usuarios</h1>
</div>
<div>
<table border="1">
<tr>
	<td width="50px"><b>ID</b></td>
	<td width="200px"><b>Nome</b></td>
	<td width="200px"><b>Email</b></td>
	<td width="100px"><b>Data Cadastro</b></td>
	<td width="100px"><b>Acao</b></td>
</tr>

<?php
  $conexao = mysqli_connect("db", "livro", "Admsys!23","livro") or die('erro');
  
  mysqli_select_db($conexao, "livro") or die('erro 2');
  
  $query = "select id,nome,email,data_cadastro from usuario order by id";
  $resultado = mysqli_query($conexao, $query);
  while ($linha = mysqli_fetch_array($resultado)) {
  
?>

	<tr>
		<td><?php echo $linha['id']; ?></td>
		<td><?php echo $linha['nome']; ?></td>
		<td><?php echo $linha['email']; ?></td>
		<td><?php echo $linha['data_cadastro']; ?></td>
		<td><a href="form_usuario.php?id=<?php echo $linha['id']; ?>">Editar</a> | 
		    <a href="deletar_usuario.php?id=<?php echo $linha['id']; ?>">Deletar</a></td>
	</tr>
<?php
}

mysqli_close($conexao);
?>
</table>
</div>
<p>
<a href="form_usuario.php">Novo</a>
</p>
</main>
</body>
</html>
