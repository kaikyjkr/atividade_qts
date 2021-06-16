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


		<div style="color: white; background-color: #007bff ;padding: 20px; margin-left: 110px; margin-right: 110px; border-style: solid;
  					border-width: 2px; border-color: #263585; border-radius: 8px">
			<center>
				<h2>Política de privacidade</h2>
			</center>
		</div>
		<div id="Pdestaques" style="top: 50px; position: relative;" >
			<div class="container shadow-sm bg-white rounded ">
				<div class="card-body">
						<p class="card-title">
							<h1> Política de privacidade </h1>
							<p> Data de vigência: 1º de janeiro de 2019 </p>
							<p> Dr. PC ("nós", "nós" ou "nosso") opera o site http://localhost/loja/
							(doravante denominado "Serviço"). </p>
							<p> Esta página informa sobre nossas políticas em relação à coleta, uso e divulgação de dados pessoais quando você usa nosso
							Serviço e as opções que você associou a esses dados. </p>
							<p> Usamos seus dados para fornecer e melhorar o Serviço. Ao usar o Serviço, você concorda com a coleta e uso de
							informações de acordo com esta política. A menos que definido de outra forma nesta Política de Privacidade, os termos usados ​​neste
							A Política de Privacidade tem o mesmo significado que em nossos Termos e Condições, acessíveis em
							http://localhost/loja/ </p>
							<h2> Coleta e uso de informações </h2>
							<p> Coletamos vários tipos diferentes de informações para diversos fins, a fim de fornecer e melhorar nosso serviço para você. </p>
							<h3> Tipos de dados coletados </h3>
							<h4> Dados pessoais </h4>
							<p> Ao usar nosso serviço, podemos pedir que você nos forneça certas informações de identificação pessoal que podem ser
							usados ​​para contatá-lo ou identificá-lo ("Dados pessoais"). As informações de identificação pessoal podem incluir, mas não são
							limitado a: </p>
							<ul>
							<li> Cookies e dados de uso </li>
							</ul>
							<h4> Dados de uso </h4>
							<p> Também podemos coletar informações sobre como o serviço é acessado e usado ("Dados de uso"). Estes dados de uso podem incluir
							informações como o endereço de protocolo da Internet do seu computador (por exemplo, endereço IP), tipo de navegador, versão do navegador,
							páginas do nosso serviço que você visita, a hora e data da sua visita, o tempo gasto nessas páginas, dispositivo exclusivo
							identificadores e outros dados de diagnóstico. </p>
							<h4> Rastreamento & amp; Dados de cookies </h4>
							<p> Usamos cookies e tecnologias de rastreamento semelhantes para rastrear a atividade em nosso Serviço e manter certas informações.
							</p>
							<p> Cookies são arquivos com uma pequena quantidade de dados que podem incluir um identificador exclusivo anônimo. Cookies são enviados para
							seu navegador a partir de um site e armazenado em seu dispositivo. As tecnologias de rastreamento também usadas são beacons, tags e
							scripts para coletar e rastrear informações e para melhorar e analisar nosso serviço. </p>
							<p> Você pode instruir seu navegador a recusar todos os cookies ou indicar quando um cookie está sendo enviado. No entanto, se você fizer
							não aceitar cookies, você pode não conseguir usar algumas partes do nosso Serviço. </p>
							<p> Exemplos de cookies que usamos: </p>
							<ul>
							<li> <strong> Cookies de sessão. </strong> Usamos cookies de sessão para operar nosso serviço. </li>
							<li> <strong> Cookies de preferência. </strong> Usamos cookies de preferência para lembrar suas preferências e vários
							configurações. </li>
							<li> <strong> Cookies de segurança. </strong> Usamos cookies de segurança para fins de segurança. </li>
							</ul>
							<h2> Uso de dados </h2>
							<p> Dr. PC usa os dados coletados para vários fins: </p>
							<ul>
							<li> Para fornecer e manter o serviço </li>
							<li> Para notificá-lo sobre mudanças em nosso serviço </li>
							<li> Para permitir que você participe de recursos interativos de nosso Serviço quando você decidir fazê-lo </li>
							<li> Para fornecer atendimento e suporte ao cliente </li>
							<li> Para fornecer análises ou informações valiosas para que possamos melhorar o serviço </li>
							<li> Para monitorar o uso do Serviço </li>
							<li> Para detectar, prevenir e resolver problemas técnicos </li>
							</ul>
							<h2> Divulgação de dados </h2>
							<h3> Requisitos legais </h3>
							<p> Dr. PC pode divulgar seus dados pessoais acreditando de boa fé que tal ação é necessária para:
							</p>
							<ul>
							<li> Para cumprir uma obrigação legal </li>
							<li> Para proteger e defender os direitos ou propriedade do Dr. PC </li>
							<li> Para prevenir ou investigar possíveis atos ilícitos em conexão com o Serviço </li>
							<li> Para proteger a segurança pessoal dos usuários do Serviço ou do público </li>
							<li> Para se proteger contra responsabilidade legal </li>
							</ul>
							<h2> Segurança de dados </h2>
							<p> A segurança dos seus dados é importante para nós, mas lembre-se de que nenhum método de transmissão pela Internet ou
							método de armazenamento eletrônico é 100% seguro. Embora nos esforcemos para usar meios comercialmente aceitáveis ​​para proteger o seu
							Dados pessoais, não podemos garantir a sua segurança absoluta. </p>
							<h2> Provedores de serviços </h2>
							<p> Podemos empregar empresas terceirizadas e indivíduos para facilitar nosso Serviço ("Provedores de Serviço"), para fornecer o
							Serviço em nosso nome, para realizar serviços relacionados com o Serviço ou para nos ajudar a analisar como o nosso Serviço é usado. </p>
							<p> Esses terceiros têm acesso aos seus dados pessoais apenas para realizar essas tarefas em nosso nome e não são obrigados
							para divulgar ou usá-lo para qualquer outra finalidade. </p>
							<h3> Analytics </h3>
							<p> Podemos usar provedores de serviços terceirizados para monitorar e analisar o uso de nosso serviço. </p>
							<ul>
							<li>
							<p> <strong> Google Analytics </strong> </p>
							<p> Google Analytics é um serviço de análise da web oferecido pelo Google que rastreia e relata o tráfego do site. Google
							usa os dados coletados para rastrear e monitorar o uso de nosso Serviço. Esses dados são compartilhados com outro Google
							Serviços. O Google pode usar os dados coletados para contextualizar e personalizar os anúncios de sua própria publicidade
							rede. </p>
							<p> Você pode optar por não ter disponibilizado a sua atividade no Serviço para o Google Analytics instalando o
							Add-on do navegador para desativação do Google Analytics. O add-on impede o JavaScript do Google Analytics (ga.js,
							analytics.js e dc.js) compartilhando informações com o Google Analytics sobre a atividade de visitas. </p>
							<p> Para obter mais informações sobre as práticas de privacidade do Google, visite a página Privacidade do Google & amp; Página da web de termos: <a href="https://policies.google.com/privacy?hl=en"> https://policies.google.com/privacy?hl=en </a> </p>
							</li>
							</ul>
							<h3> Nossos parceiros de publicidade </h3>
							<p> Alguns de nossos parceiros de publicidade podem usar cookies e web beacons em nosso site. Nossos parceiros de publicidade incluem: </p>
							<ul>
							<li>
							<p> <strong> Google Adsense </strong> </p>
							<p> Para obter mais informações sobre as práticas de privacidade do Google, visite a página Privacidade do Google & amp; Página da web de termos: <a href="https://policies.google.com/technologies/ads?hl=en"> https://policies.google.com/technologies/ads?hl=en </a>
							</p>
							<p> Esses servidores de anúncios de terceiros ou redes de anúncios usam tecnologia em seus respectivos anúncios e links que
							aparecer
							em http://localhost/loja/ e que são enviados diretamente para o seu navegador. Eles recebem automaticamente
							Seu ip
							endereço quando isso ocorrer. Outras tecnologias (como cookies, JavaScript ou Web Beacons) também podem ser usadas
							pelo nosso
							redes de anúncios de terceiros do site para medir a eficácia de suas campanhas publicitárias e / ou para
							personalizar o
							conteúdo publicitário que você vê no site. </p>
							<p> http://localhost/loja/ não tem acesso ou controle sobre esses cookies que são usados ​​por
							terceiro
							anunciantes. </p>
							</li>
							</ul>
							<h2> Links para outros sites </h2>
							<p> Nosso serviço pode conter links para outros sites que não são operados por nós. Se você clicar em um link de terceiros, você
							será direcionado para o site desse terceiro. Aconselhamos fortemente que você reveja a Política de Privacidade de cada site que você
							visite. </p>
							<p> Não temos controle e não assumimos responsabilidade pelo conteúdo, políticas de privacidade ou práticas de terceiros
							sites ou serviços de festas. </p>
							<h2> Mudanças nesta Política de Privacidade </h2>
							<p> Podemos atualizar nossa Política de Privacidade de tempos em tempos. Iremos notificá-lo de quaisquer alterações publicando a nova Política de Privacidade
							Política nesta página. </p>
							<p> Informaremos você por e-mail e / ou um aviso em destaque em nosso serviço, antes que a alteração entre em vigor e
							atualize a "data efetiva" no topo desta Política de Privacidade. </p>
							<p> Recomendamos que você reveja esta Política de Privacidade periodicamente para verificar quaisquer alterações. As alterações a esta Política de Privacidade são
							eficazes quando são postados nesta página. </p>
							<h2> Entre em contato conosco </h2>
							<p> Se você tiver alguma dúvida sobre esta Política de Privacidade, entre em contato conosco: </p>
							<ul>
							<Li> Envie-nos um email para: <a href="mailto:sac@drpc.com.br">sac@drpc.com.br</a> </li>
							</ul>
							</p>
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
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
		</script>
	</body>
</html>