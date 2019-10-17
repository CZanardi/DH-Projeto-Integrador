<head>
  <title>Cadastro de Produtos</title>
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
                <a class="nav-link" href="cadastros.php">
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
                <a class="nav-link active" href="produtos.php">
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
        <h1 class="h2">Produtos cadastrados</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-secondary">Share</button>
            <button class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="file-textcalendar"></span>
            Fabricante
          </button>
        </div>
      </div>

      <!-- Tabela com os Produtos adicionados anteriormente -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Fabricante (nome fantasia)</th>
            <th scope="col">Cód. Produto</th>
            <th scope="col">Nome do Produto</th>
            <th scope="col">Unidade de Medida</th>
            <th scope="col">Descrição</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <th scope="row">Cliente 1</th>
              <td>123</td>
              <td>Tecido</td>
              <td>m2</td>
              <td>Tecido colorido para cortina</td>
              <td>
                  <!-- Botão para acionar modal de exclusão -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#excluirProduto">
                  Excluir Produto
                  </button>
              </td>
            </tr>
            <tr>
              <th scope="row">Cliente 2</th>
              <td>456</td>
              <td>Varão</td>
              <td>unidade</td>
              <td>Varão de madeira para cortina</td>
              <td>
                  <!-- Botão para acionar modal de exclusão -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#excluirProduto">
                  Excluir Produto
                  </button>
              </td>
              </tr>
              <tr>
                  <th scope="row">Cliente 1</th>
                  <td>789</td>
                  <td>Voal</td>
                  <td>m2</td>
                  <td>Tecido voal para cortina</td>
                  <td>
                      <!-- Botão para acionar modal de exclusão -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#excluirProduto">
                      Excluir Produto
                      </button>
                  </td>
                  </tr>
          </tbody>
        </table>
      
      <!-- Modal excluir Produto-->
      <div class="modal fade" id="excluirProduto" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="TituloModalCentralizado">Atenção!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir o Produto?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Excluir</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Formulário para adicionar produto-->
      <h2>Adicionar Produto</h2>

      <!-- Usei o formulário Bootstrap Server-side em https://getbootstrap.com.br/docs/4.1/components/forms/#server-side -->
      <form>
        <div class="form-row">
          
          <div class="col-md-4 mb-3">
            <label for="validationServerFabricante">Fabricante</label>
            <div class="input-group">
              <input type="text" class="form-control is-invalid" id="validationServerFabricante" placeholder="Fabricante" aria-describedby="inputGroupPrepend3" required>
              <div class="invalid-feedback">
                Por favor, escolha um Fabricante.
              </div>
            </div>
          </div>
            
          <div class="col-md-4 mb-3">
            <label for="validationRazaoCodProd">Código do Produto</label>
            <div class="input-group">
              <input type="text" class="form-control is-invalid" id="validationCodProd" placeholder="Código do Produto" aria-describedby="inputGroupPrepend3" required>
              <div class="invalid-feedback">
                Por favor, digite o Código do Produto.
              </div>
            </div>
          </div>
        
          <div class="col-md-4 mb-3">
            <label for="validationNomeProd">Nome do Produto</label>
            <input type="text" class="form-control is-valid" id="validationNomeProd" placeholder="Nome do Produto" required>
            <div class="valid-feedback">
              Tudo certo!
            </div>
          </div>
            
          <div class="col-md-4 mb-3">
            <label for="validationUnMedida">Unidade de Medida</label>
            <input type="text" class="form-control is-valid" id="validationUnMedida" placeholder="Unidade de medida" required>
            <div class="valid-feedback">Tudo certo!</div>
          </div>

          <div class="col-md-4 mb-3">
            <label for="validationDescricao">Descrição</label>
            <input type="text" class="form-control is-valid" id="validationDescricao" placeholder="Descrição" required>
            <div class="valid-feedback">Tudo certo!</div>
          </div>

        </div>
        
        <button class="btn btn-secondary" type="data-dismiss" data-toggle="modal" data-target="#excluirAlteracoes">Fechar</button>
        <button class="btn btn-primary" type="submit">Adicionar Produto</button>

        <!-- Modal excluir alterações-->
        <div class="modal fade" id="excluirAlteracoes" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Atenção!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  Tem certeza que deseja excluir alterações?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Excluir</button>
              </div>
            </div>
          </div>
        </div>

      </form>
  
    </main> 
    
    <?php include_once ('footerLogada.php') ?>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- links do dashboard -->
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="dashboard.js"></script>

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
    
  </body>
</html>