<?php include __DIR__ . '/includes/header.php'; ?>


<div class="container">
    <div class="my-5">
        <h1 class="text-center font-weight-light sublinhado">Licitação</h1>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 my-1">
            <div class="card shadow mb-5 bg-white grow">
                <img class="card-img-top rounded-top" src="img/imgHome/imgPE.png" alt="Imagem de capa do card">
                <div class="card-body  bg-dark">
                    <h5 class="card-title text-center text-light">O que é Licitação?</h5>
                    <p class="card-text text-justify text-light"> Licitação é o procedimento realizado pela
                        Administração Pública que visa à contratação de um serviço ou à aquisição de um determinado bem,
                        necessário à atividade desenvolvida pelo Poder Estatal, pela oferta mais vantajosa. </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 my-1">
            <div class="card shadow mb-5 bg-white grow">
                <img class="card-img-top rounded-top" src="img/imgHome/imgPE2.png" alt="Imagem de capa do card">
                <div class="card-body  bg-dark">
                    <h5 class="card-title text-center text-light">Qual o primeiro passo para participar de uma
                        licitação?
                    </h5>
                    <p class="card-text text-justify text-light">O primeiro passo para participar de uma licitação é
                        acessar o edital. Quando esse documento é publicado, o processo licitatório está oficialmente
                        aberto.</p>

                </div>
            </div>
        </div>
    </div>

    <!-- Conteudo: Destaques -->
    <div class="my-4">
        <h1 class="text-center font-weight-light">Destaques</h1>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 my-1 ">
            <div class="card shadow mb-5 bg-white grow">
                <img class="card-img-top rounded-top " src="img/imgHome/imgPE3.png" alt="Imagem de capa do card">
                <div class="card-body  bg-dark ">
                    <h5 class="card-title text-center text-light">Nova Lei de Licitações</h5>
                    <p class="card-text text-justify text-light">A Nova Lei de Licitações e Contratos Administrativos
                        (Nº 14.133/2021) foi sancionada pelo presidente Jair Bolsonaro em 1º. de abril de 2021, com base
                        em projeto aprovado pelo Senado em dezembro de 2020, após a matéria tramitar por sete anos no
                        Congresso.</p>
                    <a href="http://www.planalto.gov.br/ccivil_03/_Ato2019-2022/2021/Lei/L14133.htm" target="d-blank"
                        class="btn btn-primary text-light">Acesse a nova Lei</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 my-1">
            <div class="card shadow mb-5 bg-white grow">
                <img class="card-img-top rounded-top " src="img/imgHome/imgPE4.png" alt="Imagem de capa do card">
                <div class="card-body  bg-dark ">
                    <h5 class="card-title text-center text-light">Lei do Pregão</h5>
                    <p class="card-text text-justify text-light">O pregão é utilizado para efetuar a aquisição de
                        serviços e bens comuns de “qualquer que seja o valor estimado da contratação” em que as empresas
                        dão seus lances em sessão pública, presencial ou eletrônica e é regido pela, lei LEI No 10.520,
                        DE 17 DE JULHO DE 2002..</p>
                    <a href="http://www.planalto.gov.br/ccivil_03/leis/2002/l10520.htm" target="d-blank"
                        class="btn btn-primary text-light">Acesse a Lei</a>

                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 my-1">
            <div class="card shadow mb-5 bg-white grow">
                <img class="card-img-top rounded-top " src="img/imgHome/imgPE5.png" alt="Imagem de capa do card">
                <div class="card-body  bg-dark ">
                    <h5 class="card-title text-center text-light">Modo de disputa</h5>
                    <p class="card-text text-justify text-light">É a forma para participar da etapa de lances
                        eletrônicos e enviar a sua proposta. Então, é previsto que esses lances possam ser feitos de
                        dois modos de disputa: aberto ou fechado. Com o decreto nº 10.024, criou-se uma nova
                        regulamentação para a modalidade pregão eletrônico..</p>

                    <!-- Botão Modal Modo de Disputa -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalMododeDisputa">
                        Saiba Mais
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Modo de Disputa -->
    <div class="modal fade" id="ModalMododeDisputa" tabindex="-1" role="dialog"
        aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado"><strong>Modo de disputa
                            aberto e
                            fechado.</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="card-text text-justify text-dark">
                        O modo de disputa <strong>aberto</strong> e <strong>fechado</strong> está regularizado no
                        <strong>artigo 33, caput e em seus parágrafos primeiro ao sexto</strong>, do <a
                            href="https://www.planalto.gov.br/ccivil_03/_Ato2019-2022/2019/Decreto/D10024.htm"
                            target="d_blank">Decreto Lei 10.024/2019</a>.
                    </p>

                    <p class="card-text text-justify text-dark">
                        Neste modo, os licitantes apresentam lances públicos e sucessivos,
                        com lance final e fechado, conforme o critério de julgamento adotado no edital.
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>


</div>





<?php include __DIR__ . '/includes/footer.php'; ?>