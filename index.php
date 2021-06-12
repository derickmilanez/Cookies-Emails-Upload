<?php
	$nome = "";
	if (isset($_COOKIE["nome"])){
		$nome=$_COOKIE["nome"];
	}	
?>

<html>
<header>
</header>

<style>
	span{
		color: red;
		font-weight: bold;
		font-size: 30px;
		margin-left: 6px;

	}
</style>

<body>
	<hr><h1><b>Manipulando cookie</b></h1>
	<form action="cookie.php" method="post">
		Nome: <input type="text" name="nome"/><br><br>
		<input type="submit" name="salvar" value="Salvar cookie"/>
		<input type="submit" name="apagar" value="Apagar cookie"/><br><br>
		O nome que está salvo em cookie é <span><?=$nome?></span>
	</form>
	<hr><h1><b>E-mail</b></h1>
	<form action="email.php" method="post">
		Seu nome....:<input type="text" name="nome"/><br>
		Seu e-mail..:<input type="text" name="de"/><br>
		Para........:<input type="text" name="para"/><br>
		Assunto.....:<input type="text" name="assunto"/><br>
		mensagem.: <input type="text" name="mensagem"/><br><br>
		<input type="submit" value="Enviar"/>
	</form>
	<hr><h1><b>upload de arquivo</b></h1>
	<form action="upload.php" method="post" enctype="multipart/form-data">
       <label for="arquivo">Arquivo:</label>
       <input type="file" name="arquivo" id="arquivo" />
       <br/><br/>
       <input type="submit" name="submit" value="Enviar" />
  	</form>
  	<?php
		echo "Arquivos do diretório 'arquivos':<br><br>";
		$path = "arquivo";
		$dh = opendir($path);
		$i=1;
		while (($file = readdir($dh))) {
			if($file != "." && $file != "..") {
		    	echo $i." - <a href='$path/$file'>$file</a><br /><br />";
		    	$i++;
			}		    
		}		
		closedir($dh);
  	?>



	<hr><h1><b>Relatório</b></h1>

	<form action="relatorio.php" method="post">
	   Clique no botão abaixo abrir o relatório!	
       <br/><br/>
       <input type="submit" name="submit" value="Ver relatório" />
  </form>
</body>

</html>