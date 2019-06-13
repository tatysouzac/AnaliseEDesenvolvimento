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
<a href="menuDeslogado.php">Sair</a>
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
        <a class="nav-link" href="#">No sei</a>
      </li>
    </ul>
  </div>
</nav>
</nav></br>
</div>
</body>
<!-------------------------------- meio da página ------------------------------------------->
    <header>

    <div class="container-fluid" style="height:90%">
      <div class="row">
          <div class="col-6" align="right"> 
          <a> <img src="imagens/carrinhoOk.png" height="38" width="45"></a>  
          </div>
        <div class="col-md-6">
    <nav class="navbar navbar-expand-lg navbar-light submenu" style="text-align: center">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="submenu collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav justify-content-center">
          <li class="nav-item" style="text-align: center">
            <a class="nav-link" style=" color: #FFFFFF">Quantidade <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item" style="text-align: center">
            <a class="nav-link" style=" color: #FFFFFF"> - <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style=" color: #FFFFFF">Remover</a>
          </li>
               <li class="nav-item">
            <a class="nav-link" style=" color: #FFFFFF"> - <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style=" color: #FFFFFF">Valor unitario</a>
            </li>
               <li class="nav-item">
            <a class="nav-link" style=" color: #FFFFFF"> - <span class="sr-only">(current)</span></a>
        </li>
              <li class="nav-item">
            <a class="nav-link" style=" color: #FFFFFF">Valor total</a>
        </li>                
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Opções
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="alterarCadastro.php">Alterar cadastro</a>
			  <a class="dropdown-item" href="redefinirSenha.php">Mudar senha</a>
			</div>
		</li>
          </ul>        
        </div>
        </div>
            </nav>
            </br>
        </div>
        </br>


 <div class="container-fluid">
<div class="row">
  <div class="col-6">
    <a href="#"><img src="imagens/camisetaverde.jpg" height="110" width="125" style="border: #000000 Solid 2px;"></a>  
      </div>
    <div class="col-6">
        </br>
        <div class="row"> 
            <div class="col-3"> 
            &nbsp; &nbsp; <input class="col-10" type="number">
            </div>
         <div class="col-3"> 
       &nbsp; &nbsp; &nbsp; &nbsp;  <button type="button" class="btn btn-danger"> X </button>    
            </div>
            <div class="col-2"> 
            <b>  <span> R$ 49,50 </span> </b>
            </div>
            <div class="col-4"> 
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b><span> R$ 249,50 </span></b>
            </div>
    </div>
    </div>
                    </br>
                      </br>
                        </br>
                         </div>
                          </div>
</br>

<div class="p-1 mb-1 bg-dark"></div>

</br>


 <div class="container-fluid">
<div class="row">
  <div class="col-6">
    <a href="#"><img src="imagens/c2.png" height="110" width="125" style="border: #000000 Solid 2px;"></a>  
      </div>
    <div class="col-6">
        </br>
        <div class="row"> 
            <div class="col-3"> 
            &nbsp; &nbsp; <input class="col-10" type="number">
            </div>
         <div class="col-3"> 
       &nbsp; &nbsp; &nbsp; &nbsp;  <button type="button" class="btn btn-danger"> X </button>    
            </div>
            <div class="col-2"> 
                <b>
              <span> R$ 49,50 </span>
                    </b>
            </div>
            <div class="col-4"> 
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b> <span> R$ 249,50 </span></b>
            </div>
    </div>
    </div>
                    </br>
                      </br>
                        </br>
                         </div>
                          </div>
</br>

<div class="p-1 mb-1 bg-dark"></div>
                        </br>

 <div class="container-fluid">
<div class="row">
  <div class="col-6">
    <a href="#"><img src="imagens/c3.jpg" height="110" width="125" style="border: #000000 Solid 2px;"></a>  
      </div>
    <div class="col-6">
        </br>
        <div class="row"> 
            <div class="col-3"> 
            &nbsp; &nbsp; <input class="col-10" type="number">
            </div>
         <div class="col-3"> 
       &nbsp; &nbsp; &nbsp; &nbsp;  <button type="button" class="btn btn-danger"> X </button>    
            </div>
            <div class="col-2"> 
                <b> 
              <span> R$ 49,50 </span> 
                    </b>
            </div>
            <div class="col-4"> 
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b><span> R$ 249,50 </span></b>
            </div>
    </div>
    </div>
                    </br>
                      </br>
                        </br>
                         </div>
                          </div>
</br>


<div class="p-1 mb-1 bg-dark"></div></br>

<b> 
<div class="col-11" align="right"> 
    <h3>TOTAL = R$ 249,50  </h3>
    </div>
</b>                
                    
                       
                        <center> 
                    <button type="button" class="btn btn-success col-md-2" >Ir para pagamento</button>
                        
                </br>
            </br>
        </br>
</div>
 </div>
</center>
</div>

   </br></br></br></br></br>



    
    
</header>
<!--------------------------------- rodapé -------------------------------------------------->
<footer class="section footer-classic context-dark bg-image" style="background:#222222;">
        <div class="container-fluid">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">;
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