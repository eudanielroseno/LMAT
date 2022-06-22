<?php
if(isset($_REQUEST['sair'])) {
session_destroy(); //destroi/encerra a sessão
header("Location:login/login.php?acao=sair");
}
?>