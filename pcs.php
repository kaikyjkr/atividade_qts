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

		<header class="shadow-sm p-3 mb-5 bg-white d-flex flex-row justify-content-center pt-4">

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
                echo    '<div class="text-right p-2">
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


                    echo    '<div class="text-right text-white">
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
			<!-- Produtos em destaque -->

		<div style="color: white; background-color: #007bff ;padding: 20px; margin-left: 110px; margin-right: 110px; border-style: solid;
  					border-width: 2px; border-color: #263585; border-radius: 8px">
			<center>
				<h2>Computadores em geral</h2>
			</center>
		</div>
			<div id="Pdestaques" style="top: 50px; position: relative;" >

				 <div class="container shadow-sm bg-white rounded ">
                     <div class="row align-items-start">

                         <div class="card" style="width: 17rem; margin: 4px; border-color: #007bff;">
                             <img src="IMG/pc1.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <p class="card-text">PC Gamer Intel Core i5 8GB HD 500GB Geforce GT</p>
                                     <h5 class="card-title">R$ 1.784,15</h5>
                                     <p class="card-title" style="color: red">Indisponível</p>
                                 </div>
  
                         </div>
                             
                         
                          <div class="card" style="width: 17rem;  margin: 4px; border-color: #007bff;">
                             <img src="IMG/pc2.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <p class="card-text">PC Intel 8ª Geração 8GB DDR4 HD 1TB</p>
                                     <h5 class="card-title">R$ 2.069,10</h5>
                                     <p class="card-title" style="color: red">Indisponível</p>
                                 </div> 
                          </div>
                         
                            <div class="card" style="width: 17rem;  margin: 4px; border-color: #007bff;">
                             <img src="IMG/pc3.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <p class="card-text">PC Gamer AMD10-Core CPU3.8Ghz 8GB SSD 120GB</p>
                                     <h5 class="card-title">R$ 2.526,99</h5>
                                     <p class="card-title" style="color: red">Indisponível</p>
                                 </div>
                            </div>

                            <div class="card" style="width: 17rem;  margin: 4px; border-color: #007bff;">
                             <img src="IMG/pc4.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <p class="card-text">PC Gamer AMD 6-Core, CPU 3.8Ghz, 8GB, SSD 120GB</p>
                                     <h5 class="card-title">R$ 1.469,00</h5>
                                     <p class="card-title" style="color: red">Indisponível</p>
                                 </div>
                            </div>

                            <div class="card" style="width: 17rem; margin: 4px; border-color: #007bff;">
                             <img src="IMG/pc5.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <p class="card-text">Pc Gamer T-Moba Ryzen 3 Vega 8 DDR4 8GB HD 1TB</p>
                                     <h5 class="card-title">R$ 3.243,51</h5>
                                     <p class="card-title" style="color: red">Indisponível</p>
                                 </div>
  
                            </div>

                             <div class="card" style="width: 17rem; margin: 4px; border-color: #007bff;">
                             <img src="IMG/pc6.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <p class="card-text">PC AMD 6-Core 3.8Ghz 10GB Radeon R5 SSD+HD 2TB</p>
                                     <h5 class="card-title">R$ 1.809,99</h5>
                                     <p class="card-title" style="color: red">Indisponível</p>
                                 </div>
  
                            </div>

                             <div class="card" style="width: 17rem; margin: 4px; border-color: #007bff;">
                             <img src="IMG/pc7.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <p class="card-text">PC Intel Core i5 Intel HD Grafics 6GB HD 500GB</p>
                                     <h5 class="card-title">R$  1.927,20</h5>
                                     <p class="card-title" style="color: red">Indisponível</p>
                                 </div>
  
                            </div>

                             <div class="card" style="width: 17rem; margin: 4px; border-color: #007bff;">
                             <img src="IMG/notebookaceraspire3.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <p class="card-text">Notebook Acer Aspire 3 AMD Ryzen 3-3250U, 8GB, 1TB..</p>
                                     <h5 class="card-title">R$ 3.099,90</h5>
                                     <p class="card-title" style="color: red">Indisponível</p>
                                 </div>
  
                            </div>

                             <div class="card" style="width: 17rem; margin: 4px; border-color: #007bff;">
                             <img src="IMG/pc8.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <p class="card-text">PC Intel Dual Core Intel HD Grafics 4GB HD 500GB</p>
                                     <h5 class="card-title">R$ 1.583,12</h5>
                                     <p class="card-title" style="color: red">Indisponível</p>
                                 </div>
  
                            </div>

                             <div class="card" style="width: 17rem; margin: 4px; border-color: #007bff;">
                             <img src="IMG/pc9.jpg" class="card-img-top" alt="..." height="270px">
                                 <div class="card-body">
                                     <p class="card-text">PC Dell Intel® Core™ i3-10100y 4GB, DDR4, HD 1TB</p>
                                     <h5 class="card-title">R$ 3.830,00</h5>
                                     <p class="card-title" style="color: red">Indisponível</p>                            
                                 </div>
  
                            </div>

                             <div class="card" style="width: 17rem; margin: 4px; border-color: #007bff;">
                             <img src="IMG/notebookgameracernitro5.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <p class="card-text">Notebook Gamer Acer Nitro 5, Intel Core I5-10300H..</p>
                                     <h5 class="card-title">R$ 6.599,90</h5>
                                     <p class="card-title" style="color: red">Indisponível</p>
                                 </div>
  
                            </div>

                             <div class="card" style="width: 17rem; margin: 4px; border-color: #007bff;">
                             <img src="IMG/pc10.jpg" class="card-img-top" alt="...">
                                 <div class="card-body">
                                     <p class="card-text">PC Intel 8ª Geração 8GB DDR4 HD 500GB Intel UHD 610</p>
                                     <h5 class="card-title">R$ 1.349,10</h5>
                                     <p class="card-title" style="color: red">Indisponível</p>
                                 </div>
  
                            </div>
  
                            </div>

                     </div>
                 </div> 
            </div>
			<!-- Fim Produtos em destaque -->
		
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