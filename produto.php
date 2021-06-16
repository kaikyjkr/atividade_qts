<!DOCTYPE html>
<html>
	<head>
        <script src="js/scripts.js"></script>
		<link rel="icon" href="IMG/favicon.ico">
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<title>
		Bem vindos ao DR. PC - Maior site de computadores do Brasil.
		</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="CSS/new.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>

<!-- Conteúdo do site -->

		<header class="shadow-sm p-3 bg-white d-flex flex-row justify-content-center pt-4">

			  <!-- Logo -->
			  <div id="logo" class="flex-row p-2 bd-highlight align-self-start">
			  	<a href="index.php"><img src="IMG/logo.png" class="shadow p-3 border border-info rounded bg-white"></a>
			  </div>
			  <!-- Fim Logo -->

			  <div class="lg-flex flex-column bd-highlight ">
				<?php 
				include "conexao.php"; 
				session_start(); 



				if((!isset ($_SESSION["email"]) == true) AND (!isset ($_SESSION["senha"]) == true))
		        {
		        	/* Botao Login */
    			echo	'<div class="text-right p-2">
    			<a href="carrinho.php"><img src="IMG/car.png" width="40px" height="40px" class="bg-white rounded p-1 shadow border border-atention" title="Carrinho de compras"></a>
    					<a href="login.php" class="btn btn-outline-light">Entrar</a> <span class="h6 text-white">ou</span>
    					<a href="cadastro.php" class="btn btn-danger">Cadastre-se</a>
    				</div>';

    				/* Botao Login */
		        }else{
		        	
		        	$emailCliente = $_SESSION["email"];
				  	$nCliente = $conexao->prepare("SELECT * FROM  cliente WHERE email = ?");
				  	$nCliente->bindParam(1, $emailCliente);
					$nCliente->execute();          
					$linha = $nCliente->fetch(PDO::FETCH_OBJ);


		        	echo	'<div class="text-right text-white">
		        	<a href="carrinho.php"><img src="IMG/car.png" width="40px" height="40px" class="bg-white rounded p-1 shadow border border-atention" title="Carrinho de compras"></a>
			        			Olá,<span class="text-warning h5">&nbsp;' .$linha->nomecliente.'</span><br> Seja bem vindo!
			        			<a href="logout.php" class="text-right p-1 " ><img src="IMG/quit.png" width="20px" height="20px;" title="Sair"></a>
    						 </div>';
		        }
				?>


    				<!-- Menu e Busca -->
    				<div class="p-2">

						<nav class="navbar navbar-expand-lg navbar-light shadow-sm border border-info rounded bg-white ">
						  <a class="navbar-brand text-danger" href="../loja/" >Menu</a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
						    <ul class="navbar-nav mr-auto">
						      <li class="nav-item active">
						        <a id="promocoes" class="nav-link text-primary " href="../loja/promo.php">Promoções</a>
						      </li>
						      <li class="nav-item mx-1">
						        <a class="nav-link text-primary " href="../loja/pcs.php">Computadores</a>
						      </li>
						      <li class="nav-item mx-1">
						        <a class="nav-link text-primary " href="../loja/cpus.php">CPUs</a>
						      </li>
						      <li class="nav-item mx-1">
						        <a class="nav-link text-primary" href="../loja/perif.php">Perifericos</a>
						      </li>
						      <li class="nav-item mx-1">
						        <a class="nav-link text-primary " href="../loja/sac.php">SAC</a>
						      </li>

						    </ul>
						    <form id="FormBusca"  method="GET" action="busca.php"   class="form-inline my-2 my-lg-0">
						      <input name="CampoBusca" class="form-control mr-sm-2" type="search" placeholder="Buscar produto" aria-label="Pesquisar">
						      <button id="btn_busca" name="btBusca" value="Buscar" class="btn my-2 my-sm-0" type="submit"><img src="IMG/lupa30.png" title="Pesquisar"></button>
						    </form>
						  </div>
						</nav>


    				</div>
  			  </div>
			  <!-- Fim menu e barra de pesquisa -->

		</header>
		<aside class="d-flex flex-column  ">

			<!-- Início da parte central do site -->

            <div id="Pdestaques" style="top: 50px; position: relative;" >

            <div class="container shadow-sm bg-white rounded pt-3">

			<div class="container bd-highlight">

				<?php
                        include "conexao.php";

                        $idProduto = $_GET['id'];

                        $matriz = $conexao->prepare("SELECT * FROM produto WHERE idProduto = '$idProduto';");
                        
                        $matriz->execute();
                        
                       	 $linha = $matriz->fetch(PDO::FETCH_OBJ);

                ?>

              <!-- Conteudo principal -->
             
            <div class="d-flex  row bd-highlight">
                <!-- Imagens, titulo, valor e botoes --> 
                <div class="d-flex p-2 bd-highlight border border-primary rounded w-25 lead "><?php echo '<img src="adm/IMG/'.$linha->imgProduto.'" class="img-fluid">';?></div>
                <div class="d-flex bd-highlight ml-3">


                	

                    <table width="500px">
                        <tr>
                            <td class="h4 pb-3"><?php echo $linha->NomeProduto; ?></td>
                        </tr>
                       
                        <tr>
                            <td class=" pt-3 ">Codigo: <?php echo $linha->CodProduto; ?></td>
                        </tr>
                        <tr>
                            <td class="pt-3 text-primary h4 mt-3"><?php echo $linha->ValorProduto; ?></td>
                        </tr>
                        <tr>
                        	<?php
	
                          $_SESSION['CodProduto']=$linha->CodProduto;	

                          ?>
                            <td class=" pt-3"><a href="carrinho.php"><button type="button" class="btn btn-lg btn-outline-danger mt-3" name="add_carrinho" value="add_carrinho">Adicionar ao Carrinho</button></td>
                        </tr>
                        <tr>
                            <td class=" pt-3"><button onclick="window.print()">Imprimir</button></td>
                        </tr>
                        
                    </table>

                </div>
                <!-- Fim Imagens, titulo, valor e botoes --> 
            </div>

            <div class="d-flex row bd-highlight">
                <div class="d-flex column p-2 bd-highlight border w-100 border-primary rounded text-white bg-primary mt-5"><p class="h4 pl-2">Descrição do produto</p></div>
            </div>

            <div class="d-flex row bd-highlight">
                <!-- Imagens, titulo, valor e botoes -->
                <div class="d-flex p-2 bd-highlight w-100 ">

				<?php echo $linha->DescricaoProduto; ?>
				
				</div>
                <!-- Fim Imagens, titulo, valor e botoes --> 
            	</div>

            





              <!-- Fim Conteudo principal -->  

                </div>

            </div>
                
            </div>

			<!-- Fim parte central do site -->	

		</aside>		
		<footer class="d-flex flex-column">
			<div class="line">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm">
						<h5 class="metodos">Métodos de pagamento aceitos</h5>
						<img src="IMG/fpr_pagseguro.webp">
						<img src="IMG/fpr_boleto.webp">
						<img src="IMG/fpr_pix.webp"><br>
					</div>
					<div class="col-sm">
						<h6 class="metodos">Links úteis</h6>
						<a href="" class="metodos">Política de privacidade</a>
						<br>
						<a href="" class="metodos">Nossa politica de cookies</a>
						<br>
						<br>
						<h6 class="metodos">Outros</h6>
						<a href="inicio.html" class="metodos">Informações sobre o grupo e<br> andamento do projeto</a>
					</div>
				</div>
			</div>
			<div id="direitos">
				<h6 class="metodos">©2021-Todos os direitos reservados</h6>
			</div>
		</footer>




<script type="text/javascript">
$(document).ready(function(){   

    $(function(){
          var $exibirTexto = $("#exibir");
          
          $("#senha").on("keyup", function () {
            var texto = $(this).val();
            $exibirTexto.text(texto);
          });
    });

});

</script>


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
		</script>
	</body>
</html>