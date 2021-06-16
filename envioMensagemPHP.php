<?php

include "conexao.php";


$nome           =   $_POST['nome'];
$email          =   $_POST['email'];
$telefone       =   $_POST['telefone'];
$assunto        =   $_POST['assunto'];
$mensagem       =   $_POST['msgCliente'];
$data           =   date('d/m/Y');
$hora           =   date('H:i');



//------------- Envio de mensagem para o ADM -------------
try
{
    $comando=$conexao->prepare("INSERT INTO mensagem (nome, email, telefone, assunto, msg, dataMsg, horaMsg) 
                                VALUES (?, ?, ?, ?, ?, ?, ?)"
                              );

    $comando->bindParam(1, $nome);
    $comando->bindParam(2, $email);
    $comando->bindParam(3, $telefone);
    $comando->bindParam(4, $assunto);
    $comando->bindParam(5, $mensagem);
    $comando->bindParam(6, $data);
    $comando->bindParam(7, $hora);
    
    $comando->execute();
    
    if($comando->rowCount() > 0)
    {
        $nome      = null;
        $email     = null;
        $telefone  = null;
        $assunto   = null;
        $mensagem  = null;
        $data      = null;
        
        echo '<SCRIPT>window.alert("Mensagem enviada!")
              window.location.href="sac.php"</SCRIPT>';
    }
    else
    {
        $RetornoMensagem = "Algo deu errado ao enviar a mensagem!";
    }
    
}
catch(PDOException $erro)
{
    $RetornoMensagem = "Erro: " . $erro->getMessage();
}
echo $RetornoMensagem;

?>