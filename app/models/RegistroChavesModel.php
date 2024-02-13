<?php

namespace App\Models;
use app\DB\db;

class RegistroChavesModel
{
    protected $db;

    public function __construct()
    {
        // Instancia a classe de conexão com o banco de dados
        $this->db = new DB();
    }

    public function getAllRegistroChaves()
    {
        // Query para selecionar todos os dados da tabela registro_chaves
        $query = "SELECT * FROM registro_chaves";

        // Executa a query
        return $this->db->query($query);
    }

    public function updateRegistro($id, $status)
    {

        // Atualiza o registro no banco de dados
        $query = "UPDATE registros_chaves 
                  SET status = 'Finalizado', data_fechamento = NOW() 
                  WHERE id = :id";
        $params = [
            'id' => $id,
        ];

        return $this->db->execute($query, $params);
    }

    public function inserirNovoRegistro($nome, $cargo, $numeros, $status, $observacoes)
    {
        // Query para inserir um novo registro na tabela registro_chaves
        $query = "INSERT INTO registro_chaves (nome_pessoa, cargo, numero_sala, status, observacoes, data_abertura) VALUES (?, ?, ?, ?, ?, NOW())";
        
        // Parâmetros para a query
        $params = [$nome, $cargo, $numeros, $status, $observacoes];

        // Executa a query
        return $this->db->execute($query, $params);
    }

    public function finalizarRegistro($idRegistro)
    {
        // Query para atualizar o registro na tabela registro_chaves
        $query = "UPDATE registro_chaves 
                SET status = 'Finalizado', data_fechamento = NOW() 
                WHERE id_registro = :idRegistro";
        
        // Parâmetros para a query
        $params = ['idRegistro' => $idRegistro];

        // Executa a query
        return $this->db->execute($query, $params);
    }


    public function deleteRegistro($id_registro)
    {
        // Query para deletar um registro da tabela registro_chaves
        $query = "DELETE FROM registro_chaves WHERE id_registro = :id_registro";

        // Parâmetros para a query
        $params = ['id_registro' => $id_registro];

        // Executa a query
        return $this->db->execute($query, $params);
    }

}
