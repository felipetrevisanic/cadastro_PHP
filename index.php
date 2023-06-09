<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- aba de navegação -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" id="home-tab" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" id="cadastro-tab" href="?page=cadastro">Cadastro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" id="lista-tab" href="?page=listar">Lista</a>
        </li>
    </ul>


    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("conexao.php");
                    // solicita um request enviado atraves do href dos links da navBar
                    //transitando entre as paginas e comandos de execucao do banco
                    switch(@$_REQUEST["page"]){
                        case "cadastro":
                            include("cadastro.php");break;
                        case "listar":
                            include("listar_usuario.php");break;
                        case "salvar":
                            include("salvar_usuario.php");break;
                        case "editar":
                            include("editar_usuario.php");break;
                        default:
                            include("home.php");
                        }
                ?>
            </div>
        </div>
    </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>