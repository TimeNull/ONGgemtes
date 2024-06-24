<?php
  include("protect.php");
  protect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Avaliação</title>
</head>

<body class="FundoCinza">
  <header class="py-3 mb-3 border-bottom headerTelaInicial">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="bi me-2" height="32" src="./Imagens/logoGemtes.png">

        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item" href="./telaInicial.php">Home</a></li>
          <li><a class="dropdown-item" href="./assistidos.php">Assistidos</a></li>
          <li><a class="dropdown-item" href="./cadastrarAssistido.php">Cadastrar Assistido</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="./avaliacao.php">Avaliação</a></li>
          <li><a class="dropdown-item" href="./consultas.php">Consultas</a></li>
        </ul>
      </div>

      <div class="d-flex align-items-center">
        <form class="w-100 me-3" role="search">
          <input type="search" class="form-control bordaAzulGemtes" placeholder="Procurar assistido..." aria-label="Search">
        </form>

        <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" alt="mdo" width="25" height="25" class="rounded-circle" fill="#10A1DF" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
            </svg>
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="./perfilUsuario.php">Sobre</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="./sair.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <form class="row g-3">
      <div class=" col-12">
        <h3>Identificação do assistido</h3>
      </div>
      <div class="col-md-6">
        <label for="inputnome" class="form-label"> Nome Completo</label>
        <input type="text" class="form-control" id="inputnome">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">ID</label>
        <input type="number" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary azulGemtes bordaAzulGemtes">Procurar</button>
      </div>
    </form>

    <table class="table my-3">
      <thead>
        <tr>
          <th scope="col">Tipo</th>
          <th scope="col">Data</th>
          <th scope="col">Nota</th>
          <th scope="col">Relatório</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>12.04</td>
          <td>PS</td>
          <td> <a href="" class="textoAzulGemtes"> Gerar Relatório</a></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>12.05</td>
          <td>PS</td>
          <td> <a href="" class="textoAzulGemtes"> Gerar Relatório</a></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>12.06</td>
          <td>PS</td>
          <td> <a href="" class="textoAzulGemtes"> Gerar Relatório</a></td>
        </tr>
      </tbody>
    </table>

    <div class="col-12">
      <button type="submit" class="btn btn-primary azulGemtes bordaAzulGemtes"> <a href="./novaAvaliação.php" style="color:white;"> Registrar nova avaliação</a></button>
    </div>
  </div>


</body>

</html>