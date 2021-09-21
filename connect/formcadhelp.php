<?php

session_start();

$connection=mysqli_connect('localhost','root','','rest_api');
$request_method=$_SERVER["REQUEST_METHOD"];
$rest_api=HTTP_USER_AGENT;

if ($dao->acessoform($email)){			
    //redireciona para a área restrita
    echo "<a href="$link">Acesso ao formulário de ajuda e pesquisa</a>";

}else{
    echo "<a href="$link">Acesso ao formulário de ajuda e pesquisa</a>";
}

?>