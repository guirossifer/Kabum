<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Teste Comentario</title>
</head>

<body>
<?php 
// Recebendo dados
$nome	= $_POST ["nome"];
$email	= $_POST ["email"];
$email	= $_POST ["comentario"];
//Gravando no DB

//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root");
if (!$conexao)
	die ("Erro de conexão com DB -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("clientes",$conexao);
if (!$banco)
	die ("Erro de conexão com DB ".mysql_error());



$query = "INSERT INTO `clientes` ( `nome` , `email` , `comentario` ) 
VALUES ('$nome', '$email', '$comentario', '');"

mysql_query($query,$conexao);

echo "Comentario realizado.";
?> 
</body>
</html>
