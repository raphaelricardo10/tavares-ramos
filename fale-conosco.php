<?php
include './includes/header.php';
require_once './includes/smtp.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try{
        sendMailToServer($_POST, sprintf('Solicitação de contato por %s %s', $_POST['name'], $_POST['surname']), './includes/emails/contatoServer.php');
        sendMailToClient($_POST, './includes/emails/contato.php');
    } catch (Exception $e) {
        echo 'Erro ao enviar o email.<br>Tente novamente mais tarde.';
    }
}
?>

<script src="./js/form.js" async></script>
<link href="./css/fale-conosco.css" rel="stylesheet">
<link href="./css/form.css" rel="stylesheet">

<main class="container-body container d-flex flex-column">
    <div class="container-form container d-flex flex-column">
        <h1>Entre em contato conosco</h1>
        <h2>Precisa de ajuda?</h2>
        <h2>Preencha o formulário abaixo e lhe responderemos o mais breve possível!</h2>

        <form name="form" id="form" action="#" method="post" onsubmit="return validateField()" class="form d-flex flex-column">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <label for="surname" class="form-label">Sobrenome:</label>
            <input type="text" class="form-control" id="surname" name="surname" required>
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email" title="Insira um e-mail válido" onblur="validateField(this, mailRegex)" required>
            <label for="phone" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" id="phone" onblur="validateField(this, phoneRegex)" title="Insira um número de telefone válido" onfocus="formatPhone(this)" oninvalid="setCustomValidity('Insira um número de telefone válido')" required>
            <label for="subject">Assunto:</label>
            <select id="subject" name="subject" class="d-flex flex-row">
                <option></option>
                <option>Ajuda com serviços entregues</option>
                <option>Cancelamento de solicitação de serviço</option>
                <option>Consulta de andamento de uma solicitação</option>
                <option>Consulta sobre cobertura dos serviços</option>
                <option>Opiniões</option>
                <option>Reclamações</option>
            </select>
            <label for="msg" class=form-label>Mensagem:</label>
            <textarea class="form-control" rows="5" id="msg" name="msg" style="resize:none;" required></textarea>
            <div class="d-flex flex-row w-100 align-items-center justify-content-center">
                <button class="btn btn-primary" role="submit">Enviar</button>
            </div>
        </form>
    </div>
</main>

<?php include './includes/footer.html' ?>