<?php
include_once "../model/Login.class.php";

$objLogin = new  Login();
$objLogin->verificarLogado();
?>
<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Berlim - Pagina Administrador</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../favicon2.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">


    <link rel="stylesheet" href="../plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="../plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="../plugins/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../dist/css/theme.css">
    <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body name="index">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="wrapper">
        <?php include '../src/php/header-top.php'; ?>

        <div class="page-wrap">
            <?php include '../src/php/menu.php'; ?>
            <div class="main-content">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="ik ik-clipboard bg-blue"></i>
                                    <div class="d-inline">
                                        <h5>Cursos</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">

                        <div class="col-xl-3 col-md-6">
                            <div class="card sale-card">
                                <a href="cadastrarCurso.php">
                                    <div id="add-curso" class="card-block text-center" style="height: 305px;">
                                        <div class="icon" style="font-size: 49px; padding-top: 40%;">
                                            <i class="ik ik-plus"></i>
                                        </div>
                                        Cadastrar Curso
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card sale-card">
                                <div class="card-header">
                                    <h3>Curso1</h3>
                                    <div class="dropdown no-arrow" style="top:20px; right: 10px; position: absolute;">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" style="color:black;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Opções:</div>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item" href="#">Excluir</a>
                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item" href="#">Adicionar Conteudo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block text-center">
                                    <div data-label="40%" class="radial-bar radial-bar-40 radial-bar-lg radial-bar-danger">
                                        <img src="../img/users/6.jpg" alt="User-Image">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="fw-700 mb-0">0</h5>
                                            <p class="mb-0"><a href="#listarAlunos" data-toggle="modal" data-target="#listarAlunos">Alunos</a></p>
                                        </div>
                                        <div class="col-6 border-left">
                                            <h5 class="fw-700 mb-0">0</h5>
                                            <p class="mb-0"><a href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem">Aulas</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card sale-card">
                                <div class="card-header">
                                    <h3>Curso1</h3>
                                    <div class="dropdown no-arrow" style="top:20px; right: 10px; position: absolute;">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" style="color:black;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Opções:</div>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item" href="#">Excluir</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Adicionar Conteudo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block text-center">
                                    <div data-label="40%" class="radial-bar radial-bar-40 radial-bar-lg radial-bar-danger">
                                        <img src="../img/users/6.jpg" alt="User-Image">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="fw-700 mb-0">0</h5>
                                            <p class="mb-0">Alunos</p>
                                        </div>
                                        <div class="col-6 border-left">
                                            <h5 class="fw-700 mb-0">0</h5>
                                            <p class="mb-0">Conteudo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card sale-card">
                                <div class="card-header">
                                    <h3>Curso1</h3>
                                    <div class="dropdown no-arrow" style="top:20px; right: 10px; position: absolute;">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" style="color:black;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Opções:</div>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item" href="#">Excluir</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Adicionar Conteudo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block text-center">
                                    <div data-label="40%" class="radial-bar radial-bar-40 radial-bar-lg radial-bar-danger">
                                        <img src="../img/users/6.jpg" alt="User-Image">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="fw-700 mb-0">0</h5>
                                            <p class="mb-0">Alunos</p>
                                        </div>
                                        <div class="col-6 border-left">
                                            <h5 class="fw-700 mb-0">0</h5>
                                            <p class="mb-0">Conteudo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card sale-card">
                                <div class="card-header">
                                    <h3>Curso1</h3>
                                    <div class="dropdown no-arrow" style="top:20px; right: 10px; position: absolute;">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" style="color:black;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Opções:</div>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item" href="#">Excluir</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Adicionar Conteudo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block text-center">
                                    <div data-label="40%" class="radial-bar radial-bar-40 radial-bar-lg radial-bar-danger">
                                        <img src="../img/users/6.jpg" alt="User-Image">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="fw-700 mb-0">0</h5>
                                            <p class="mb-0">Alunos</p>
                                        </div>
                                        <div class="col-6 border-left">
                                            <h5 class="fw-700 mb-0">0</h5>
                                            <p class="mb-0">Conteudo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <footer class="footer">
                <div class="w-100 clearfix">
                    <span class="text-center text-sm-left d-md-inline-block">Copyright © 2020 Berlim. Todos os direitos reservados.</span>
                </div>
            </footer>

        </div>
    </div>

    <div class="modal fade edit-layout-modal" id="editLayoutItem" tabindex="-1" role="dialog" aria-labelledby="editLayoutItemLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLayoutItemLabel">Curso1 - Aulas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body" id="body-1">
                    <div class="col-xl-12 col-md-12">
                        <button id="openCadastro" type="button" class="btn btn-primary">Cadatrar uma nova aula</button><br><br>

                        <div class="card table-card">
                            <div class="card-block">

                                <div class="table-responsive">
                                    <table class="table  mb-0">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Data da aula</th>
                                                <th>Status</th>
                                                <th></th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Fulano</td>
                                                <td>00/00/000</td>
                                                <td>
                                                    <div class="p-status bg-green"></div>
                                                </td>
                                                <td></td>
                                                <td>
                                                    <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fulano</td>
                                                <td>00/00/000</td>
                                                <td>
                                                    <div class="p-status bg-red"></div>
                                                </td>
                                                <td>fulano@emmail.com</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fulano</td>
                                                <td>00/00/000</td>
                                                <td>
                                                    <div class="p-status bg-red"></div>
                                                </td>
                                                <td>fulano@emmail.com</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fulano</td>
                                                <td>00/00/000</td>
                                                <td>
                                                    <div class="p-status bg-red"></div>
                                                </td>
                                                <td>fulano@emmail.com</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fulano</td>
                                                <td>00/00/000</td>
                                                <td>
                                                    <div class="p-status bg-red"></div>
                                                </td>
                                                <td>fulano@emmail.com</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-body" id="body-2">
                    <div class="col-xl-12 col-md-12">
                        <button id="closeCadastro" type="button" class="btn btn-primary">Voltar</button><br><br>

                        <div class="card">
                            <div class="card-body">

                                <form id="formulario-aulas">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Título da aula</label>
                                                <input type="text" required class="form-control" placeholder="Nome">
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="input">Data da aula</label>
                                                <input type="text" required id="data" class="form-control" placeholder="00/00/0000">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="input">Hora da Aula</label>
                                                <input type="text" required class="form-control" placeholder="Exemplo: 20h">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Descrição da aula</label>
                                                <textarea required class="html-editor form-control" rows="6"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Link do Iframe do vídeo</label>
                                                <textarea required class="html-editor form-control" rows="4"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Anexe uma imagem para esta aula</label>
                                                    <input required type="file" name="img[]" class="file-upload-default">
                                                    <div class="input-group col-xs-12">
                                                        <input required type="text" class="form-control file-upload-info" disabled placeholder="Imagem">
                                                        <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-primary" type="button">Selecionar</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary" style="float: right;">Enviar formulário</button>
                                        </div>

                                    </div>
                                </form>


                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade edit-layout-modal" id="listarAlunos" tabindex="-1" role="dialog" aria-labelledby="listarAlunosLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLayoutItemLabel">Curso - Alunos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="col-xl-12 col-md-12">
                        <div class="card table-card">

                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table  mb-0">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Data de nascimento</th>
                                                <th>Status</th>
                                                <th>Email</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Fulano</td>
                                                <td>00/00/000</td>
                                                <td>
                                                    <div class="p-status bg-red"></div>
                                                </td>
                                                <td>fulano@emmail.com</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fulano</td>
                                                <td>00/00/000</td>
                                                <td>
                                                    <div class="p-status bg-red"></div>
                                                </td>
                                                <td>fulano@emmail.com</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fulano</td>
                                                <td>00/00/000</td>
                                                <td>
                                                    <div class="p-status bg-red"></div>
                                                </td>
                                                <td>fulano@emmail.com</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fulano</td>
                                                <td>00/00/000</td>
                                                <td>
                                                    <div class="p-status bg-red"></div>
                                                </td>
                                                <td>fulano@emmail.com</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fulano</td>
                                                <td>00/00/000</td>
                                                <td>
                                                    <div class="p-status bg-red"></div>
                                                </td>
                                                <td>fulano@emmail.com</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox pl-1 align-self-center">
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')
    </script>
    <script src="../plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="../plugins/screenfull/dist/screenfull.js"></script>
    <script src="../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../plugins/moment/moment.js"></script>
    <script src="../plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../plugins/d3/dist/d3.min.js"></script>
    <script src="../plugins/c3/c3.min.js"></script>
    <script src="../js/tables.js"></script>
    <script src="../js/widgets.js"></script>
    <script src="../js/charts.js"></script>
    <script src="../dist/js/theme.min.js"></script>
    <script src="../js/form-advanced.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="../js/form-components.js"></script>


    <script>
        $(document).ready(() => {
            $("#body-2").hide();
            $("#openCadastro").click(() => {
                $("#body-1").hide();
                $("#body-2").show();
            });

            $("#closeCadastro").click(() => {
                $("#body-1").show();
                $("#body-2").hide();
            });

            $("#data").mask('00/00/0000');

            $('.html-editor').summernote({
                height: 300,
                tabsize: 2
            });
        });
    </script>


</body>

</html>