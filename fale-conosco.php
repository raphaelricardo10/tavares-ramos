<?php include './includes/header.php' ?>
<?php require_once './includes/smtp.php' ?>

<script src="./js/form.js" async></script>
<link href="./css/fale-conosco.css" rel="stylesheet">
<link href="./css/form.css" rel="stylesheet">

<main class="container-body container-form container d-flex flex-column">
    <h1>Entre em contato conosco</h1>
    <h2>Precisa de ajuda?</h2>
    <h2>Preencha o formulário abaixo e lhe responderemos o mais breve possível!</h2>

    <form name="form" id="form" action="#" method="post" onsubmit="return validateForm()" class="form d-flex flex-column">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" required>
        <label for="surname" class="form-label">Sobrenome:</label>
        <input type="text" class="form-control" id="surname" name="surname" required>
        <label for="email" class="form-label">Email:</label>
        <input type="text" class="form-control" id="email" name="email" pattern="^[a-z0-9.]+@[a-z0-9]+(\.[a-z]+)+$" title="Insira um e-mail válido" oninvalid="setCustomValidity('Insira um e-mail válido')" required>
        <label for="phone" class="form-label">Telefone:</label>
        <input type="tel" class="form-control" id="phone" pattern="^\([0-9]{2}\)[\s]?[9]?[0-9]{4}-[0-9]{4}$" title="Insira um número de telefone válido" onfocus="formatPhone(this)" oninvalid="setCustomValidity('Insira um número de telefone válido')" required>
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

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (sendMailToServer($_POST, sprintf('Solicitação de contato por %s %s', $_POST['name'], $_POST['surname']), './includes/emails/contatoServer.php')) {
                sendMailToClient($_POST, './includes/emails/contato.php');
            } else {
                echo 'Erro ao enviar o email.<br>Tente novamente mais tarde.';
            }
        }
        ?>
    </form>
</main>

<?php include './includes/footer.html' ?>