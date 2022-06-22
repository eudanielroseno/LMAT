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
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donos da Quadra | Página de Administrador </title>
    <link href="dist/assets/images/favicon/logo_ball.png" type="image/png" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/assets/css/bootstrap.css">   
    <link rel="stylesheet" href="dist/assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="dist/assets/css/app.css">
    <link rel="shortcut icon" href="dist/assets/images/favicon/logo_ball.png" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="inicio.html"><img src="dist/assets/images/logo/lmat.png" alt="Logo" srcset="" style="width: 170px; height: 70px"></a>
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
                                                    
                                                    $idedit = $b->id_registro;
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
                                  <li><a class="dropdown-item" href="minhaconta.php">Minha conta</a></li>
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
                                            
                                            <li
                                                class="submenu-item  ">
                                                <a href="dist/futmasculino.php"
                                                    class='submenu-link'>Futsal Masculino</a>

                                                
                                            </li>
                                            
                                        
                                        
                                            <li
                                                class="submenu-item  ">
                                                <a href="dist/futfeminino.php"
                                                    class='submenu-link'>Futsal Feminino</a>

                                                
                                            </li>
                                            
                                        
                                        
                                            <li
                                                class="submenu-item  ">
                                                <a href="dist/volei.php"
                                                    class='submenu-link'>Vôlei</a>

                                                
                                            </li>
                                            
                                        
                                        
                                            <li
                                                class="submenu-item  ">
                                                <a href="dist/carimba.php"
                                                    class='submenu-link'>Carimba</a>

                                                
                                            </li>
                                            
                                        
                                        
                                            <li
                                                class="submenu-item  ">
                                                <a href="dist/basquete.php"
                                                    class='submenu-link'>Basquete</a>

                                                
                                            </li>
                            
                        </ul>
                    </div>
                </nav>
                <div class="col-md-6 col-12" style="text-align: center; margin-left: 24em; margin-top: 3em;">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Página de Administrador</h>
                    </div>
                    <div class="avatar avatar-md2" >
                     <img src="dist/assets/images/faces/<?php echo $foto; ?>" alt="Avatar" style="margin-left: 305px; margin-bottom: 2em; height: 150px; width: 150px">
                        </div>
                        <div class="text">              
                            <h6 class="user-dropdown-name" style="margin-bottom: 10px; margin-right: 1em;"> <i class="bi bi-person" style="margin-right: 10px;"></i> <?php echo $nome; ?></h6>
                            <h6 class="user-dropdown-name" style="margin-bottom: 10px; margin-right: 1em;"> <i class="bi bi-envelope" style="margin-right: 10px;"></i><?php echo $email; ?></h6>
                            <h6 class="user-dropdown-name" style="margin-bottom: 10px; margin-right: 1em;"> <i class="bi bi-lock" style="margin-right: 10px;"></i><?php echo $senha; ?></h6>
                        </div>
                        <div class="card-header">
                        <h4 class="card-title">Editar Usuário</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                           <?php
                            include_once('../config/conexao.php');
                            $id = $_GET['idUp'];
                            $select = "SELECT * FROM user WHERE id_registro=:id";
                            try{
                            $result = $conect->prepare($select);
                            $result ->bindParam(':id',$id, PDO::PARAM_INT);
                            $result -> execute();
                            $contar=$result->rowCount();
                            if($contar>0){
                                while($show=$result->FETCH(PDO::FETCH_OBJ)){
                                $idedit = $show->id_registro;
                                $nome = $show->usuario_registro;
                                $email = $show->email_registro;
                                $senha = $show->senha_registro;
                                $foto = $show->foto_registro;
                                }
                            }
                            }catch(PDOException $id){}
                            ?>
                            <form class="form form-vertical">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon" style="margin-bottom: 1em;">Nome de Usuário</label>
                                                <div class="position-relative">
                                                    <input type="text" name="nome" class="form-control"
                                                        placeholder="Nome de Usuário" id="first-name-icon" value="<?php echo $nome; ?>">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div class="form-group has-icon-left">
                                                <label for="email-id-icon" style="margin-bottom: 1em;">Endereço de E-mail</label>
                                                <div class="position-relative">
                                                    <input type="text" name="email" class="form-control" placeholder="Endereço de E-mail"
                                                        id="email-id-icon" value="<?php echo $email; ?>">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="password-id-icon" style="margin-bottom: 1em;">Senha</label>
                                                <div class="position-relative">
                                                    <input type="password" name="senha" class="form-control" placeholder="Senha"
                                                        id="password-id-icon" value="<?php echo $senha; ?>" required data-eye>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="password-id-icon" style="margin-bottom: 1em;">Imagem do Usuário</label>
                                                <div class="position-relative">
                                                    <hr>
                                                <input type="file" name="foto" class="custom-file-input" id="exampleInputFile" placeholder="Foto de Usuário">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-image"></i>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 justify-content-end">
                                            <input name="btnUp" type="submit" method="post" class="btn px-4" style="background-color: rgb(2, 0, 102); color: white; margin-top: 1em;" value="Salvar Alterações">
                                        </div>
                                </div>
                            </form>
                            <?php
                  
                  if(isset($_POST['btnUp'])){
                      $nome = $_POST['nome'];
                      $email = $_POST['email'];
                      $senha = $_POST['senha'];

                      if(!empty($_FILES['foto']['name'])){
                      $formatP = array("png","jpg","jpeg","JPG","gif");
                      $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

                      if(in_array($extensao, $formatP)){
                          $pasta = "assets/images/faces";
                          $temporario = $_FILES['foto']['tmp_name'];
                          $novoNome = uniqid().".$extensao";
                          if(move_uploaded_file($temporario, $pasta.$novoNome)){
                              
                          }else{
                            echo "Erro, não foi possível fazer o upload do arquivo!";
                          }

                      }else{
                        echo "Formato de imagem Inválida";
                      }
                    }else{
                      $novoNome=$foto_registro;
                    }
                      $editar = "UPDATE user SET usuario_registro=:nome,email_registro=
                      :email,senha_registro=:senha,foto_registro=:foto WHERE 
                      id_registro=:id";
                      $cadastro = "INSERT INTO user (usuario_registro, email_registro, senha_registro, foto_registro) VALUES (:nome, :email, :senha, :foto)";
                      try{
                        $result = $conect->prepare($editar);
                        $result->bindParam(':id',$id,PDO::PARAM_STR);
                        $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                        $result->bindParam(':email',$email,PDO::PARAM_STR);
                        $result->bindParam(':senha',$senha,PDO::PARAM_STR);
                        $result->bindParam(':foto',$novoNome,PDO::PARAM_STR);
                        $result->execute();

                        $contar = $result->rowCount();
                        if($contar > 0){
                          echo '<div class="container">
                                    <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> OK!</h5>
                                    Usuário Editado Com Sucesso!
                                  </div>
                                </div>';
                        }else{
                          echo '<div class="container">
                                    <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> Ops!</h5>
                                    Usuário Não Editado!
                                  </div>
                                </div>';
                        }
                      }catch(PDOException $e){
                        echo "<strong>ERRO DE CADASTRO PDO = </strong>".$e->getMessage();
                      } 
                  }
              ?>
                        </div>
                    </div>
                </div>
            </div>
            </header>
    </section>
</div>

            </div>
        </div>
    </div>
    <script src="dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="dist/assets/js/bootstrap.bundle.min.js"></script>  
    <script src="dist/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="dist/assets/js/pages/dashboard.js"></script>
    <script src="dist/assets/js/pages/horizontal-layout.js"></script>
</body>

</html>
