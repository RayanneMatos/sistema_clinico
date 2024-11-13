<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class='text-black text-start'>Sistema de Controle Clínico</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom text-black text-start">
    <div class="container-fluid">
        <a class="navbar-brand" href="?home">SisCoc</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Médicos
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-medico">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-medico">Listar</a></li>
            </ul>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Especialidades
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-especialidade">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-especialidade">Listar</a></li>
            </ul>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pacientes
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-paciente">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-paciente">Listar</a></li>
            </ul>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Consultas
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=cadastrar-consulta">Cadastrar</a></li>
                <li><a class="dropdown-item" href="?page=listar-consulta">Listar</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <?php 
                    //arquivo de conexão com o banco de dados
                    include('config.php');

                    switch (@$_REQUEST['page']) {
// Case médico
                        case 'cadastrar-medico':
                            include ('cadastrar-medico.php');
                            break;
                        case 'editar-medico':
                            include ('editar-medico.php');
                            break;
                        case 'listar-medico':
                            include ('listar-medico.php');
                            break;
                        case 'salvar-medico':
                            include ('salvar-medico.php');
                            break;

// Case médico
                        case 'cadastrar-especialidade':
                            include ('cadastrar-especialidade.php');
                            break;
                        case 'editar-especialidade':
                            include ('editar-especialidade.php');
                            break;
                        case 'listar-especialidade':
                            include ('listar-especialidade.php');
                            break;
                        case 'salvar-especialidade':
                            include ('salvar-especialidade.php');
                            break;
//Case paciente
                        case 'cadastrar-paciente':
                            include ('cadastrar-paciente.php');
                            break;
                        case 'editar-paciente':
                            include ('editar-paciente.php');
                            break;
                        case 'listar-paciente':
                            include ('listar-paciente.php');
                            break;
                        case 'salvar-paciente':
                            include ('salvar-paciente.php');
                            break;
//Case consulta
                        case 'cadastrar-consulta':
                            include ('cadastrar-consulta.php');
                            break;
                        case 'editar-consulta':
                            include ('editar-consulta.php');
                            break;
                        case 'listar-consulta':
                            include ('listar-consulta.php');
                            break;
                        case 'salvar-consulta':
                            include ('salvar-consulta.php');
                            break;

                        default:
                            include('home.php');
                    }
                ?>

            </div>
        </div>

    </div>



    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>