<?php
session_start();

if ($_SESSION['logado'] != 1) {

    header('Location: index.php?erropagina');
}
?>

<?php
session_start();
session_destroy();
header('Location: index.php?sair');
