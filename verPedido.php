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
                <a class="nav-link active" href="#pedidosEnviados">
                  <span data-feather="layers"></span>
                  Pedidos Enviados
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#inserirPedido">
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
        <h1 class="h2">Detalhes do Pedido</h1>
    </div>
    
    <form>
        <div class="form-row">
            
            <div class="row">
                <div class="form-group col-md-6" >
                    <label for="pedPedCodi">PEDCODI</label> 
                    <input type="text" name="pedPedCodi" id="pedPedCodi" class="form-control" value="PEDCODI">
                </div> 
                <div class="form-group col-md-6">
                    <label for="pedDtEmissao">EMISSAO</label> 
                    <input type="text" name="pedPedCodi" id="pedPedCodi" class="form-control" value="EMISSÃO">
                </div>
                <div class="form-group col-md-6">
                    <label for="cliCNPJ">CNPJ Cliente</label> 
                    <input type="text" name="cliCNPJ" id="cliCNPJ" class="form-control" value="12.123.123/0001-12">
                </div>
                <div class="form-group col-md-6">
                    <label for="cliNome">Nome Cliente</label> 
                    <input type="text" name="cliNome" id="cliNome" class="form-control" value="Nome do Cliente">
                </div>
                <div class="form-group col-md-6">
                    <label for="vendedor">Vendedor</label> 
                    <input type="text" name="vendedor" id="vendedor" class="form-control" value="Vendedor">
                </div>
                <div class="form-group col-md-6">
                    <label for="transportadora">Transportadota</label> 
                    <input type="text" name="transportadora" id="transportadora" class="form-control" value="Transportadora">
                </div>
            </div>
        </div>
        
        <!-- Tabela com os itens do pedido que está sendo visualizado -->
        <h3 class="h2">Itens do Pedido</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">PRODCODI</th>
                    <th scope="col">DESCRICAO</th>
                    <th scope="col">QTDE</th>
                    <th scope="col">VALOR UNIT</th>
                    <th scope="col">D/A (%)</th>
                    <th scope="col">VALOR CALC</th>
                    <th scope="col">VALOR TOTAL</th>
                    <th scope="col">EDITAR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">0130010</th>
                    <td>ARGOLA 20 MM - DOURADO</td>
                    <td>200</td>
                    <td>5,30</td>
                    <td>0</td>
                    <td>5,30</td>
                    <td>1.060,00</td>
                    <td>
                        <!-- Botão para acionar modal de cancelamento -->
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#excluirItemPedido">
                            Excluir
                        </button>
                        <!-- Botão para alterar Item de Pedido -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroPedidoItem">
                            Alterar
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1631116</th>
                    <td>RODIZIO ROMANO KIT (100 PC) - BRANCO</td>
                    <td>2000</td>
                    <td>10,16</td>
                    <td>0</td>
                    <td>10,16</td>
                    <td>20.320,00</td>
                    <td>
                        <!-- Botão para acionar modal de excluir Item de Pedido -->
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#excluirItemPedido">
                            Excluir
                        </button>
                        <!-- Botão para alterar Item de Pedido -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroPedidoItem">
                            Alterar
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>  
        <!-- <label for="tabPrecoNome" style="margin-left: 23%">TABELA DE PREÇOS</label><br> -->

    
    
    <!-- Botão e modal para cancelar alterações-->
        <button class="btn btn-secondary" type="data-dismiss" data-toggle="modal" data-target="#excluirAlteracoes">Fechar</button>
    
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
                Tem certeza que deseja cancelar alterações?
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="verPedido.php" role="button">Fechar</a>
                <a class="btn btn-primary" href="pedidos.php" role="button">Cancelar alterações</a>
            </div>
            </div>
        </div>
        </div>

        <!-- Botão e Modal Cancelar Pedido -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#cancelarPedido">
            Cancelar Pedido
        </button>
        
        <div class="modal fade" id="cancelarPedido" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Atenção!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja cancelar o Pedido?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary" type="submit" value="Submit">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Botão e modal para alterar -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alterarPedido">
            Salvar Alterações
        </button>

        <div class="modal fade" id="alterarPedido" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Atenção!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja alterar o Pedido?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary" type="submit" value="Submit">Alterar</button>
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