<?php

include "conexao.php";

$cpf            =   $_POST['cpf'];
$nome           =   $_POST['nome'];
$sobrenome      =   $_POST['sobrenome'];
$email          =   $_POST['email'];
$senha          =   $_POST['senha'];
$nascimento     =   $_POST['data'];
$logadouro      =   $_POST['endereco'];
$numero         =   $_POST['numero'];
$complemento    =   $_POST['complemento'];
$cep            =   filter_input(INPUT_POST, "cep", FILTER_SANITIZE_NUMBER_FLOAT);
$bairro         =   $_POST['bairro'];
$cidade         =   $_POST['cidade'];
$estado         =   $_POST['estado'];
$telefone       =   $_POST['telefone'];
$infoAdicionais =   $_POST['infoAdicionais'];



//------------- Cadastro do Produto -------------
try
{
    $comando=$conexao->prepare("INSERT INTO cliente (cpf, nomecliente, sobrenome, email, senha, nasc, logadouro, numero, complemento, cep, bairro, cidade, estado, telefone, adccliente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $comando->bindParam(1, $cpf);
    $comando->bindParam(2, $nome);
    $comando->bindParam(3, $sobrenome);
    $comando->bindParam(4, $email);
    $comando->bindParam(5, $senha);
    $comando->bindParam(6, $nascimento);
    $comando->bindParam(7, $logadouro);
    $comando->bindParam(8, $numero);
    $comando->bindParam(9, $complemento);
    $comando->bindParam(10, $cep);
    $comando->bindParam(11, $bairro);
    $comando->bindParam(12, $cidade);
    $comando->bindParam(13, $estado);
    $comando->bindParam(14, $telefone);
    $comando->bindParam(15, $infoAdicionais);

    
    $comando->execute();
    
    if($comando->rowCount() > 0)
    {

        $cpf = null;
        $nome = null;
        $sobrenome = null;
        $email = null;
        $senha = null;
        $nascimento = null;
        $logadouro = null;
        $numero = null;
        $complemento = null;
        $cep = null;
        $bairro = null;
        $cidade = null;
        $estado = null;
        $telefone = null;
        $infoAdicionais = null;

        
        $RetornoMensagem = '<SCRIPT>
                                window.alert("Seu cadastro foi efetuado com sucesso!")
                                window.location.href="index.php"</SCRIPT>';
    }
    else
    {
        $RetornoMensagem = "Erro ao efetuar cadastro!";
    }
    
}
catch(PDOException $erro)
{
    $RetornoMensagem = "Erro: " . $erro->getMessage();
}
echo $RetornoMensagem;

?>