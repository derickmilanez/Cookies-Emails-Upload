<?php
      $row = array();
      $dados = array();
      $row["nome_tblusuario"] = "Maria";
      $row["email_tblusuario"] = "maria@uninove.br";
      $dados[] = $row;
      $row["nome_tblusuario"] = "Pedro";
      $row["email_tblusuario"] = "pedro@uninove.br";
      $dados[] = $row;
      $row["nome_tblusuario"] = "Carlos";
      $row["email_tblusuario"] = "carlos@uninove.br";
      $dados[] = $row;
      
      $html = "<html>";
      $html = $html . "<head>";
      $html = $html . "<link href=\"css/style.css\" rel=\"stylesheet\" />";
      $html = $html . "</head>";
      $html = $html . "<body>";
      $html = $html . "<div id=\"conteudo\">";
      $html = $html . "<h1>Relatório</h1><hr>";

      $html = $html . "<div class='header'>Reg</div>";
      $html = $html . "<div class='header'>Nome</div>";
      $html = $html . "<div class='header'>Email</div>";
      $html = $html . "<div class='clear'></div>";

      $i=0;
      foreach ($dados as $result){
            $i++;
            $html = $html . "<div class='content'> " . $i . "</div>";
            $html = $html . "<div class='content'> ". $result['nome_tblusuario'] ."</div>";
            $html = $html . "<div class='content'> ". $result['email_tblusuario'] ."</div>";
            $html = $html . "<div class='clear'></div>";
      }
      $html = $html . "<br><a href='index.php'>Voltar</a>";
      $html = $html . "</body>";
      $html = $html . "</html>";
      echo $html;
  
?>