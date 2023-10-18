<?php
    $banco = new mysqli("localhost","root","","bd_games");
    if ($banco->connect_errno) {
        echo "<p> encontrei um errno $banco-> errno--> $banco->connect_error </P>";
        
           
    }
    else{
        echo"deu certo";
        
    }
    $busca = $banco->query("select * from generos");
    if(!$busca){
        echo "falha na busca ! $banco->error";

    }else{
        while($reg = $busca->fetch_objectbject()) {

            print_r($reg);
           
        }
        
    }
?>