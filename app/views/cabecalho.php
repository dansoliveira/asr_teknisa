<!DOCTYPE html>
<html>
    <head>
        <title><?php echo SITENAME; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="Sistema para agendamento de Salas de reunião">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo json_decode($dados, true)['titulo'] ?></a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="agendamento">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="colaborador">Colaboradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sala">Salas</a>
                    </li>
                </ul>
            </div>
        </nav>