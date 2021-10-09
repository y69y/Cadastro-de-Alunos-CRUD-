<?php
$host='localhost';
$user='root';
$pass='';
$base='cadastro';

$cadastro= new mysqli($host,$user,$pass,$base);
if(!$cadastro){
    echo'deu erro';
}
else{
    echo'banco de dados conectado com sucesso';
}
?>