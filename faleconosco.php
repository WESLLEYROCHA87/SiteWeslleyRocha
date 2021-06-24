<?php include __DIR__ . '/includes/header.php'; ?>

<div class="container">


    <h1 class="text-center font-weight-light my-3">Fale Conosco</h1>
    <hr>

    <!-- Conteudo: Formulário -->
    <div id="contact-us">
        <form class="form-group my-5" action="faleconosco.php" method="POST">
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
    </div>



    <!-- Validação dos dados do formulário  -->
    <?php

    // Inserir Arquivos do PHPMailer
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    // Usar as classes sem o namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

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

        $nome = clean_input($nome);
        $email = clean_input($email);
        $telefone = clean_input($telefone);
        $opcao = clean_input($opcao);
        $mensagem = clean_input($mensagem);

        $texto_msg = 'E-mail envaido do sistema do site' . '<br><br>' .
            'Nome: ' . $nome . '<br>' .
            'email: ' . $email . '<br>' .
            'telefone: ' . $telefone . '<br>' .
            'opcao: ' . $opcao . '<br>' .
            'mensagem: ' . $mensagem . '<br>';

        // Criação do Objeto da Classe PHPMailer
        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";


        try {

            //Retire o comentário abaixo para soltar detalhes do envio 
            // $mail->SMTPDebug = 2;                                

            // Usar SMTP para o envio
            $mail->isSMTP();

            // Detalhes do servidor (No nosso exemplo é o Google)
            $mail->Host = 'smtp.gmail.com';

            // Permitir autenticação SMTP
            $mail->SMTPAuth = true;

            // Nome do usuário
            $mail->Username = 'phpcursomailer@gmail.com';
            // Senha do E-mail         
            $mail->Password = '';
            // Tipo de protocolo de segurança
            $mail->SMTPSecure = 'tls';

            // Porta de conexão com o servidor                        
            $mail->Port = 587;


            // Garantir a autenticação com o Google
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Remetente
            $mail->setFrom($email, $nome);

            // Destinatário
            $mail->addAddress('phpcursomailer@gmail.com', 'Site Weslley Rocha');
            $mail->addAddress('weslley.rocha87@gmail.com', 'Weslley Rocha User');

            // Conteúdo

            // Define conteúdo como HTML
            $mail->isHTML(true);

            // Assunto
            $mail->Subject = 'Novo contato feito pelo site';
            $mail->Body    = $texto_msg;
            $mail->AltBody = $texto_msg;

            // Enviar E-mail
            $mail->send();
            $confirmacao =  'Mensagem enviada com sucesso';
        } catch (Exception $e) {
            $confirmacao = 'A mensagem não pôde ser enviada!';
            //$confirmacao = 'A mensagem não foi enviada pelo seguinte motivo: ', $mail->ErrorInfo;

        }
    }

    ?>

    <!-- Mensagem de envio ou erro de mensagem -->
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
    <div class="alert alert-success alert-dismissible fade show my-5" role="alert">
        <?php echo $confirmacao ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php } ?>


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