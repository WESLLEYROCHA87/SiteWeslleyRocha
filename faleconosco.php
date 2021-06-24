<?php include __DIR__ . '/includes/header.php'; ?>

<div class="container">

    <h1 class="text-center font-weight-light">Fale Conosco</h1>

    <form class="form-group my-5" action="">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Nome">
            </div>

            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="opcao">Opção</label>
                <select class="form-control" name="opcao" id="opcao">
                    <option value="duvida">Dúvida</option>
                    <option value="sugestao">Sugestão</option>
                    <option value="reclamacao">Reclamação</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="descricao">Escreva aqui</label>
                <textarea class="form-control" name="descricao" id="" rows="5"></textarea>
                </select>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-primary disabled" type="submit">
                Enviar
            </button>
        </div>
    </form>

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
