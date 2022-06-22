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
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>LMAT - Futsal Masculino Grupo A</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
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
<div class="container">
		<div class="main-body">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-body">
                        <?php
                            include_once('../config/conexao.php');
                            $id = $_GET['idUp'];
                            $select = "SELECT * FROM tb_fut_masculino_classificacaoa WHERE id_fut_masculino_classficacaoA=:id";
                            try{
                            $result = $conect->prepare($select);
                            $result ->bindParam(':id',$id, PDO::PARAM_INT);
                            $result -> execute();
                            $contar=$result->rowCount();
                            if($contar>0){
                                while($show=$result->FETCH(PDO::FETCH_OBJ)){
                                $idTime = $show->id_fut_masculino_classficacaoA; 
                                $nomeTime = $show->nome_fut_masculino_classificacaoA;
                                $pTime = $show->p_fut_masculino_classificacaoA;
                                $jTime = $show->j_fut_masculino_classificacaoA;
                                $vTime = $show->v_fut_masculino_classificacaoA;
                                $eTime = $show->e_fut_masculino_classificacaoA;
                                $dTime = $show->d_fut_masculino_classificacaoA;
                                $gpTime = $show->gp_fut_masculino_classificacaoA;
                                $gcTime = $show->gc_fut_masculino_classificacaoA;
                                $sgTime = $show->sg_fut_masculino_classificacaoA;
                                $fotoTime = $show->foto_fut_masculino_classificacaoA;
                                }
                            }
                            }catch(PDOException $id){}
                        ?>  
                            <form  action="" method="post" enctype="multipart/form-data">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="assets/images/times/<?php echo $fotoTime ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                </div>
                                <hr class="my-4">
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">Nome</h6>
                                        <input name="nome" type="text" class="form-control" value="<?php echo $nomeTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">P</h6>
                                        <input name="p" type="text" class="form-control" value="<?php echo $pTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">J</h6>
                                        <input name="j" type="text" class="form-control" value="<?php echo $jTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">V</h6>
                                        <input name="v" type="text" class="form-control" value="<?php echo $vTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">E</h6>
                                        <input name="e" type="text" class="form-control" value="<?php echo $eTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">D</h6>
                                        <input name="d" type="text" class="form-control" value="<?php echo $dTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">GP</h6>
                                        <input name="gp" type="text" class="form-control" value="<?php echo $gpTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">GC</h6>
                                        <input name="gc" type="text" class="form-control" value="<?php echo $gcTime ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-secondary">
                                        <h6 class="mb-0">SG</h6>
                                        <input name="sg" type="text" class="form-control" value="<?php echo $sgTime ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">FOTO DO TIME</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input name="foto" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Upload da foto</label>
                                    </div>
                                    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-secondary">
                                        <input name="btnUp" type="submit" class="btn btn-primary px-4" value="Atualizar Dados">
                                        <input type="reset" class="btn btn-light-secondary px-2" value="Resetar">
                                        
                                    </div>
                                </div>
                                <hr class="my-4">
                            </form>
                                <?php
                                    if(isset($_POST['btnUp'])){
                                        $nome = $_POST['nome'];
                                        $p = $_POST['p'];
                                        $j = $_POST['j'];
                                        $v = $_POST['v'];
                                        $e = $_POST['e'];
                                        $d = $_POST['d'];
                                        $gp = $_POST['gp'];
                                        $gc = $_POST['gc'];
                                        $sg = $_POST['sg'];
                                        
                                        if(!empty($_FILES['foto']['name'])){
                                            $formatP = array("png","jpg","jpeg","JPG","gif");
                                            $extensao = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);
                                            if(in_array($extensao, $formatP)){
                                            $pasta = "assets/images/times/";
                                            $temporario = $_FILES['foto']['tmp_name'];
                                            $novoNome = uniqid().".$extensao";
                                            if(move_uploaded_file($temporario, $pasta.$novoNome)){

                                                
                                            }else{
                                                echo "Erro não foi possível fazer o upload do arquivo!";
                                            }
                                            }else{
                                            echo "Formato Inválido";
                                            }
                                        }else{
                                            $novoNome = $fotoTime;
                                        }
                                        $editar = "UPDATE tb_fut_masculino_classificacaoA SET nome_fut_masculino_classificacaoA=:nome,foto_fut_masculino_classificacaoA=:foto,p_fut_masculino_classificacaoA=:p,
                                        j_fut_masculino_classificacaoA=:j,v_fut_masculino_classificacaoA=:v,e_fut_masculino_classificacaoA=:e,d_fut_masculino_classificacaoA=:d,gp_fut_masculino_classificacaoA=:gp,
                                        gc_fut_masculino_classificacaoA=:gc,sg_fut_masculino_classificacaoA=:sg WHERE id_fut_masculino_classficacaoA=:id";
                                        $cadastro = "INSERT INTO tb_fut_masculino_classificacaoA (nome_fut_masculino_classificacaoA, foto_fut_masculino_classificacaoA, p_fut_masculino_classificacaoA, 
                                        j_fut_masculino_classificacaoA, v_fut_masculino_classificacaoA, e_fut_masculino_classificacaoA, d_fut_masculino_classificacaoA, gp_fut_masculino_classificacaoA, gc_fut_masculino_classificacaoA, sg_fut_masculino_classificacaoA) VALUES (:nome, :foto, :p, :j, :v, :e, :d, :gp, :gc, :sg)";
                                        try{
                                            $resultado = $conect->prepare($editar);
                                            $resultado->bindParam(':id',$id,PDO::PARAM_STR);
                                            $resultado->bindParam(':nome',$nome,PDO::PARAM_STR);
                                            $resultado->bindParam(':p',$p,PDO::PARAM_STR);
                                            $resultado->bindParam(':j',$j,PDO::PARAM_STR);
                                            $resultado->bindParam(':v',$v,PDO::PARAM_STR);
                                            $resultado->bindParam(':e',$e,PDO::PARAM_STR);
                                            $resultado->bindParam(':d',$d,PDO::PARAM_STR);
                                            $resultado->bindParam(':gp',$gp,PDO::PARAM_STR);
                                            $resultado->bindParam(':gc',$gc,PDO::PARAM_STR);
                                            $resultado->bindParam(':sg',$sg,PDO::PARAM_STR);
                                            $resultado->bindParam(':foto',$novoNome,PDO::PARAM_STR);
                                            $resultado->execute();
                                            $contar = $resultado->rowCount();
                                            if($contar > 0){
                                                echo '<div class="container">
                                                        <div class="alert alert-success alert-dismissible">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                            <h5><i class="icon fas fa-check"></i>Time editado com sucesso!</h5>
                                                        </div>
                                                    </div>';
                                            }else{
                                                echo '<div class="container">
                                                        <div class="alert alert-danger alert-dismissible">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                            <h5><i class="icon fas fa-check"></i>Ops! Time não editado!</h5>
                                                        </div>
                                                    </div>';
                                            }
                                        }catch(PDOException $e){
                                            echo "<strong>ERRO DE CADASTRO PDO </strong>".$e->getMessage();
                                        }
                                    }
                                ?>
						</div>
					</div>
				</div>
			</div>
		</div>
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
<style type="text/css">
body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>