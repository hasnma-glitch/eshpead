<?php

session_name(sha1('nome do banco de dados usado no server'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
session_start();

$name = $_POST['name'];
$email = $_POST['email'];

if ($dao->esquecisenha($name,$email)){			
    //redireciona para a área restrita
    echo "Um email com instruções de redefinição de senha e código de recuperação foi enviado.";
}else{
    echo "<div>Um email com instruções de redefinição de senha e código de recuperação foi enviado.</div>";	
}

?>