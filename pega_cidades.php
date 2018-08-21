<?php

require_once './banco.php';

$pegacidades = $pdo->prepare("SELECT * FROM cidades WHERE estados_id='".$_POST['id']."'");

$pegacidades->execute();

$fetchAll = $pegacidades->fetchAll();

foreach ($fetchAll as $cidade) {
	
echo '<option>'.$cidade['nome'].'</option>';

}