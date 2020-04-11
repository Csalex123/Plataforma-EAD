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
        <link rel="stylesheet" href="../plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="../plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="../plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="../plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="../plugins/c3/c3.min.css">
        <link rel="stylesheet" href="../plugins/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="../dist/css/theme.css">
        <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body name="index">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <?php include '../src/php/header-top.php';?>

            <div class="page-wrap">
                <?php include '../src/php/menu.php';?>
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
                                   
                                    <div id="add-curso" class="card-block text-center" style="height: 305px;">
                                        <div class="icon" style="font-size: 49px; padding-top: 40%;">
                                            <i class="ik ik-plus"></i>
                                        </div>
                                        <a href="#" style="text-align: center;
                                        display: block;
                                        height: 100%;
                                        width: 100%;
                                        text-decoration: none;
                                        position: absolute;
                                        top:0;
                                        left:0;
                                        padding-top: 70%;">Cadastrar Curso</a>
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
                                                <p class="mb-0"><a href="#listarAlunos" data-toggle="modal" data-target="#listarAlunos">Alunos</a></p>
                                            </div>
                                            <div class="col-6 border-left">
                                                <h5 class="fw-700 mb-0">0</h5>
                                                <p class="mb-0"><a href="#editLayoutItem" data-toggle="modal" data-target="#editLayoutItem">Conteudo</a></p>
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
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
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
        
         
    </body>
</html>
