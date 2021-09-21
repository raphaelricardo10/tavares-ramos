<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tavares Ramos - Prestação de Serviços</title>

    <?php require_once './includes/sql.php'; ?>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Default style -->
    <link href="./css/common.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/hoverIntent.js"></script>
    <script src="../js/scripts.js"></script>

    <header>
        <?php sql_connect() ?>
        <div class="header d-flex container-header">
            <nav class="navbar navbar-expand-md navbar-light w-100">
                <a class="navbar-brand align-items-center m-0" href="./">
                    <img src="./img/logo-header.png" alt="logo" class="d-inline-block align-text-top">
                </a>
                <span class="navbar-text d-md-none" id="header-toggle-text">Tavares Ramos</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Serviços Prestados
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <?php sqlListProfessionals("a", "dropdown-item", true); ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./orcamento" title="Faça um orçamento">Orçamento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./fale-conosco" title="Entre em contato conosco">Fale conosco</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./sobre-nos" title="Sobre nós">Sobre nós</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>