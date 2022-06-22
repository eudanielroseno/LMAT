<?php
ob_start();
//armazena os dados em cache
session_start();//iniciar a sessão
include("config/conexao.php");
if(!isset($_SESSION['email_registro'])&&(!isset( $_SESSION['senha_registro']))){
    header("Location:login/login.php?acao=negado");
}
include_once('sair.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMAT &mdash; Início </title>
    <link href="dist/assets/images/favicon/logo_ball.png" type="image/png" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/assets/css/bootstrap.css">   
    <link rel="stylesheet" href="dist/assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="dist/assets/css/app.css">
    <link rel="shortcut icon" href="dist/assets/images/favicon/logo_ball.png" type="image/x-icon">
    <link rel="stylesheet" href="dist/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/assets/css/adminlte.min.css">
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="inicio.php"><img src="dist/assets/images/logo/lmat.png" alt="Logo" srcset="" style="width: 170px; height: 70px"></a>
                        </div>
                        <div class="header-top-right">

                            <div class="dropdown">
                                <a href="#" class="user-dropdown d-flex dropend" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2" >
                                    <?php 
                                            $email = $_SESSION['email_registro'];
                                            $select = "SELECT * FROM user WHERE email_registro=:email";
                                            try{
                                                $a = $conect->prepare($select);
                                                $a->bindParam(':email',$email,PDO::PARAM_STR);
                                                $a->execute();
                                                while($b = $a->FETCH(PDO::FETCH_OBJ)){
                                                    
                                                    $id = $b->id_registro;
                                                    $nome = $b->usuario_registro;
                                                    $foto = $b->foto_registro;
                                                    $email = $b->email_registro;
                                                    $senha = $b->senha_registro;
                                                    
                                                ?>
                                        <img src="dist/assets/images/faces/<?php echo $foto; ?>" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        
                                        <h6 class="user-dropdown-name"><?php echo $nome; ?></h6>
                                        <?php 
                                            }}catch(PDOException $e){}
                                        ?>
                                        <p class="user-dropdown-status text-sm text-muted">Administrador</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="minhaconta.php?idUp=<?php echo $id ?>">Minha conta</a></li>
                                  <li><a class="dropdown-item" href="?sair">Sair</a></li>
                                </ul>
                            </div>

                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar" style="background-color: rgb(2, 0, 102);">
                    <div class="container">
                        <ul>
                            <li
                                class="menu-item  ">
                                <a href="inicio.php" class='menu-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Inicio</span>
                                </a>
                            </li>
                            
                            
                            
                            <li
                                class="menu-item  has-sub">
                                <a href="" class='menu-link'>
                                    <i class="bi bi-stack"></i>
                                    <span>Modalidades</span>
                                </a>
                                <div
                                    class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item">
                                                <a href="dist/futmasculino.php" class='submenu-link'>Futsal Masculino - A</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="dist/futmasculinoB.php" class='submenu-link'>Futsal Masculino - B</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="dist/futfeminino.php" class='submenu-link'>Futsal Feminino - A</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="dist/futfemininoB.php" class='submenu-link'>Futsal Feminino - B</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="dist/volei.php" class='submenu-link'>Vôlei - A</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="dist/voleiB.php" class='submenu-link'>Vôlei - B</a>
                                            </li>
                                        </ul>
                                      </div>
                </nav>

            </header>
            <div class="page-heading" style="text-align: center; color: #020066">
                <h3>Classificação Geral</h3>
            </div>
            <section class="content">
      <div class="container-fluid ">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="">
              <!-- /.card-header -->
              <div class="card-body">        
            <div class="card" >
            <div class="card-header" style="text-align: center">
                <h4 class="card-title" style="text-align: center;">  FUTSAL MASCULINO - GRUPO A</h4>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="text-align: center">
                      <th>LOGO</th>
                      <th>NOME</th>
                      <th>P</th>
                      <th>J</th>
                      <th>V</th>
                      <th>E</th>
                      <th>D</th>
                      <th>GP</th>
                      <th>GC</th>
                      <th>SG</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        include_once('config/conexao.php');
                        $select = "SELECT * FROM tb_fut_masculino_classificacaoa ORDER BY p_fut_masculino_classificacaoA DESC";
                            try{
                                $resultado = $conect->prepare($select);
                                $resultado->execute();
                                $contar = $resultado->rowCount();
                                if($contar > 0){
                                while($show = $resultado->FETCH(PDO::FETCH_OBJ)){
                    ?>
                    <tr data-bs-toggle="modal" data-bs-target="#default" style="text-align: center;">
                        <td style="text-align:center"><img style="width: 55px; border-radius:100%" src="dist/assets/images/times/<?php echo $show->foto_fut_masculino_classificacaoA;?>"></td>
                        <td class="text-bold-500" style="text-align: center;"><?php echo $show->nome_fut_masculino_classificacaoA;?></td>
                        <td><?php echo $show->p_fut_masculino_classificacaoA;?></td>
                        <td><?php echo $show->j_fut_masculino_classificacaoA;?></td>
                        <td><?php echo $show->v_fut_masculino_classificacaoA;?></td>
                        <td><?php echo $show->e_fut_masculino_classificacaoA;?></td>
                        <td><?php echo $show->d_fut_masculino_classificacaoA;?></td>
                        <td><?php echo $show->gp_fut_masculino_classificacaoA;?></td>
                        <td><?php echo $show->gc_fut_masculino_classificacaoA;?></td>
                        <td><?php echo $show->sg_fut_masculino_classificacaoA;?></td>
                    </tr>
                    <?php
                     }
                       }else{
                            echo "";
                        }
                        }catch(PDOException $e){
                            echo '<strong>ERRO DE PDO= </strong>'.$e->getMessage();
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid ">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="">
              <!-- /.card-header -->
              <div class="card-body">        
            <div class="card">
            <div class="card-header" style="text-align: center">
                <h4 class="card-title" style="text-align: center;">  FUTSAL MASCULINO - GRUPO B</h4>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr style="text-align: center">
                      <th>LOGO</th>
                      <th>NOME</th>
                      <th>P</th>
                      <th>J</th>
                      <th>V</th>
                      <th>E</th>
                      <th>D</th>
                      <th>GP</th>
                      <th>GC</th>
                      <th>SG</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        include_once('config/conexao.php');
                        $select = "SELECT * FROM tb_fut_masculino_classificacaob ORDER BY p_fut_masculino_classificacaoB DESC";
                            try{
                                $resultado = $conect->prepare($select);
                                $resultado->execute();
                                $contar = $resultado->rowCount();
                                if($contar > 0){
                                while($show = $resultado->FETCH(PDO::FETCH_OBJ)){
                    ?>
                    <tr data-bs-toggle="modal" data-bs-target="#default" style="text-align: center;">
                        <td style="text-align:center"><img style="width: 55px; border-radius:100%" src="dist/assets/images/times/<?php echo $show->foto_fut_masculino_classificacaoB;?>"></td>
                        <td class="text-bold-500" style="text-align: center;"><?php echo $show->nome_fut_masculino_classificacaoB;?></td>
                        <td><?php echo $show->p_fut_masculino_classificacaoB;?></td>
                        <td><?php echo $show->j_fut_masculino_classificacaoB;?></td>
                        <td><?php echo $show->v_fut_masculino_classificacaoB;?></td>
                        <td><?php echo $show->e_fut_masculino_classificacaoB;?></td>
                        <td><?php echo $show->d_fut_masculino_classificacaoB;?></td>
                        <td><?php echo $show->gp_fut_masculino_classificacaoB;?></td>
                        <td><?php echo $show->gc_fut_masculino_classificacaoB;?></td>
                        <td><?php echo $show->sg_fut_masculino_classificacaoB;?></td>
                    </tr>
                    <?php
                     } 
                       }else{
                            echo "";
                        }
                        }catch(PDOException $e){
                            echo '<strong>ERRO DE PDO= </strong>'.$e->getMessage();
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid ">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="">
              <!-- /.card-header -->
              <div class="card-body">        
            <div class="card">
            <div class="card-header" style="text-align: center">
                <h4 class="card-title" style="text-align: center;">  FUTSAL FEMININO - GRUPO A</h4>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr style="text-align: center">
                      <th>LOGO</th>
                      <th>NOME</th>
                      <th>P</th>
                      <th>J</th>
                      <th>V</th>
                      <th>E</th>
                      <th>D</th>
                      <th>GP</th>
                      <th>GC</th>
                      <th>SG</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        include_once('config/conexao.php');
                        $select = "SELECT * FROM tb_fut_feminino_classificacaoa ORDER BY p_fut_feminino_classificacaoA DESC";
                            try{
                                $resultado = $conect->prepare($select);
                                $resultado->execute();
                                $contar = $resultado->rowCount();
                                if($contar > 0){
                                while($show = $resultado->FETCH(PDO::FETCH_OBJ)){
                    ?>
                    <tr data-bs-toggle="modal" data-bs-target="#default" style="text-align: center;">
                        <td style="text-align:center"><img style="width: 55px; border-radius:100%" src="dist/assets/images/times/<?php echo $show->foto_fut_feminino_classificacaoA;?>"></td>
                        <td class="text-bold-500" style="text-align: center;"><?php echo $show->nome_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->p_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->j_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->v_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->e_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->d_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->gp_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->gc_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->sg_fut_feminino_classificacaoA;?></td>
                    </tr>
                    <?php
                     } 
                       }else{
                            echo "";
                        }
                        }catch(PDOException $e){
                            echo '<strong>ERRO DE PDO= </strong>'.$e->getMessage();
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid ">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="">
              <!-- /.card-header -->
              <div class="card-body">        
            <div class="card">
            <div class="card-header" style="text-align: center">
                <h4 class="card-title" style="text-align: center;">  FUTSAL FEMININO - GRUPO B</h4>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example4" class="table table-bordered table-striped">
                  <thead>
                  <tr style="text-align: center">
                      <th>LOGO</th>
                      <th>NOME</th>
                      <th>P</th>
                      <th>J</th>
                      <th>V</th>
                      <th>E</th>
                      <th>D</th>
                      <th>GP</th>
                      <th>GC</th>
                      <th>SG</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        include_once('config/conexao.php');
                        $select = "SELECT * FROM tb_fut_feminino_classificacaob ORDER BY p_fut_feminino_classificacaoB DESC";
                            try{
                                $resultado = $conect->prepare($select);
                                $resultado->execute();
                                $contar = $resultado->rowCount();
                                if($contar > 0){
                                while($show = $resultado->FETCH(PDO::FETCH_OBJ)){
                    ?>
                    <tr data-bs-toggle="modal" data-bs-target="#default" style="text-align: center;">
                        <td style="text-align:center"><img style="width: 55px; border-radius:100%" src="dist/assets/images/times/<?php echo $show->foto_fut_feminino_classificacaoB;?>"></td>
                        <td class="text-bold-500" style="text-align: center;"><?php echo $show->nome_fut_feminino_classificacaoB;?></td>
                        <td><?php echo $show->p_fut_feminino_classificacaoB;?></td>
                        <td><?php echo $show->j_fut_feminino_classificacaoB;?></td>
                        <td><?php echo $show->v_fut_feminino_classificacaoB;?></td>
                        <td><?php echo $show->e_fut_feminino_classificacaoB;?></td>
                        <td><?php echo $show->d_fut_feminino_classificacaoB;?></td>
                        <td><?php echo $show->gp_fut_feminino_classificacaoB;?></td>
                        <td><?php echo $show->gc_fut_feminino_classificacaoB;?></td>
                        <td><?php echo $show->sg_fut_feminino_classificacaoB;?></td>
                    </tr>
                    <?php
                     } 
                       }else{
                            echo "";
                        }
                        }catch(PDOException $e){
                            echo '<strong>ERRO DE PDO= </strong>'.$e->getMessage();
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid ">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="">
              <!-- /.card-header -->
              <div class="card-body">        
            <div class="card">
            <div class="card-header" style="text-align: center">
                <h4 class="card-title" style="text-align: center;"> VÔLEI - GRUPO A</h4>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example5" class="table table-bordered table-striped">
                  <thead>
                  <tr style="text-align: center">
                      <th>LOGO</th>
                      <th>NOME</th>
                      <th>J</th>
                      <th>V</th>
                      <th>D</th>
                      <th>P</th>
                      <th>SP</th>
                      <th>SC</th>
                      <th>DS</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        include_once('config/conexao.php');
                        $select = "SELECT * FROM tb_volei_a ORDER BY p_volei_A DESC";
                            try{
                                $resultado = $conect->prepare($select);
                                $resultado->execute();
                                $contar = $resultado->rowCount();
                                if($contar > 0){
                                while($show = $resultado->FETCH(PDO::FETCH_OBJ)){
                    ?>
                    <tr data-bs-toggle="modal" data-bs-target="#default" style="text-align: center;">
                        <td style="text-align:center"><img style="width: 55px; border-radius:100%" src="dist/assets/images/times/<?php echo $show->foto_volei_A;?>"></td>
                        <td class="text-bold-500" style="text-align: center;"><?php echo $show->nome_volei_A;?></td>
                        <td><?php echo $show->j_volei_A;?></td>
                        <td><?php echo $show->v_volei_A;?></td>
                        <td><?php echo $show->d_volei_A;?></td>
                        <td><?php echo $show->p_volei_A;?></td>
                        <td><?php echo $show->sp_volei_A;?></td>
                        <td><?php echo $show->sc_volei_A;?></td>
                        <td><?php echo $show->ds_volei_A;?></td>
                    </tr>
                    <?php
                     }
                       }else{
                            echo "";
                        }
                        }catch(PDOException $e){
                            echo '<strong>ERRO DE PDO= </strong>'.$e->getMessage();
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid ">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="">
              <!-- /.card-header -->
              <div class="card-body">        
            <div class="card">
            <div class="card-header" style="text-align: center">
                <h4 class="card-title" style="text-align: center;"> VÔLEI - GRUPO B</h4>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example6" class="table table-bordered table-striped">
                  <thead>
                  <tr style="text-align: center">
                      <th>LOGO</th>
                      <th>NOME</th>
                      <th>J</th>
                      <th>V</th>
                      <th>D</th>
                      <th>P</th>
                      <th>SP</th>
                      <th>SC</th>
                      <th>DS</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        include_once('config/conexao.php');
                        $select = "SELECT * FROM tb_volei_b ORDER BY p_volei_B DESC";
                            try{
                                $resultado = $conect->prepare($select);
                                $resultado->execute();
                                $contar = $resultado->rowCount();
                                if($contar > 0){
                                while($show = $resultado->FETCH(PDO::FETCH_OBJ)){
                    ?>
                    <tr data-bs-toggle="modal" data-bs-target="#default" style="text-align: center;">
                        <td style="text-align:center"><img style="width: 55px; border-radius:100%" src="dist/assets/images/times/<?php echo $show->foto_volei_B;?>"></td>
                        <td class="text-bold-500" style="text-align: center;"><?php echo $show->nome_volei_B;?></td>
                        <td><?php echo $show->j_volei_B;?></td>
                        <td><?php echo $show->v_volei_B;?></td>
                        <td><?php echo $show->d_volei_B;?></td>
                        <td><?php echo $show->p_volei_B;?></td>
                        <td><?php echo $show->sp_volei_B;?></td>
                        <td><?php echo $show->sc_volei_B;?></td>
                        <td><?php echo $show->ds_volei_B;?></td>
                    </tr>
                    <?php
                     }
                       }else{
                            echo "";
                        }
                        }catch(PDOException $e){
                            echo '<strong>ERRO DE PDO= </strong>'.$e->getMessage();
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        </div>
    </div>
    <script src="dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="dist/assets/js/bootstrap.bundle.min.js"></script>  
    <script src="dist/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="dist/assets/js/pages/dashboard.js"></script>
    <script src="dist/assets/js/pages/horizontal-layout.js"></script>
    
    <script src="dist/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="dist/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="dist/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="dist/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="dist/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="dist/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="dist/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="dist/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="dist/assets/plugins/jszip/jszip.min.js"></script>
    <script src="dist/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="dist/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="dist/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="dist/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="dist/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $("#example2").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        $("#example3").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
        $("#example4").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
        $("#example5").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');
        $("#example6").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example6_wrapper .col-md-6:eq(0)');
        $("#example7").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example7_wrapper .col-md-6:eq(0)');
        $("#example8").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example8_wrapper .col-md-6:eq(0)');
    });
    </script>
    
</body>

</html>
