<head>
  <title>Pedidos de Venda</title>
  <!-- Custom styles for this template -->
  <link href="assets/css/cadastros.css" rel="stylesheet">
</head>

<?php require_once('headLogada.php') ?>

<body>

  <?php include_once ('headerLogada.php') ?>    
  
  <!-- barra lateral -->
  <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="pedidos.php">
                  <span data-feather="layers"></span>
                  Pedidos Enviados
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="novoPedido.php">
                  <span data-feather="layers"></span>
                  Inserir Pedido
                </a>
              </li>
            </ul>
          </div>
        </nav>

  <!-- parte principal -->
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <!-- parte principal -->
    <div id= "pedidosEnviados" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pedidos Enviados</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-secondary">Share</button>
            <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="file-textcalendar"></span>
            Fabricante
        </button>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="file-textcalendar"></span>
            Distribuidor
        </button>
        </div>
    </div>

    <!-- tabela de dados -->
    <!-- PedidoList -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">PEDCODI</th>
          <th scope="col">EMISSAO</th>
          <th scope="col">STATUS</th>
          <th scope="col">CLIENTE</th>
          <th scope="col">VALOR</th>
          <th scope="col">EDITAR</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">5200001</th>
          <td>01/09/2019</td>
          <td>CONCLUIDO</td>
          <td>ABC TECIDOS E DECORACOES</td>
          <td>10.000,00</td>
          <td>
            <!-- Botão para acionar página de visualização -->
            <a class="btn btn-primary" href="verPedido.php" role="button">Detalhes</a>
          </td>
        </tr>
        <tr>
          <th scope="row">5200002</th>
          <td>05/09/2019</td>
          <td>CONCLUIDO</td>
          <td>LEROYA ABC BRICOLAGEM</td>
          <td>75.800,00</td>
          <td>
            <!-- Botão para acionar página de visualização -->
            <a class="btn btn-primary" href="verPedido.php" role="button">Detalhes</a>
          </td>
        </tr>
        <tr>
          <th scope="row">5200003</th>
          <td>18/09/2019</td>
          <td>PENDENTE</td>
          <td>C&Z CASA E CONSTRUCAO</td>
          <td>25.500,00</td>
          <td>
            <!-- Botão para acionar página de visualização -->
            <a class="btn btn-primary" href="verPedido.php" role="button">Detalhes</a>
          </td>
        </tr>
      </tbody>
    </table>

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