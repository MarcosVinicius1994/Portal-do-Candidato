<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('titulo','Portal do Candidato')</title>




  {{-- Link do Bootstrap --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/principal.css">
  <link rel="stylesheet" href="css/redes.css">

  {{-- Link do Js --}}
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/eventos.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  {{--
    Pagina principal da aplicação --}}


  </head>
  <body>




    <div class="pos-f-t">


      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="img/ImagemBioextratus.png" width="130" height="50" class="d-inline-block align-top" alt="">
            </a>
          </li>
        </ul>

         
        <ul class="navbar-nav ml-auto">
          <button type="button" class="btn btn-light"  id="ImageMeuPerf">
          <a class="navbar-brand " href="{{ route('login') }}">
            <img src="img/imagemRegistrar.png" width="30" height="30" class="d-inline-block align-top mr-2">
            Meu Perfil</a>
            </button>
          

             <button type="button" class="btn btn-light" id="ImageMeuLog">
            <a class="navbar-brand" href="{{ route('login') }}">
              <img src="img/imageLogin.png" width="30" height="30" class="d-inline-block align-top" id="ImageLogin">
             Login 
            </a>
             </button>
            


                <button type="button" class="btn btn-light" id="ImageMeuRegis">
              <a class="navbar-brand" href="{{ route('register') }}">
                <img src="img/imagemPerfil.png" width="30" height="30" class="d-inline-block align-top" id="ImageRegis">
                Registrar conta</a>
                </button>


                <div class="btn-group ml-4" role="group" aria-label="Button group with nested dropdown" style ="width: -40px;">
                  <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="img/ImagemBrasil.png" width="40" height="30" class="d-inline-block align-top" alt="">
                    </button>

                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">


                      <a class="dropdown-item" href="">
                        <img src="img/ImagemBrasil.png" role ="button" width="40" height="30" class="d-inline-block align-top" alt=""></a>

                        <a class="dropdown-item" href="">
                          <img src="img/ImagemEspanha.jpg" role ="button" width="40" height="30" class="d-inline-block align-top" alt=""></a>

                          <a class="dropdown-item" href="">
                            <img src="img/ImagemIngles.jpg" role ="button" width="40" height="30" class="d-inline-block align-top" alt=""></a>


                          </div>
                        </div>
                      </div></ul>

                      {{-- <ul class="nav nav-tabs">
                        <div class="ml-10">



                          <form class="form-inline ml-auto">
                            <div class="md-form my-0">
                              <input class="form-control" type="text" placeholder="Buscar" aria-label="Search">
                            </div>
                            <button href="#!" class="btn btn-outline-white btn-md my-0 ml-sm-2" type="submit">Buscar</button>
                          </form>
                        </div>
                      </ul> --}}

                    </nav>
                  </div>



                  <div class="container">
                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

                      </ol>
                      <div class="carousel-inner ">

                        <div class="carousel-item active">
                          <a href="https://loja.bioextratus.com.br">
                            <img class="img-thumbnail d-block w-100" src="img/bg--bioextratus.jpg" alt="Primeiro Slide">
                            <div class="carousel-caption d-none d-md-block">
                              <h1>Bio Extratus Cosmetic Natural LTDA</h1>
                              <h5>Seja também um de nossos colaboradores!!!</h5>
                            </div>
                          </a>
                        </div>

                        <div class="carousel-item">
                          <img class="img-thumbnail d-block w-100" src="img/siteBioextratus.jpg" alt="Segundo Slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h1>Bio Extratus Cosmetic Natural LTDA</h1>
                            <h5>Seja também um de nossos colaboradores!!!</h5>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="img-thumbnail d-block w-100" src="img/ImagemVisaoAmpla.jpg" alt="Terceiro Slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Imagem Via Satelite</h5>
                            <p>Primeira imagem</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="img-thumbnail d-block w-100" src="img/ImagemEstrutura.jpg" alt="Terceiro Slide">
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




                  <div class = "container">

                    <div class ="row">
                      <div class="col-6 col-md-4 " style="width: 10px">
                        <section class="section text-center" style="background: #f9f9f9">
                          <div class="container mt-5">
                            <h1>Sobre nós</h1>
                            <br>
                            <div class="col-sm-8">
                              <p>
                              </p><p style="margin: 0px 0px 10px; text-align: justify; color: rgba(38, 38, 38, 0.8); text-transform: none; text-indent: 0px; letter-spacing: normal; font-family: open_sansregular, sans-serif; font-size: 15px; font-style: normal; font-weight: 400; text-decoration: none; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;"><span style="margin: 2px 0px 10px; color: rgb(51, 153, 102); font-family: open_sansregular, sans-serif; text-decoration: none;"><strong style="margin: 0px; font-family: open_sansregular, sans-serif; font-weight: 700; text-decoration: none;">NOSSA RECEITA DE SUCESSO</strong></span><br style="margin: 0px; font-family: open_sansregular, sans-serif; text-decoration: none;">“Os nossos preciosos ingredientes são as pessoas que compõem a nossa empresa, funcionários, distribuidores e clientes. A relação honesta, bem sucedida e prazerosa que se estabeleceu entre a empresa e todos que a cercam e torna a Bio Extratus uma marca sólida, que continua sonhando e ousando para atingir as suas metas, com um enorme compromisso social e respeito ao meio-ambiente.”</p><p><br></p><p style="margin: 0px 0px 10px; text-align: justify; color: rgba(38, 38, 38, 0.8); text-transform: none; text-indent: 0px; letter-spacing: normal; font-family: open_sansregular, sans-serif; font-size: 15px; font-style: normal; font-weight: 400; text-decoration: none; word-spacing: 0px; white-space: normal; orphans: 2; widows: 2; background-color: rgb(255, 255, 255); font-variant-ligatures: normal; font-variant-caps: normal; -webkit-text-stroke-width: 0px;"><span style="margin: 2px 0px 10px; color: rgb(51, 153, 102); font-family: open_sansregular, sans-serif; text-decoration: none;"><strong style="margin: 0px; font-family: open_sansregular, sans-serif; font-weight: 700; text-decoration: none;">NOSSO MUITO OBRIGADO</strong></span><br style="margin: 0px; font-family: open_sansregular, sans-serif; text-decoration: none;">Pelo companheirismo, dedicação e vontade de vencer a cada dia, gostaríamos de agradecer a todos que nos cercam. Sem vocês, o sonho não se tornaria realidade.</p><p><br></p>      <p></p>
                            </div>
                          </div>

                        </section>
                      </div>



                      <div class="col-12 col-md-8 mt-5">
                        <h1>Vagas abertas</h1>
                        {{-- Tipo acocordin --}}
                        <ul>

                          <form class="form-inline mr-auto">
                            <input class="form-control mr-sm-2" type="text" placeholder="" aria-label="Search">
                            <button class="btn btn-dark btn-rounded btn-sm my-0" type="submit" id ="IdBuscar">Buscar</button>
                          </form>
                        </ul>
                        <div id="accordion">

                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                <h4>
                                  <a href="/">
                                    <span class="badge badge-light" >Vaga 1...</span>
                                  </a>
                                  <nav class="navbar navbar-nav">
                                    <ul class ="ml-auto">
                                         
                                      <button type="button" class="btn btn-info">
                                      <a class="ml-1"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Visualizar
                                      </a>
                                    </button>

                                    
                                      <a name= "idcadastrar"class="btn btn-info ml-4" role="button" href="/"id="IDcadastrar">
                                        Cadastrar</a>
                                      
                                      
                                    

                                      <a class="ml-4"href="/">
                                        <img src="img/ImagemEmail.jpg" width="70" height="40" class="d-inline-block align-top" alt="">

                                      </a>
                                    </ul>
                                  </nav>
                                  <div class="job-tag">
                                    <div class="pull-left">
                                      <div class="meta-tag">
                                        <span class="badge badge-light " >Alvinopolis -MG
                                          <img src="img/ImagemLocalizacao.png" width="70" height="40" class="d-inline-block align-top" alt="">
                                        </span>
                                      </div>

                                    </div>
                                  </h4>

                                </h5>
                              </div>

                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
                            </div>


                            <div class="card">
                              <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                  <h4>
                                    <a href="/">
                                      <span class="badge badge-light" >Vaga 2...</span>
                                    </a>
                                    <nav class="navbar navbar-nav">
                                      <ul class ="ml-auto">

                                        <button type="button" class="btn btn-info">
                                      <a class="ml-1"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Visualizar
                                      </a>
                                    </button>

                                   
                                        <a name= "idcadastrar" class="btn btn-info  ml-4" role="button" href="/"id="IDcadastrar">
                                        Cadastrar
                                        </a>
                                  

                                        <a class="ml-4"href="/">
                                          <img src="img/ImagemEmail.jpg" width="70" height="40" class="d-inline-block align-top" alt="">
                                        </a>
                                      </ul>
                                    </nav>
                                    <span class="badge badge-light " >Alvinopolis -MG
                                      <img src="img/ImagemLocalizacao.png" width="70" height="40" class="d-inline-block align-top" alt="">
                                    </span>
                                  </h4>
                                </h5>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                  <h4>
                                    <a href="/">
                                      <span class="badge badge-light" >Vaga 3...</span>
                                    </a>
                                    <nav class="navbar navbar-nav">
                                      <ul class ="ml-auto">
 
                                      <button type="button" class="btn btn-info">
                                      <a class="ml-1"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Visualizar
                                      </a>
                                    </button>

                                     
                                        <a name= "idcadastrar" class="btn btn-info ml-4" role="button" href="/"id="IDcadastrar">
                                        Cadastrar
                                        </a>
                                     

                                        <a class="ml-4"href="/">
                                          <img src="img/ImagemEmail.jpg" width="70" height="40" class="d-inline-block align-top" alt="">

                                        </a>
                                      </ul>
                                    </nav>
                                    <span class="badge badge-light " >Alvinopolis -MG
                                      <img src="img/ImagemLocalizacao.png" width="70" height="40" class="d-inline-block align-top" alt="">
                                    </span>
                                  </h4>
                                </h5>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
                            </div>

                          

                          </div>
                        </div>
                      </div>
                    </div>







                    {{--  --}}





                    <!-- Conteudo --parte central //-->
                    <!-- Site footer -->
                    <footer class="site-footer mt-5">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm-12 col-md-6">
                            <h6>Institucional</h6>
                            <p class="text-justify">
                              <li>
                                <a href="/">Historia</a>
                              </li>
                              <li>
                                <a href="/">Tecnologia e Controle de Qualidade</a>
                              </li>
                              <li>
                                <a href="/">Onde Comprar</a>
                              </li>
                              <li>
                                <a href="/">Visite nosso site</a>
                              </li>
                            </p>
                          </div>

                          <div class="col-xs-6 col-md-3">
                            <h6>Politicas sociais</h6>
                            <ul class="footer-links">
                              <li><a href="/">Responsabilidade Ambiental</a></li>
                              <li><a href="/">Responsabilidade Social</a></li>
                              <li><a href="/">Fundação Bioextratus</a></li>
                            </ul>
                          </div>

                          <div class="col-xs-6 col-md-3">
                            <h6>Fale conosco</h6>
                            <ul class="footer-links">
                              <li><a href="/">Email...</a></li>
                              <li><a href="/"> +55 (31) 3855-3002</a></li>
                              <li><a href="/">...</a></li>
                              <li><a href="/">Chat...</a></li>
                            </ul>
                          </div>
                        </div>
                        <hr>
                      </div>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <p class="copyright-text">Copyright &copy; 2020 Todos os direitos são reservados à Bioextratus Cosmetics Natural
                              <a href="https:https://loja.bioextratus.com.br">Site Oficial</a>.
                            </p>
                          </div>

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <ul class="social-icons">
                              <li><a class="facebook" href="https://www.facebook.com/bioextratus/"><i class="fa fa-facebook"></i>
                                <img  class ="redesimg" src="img/ImagemFacebook.jpg"></a></li>
                                <li><a class="twitter" href="https://www.linkedin.com/in/bio-extratus-cosmetic-natural-ltda-918900159/"><i class="fa fa-linkedin"></i>
                                  <img class="redesimg" src="img/ImagemLinkedin.jpg"></a></li>
                                  <li><a class="dribbble" href="https://www.instagram.com/bioextratus/?hl=pt-br"><i class="fa fa-instagram"></i>
                                    <img class ="redesimg"src="img/ImagemInstagram.jpg" ></a></li>
                                    <li><a class="youtube" href="https://www.youtube.com/bioextratusoficial"><i class="fa fa-youtube"></i>
                                      <img class="redesimg"src="img/ImagemYoutube.png"></a></li>
                                      <li><a class="flickr" href="https://www.flickr.com/photos/bioextratus/"><i class="fa fa-flickr"></i>
                                        <img class="redesimg"src="img/ImagemFlicker.png"></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </footer>




                            </body>
                            </html>
