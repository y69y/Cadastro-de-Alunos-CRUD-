<?php
    include('conexao.php');
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $cpf= $_POST['cpf'];
    $tel= $_POST['tel'];
    $data= $_POST['data'];
    $sexo= $_POST['sexo'];

    $sql= "INSERT INTO cadastro(nome, email, cpf, telefone, data, sexo) VALUES('$nome', '$email','$cpf','$tel','$data','$sexo')";

    if(mysqli_query($cadastro,$sql)){
        echo"Cadastro realizado";
    }

?>