<?php

namespace App\DB;

use PDO;
use Exception;

class DB
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "dbworkease";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            throw new Exception("Conexão falhou: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function query($sql, $params = [])
    {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            throw new Exception("Erro na consulta: " . $e->getMessage());
        }
    }

    public function execute($sql, $params = [])
    {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            return $stmt->rowCount(); // Retorna o número de linhas afetadas
        } catch (\PDOException $e) {
            throw new Exception("Erro na execução: " . $e->getMessage());
        }
    }
}
