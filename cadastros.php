<head>
  <title>Cadastros</title>
  <!-- Custom styles for this template -->
  <link href="assets/css/cadastros.css" rel="stylesheet">
</head>

<?php require_once('headLogada.php') ?>

  <body>
    <?php include_once ('headerLogada.php') ?>

    <!-- Início do trecho retirado do template de dashboards do bootstrap -->
      <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="cadastros.php">
                  <span data-feather="home"></span>
                  Cadastros <span class="sr-only">(atual)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="distribuidores.php">
                  <span data-feather="file"></span>
                  Distribuidores
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="fabricantes.php">
                  <span data-feather="shopping-cart"></span>
                  Fabricantes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="produtos.php">
                  <span data-feather="users"></span>
                  Produtos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="precos.php">
                  <span data-feather="bell"></span>
                  Tabelas de preços
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <a class="nav-link" href="distribuidores.php">
                    <div class="card-body"  >
                        <h5 class="card-title">Distribuidores</h5>
                        <p class="card-text">Acompanhe e gerencie o cadastro dos seus distribuidores</p>
                    </div>
                </div>

                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <a class="nav-link" href="fabricantes.php">
                    <div class="card-body"  >
                        <h5 class="card-title">Fabricantes</h5>
                        <p class="card-text">Acompanhe e gerencie o cadastro dos seus fabricantes</p>
                    </div>
                </div>    
                
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <a class="nav-link" href="produtos.php">
                    <div class="card-body"  >
                        <h5 class="card-title">Produtos</h5>
                        <p class="card-text">Acompanhe e gerencie os produtos que você vende</p>
                    </div>
                </div>

                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <a class="nav-link" href="precos.php">
                    <div class="card-body"  >
                        <h5 class="card-title">Tabelas de preços</h5>
                        <p class="card-text">Acompanhe e gerencie suas tabelas de preços</p>
                    </div>
                </div>

            </div>
        </main>
      </div>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Ícones -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    
    <!-- Fim do trecho retirado do template de dashboards do bootstrap -->

    </main>

    <?php include_once ('footerLogada.php') ?>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  </body>
</html>