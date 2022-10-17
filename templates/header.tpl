<!DOCTYPE html>
<html lang="en">

<head>
  <base href="{BASE_URL}" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Productos Jugueteria</title>


</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-6">

      <a class="navbar-brand" href="home"></a>
      <img src="image/logo_jugueteria.png" width="160" height="154" class="img-thumbnail">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="home">Productos</a>
        </div>

        <div class="navbar-nav">

          <a class="nav-item nav-link" href="showCategories">Categorias</a>

        </div>
        </li>
        <div class="navbar-nav ml-auto">
          {if !isset($smarty.session.USER_ID)}
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="login">Login</a>
            </li>
          {else}
            <li class="nav-item ml-auto">
              <a class="nav-link" aria-current="page" href="logout">Logout ({$smarty.session.USER_EMAIL})</a>
            </li>
          {/if}

        </div>



      </div>
    </nav>
</div>