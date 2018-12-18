<?php

require_once 'inc/inc_cadastro.php';

$enviar_cad = filter_input(INPUT_POST , 'enviar_cad', FILTER_SANITIZE_STRING);
if($enviar_cad){
    //receber dados do formulário
    $nome = filter_input(INPUT_POST , 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST , 'email', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST , 'telefone', FILTER_SANITIZE_STRING);
    $dt_nascimento = filter_input(INPUT_POST , 'dt_nascimento', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST , 'cpf', FILTER_SANITIZE_STRING);
    $rg = filter_input(INPUT_POST , 'rg', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST , 'estado', FILTER_SANITIZE_STRING);

    //inserir no BD
    $result_cad="INSERT INTO cad_cliente (nome, email, telefone, dt_nascimento, cpf, rg, estado) VALUES (:nome, :email, :telefone, :dt_nascimento, :cpf, :rg, :estado) ";
    $insert_cad=$conn->prepare($result_cad);
    $insert_cad->bindParam(':nome', $nome);
    $insert_cad->bindParam(':email', $email);
    $insert_cad->bindParam(':telefone', $telefone);
    $insert_cad->bindParam(':dt_nascimento', $dt_nascimento);
    $insert_cad->bindParam(':cpf', $cpf);
    $insert_cad->bindParam(':rg', $rg);
    $insert_cad->bindParam(':estado', $estado);

    if($insert_cad->execute()){
        $_SESSION['msg']="<p style='color:green;'>Mensagem enviada com sucesso</p>";
    //header("Location:cadastrar.php");
    }else{
        $_SESSION['msg']="<p style='color:red;'>Mensagem não foi enviada</p>";
   // header("Location:index.php");
    }

}else{
    $_SESSION['msg']="<p style='color:red;'>Mensagem não foi enviada</p>";
   // header("Location:index.php");
}

