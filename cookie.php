<?php
if (isset($_POST["salvar"])){
   setcookie("nome",$_POST["nome"],time()+3600);	
}else if (isset($_POST["apagar"])){
   setcookie("nome");
}

header("Location: index.php");
?>