<?php

namespace App\Controllers;

use app\Controllers\Controller;
use app\Controllers\Auth; // Certifique-se de incluir a classe Auth
use app\Models\LoginModel; // Certifique-se de incluir o modelo necessário
use app\Models\RegistroChavesModel;

class DashboardController
{
    public function index($params)
    {
        // Verifique se o usuário está autenticado
        if (Auth::isUserAuthenticated()) {
            // Obtenha o ID do usuário da sessão
            $userId = $_SESSION['id_user'];
            // Instancie o modelo de Login para acessar o método
            $loginModel = new LoginModel();

            // Obtenha o nome do usuário com base no ID do usuário
            $userName = $loginModel->getUserNameById($userId);

            // Instancia o modelo RegistroChavesModel
            $registroChavesModel = new RegistroChavesModel();

            // Obtém todos os registros de chaves
            $registros = $registroChavesModel->getAllRegistroChaves();

            // Se o usuário estiver autenticado, exiba o dashboard
            Controller::view("dashboard", ['userName' => $userName, 'registros' => $registros]);
        } else {
            // Se o usuário não estiver autenticado, redirecione para a página de login
            header("Location: /");
            exit();
        }
    }

    public function logout($params)
    {
        Auth::fazerLogout();
    }

    public function inserirNovoRegistro($params)
    {
        // Verificar se os campos obrigatórios estão definidos
        if (isset($_POST["nome_pessoa"]) && isset($_POST["numero_sala"])) {
            // Receba os dados do formulário
            $nome = $_POST['nome_pessoa'];
            $cargo = isset($_POST['cargo']) ? $_POST['cargo'] : null; // Verificar se o campo cargo está definido
            $numeros = $_POST['numero_sala'];
            $status = 'Aberto';
            $obs = isset($_POST['observacoes']) ? $_POST['observacoes'] : null; // Nome do campo no banco de dados

            // Instanciar o modelo de RegistroChavesModel
            $registroChavesModel = new RegistroChavesModel();

            // Inserir dados na tabela 'registro_chaves'
            $result = $registroChavesModel->inserirNovoRegistro($nome, $cargo, $numeros, $status, $obs);

            if ($result) {
                // Redirecionar para a página inicial com uma mensagem de sucesso
                header("Location: /dashboard?message=Registrado+com+sucesso");
                exit(); // Certifique-se de sair após o redirecionamento
            } else {
                echo "Erro ao cadastrar a sala.";
            }
        } else {
            echo "Campos obrigatórios não foram definidos.";
        }
    }

    public function finalizarRegistro($params)
    {
        // Verifique se o método de solicitação é POST
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Verifique se o ID do registro está definido na solicitação
            if (isset($_POST["id_registro"])) {
                // Obtenha o ID do registro da solicitação
                $idRegistro = $_POST["id_registro"];

                // Instancie o modelo de RegistroChavesModel
                $registroChavesModel = new RegistroChavesModel();

                // Finalize o registro no banco de dados
                $result = $registroChavesModel->finalizarRegistro($idRegistro);

                // Verifique se a atualização foi bem-sucedida
                if ($result) {
                    // Exiba uma mensagem de alerta de sucesso
                    echo '<script>alert("Registro finalizado com sucesso!");</script>';
                } else {
                    // Exiba uma mensagem de alerta de erro
                    echo '<script>alert("Erro ao finalizar o registro.");</script>';
                }
            } else {
                // Exiba uma mensagem de alerta se o ID do registro estiver ausente na solicitação
                echo '<script>alert("ID do registro ausente na solicitação.");</script>';
            }
        } else {
            // Exiba uma mensagem de alerta se o método de solicitação não for POST
            echo '<script>alert("Método de solicitação inválido.");</script>';
        }

        // Redirecione de volta para o dashboard após a execução da operação
        header("Location: /dashboard");
        exit();
    }


    public function deleteRegistro($params)
    {
        // Verifique se a solicitação é POST
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Verifique se o ID do registro foi enviado
            if (isset($_POST["id_registro"])) {
                // Obtenha o ID do registro a ser excluído
                $idRegistro = $_POST["id_registro"];
                // Instancie o modelo RegistroChavesModel
                $registroChavesModel = new RegistroChavesModel();
                // Exclua o registro no banco de dados
                $result = $registroChavesModel->deleteRegistro($idRegistro);
                // Redirecione de volta para o dashboard após a exclusão
                header("Location: /dashboard");
                exit();
            }
        }
    }


}
