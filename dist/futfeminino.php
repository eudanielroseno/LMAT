<?php
  ob_start(); //armazena coisas em cache
  session_start();//inicia sessão
  if(!isset($_SESSION['usuario_registro'])&&(!isset($_SESSION['senha_registro']))){
   header("Location: ../login/login.php?acao=negado");
  }
  include_once('sair.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMAT - Futsal Feminino Grupo A</title>
    <link href="assets/images/favicon/logo_ball.png" type="image/png" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">   
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="../inicio.php"><img src="assets/images/logo/lmat.png" alt="Logo" srcset="" style="width: 170px; height: 70px"></a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar" style="background-color: rgb(2, 0, 102);">
                    <div class="container">
                        <ul>
                            <li
                                class="menu-item  ">
                                <a href="../inicio.php" class='menu-link'>
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
                                                <a href="futmasculino.php" class='submenu-link'>Futsal Masculino - A</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="futmasculinoB.php" class='submenu-link'>Futsal Masculino - B</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="futfeminino.php" class='submenu-link'>Futsal Feminino - A</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="futfemininoB.php" class='submenu-link'>Futsal Feminino - B</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="volei.php" class='submenu-link'>Vôlei - A</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="voleiB.php" class='submenu-link'>Vôlei - B</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                </nav>
            </header>  
        </div>   
    </div>
    <div class="">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
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
                      <th>AÇÕES</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        include_once('../config/conexao.php');
                        $select = "SELECT * FROM tb_fut_feminino_classificacaoa ORDER BY p_fut_feminino_classificacaoA DESC";
                            try{
                                $resultado = $conect->prepare($select);
                                $resultado->execute();
                                $contar = $resultado->rowCount();
                                if($contar > 0){
                                while($show = $resultado->FETCH(PDO::FETCH_OBJ)){
                    ?>
                    <tr data-bs-toggle="modal" data-bs-target="#default" style="text-align: center;">
                        <td style="text-align:center"><img style="width: 55px; border-radius:100%" src="assets/images/times/<?php echo $show->foto_fut_feminino_classificacaoA;?>"></td>
                        <td class="text-bold-500" style="text-align: center;"><?php echo $show->nome_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->p_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->j_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->v_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->e_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->d_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->gp_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->gc_fut_feminino_classificacaoA;?></td>
                        <td><?php echo $show->sg_fut_feminino_classificacaoA;?></td>
                        <td><a  href="editar_futfeminino.php?idUp=<?php echo $show->id_fut_feminino_classificacaoA;?>"  class="badge bg-success rounded-pill">EDITAR</a> <a href="delfutfem.php?idDel=<?php echo $show->id_fut_feminino_classificacaoA; ?>" class="badge bg-danger rounded-pill" title="Remover" onclick="return confirm('Deseja remover a equipe <?php echo $show->nome_fut_feminino_classificacaoA; ?>?')">DELETE</a></td>
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
                        <div class="col-7">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" style="text-align: center;">CADASTRO DE TIMES - GRUPO A</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-8 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Time</label>
                                                        <input type="text" id="nome" class="form-control"
                                                            required placeholder="Nome do Time" name="nome">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">P</label>
                                                        <input type="text" id="p" class="form-control"
                                                            required placeholder="Pontos" name="p">
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">J</label>
                                                        <input type="text" id="j" class="form-control"
                                                            required placeholder="Jogos" name="j">
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">V</label>
                                                        <input type="text" id="v" class="form-control"
                                                            required placeholder="Vitórias" name="v">
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">E</label>
                                                        <input type="text" id="e" class="form-control"
                                                            required placeholder="Empates" name="e">
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">D</label>
                                                        <input type="text" id="d" class="form-control"
                                                            required placeholder="Derrotas" name="d">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">GP</label>
                                                        <input type="text" id="gp" class="form-control"
                                                            required placeholder="Gols feitos" name="gp">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">GC</label>
                                                        <input type="text" id="gc" class="form-control"
                                                            required placeholder="Gols sofridos" name="gc">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">SG</label>
                                                        <input type="text" id="sg" class="form-control"
                                                            required placeholder="Saldo de gols" name="sg">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Foto do Time</label>
                                                        <div class="input-group">
                                                          <div class="custom-file">
                                                            <input name="foto" type="file" class="custom-file-input" id="foto">
                                                            <label class="custom-file-label" for="exampleInputFile"></label>
                                                          </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1" name="botao">Enviar</button>
                                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Resetar</button>
                                                </div>
                                                
                                            </div>
                                        </form>
                                        <!-- Cadastro dos times -->
                                        <?php
                                            include_once('../config/conexao.php');
                                            if(isset($_POST['botao'])) {
                                                $nome = $_POST['nome'];
                                                $p = $_POST['p'];
                                                $j = $_POST['j'];
                                                $v = $_POST['v'];
                                                $e = $_POST['e'];
                                                $d = $_POST['d'];
                                                $gp = $_POST['gp'];
                                                $gc = $_POST['gc'];
                                                $sg = $_POST['sg'];
                                                //$foto = $_FILES['foto'];
                                                $formatP = array("png","jpg","jpeg","JPG","gif");
                                                $extensao = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);

                                                if(in_array($extensao, $formatP)){
                                                    $pasta = "assets/images/times/";
                                                    $temporario = $_FILES['foto']['tmp_name'];
                                                    $novoNome = uniqid().".$extensao";

                                                    if(move_uploaded_file($temporario, $pasta.$novoNome)){
                                                        $cadastro = "INSERT INTO tb_fut_feminino_classificacaoa (nome_fut_feminino_classificacaoA,foto_fut_feminino_classificacaoA, p_fut_feminino_classificacaoA,
                                                        j_fut_feminino_classificacaoA, v_fut_feminino_classificacaoA, e_fut_feminino_classificacaoA, d_fut_feminino_classificacaoA, gp_fut_feminino_classificacaoA,
                                                        gc_fut_feminino_classificacaoA, sg_fut_feminino_classificacaoA) VALUES (:nome, :foto, :p, :j, :v, :e, :d, :gp, :gc, :sg)";
                                                        try{
                                                            $result = $conect->prepare($cadastro);
                                                            $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                                                            $result->bindParam(':p',$p,PDO::PARAM_STR);
                                                            $result->bindParam(':j',$j,PDO::PARAM_STR);
                                                            $result->bindParam(':v',$v,PDO::PARAM_STR);
                                                            $result->bindParam(':e',$e,PDO::PARAM_STR);
                                                            $result->bindParam(':d',$d,PDO::PARAM_STR);
                                                            $result->bindParam(':gp',$gp,PDO::PARAM_STR);
                                                            $result->bindParam(':gc',$gc,PDO::PARAM_STR);
                                                            $result->bindParam(':sg',$sg,PDO::PARAM_STR);
                                                            $result->bindParam(':foto',$novoNome,PDO::PARAM_STR);
                                                            $result->execute();
                                                            $contar = $result->rowCount();
                                                            if($contar > 0){
                                                                echo '<br><div class="container"><div class="alert alert-success alert-dismissible show fade">
                                                                    Time cadastrado com sucesso! :)
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div></div>';
                                                            }else{
                                                                echo '<br><div class="container"><div class="alert alert-danger alert-dismissible show fade">
                                                                    Não foi possível cadastrar o time! :(
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div></div>';
                                                            }
                                                        }catch(PDOException $e){
                                                            echo "<strong>ERRO DE PDO = </strong>".$e->getMessage();
                                                        }
                                                    }else{
                                                        echo "Erro, não foi possível fazer o upload do arquivo!";
                                                    }
                                                }else{
                                                    echo "Formato Inválido";
                                                }
                                                /*echo $nome."<br>";
                                                var_dump($_FILES['foto']);*/
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>
    
</div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>   
    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/pages/horizontal-layout.js"></script>

    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/jszip/jszip.min.js"></script>
    <script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
    <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    });
    </script>
</body>
</html>
