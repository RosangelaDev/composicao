
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
    
    <link rel="stylesheet" href="sytle.css">
</head>
<body>
    
</body>
</html>


<?php

    require_once "Aluno.php";
    require_once "Endereco.php";

    $aluno1 = new Aluno("Pedro da Silva","444.456.781-98", "(14)99556645","Rua XV de Novembro", "262", "Centro", "178982396");

    $aluno1->setEndereco("Rua 7 de Novembro", "278", "Centro", "1477796");

     echo"<pre>";
     var_dump($aluno1);
     echo"</pre>"; 

  
    /* composicao*/

    $aluno2 = new Aluno("Maria", "452238","(14)99556654");

    $endereco = new Endereco("Rua Piracicaba", "123","Centro","(14)99556688",$aluno2);
  
    echo"<pre>";
    var_dump($aluno2);
    echo"</pre>"; 


?>