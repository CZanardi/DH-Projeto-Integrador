<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 06</title>
    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <!-- CDN FontAweomse -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">

    <!-- Nosso estilo -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#top">
                <span>Workdesk</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#top" title="Acessar início">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produto">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.html">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container-fluid">

        <section class="main-content d-flex justify-content-center align-items-center flex-column">
            <h1>Workdesk</h1>
            <p>Agora nós representamos você!</p>
            <a href="login.html" class="btn btn-dark">Acesso</a>
        </section>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <svg class="carrosel1" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></svg>
                    <div class="container">
                      <div class="carousel-caption text-allign">
                        <h1>Agora ficou mais fácil</h1>
                        <p>Saiba quanto está ganhando com um simples toque</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <svg class="carrosel2" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></svg>
                    <div class="container">
                      <div class="carousel-caption text-allign">
                        <h1>Mobilidade</h1>
                        <p>Acesse de onde estiver</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <svg class="carrosel3" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"></svg>
                    <div class="container">
                      <div class="carousel-caption text-allign">
                        <h1>O fim dos papéis</h1>
                        <p>Criamos relatórios perfeitos para você</p>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        

        <section id="plus" class="plus">
            <div>
                <h1 class="col-12">Faça o teste!</h1>
                <p class="col-10 offset-1">Experimente 30 dias grátis</p>
            </div>
            <a href="login.html" class="btn btn-primary">Experimente!</a>
        </section>

            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" id="#produto">
                <h1 class="display-4">Planos</h1>
                <p class="lead">Escolha o plano certo para a sua necessidade</p>
              </div>
              
              <div class="container">
                <div class="card-deck mb-3 text-center">
                  <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h4 class="my-0 font-weight-normal">Light</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                      </ul>
                      <button type="button" class="btn btn-lg btn-block btn-primary">Assine Já</button>
                    </div>
                  </div>
                  <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h4 class="my-0 font-weight-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                      </ul>
                      <button type="button" class="btn btn-lg btn-block btn-primary">Assine Já</button>
                    </div>
                  </div>
                  <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h4 class="my-0 font-weight-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                      </ul>
                      <button type="button" class="btn btn-lg btn-block btn-primary">Assine Já</button>
                    </div>
                  </div>
                </div>

    </main>

    <footer id="contato" class="bg-dark container-fluid">
      <div class="icons pt-5 row d-flex justify-content-center">
        <a href="https://twitter.com" title="Twitter" target="_blank"><i class="fab fa-twitter mx-3"></i></a>
        <a href="https://facebook.com" title="Facebook" target="_blank"><i class="fab fa-facebook-square mx-3"></i></a>
        <a href="https://instagram.com" title="Instagram" target="_blank"><i class="fab fa-instagram mx-3"></i></a>
        <div class="col-md-4">
          <dl class="contact-list">
            <dt>Endereço:</dt>
            <dd>Av.Santo Amaro 213</dd>
          </dl>
          <dl class="contact-list">
            <dt>Email:</dt>
            <dd><a href="mailto:#">workdesk@gmail.com</a></dd>
          </dl>
          <dl class="contact-list">
            <dt>Telefone:</dt>
            <dd><a href="tel:#">(11)98181-0321</a>
            </dd>
          </dl>
        </div>
        <div class="col-md-4 col-xl-3">
          <ul class="nav-list">
            <li><a href="index.html">Home</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="cadastro.html">Cadastro</a></li>
            <li><a href="contato.html">Contato</a></li>
          </ul>
        </div>

        <span class="copy col-12 my-3"> Copyright &copy; Workdesk</span>
    </div>


    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>