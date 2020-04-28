<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('titulo','Portal do Candidato')</title>
 


  {{-- Link do Bootstrap --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  {{-- Link do Js --}}
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  {{--
  Pagina principal da aplicação --}}
  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-light p-4">
        <ul class="nav navbar-nav navbar-right">
          <!-- Image and text -->
          <nav class="navbar navbar-light bg-light">

            <a class="navbar-brand" href="{{ url('/home') }}">
              <img src="img/ImagemHome.png" width="30" height="30" class="d-inline-block align-top" alt="">
              Home</a>
      
              <nav class="navbar navbar-inverse">

                <div class="container-fluid">
                 
                  <div class="btn-group" role="group" aria-label="Button group with nested dropdown" style ="width: -10px;">
                    <div class="btn-group" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Midias sociais
                      </button>
            
                      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                       
            
                        <a class="dropdown-item" href="https:https://loja.bioextratus.com.br">
                          <img src="img/ImagemSite.png" role ="button" width="30" height="30" class="d-inline-block align-top" alt="">
                          Loja Virtual</a>
                        
                        <a class="dropdown-item" href="https://www.linkedin.com/in/bio-extratus-cosmetic-natural-ltda-918900159/">
                          <img src="img/ImagemLinkedIn.jpg" role ="button" width="30" height="30" class="d-inline-block align-top" alt="">
                          LinkedIn</a>
            
                        <a class="dropdown-item" href="https://www.facebook.com/bioextratus/">
                          <img src="img/ImagemFacebook.jpg" role ="button" width="30" height="30" class="d-inline-block align-top" alt="">
                          Facebook</a>
                      
                        <a class="dropdown-item" href="https://www.instagram.com/bioextratus/?hl=pt-br">
                          <img src="img/ImagemInstagram.jpg" role ="button" width="30" height="30" class="d-inline-block align-top" alt="">
                          Instagram</a>
            
                          <a class="dropdown-item" href="https://www.youtube.com/bioextratusoficial">
                            <img src="img/ImagemYoutube.png" role ="button" width="30" height="30" class="d-inline-block align-top" alt="">
                            Youtube</a>
            
                            <a class="dropdown-item" href="https://www.flickr.com/photos/bioextratus/">
                              <img src="img/ImagemFlicker.png" role ="button" width="30" height="30" class="d-inline-block align-top" alt="">
                              Flickr</a>
                          
                      </div>


                      
                    </div>
                  </div>
                  
            
                  
                  
                  
                </div>
              </nav>   
            </nav>
      </div>
    </div>
    
    <nav class="navbar navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="img/ImagemBioextratus.png" width="130" height="50" class="d-inline-block align-top" alt="">
        </a>

      <a class="navbar-brand" href="{{ route('login') }}">
        <img src="img/imagemRegistrar.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Meu Perfil</a>

      <a class="navbar-brand" href="{{ route('login') }}">
              <img src="img/imageLogin.png" width="30" height="30" class="d-inline-block align-top" alt="">
              Login</a>
        
              <a class="navbar-brand" href="{{ route('register') }}">
              <img src="img/imagemPerfil.png" width="30" height="30" class="d-inline-block align-top" alt="">
              Registrar conta</a>

              
    </nav>
  </div>

</head>






<body>

  @if(Session::has('mensagem'))
    <p><strong>{{ Session::get('mensagem') }}</strong></p>
  @endif
 
  <div class="container">
</div>




  {{-- <div class="ml-10">
    <ul class="nav nav-tabs">

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>

    
      </div>
   --}}


       
       
     
         <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            
          </ol>
          <div class="carousel-inner">
            
            <div class="carousel-item active">
              <a href="https://loja.bioextratus.com.br">
              <img class="d-block w-100" src="img/bg--bioextratus.jpg" alt="Primeiro Slide">
              <div class="carousel-caption d-none d-md-block">
                <h1>Bio Extratus Cosmetic Natural LTDA</h1>
                <h5>Seja também um de nossos colaboradores!!!</h5>
              </div>
              </a>
            </div>
         
            <div class="carousel-item">
              <img class="d-block w-100" src="img/siteBioextratus.jpg" alt="Segundo Slide">
              <div class="carousel-caption d-none d-md-block">
                <h1>Bio Extratus Cosmetic Natural LTDA</h1>
                <h5>Seja também um de nossos colaboradores!!!</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/ImagemVisaoAmpla.jpg" alt="Terceiro Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Imagem Via Satelite</h5>
                <p>Primeira imagem</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/ImagemEstrutura.jpg" alt="Terceiro Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Imagem Estrutura</h5>
                <p>Primeira imagem</p>
              </div>
            </div>

  
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
      </div>
    </div>


    <section class="section text-center" style="background: #f9f9f9">
      <div class="container">
        <h1>Sobre nós</h1>
        <br>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <p>
            </p><p style="margin: 0px 0px 10px; text-align: justify; color: rgba(38, 38, 38, 0.8); text-transform: none; text-indent: 0px; letter-spacing: normal; font-family: open_sansregular, sans-serif; font-size: 15px; font-style: normal; font-weight: 400; text-decoration: none; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;"><span style="margin: 2px 0px 10px; color: rgb(51, 153, 102); font-family: open_sansregular, sans-serif; text-decoration: none;"><strong style="margin: 0px; font-family: open_sansregular, sans-serif; font-weight: 700; text-decoration: none;">NOSSA RECEITA DE SUCESSO</strong></span><br style="margin: 0px; font-family: open_sansregular, sans-serif; text-decoration: none;">“Os nossos preciosos ingredientes são as pessoas que compõem a nossa empresa, funcionários, distribuidores e clientes. A relação honesta, bem sucedida e prazerosa que se estabeleceu entre a empresa e todos que a cercam e torna a Bio Extratus uma marca sólida, que continua sonhando e ousando para atingir as suas metas, com um enorme compromisso social e respeito ao meio-ambiente.”</p><p><br></p><p style="margin: 0px 0px 10px; text-align: justify; color: rgba(38, 38, 38, 0.8); text-transform: none; text-indent: 0px; letter-spacing: normal; font-family: open_sansregular, sans-serif; font-size: 15px; font-style: normal; font-weight: 400; text-decoration: none; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;"><span style="margin: 2px 0px 10px; color: rgb(51, 153, 102); font-family: open_sansregular, sans-serif; text-decoration: none;"><strong style="margin: 0px; font-family: open_sansregular, sans-serif; font-weight: 700; text-decoration: none;">NOSSO MUITO OBRIGADO</strong></span><br style="margin: 0px; font-family: open_sansregular, sans-serif; text-decoration: none;">Pelo companheirismo, dedicação e vontade de vencer a cada dia, gostaríamos de agradecer a todos que nos cercam. Sem vocês, o sonho não se tornaria realidade.</p><p><br></p>      <p></p>
        </div>
        <div class="col-sm-2"></div>
      </div>
    
    </section>
   


    

    <!-- Conteudo --parte central //-->

    @yield('conteudo')



  
  </body>
  </html>
