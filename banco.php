<?php
class Db 
{
    private function __contruct() {
    }
    public static function conectar()
    {
        $servername = "localhost";
        $username = "conexaovida";
        $password = "vidaconexao";
        $db = "conexaovida";
        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            
            return $conn; 
        }
        catch(PDOException $e)
        {
            echo "Erro na conexão ao Banco de Dados: " . $e->getMessage();
        }
    }
}
