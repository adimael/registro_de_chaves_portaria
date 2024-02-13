<?php $this->layout("master") ?>

<div class="container">
        <h2>Cadastro de Usuário</h2>
        <form action="/cadastrar" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="role">Função (Role):</label>
            <input type="text" id="role" name="role" required>

            <input type="hidden" name="dt_registro" value="<?php echo date('Y-m-d H:i:s'); ?>">

            <button type="submit">Cadastrar</button>
        </form>
    </div>