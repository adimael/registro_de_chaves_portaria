<?php

namespace App\Models;
use app\DB\db;

class SalaModel 
{
  protected $db;

    public function __construct()
    {
        // Instancia a classe de conexão com o banco de dados
        $this->db = new DB();
    }

    public function getAllSalas()
    {
        // Implemente lógica para recuperar todas as salas do banco de dados
        $query = "SELECT * FROM salas";
        $result = $this->db->query($query);

        $this->db = null; // Fecha a conexão com o banco de dados
        
        return $result;

    }

    public function getSalaById($salaId)
    {
        // Implemente lógica para recuperar uma sala por ID do banco de dados
        $query = "SELECT * FROM salas WHERE idsalas = :salaId";
        $params = ['salaId' => $salaId];
        return $this->db->query($query, $params);
    }

    public function createSala($nome, $cargo, $numeros, $status, $obs)
    {
        // Implemente lógica para inserir uma nova sala no banco de dados
        $query = "INSERT INTO salas (nome, cargo, numeros, status, obs, created_at)
                  VALUES (:nome, :cargo, :numeros, :status, :obs, NOW())";
        $params = [
            'nome' => $nome,
            'cargo' => $cargo,
            'numeros' => $numeros,
            'status' => $status,
            'obs' => $obs
        ];

        return $this->db->execute($query, $params);
    }

    public function updateSala($salaId, $nome, $cargo, $numeros, $status, $obs)
    {
        // Implemente lógica para atualizar uma sala no banco de dados
        $query = "UPDATE salas 
                  SET nome = :nome, cargo = :cargo, numeros = :numeros, status = :status, obs = :obs, updated_at = NOW()
                  WHERE idsalas = :salaId";
        $params = [
            'salaId' => $salaId,
            'nome' => $nome,
            'cargo' => $cargo,
            'numeros' => $numeros,
            'status' => $status,
            'obs' => $obs
        ];

        return $this->db->execute($query, $params);
    }

    public function deleteSala($salaId)
    {
        // Implemente lógica para excluir uma sala do banco de dados
        $query = "DELETE FROM salas WHERE idsalas = :salaId";
        $params = ['salaId' => $salaId];

        return $this->db->execute($query, $params);
    }
}