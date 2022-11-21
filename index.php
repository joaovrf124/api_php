<?php

require_once 'config.php';
require_once 'hg-api.php';

$hg = new HG_API(HG_API_KEY); //instância da classe criada

$dolar = $hg->moeda_quotation('USD');
$euro =  $hg->moeda_quotation('EUR');
$peso_argentino =  $hg->moeda_quotation('ARS');
$dolar_canada =  $hg->moeda_quotation('CAD');
$dolar_australia =  $hg->moeda_quotation('AUD');
$yen_japao =  $hg->moeda_quotation('JPY');
$bitcoin =  $hg->moeda_quotation('BTC');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Cotações</title>
</head>
<body>
<div class="conteinar">
<h1>Selecione a moeda </h1>

<button value="euro" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Euro
</button>

<button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
  Dolar
</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
    Argentine Peso
</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
    Canadian Dollar
</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
    Australian Dollar
</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal5">
    Japanese Yen
</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal6">
    Bitcoin
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cotação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      <p>Name: <?php echo($euro['name']);  ?> </p>
      <br>
      <p>Preço de compra: <?php echo($euro['buy']) ?> </p>
      <br>
      <p>Preço de venda: <?php echo($euro['sell']) ?> </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cotação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      <p>Name: <?php echo($dolar['name']);  ?> </p>
      <br>
      <p>Preço de compra: <?php echo($dolar['buy']) ?> </p>
      <br>
      <p>Preço de venda: <?php echo($dolar['sell']) ?> </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cotação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      <p>Name: <?php echo($peso_argentino['name']);  ?> </p>
      <br>
      <p>Preço de compra: <?php echo($peso_argentino['buy']) ?> </p>
      <br>
      <p>Preço de venda: <?php echo($peso_argentino['sell']) ?> </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cotação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      <p>Name: <?php echo($dolar_canada['name']);  ?> </p>
      <br>
      <p>Preço de compra: <?php echo($dolar_canada['buy']) ?> </p>
      <br>
      <p>Preço de venda: <?php echo($dolar_canada['sell']) ?> </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cotação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      <p>Name: <?php echo($dolar_australia['name']);  ?> </p>
      <br>
      <p>Preço de compra: <?php echo($dolar_australia['buy']) ?> </p>
      <br>
      <p>Preço de venda: <?php echo($dolar_australia['sell']) ?> </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cotação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      <p>Name: <?php echo($yen_japao['name']);  ?> </p>
      <br>
      <p>Preço de compra: <?php echo($yen_japao['buy']) ?> </p>
      <br>
      <p>Preço de venda: <?php echo($yen_japao['sell']) ?> </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cotação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
      <p>Name: <?php echo($bitcoin['name']);  ?> </p>
      <br>
      <p>Preço de compra: <?php echo($bitcoin['buy']) ?> </p>
      <br>
      <p>Preço de venda: <?php echo($bitcoin['sell']) ?> </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>



</div>

    
</body>

</html>