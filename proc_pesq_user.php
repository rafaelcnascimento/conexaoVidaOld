<?php
$servername = "localhost";
$username = "conexaovida";
$password = "vidaconexao";
$dbname = "conexaovida";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$columns = array( 
    0 =>'id_doador', 
    1 => 'nome',
    2 => 'cpf',
    3 => 'nascimento',
    4 => 'estado',
    5 => 'cidade',
    6 => 'endereco',
    7 => 'genero',
    8 => 'tiposanguineo',
    9 => 'emailprincipal',
    10 => 'numerowhatsapp'
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT id_doador, nome, cpf, nascimento, estado, cidade, endereco, genero, tiposanguineo, emailprincipal, numerowhatsapp FROM doadores";
$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT id_doador, nome, cpf, nascimento, estado, cidade, endereco, genero, tiposanguineo, emailprincipal, numerowhatsapp FROM doadores WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
    $result_usuarios.=" AND ( id_doador LIKE '".$requestData['search']['value']."%' ";    
    $result_usuarios.=" OR nome LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.=" OR cpf LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.=" OR nascimento LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.=" OR estado LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.=" OR cidade LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.=" OR endereco LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.=" OR genero LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.=" OR tiposanguineo LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.=" OR emailprincipal LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.=" OR numerowhatsapp LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {  
    $dado = array(); 
    $dado[] = $row_usuarios["id_doador"];
    $dado[] = $row_usuarios["nome"];
    $dado[] = $row_usuarios["cpf"];   
    $dado[] = $row_usuarios["nascimento"];   
    $dado[] = $row_usuarios["estado"];   
    $dado[] = $row_usuarios["cidade"];   
    $dado[] = $row_usuarios["endereco"];   
    $dado[] = $row_usuarios["genero"];   
    $dado[] = $row_usuarios["tiposanguineo"];   
    $dado[] = $row_usuarios["emailprincipal"];   
    $dado[] = $row_usuarios["numerowhatsapp"];   
    $dados[] = $dado;
}


//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
    "draw" => intval( $requestData['draw'] ),//para cada requisição é enviado um número como parâmetro
    "recordsTotal" => intval( $qnt_linhas ),  //Quantidade de registros que há no banco de dados
    "recordsFiltered" => intval( $totalFiltered ), //Total de registros quando houver pesquisa
    "data" => $dados   //Array de dados completo dos dados retornados da tabela 
);

echo json_encode($json_data);  //enviar dados como formato json
