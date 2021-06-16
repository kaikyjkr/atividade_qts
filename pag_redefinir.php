
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Redefinir senha</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="CSS/new.css">
        <link rel="stylesheet" href="CSS/stylenew.css">

    </head> 

    <body id="body_02">

    <header class="shadow-sm p-3 mb-2 bg-white d-flex flex-row justify-content-center pt-4">

			  <!-- Logo -->
			  <div id="logo" class="flex-row p-2 bd-highlight align-self-start">
			  	<a href="index.php"><img src="IMG/logo.png" class="shadow p-3 border border-info rounded bg-white"></a>
			  </div>
			  <!-- Fim Logo -->

			  <div class="lg-flex flex-column bd-highlight ">

		        	
    			<div class="text-right p-2">
    				<a href="carrinho.php"><img src="IMG/car.png" width="40px" height="40px" class="bg-white rounded p-1 shadow border border-atention" title="Carrinho de compras"></a>
    					 					<a href="cadastro.php" class="btn btn-danger">Cadastre-se</a>
    			</div>


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

    <aside class="d-flex flex-column">

        <div class="container shadow bg-white rounded  ">
                    
            <h1 id="tituloRedefinir2" class="text-center mb-2"><strong>Redefina sua senha</strong></h1>

            <h2 id="textoRedefinir2" class="text-center mb-2">Atente-se para criar uma senha segura</h2>

            <div class="d-flex flex-column bd-highlight">

                <div class="row justify-content-center">

                    <form class="login-form" method="POST" action="">  

                        <div class="text-center mb-2">

                            <label id="labelemail2"><strong>Nova senha</strong></label>

                            <tr>

                                <input id="inputemail2" class="border m-2 border-info rounded p-2" type="password" name="senha" size="40" maxlength="50" required>
                        
                            </tr>

                        </div>

                        <div class="text-center mb-2">

                            <tr>

                                <button id="btnEnviar2" type="submit" class="btn btn-secondary">Salvar nova senha</button>

                                <td><a id="btnVoltar2" href="login.php" class="btn btn-secondary">Voltar a página de login</a></td>

                            </tr>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    
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