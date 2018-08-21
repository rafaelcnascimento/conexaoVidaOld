<?php

for ($i = 0; $i < strlen($nome); $i++) {

    if ($nome[$i] == is_numeric($nome[$i])) {
        
          header("Location: ./cadastro.php?nome1");
          exit();
    }
}

if (strlen($nome) == 0) {
    
    header("Location: ./cadastro.php?nome2");
    exit();
}

if (strlen($nome) < 3) {

    header("Location: ./cadastro.php?nome3");
    exit();
}

// validaÃ§Ã£o campo cpf

function validaCPF($cpf = null) {

    // Verifica se um nÃºmero foi informado
    if (empty($cpf)) {
        return false;
    }
    
    for ($i = 0; $i < strlen($cpf); $i++) {

    if (is_numeric($cpf[$i])) {
        
        
    } else {
     
        return false;
    }
    }

    // Elimina possivel mascara

    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    // Verifica se o numero de digitos informados Ã© igual a 11 
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se nenhuma das sequÃªncias invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
        return false;
        // Calcula os digitos verificadores para verificar se o
        // CPF Ã© vÃ¡lido
    } else {

        for ($t = 9; $t < 11; $t++) {

            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }

        return true;
    }
}

$valor = validaCPF($cpf);

if ($valor == true) {
    
} else {
    
    header("Location: ./cadastro.php?cpf1");
    exit();
    
}


// validaÃ§Ã£o campo data
//$ano = substr($data, 0, 4);
//$mes = substr($data, 5, 2);
//$dia = substr($data, 8, 2);

$res = checkdate($mes, $dia, $ano);
if ($res == 1) {
    
} else {
    
    header("Location: ./cadastro.php?data1");
    exit();
    
}

function calculo_idade($data) {

    date_default_timezone_set('America/Sao_Paulo');


    //Data atual
    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');

    // se for formato do banco, use esse cÃ³digo em vez do de cima!

    $nascimento = explode('-', $data);
    $dianasc = ($nascimento[2]);
    $mesnasc = ($nascimento[1]);
    $anonasc = ($nascimento[0]);

    //Calculando sua idade
    $idade = $ano - $anonasc; // simples, ano- nascimento!
    if ($mes < $mesnasc) { // se o mes Ã© menor, sÃ³ subtrair da idade
        $idade--;
        return $idade;
    } elseif ($mes == $mesnasc && $dia >= $dianasc) { // se esta no mes do aniversario mas nÃ£o passou ou chegou a data, subtrai da idade
        return $idade;
    } elseif ($mes == $mesnasc && $dia < $dianasc) {

        return $idade - 1;
    } else { // ja fez aniversario no ano, tudo certo!
        return $idade;
    }
}

$idade = calculo_idade($data); // mostra a idade na tela/console!

if ($idade < 18) {
    

    
    header("Location: ./cadastro.php?data2");

    exit();
}

if ($idade > 65) {
    

    
    header("Location: ./cadastro.php?data3");

    exit();
}

//validaÃ§Ã£o estado

if(strlen($estado) < 1) {
    
    header("Location: ./cadastro.php?estado1");
    
    exit();
}

// validaÃ§Ã£o cidade

if ($cidade == "") {
    
    header("Location: ./cadastro.php?cidade1");
    
    exit();
}


// validaÃ§Ã£o grupo sanguineo

if ($tiposanguineo == "") {
    
    header("Location: ./cadastro.php?gruposanguineo1");

    exit();
}





if (strlen($endereco) < 1) {
    
     header("Location: ./cadastro.php?endereco1");

    exit();
}




if (strlen($genero) == "") {

     header("Location: ./cadastro.php?genero1");

     exit();
}
 

// validaÃ§Ã£o telefone1

for ($i = 0; $i < strlen($numerowhatsapp); $i++) {

    if (is_numeric($numerowhatsapp[$i])) {
        
    } else {
        
        header("Location: ./cadastro.php?telefone11");

        exit();
    }
} 

if (strlen($numerowhatsapp) > 15) {
    
    header("Location: ./cadastro.php?telefone12");

    exit();
}

if (strlen($numerowhatsapp) == 0) {
    
    header("Location: ./cadastro.php?telefone13");
    
    exit();
    
}


// validaÃ§Ã£o email

function isMail($emailprincipal) {
    $er = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";
    if (preg_match($er, $emailprincipal)) {
        return true;
    } else {
        return false;
    }
}

if (isMail($emailprincipal)) {
    
} else {
    
    header("Location: ./cadastro.php?email1");
    exit();
}

if (strlen($emailprincipal) < 1) {
    
    header("Location: ./cadastro.php?email2");

    exit();
}

require_once './banco.php';

$resultado = $pdo->query("SELECT * FROM doadores")->fetchAll();

foreach ($resultado as $linha) {
    
   if ($cpf == $linha['cpf']) {
       
       header("Location: ./cadastro.php?cadastro");

    exit();
       
   }
    
} 