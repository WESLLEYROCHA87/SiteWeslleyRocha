<?php include __DIR__ . '/includes/header.php'; ?>

<div class="container">

    <h1 class="text-center font-weight-light my-3">Fale Conosco</h1>
    <hr>

    <!-- Conteudo: Formulário -->
    <form class="form-group my-5" action="" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome completo" required>
            </div>

            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="text">Telefone</label>
                <input type="text" name="telefone" class="form-control" placeholder="Telefone" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="opcao">Opção</label>
                <select class="form-control" name="opcao">
                    <option value="duvida">Dúvida</option>
                    <option value="sugestao">Sugestão</option>
                    <option value="reclamacao">Reclamação</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="mensagem">Escreva aqui</label>
                <textarea class="form-control" name="mensagem" required rows="5"></textarea>
                </select>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">
                Enviar
            </button>
        </div>
    </form>


    <!-- Validação dos dados do formulário  -->
    <?php

    function clean_input($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);

        return $input;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $opcao = $_POST['opcao'];
        $mensagem = $_POST['mensagem'];
    }

    ?>


    <!-- Conteudo: Contato Alternativo -->
    <h1 class="text-center font-weight-light">Estamos no Whatsapp:</h1>
    <div class="row">
        <div class="col-12">
            <a href="https://api.whatsapp.com/send?phone=5519974207424" target="_blank">
                <img img class="img-fluid mx-auto d-block my-3 grow" src=" img/logo/logo-whatsapp.png" alt=""
                    style="width: 10rem;"></a>
        </div>
    </div>
</div>





<?php include __DIR__ . '/includes/footer.php'; ?>