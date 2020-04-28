<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('titulo','Sistema Acadêmico')</title>


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
      <div class="bg-dark p-4">
        <ul class="nav navbar-nav navbar-right">
          <!-- Image and text -->
          <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/home') }}">
              <img src="img/ImagemHome.png" width="30" height="30" class="d-inline-block align-top" alt="">
              Home</a>
      
              <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                 
                  <div class="btn-group" role="group" aria-label="Button group with nested dropdown" style ="width: 20px;">
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



            <a class="navbar-brand" href="{{ route('login') }}">
              <img src="img/imageLogin.png" width="30" height="30" class="d-inline-block align-top" alt="">
              Login</a>
        
              <a class="navbar-brand" href="{{ route('register') }}">
              <img src="img/imagemRegistrar.png" width="30" height="30" class="d-inline-block align-top" alt="">
              Registrar conta</a>
            </nav>
      </div>
    </div>
    
    <nav class="navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>
  


</head>






<body>

  @if(Session::has('mensagem'))
    <p><strong>{{ Session::get('mensagem') }}</strong></p>
  @endif

  <div class="ml-10">
    <ul class="nav nav-tabs">


      <li class="nav-item">
        <a href="/areaGeral"class="btn btn-primary">Area Geral</button></a>
      </li>
      <li class="nav-item">
        <a href="/areaClientes"class="btn btn-primary">Area do cliente</button></a>
      </li>

      <li class="nav-item">
        <a href="/areaAdministra" class="btn btn-primary">Area administrativa</button></a>
      </li>

    
      </div>
  




    <div class="jumbotron text-center">
      <h1>Transações Financeiras</h1>
       </div>

       
       
     
         <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/bg--bioextratus.jpg" alt="Primeiro Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Imagem Via Satelite</h5>
                <p>Primeira imagem</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/siteBioextratus.jpg" alt="Segundo Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Imagem Via Satelite</h5>
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
    
   


    

    <!-- Conteudo --parte central //-->

    @yield('conteudo')



  
  </body>
  </html>
