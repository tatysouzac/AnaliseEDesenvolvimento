<!DOCKTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<!--titulo da página-->
	<title> minha pagina </title>
	<!--link do CSS-->
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<!--link para o bootstrap-->
	<link href="public/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	  
	 body{
		 overflow-x: hidden;
	 }
	
    </style>
<body>
<!-- javascript ----------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!------------------------------------------- Logo, barra pesquisa, carrinho, entrar cadastrar ----------------------------------------------------->
<div>

		<div class="row flex-nowrap justify-content-between align-items-right">
			<div class="col-10 pt-0 text-left">
				<h2>Prime Shirts</h2>
			</div>
			<div class="col-2 text-right">
			<span class="mds">Olá, nome.<span>
				 <img src="imagens/avatar.jpg" height="80" width="80" style="border: #000000 Solid 1px;">
				
			</div>
		</div>

<div align="right">
<div class="col-md-2">
		<a href="menudeslogado.php">Sair</a>
			<!------------modal cadastro---------------------------------------------------->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
	<div class="container">
		<div class="modal-body">
			<form class="needs-validation" novalidate>
			<div class="form-row">
				<div class="col-md-12 mb-3">
				<div align="left" label for="validationTooltip01">Nome</label></div>
					<input type="text" class="form-control" id="validationTooltip01" required>
				</div>
			</div>
	  
			<div class="form-row">
			<div class="col-md-12 mb-3">
				<div align="left" label for="validationTooltip01">E-mail/Celular</label></div>
				<input type="text" class="form-control" id="validationTooltip01" required>
			</div>
			</div>
			<div class="form-row">
				<div class="col-md-12 mb-3">
					<div align="left" label for="validationTooltip05">Data de Nascimento</label>
					</div>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-2 mb-3">
					<input id="date" type="date"></br>
					</div>
				</div>
			</div>
			
			<div class="form-row">
				<div class="col-md-12 mb-3">		
					<div class="custom-control  custom-radio" align="left" >
					 <input type="radio" name="gender" value="male"> Homem 
					 <input type="radio" name="gender" value="male"> Mulher
					 <input type="radio" name="gender" value="male"> Outros
					</div>
				</div>
				</br>
			</div>
			
			<div class="form-row">
				<div class="col-md-8 mb-3">
				<div align="left" label for="validationTooltip03">Senha</label></div>
					<input type="password" class="form-control" id="validationTooltip03" required>
				</div>
			</div>
		
			<div class="form-row">
				<div class="col-md-8 mb-3">
				  <div align="left" label for="validationTooltip03">Confirmar senha</label></div>
				  <input type="password" class="form-control" id="validationTooltip03" required>
				</div>
			</div>
		
			<div>
				<center><text><p>Ao clicar em Inscreva-se, você concorda com nossos Termos,
				Política de Dados e Política de Cookies. Você pode receber notificações por SMS e pode cancelar isso quando quiser.</p></text></center>
			</div>
			<div class="modal-footer" align="center">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Inscreva-se</button>
			</div>
		</div>
		</div>
		</div>
	</div>
	</div>

	</div>
</div>
	<!----------------------------------------   MENU ----------------------------------------->
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Inicio </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Personalizar Camisetas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Camiseta dos Criadores</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Minhas criações</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">bla</a>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opções
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="alterarCadastro.php">Alterar cadastro</a>
          <a class="dropdown-item" href="RedefinirSenha.php">Alterar senha</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</br>
</div>
</body>
<!-------------------------------- meio da página ------------------------------------------->
<center>
	<h4>
	Alterar Cadastro
	</h4>
</center></br>
<div class="container border">

<form></br>
	<div class="form-row">
		<div class="form-group col-md-12">
		  <label for="inputEmail4">Nome*</label>
		  <input type="email" class="form-control" id="inputEmail4" placeholder="Nome">
		</div>
		
		
	</div>
	<div class="form-row">
	<div class="form-group col-md-4">
		<label for="inputAddress">CEP*</label>
		<input type="text" class="form-control" id="inputAddress" placeholder="CEP">
	</div>
	</div>
	
	<div class="form-row">
		<div class="form-group col-md-10">
		  <label for="inputEmail4">Rua*</label>
		  <input type="email" class="form-control" id="inputEmail4" placeholder="Rua/avenida">
		</div>
		
		<div class="form-group col-md-2">
		  <label for="inputPassword4">Numero*</label>
		  <input type="text" class="form-control" id="inputPassword4" placeholder="Numero">
		</div>
		
	</div>
	
	
	<div class="form-row">
		<div class="form-group col-md-8">
		  <label for="inputCity">Cidade*</label>
		  <input type="text" class="form-control" id="inputCity">
		</div>
		<div class="form-group col-md-4">
		  <label for="inputEstado">Estado*</label>
		  <select id="inputEstado" class="form-control">
			<option selected>Escolher...</option>
			<option>Acre</option>
			<option>Curitiba</option>
		  </select>
		</div>
	</div>
	
		
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="inputAddress">Telefone*</label>
			<input type="text" class="form-control" id="inputAddress" placeholder="EX: (41)3669-7987">
		</div>
		<div class="form-group col-md-6">
			<label for="inputAddress">Telefone 2</label>
			<input type="text" class="form-control" id="inputAddress" placeholder="EX: (41)99669-8999">
		</div>
	</div>
	
	<button type="submit" class="btn btn-primary">Salvar</button></br></br>
</form>
</div>
</div>

<!--------------------------------- rodapé -------------------------------------------------->
<footer class="section footer-classic context-dark bg-image" style="background:#222222;">
        <div class="container-fluid">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"></a>
                <p class="color">Trabalho para FAPI, sem valor comercial.</p>
                <p class="color rights"><span>©  </span><span class="color copyright-year">2019</span><span> </span><span>Camisetas Personalizadas</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5 class="color" >Contato</h5>
              <dl class="color contact-list">
                <dt>Endereço:</dt>
                <dd>Avenida Camilo di Lellis, 1151-Pinhais/PR</dd>
              </dl>
              <dl class="color contact-list">
                <dt>Email:</dt>
                <dd><p>camisetapersonaliza@gmail.com</p></dd>
              </dl>
              <dl class="color contact-list">
                <dt>Telefones:</dt>
                <dd><p>(41) 3333-3333<p>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-2">
              <h5 class="color">Redes Sociais</h5>
              <ul>
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-google"></a></li>
				<li><a href="#" class="fa fa-linkedin"></a></li>
				<li><a href="#" class="fa fa-instagram"></a></li>
              </ul>
            </div>
          </div>
        </div>
 </footer>
 </html>