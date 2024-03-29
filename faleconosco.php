<?php include __DIR__ . '/includes/header.php'; ?>

<div class="container margemTop">
    <h1 class="text-center font-weight-light my-3">Fale Conosco</h1>
    <hr>

    <!-- Mensagem de envio ou erro de mensagem -->
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
        <div class="alert alert-danger alert-dismissible fade show my-5" role="alert">
            <?php echo 'Mensagem <strong>não pode ser enviada</strong>, favor entrar em contato através do' ?>


            <a href="https://api.whatsapp.com/send?phone=5519974207424" target="_blank">
                <strong class="text-success">Whatsapp!</strong></a>


            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

    <!-- Conteudo: Formulário -->
    <div id="contact-us">
        <form class="form-group my-5" action="faleconosco.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome completo">
                </div>

                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="text">Telefone</label>
                    <input type="text" name="telefone" class="form-control" placeholder="Telefone">
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
                    <textarea class="form-control disabled" name="mensagem" rows="5" disabled></textarea>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">
                    Enviar
                </button>
            </div>
        </form>
    </div>



    <!-- Conteudo: Contato Alternativo -->
    <h1 class="text-center font-weight-light">Estamos no Whatsapp:</h1>
    <div class="row">
        <div class="col-12">
            <a href="https://api.whatsapp.com/send?phone=5519974207424" target="_blank">
                <img img class="img-fluid mx-auto d-block my-3 grow" src=" img/logo/logo-whatsapp.png" alt="" style="width: 10rem;"></a>
        </div>
    </div>
</div>


<?php include __DIR__ . '/includes/footer.php'; ?>