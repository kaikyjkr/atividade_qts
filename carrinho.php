<!DOCTYPE html>
<html>
	<head>
        <script src="js/scripts.js"></script>
		<link rel="icon" href="IMG/favicon.ico">
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<title>
		Bem vindos ao DR. PC - Maior site de computadores do Brasil.
		</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="CSS/new.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>

<!-- Conteúdo do site -->

		<header class="shadow-sm p-3 mb-2 bg-white d-flex flex-row justify-content-center pt-4">

			  <!-- Logo -->
			  <div id="logo" class="flex-row p-2 bd-highlight align-self-start">
			  	<a href="index.php"><img src="IMG/logo.png" class="shadow p-3 border border-info rounded bg-white"></a>
			  </div>
			  <!-- Fim Logo -->

			  <div class="lg-flex flex-column bd-highlight ">


                <?php
                include "conexao.php";
				
                session_start();  
						
				if((!isset ($_SESSION["email"]) == true) AND 
				   (!isset ($_SESSION["senha"]) == true))
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


		        	echo	'<div class="text-right text-white"> <a type="button" class="btn btn-secondary" href="contacliente.php?id='.$linha->idcliente.'" style="background-color: #3ada3a; border-color: #3ada3a;"> SUA CONTA </a>
		        	<a href="carrinho.php"><img src="IMG/car.png" width="40px" height="40px" class="bg-white rounded p-1 shadow border border-atention" title="Carrinho de compras"></a>
			        			Olá,<span class="text-warning h5">&nbsp;' .$linha->nomecliente.'</span><br> Seja bem vindo!
			        			<a href="logout.php" class="text-right p-1 " ><img src="IMG/quit.png" width="20px" height="20px;" title="Sair"></a>
    						 </div>';
		        }
		        
                ///////////////////Verificar se o usuário está logado
				?>
				<?php
				if (!isset($emailCliente)==true) {
					header("Location: erro.php");
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

  		</header>
		<aside class="d-flex flex-column  ">

			<!-- Início da parte central do site -->

            <div id="Pdestaques" style="top: 50px; position: relative;">

                 <div class="container shadow-sm bg-white rounded pl-5 pt-5">

			<div class="d-flex flex-column bd-highlight pl-5 ml-5 w-75">



				<h1>Meu Carrinho</h1>


				<!--carrinho-->
				<table>
					<?php 

					include 'conexao.php';

					///////////////////ativae sessão
					if (!isset($_SESSION['CodProduto'])) {
                        $_SESSION['CodProduto'] = true;}

					$idProduto = $_SESSION['CodProduto'];
					$Matriz=$conexao->prepare("SELECT CodProduto,NomeProduto,ValorProduto,imgProduto FROM produto WHERE CodProduto='$idProduto'");

					if ($Matriz->execute()) 
					{
						echo '<thead>';
						echo '<table class="table table-bordered">';
						echo '<th scope="col"> Código </th>';
						echo '<th scope="col"> Nome </th>';
						echo '<th scope="col"> Preço </th>';
						echo '<th scope="col"> Imagem </th>';
						echo '</thead>';

						while ($Linha = $Matriz->fetch(PDO::FETCH_OBJ)) 
						{
							echo '<tbody>';
							echo '<tr scope="row">';
							echo '<td scope="row">' . $Linha->CodProduto . '</td>';
							echo '<td scope="row">' . $Linha->NomeProduto     . '</td>';
							echo '<td scope="row">' . $Linha->ValorProduto   . '</td>';
                            echo '<td scope="row">' . '<img src="adm/IMG/'.$Linha->imgProduto.'" width="80px" height="60px">'. '</td>';
							echo '</tr>';
							echo '</tbody>';
						}
						echo '</table>';
					} 
					else 
					{
						echo "<script>alert('Não foi possivel completar a consulta!')</script>";

					}

                   //Verificação se o carrinho está vazio
					if ($Matriz->rowCount() == 0) {
						echo "<strong> Seu carrinho está vazio </strong>";

					}else{ 
						echo'
						               <!-- metodos de pagamento --> 
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-9">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">
										Detalhes de Pagamento
									</h3>
									</div>
								</div>
								<div class="panel-body">
									<form role="form" method="POST">
										<div class="form-group">
											<label for="cardNumber">
											NÚMERO CARTÃO</label>
											<div class="input-group">
												<input type="text" class="form-control" id="cardNumber" maxlength="11" placeholder="Número do Cartão Valido" name="num_cartao" 
												placeholder=" Apenas números" />
												<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-7 col-md-7">
												<div class="form-group">
													<label for="expityMonth">
													DATA DE EXPIRAÇÃO</label>
													<div class="col-xs-6 col-lg-8 pl-ziro">
														<input type="text" class="form-control" id="expityMonth" maxlength="2" placeholder="Mês" placeholder=" Apenas números" required/>
													</div>
													<div class="col-xs-6 col-lg-8 pl-ziro">
														<input type="text" class="form-control" id="expityYear" maxlength="4" placeholder="Ano" placeholder=" Apenas números" required /></div>
													</div>
												</div>
												<div class="col-xs-5 col-md-5 pull-right">
													<div class="form-group">
														<label for="cvCode">
														CÓDIGO CARTÃO</label>
														<input type="password" class="form-control" id="cvCode" maxlength="3" placeholder="CV" placeholder=" Apenas números" required />
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								
								<br/>
								<a href="finalizar_compra.php" class="btn btn-success btn-lg btn-block" role="button" style="border-radius: 15px 50px 30px 5px;">FINALIZAR COMPRA</a>
								<div class="checkbox pull-right">
										<label>
											<input type="checkbox" />
											Lembrar Cartão
										</label>
							</div>
						</div>
					</div>	

				</div>
			</div>
			<!--fim do carrinho--> ';
               
                

					}



		            ?>
				</table>

              
               
                


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


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
		</script>
	</body>
</html>