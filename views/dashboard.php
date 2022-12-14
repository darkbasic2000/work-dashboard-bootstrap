<?php require_once("sessao.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <title>Work Dashboard - Principal</title>
    </head>
    
    <body class="bg-dark text-light fw-bold">

        <div class="container w-75">
            <?php
                $pagina = "dashboard";
                require_once "header.php";
                require_once "menu.php";
            ?>
            <div class="row mt-3">
                <div class="col-12">
                    <table id="dashboard" class="table table-sm table-secondary table-striped fw-bold">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Foto</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Status</th>                                
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <script src="../js/dashboard.js"></script>
        
    </body>
    
</html>