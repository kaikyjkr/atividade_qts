<?php

include "conexao.php";

$idcliente    = $_POST['id'];
$cpf          = $_POST['cpf'];
$nomecliente  = $_POST['nome'];
$sobrenome    = $_POST['sobrenome'];
$email        = $_POST['email'];
$senha        = $_POST['senha'];
$nasc         = $_POST['data'];
$logadouro    = $_POST['endereco'];
$numero       = $_POST['numero'];
$complemento  = $_POST['complemento'];
$cep          = $_POST['cep'];
$bairro       = $_POST['bairro'];
$cidade       = $_POST['cidade'];
$estado       = $_POST['estado'];
$telefone     = $_POST['telefone'];
$adccliente   = $_POST['infoAdicionais'];

//------------- Cadastro do Cliente -------------




        $comando=$conexao->prepare("UPDATE  cliente 
                                    SET     cpf = ?, 
                                            nomecliente = ?,
                                            sobrenome = ?,
                                            email = ? ,
                                            senha = ?,
                                            nasc = ?,
                                            logadouro = ?,
                                            numero = ?,
                                            complemento = ?,
                                            cep = ?,
                                            bairro = ?,
                                            cidade = ?,
                                            estado = ?,
                                            telefone = ?,
                                            adccliente = ?
                                    WHERE   idcliente = '$idcliente';");

        $comando->bindParam(1, $cpf);
        $comando->bindParam(2, $nomecliente);
        $comando->bindParam(3, $sobrenome);
        $comando->bindParam(4, $email);
        $comando->bindParam(5, $senha);
        $comando->bindParam(6, $nasc);
        $comando->bindParam(7, $logadouro);
        $comando->bindParam(8, $numero);
        $comando->bindParam(9, $complemento);
        $comando->bindParam(10, $cep);
        $comando->bindParam(11, $bairro);
        $comando->bindParam(12, $cidade);
        $comando->bindParam(13, $estado);
        $comando->bindParam(14, $telefone);
        $comando->bindParam(15, $adccliente);



        $comando->execute();
        
       echo'<SCRIPT>
            window.alert("Informações atualizadas")
            window.location.href="contacliente.php?id='.$idcliente.'"
            </SCRIPT>';
?>