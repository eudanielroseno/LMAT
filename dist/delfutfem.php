<?php
include_once('../config/conexao.php');
if(isset($_GET['idDel'])){
    $id= $_GET['idDel'];
    $delete= "DELETE FROM tb_fut_feminino_classificacaoa WHERE id_fut_feminino_classificacaoA=:id";
    try{
        $resultDel=$conect->prepare($delete);
        $resultDel->bindParam(':id',$id,PDO::PARAM_INT);
        $resultDel->execute();
        //retorno dinâmico a página de relatório
        $contar=$resultDel->rowCount();
        if($contar>0){
            header("Location:futfeminino.php");
        }else{
            header("Location:futfeminino.php");
        }
    }catch(PDOException $e){
        echo"<strong>ERRO DE DELETE : </strong>". $e->getMessage();
    }
}

