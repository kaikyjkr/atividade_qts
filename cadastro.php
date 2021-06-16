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

		<header class=" p-3 bg-white d-flex flex-row justify-content-center pt-4">

			  <!-- Logo -->
			  <div id="logo" class="flex-row p-2 bd-highlight align-self-start">
			  	<a href="index.php"><img src="IMG/logo.png" class="shadow p-3 border border-info rounded bg-white"></a>
			  </div>
			  <!-- Fim Logo -->

			  <div class="lg-flex flex-column bd-highlight ">

              <div class="text-right p-2">
                    <a href="carrinho.php"><img src="IMG/car.png" width="40px" height="40px" class="bg-white rounded p-1 shadow border border-atention" title="Carrinho de compras"></a>
                                            <a href="login.php" class="btn btn-outline-light">Entrar</a>
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
						    <form class="form-inline my-2 my-lg-0">
						      <input class="form-control mr-sm-2" type="search" placeholder="Buscar produto" aria-label="Pesquisar">
						      <button class="btn my-2 my-sm-0" type="submit"><img src="IMG/lupa30.png" title="Pesquisar"></button>
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

                 <div class="container shadow bg-white rounded  ">

			<div class="d-flex flex-column bd-highlight">

                 
                            
                            <div class="pt-2 bd-highlight pl-5  border-warning border-bottom">
                              <p class="text-uppercase h5">Crie sua conta</p>
                            </div>
                    
                    <div class="d-flex flex-row bd-highlight mb-3">

    



                          <div class="p-2 p-5 bd-highlight">

                            <div class="pt-2 h5 p-2 bd-highlight pl-5">
                              <p>Suas informações pessoais</p>
                            </div>
                            
                            <h2></h2>
                            <div id="resposta"></div>

                    <form id="formCadastroCliente" class="ml-5" method="POST" action="cadastroPHP.php">

                    <table>

                        <tr>
                            <td class="text-right"><label>CPF</label></td>
                            <td><input id="cpf" onkeydown="javascript: fMasc( this, mCPF );" class="border m-2 border-info rounded p-2" type="text" name="cpf" size="20" maxlength="14" onkeypress="return event.charCode >= 48" placeholder=" Apenas números" required>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-right"><label>Nome</label></td>
                            <td><input id="nome" class="border m-2 border-info rounded p-2" type="text" name="nome" size="20" placeholder="" required></td>
                        </tr>

                        <tr>
                            <td class="text-right"><label>Sobrenome</label></td>
                            <td><input id="sobrenome" class="border m-2 border-info rounded p-2" type="text" name="sobrenome" size="40" placeholder="" required></td>
                        </tr>
                        
                        <tr>
                            <td class="text-right"><label>Email</label></td>
                            <td><input id="email" class="border m-2 border-info rounded p-2" type="email" name="email" size="40" placeholder=" " required></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Senha</label></td>
                            <td><input id="senha" minlength="8" class="border m-2 border-info rounded p-2" type="password" name="senha" placeholder="" required>(min. 8 caracteres).</td>
                        </tr>
                        <tr>  
                            <td class="text-right"><label>Senha digitada</label></td>  
                            <td><div id="exibir" class="m-2 p-2"></div></td>
                        </tr>

                        <tr>
                            <td class="text-right"><label>Nascimento</label></td>
                            <td><input id="data" class="border m-2 border-info rounded p-2" type="date" name="data" placeholder="" required></td>
                        </tr>


                        <tr>
                            <td class="text-right"><label>Logadouro</label></td>
                            <td><input id="endereco" class="border m-2 border-info rounded p-2" type="text" name="endereco" size="40" placeholder="Rua / Av / Alamenda..." required></td>
                        </tr>

                        <tr>
                            <td class="text-right"><label>Nº</label></td>
                            <td><input id="numero" maxlength="4" class="border m-2 border-info rounded p-2" type="text" name="numero" size="10"  required></td>
                        </tr>
                        <tr>
                            <td class="text-right"><label>Complemento</label></td>
                            <td><input id="complemento" class="border m-2 border-info rounded p-2" type="text" name="complemento" size="20" placeholder="AP 05 Bloco 3 " required></td>
                        </tr>

                        <tr>
                            <td class="text-right"><label>CEP</label></td>
                            <td><input id="cep" onkeydown="javascript: fMasc( this, mCEP );" class="border m-2 border-info rounded p-2" type="text" name="cep" size="20" maxlength="10" required></td>
                        </tr>

                        <tr>
                            <td class="text-right"><label>Bairro</label></td>
                            <td><input id="bairro" class="border m-2 border-info rounded p-2" type="text" name="bairro" size="20" placeholder=" " required></td>
                        </tr>

                        <tr>
                            <td class="text-right"><label>Cidade</label></td>
                            <td><input id="cidade" class="border m-2 border-info rounded p-2" type="text" name="cidade" size="20" placeholder="" required></td>
                        </tr>

                        <tr>
                            <td class="text-right"><label>Estado</label></td>
                            <td><input id="estado" list="listaEstado" maxlength="2" class="border m-2 border-info rounded p-2"  name="estado" size="2" placeholder="SP" required>
                                <datalist id="listaEstado">
                                    <option value="AC"><option value="AL"><option value="AP"><option value="AM"><option value="BA"><option value="CE">
                                    <option value="DF"><option value="ES"><option value="GO"><option value="MA"><option value="MT"><option value="MS">
                                    <option value="MG"><option value="PA"><option value="PB"><option value="PR"><option value="PE"><option value="PI">
                                    <option value="RJ"><option value="RN"><option value="RS"><option value="RO"><option value="RR"><option value="SC">
                                    <option value="SP"><option value="SE"><option value="TO">

                                </datalist>
                                
                            </td>
                        </tr>

                        <tr>
                            <td class="text-right"><label>Celular</label></td>
                            <td><input id="telefone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" class="border m-2 border-info rounded p-2" type="text" name="telefone" size="20" maxlength="15" placeholder="Apenas números" required></td>
                        </tr>

                        <tr>
                            <td class="text-right"><label>Informacoes adicionais</label></td>
                            <td><input id="infoAdicionais" class="border m-2 border-info rounded p-2" type="text" name="infoAdicionais" size="40" placeholder=" " required></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <center>
                                    <input id="btnCadastrar" class="btn btn-primary"  type="submit" name="Cadastrar" value="Concluir">
                                    <input id="btnLimpar" class="btn btn-primary"  type="reset" name="Limpar" value="Limpar dados">
                                </center>
                            </td>
                        </tr>



                    </table>                    
                    </form>


</div>
                        </div>

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