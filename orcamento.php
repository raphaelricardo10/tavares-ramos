<?php include './includes/header.php' ?>
<?php require_once './includes/smtp.php' ?>

<script src="./js/form.js" async></script>
<link href="./css/orcamento.css" rel="stylesheet">
<link href="./css/form.css" rel="stylesheet">

<main class="container-body container d-flex flex-column">
    <div class="container-form container d-flex flex-column">
        <h1>Solicite um orçamento</h1>
        <h2>Ficaremos contentes em receber sua solicitação.</h2>
        <h2>Informe os seus dados abaixo junto com a descrição detalhada
            do serviço a ser realizado e lhe responderemos via e-mail.</h2>
        <h2>Ou se preferir, entre em contato conosco através do WhatsApp:</h2>

        <div id="whatsapp-container" class="d-flex flex-row align-items-center justify-content-center">
            <img src="./img/whatsapp.svg">
            <a href="https://api.whatsapp.com/send?phone=5521979869446">(21) 97986-9446</a>
        </div>

        <form name="form" id="form" action="#" onsubmit="return validateForm()" class="form d-flex flex-column">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <label for="surname" class="form-label">Sobrenome:</label>
            <input type="text" class="form-control" id="surname" name="surname" required>
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email" pattern="^[a-z0-9.]+@[a-z0-9]+(\.[a-z]+)+$" title="Insira um e-mail válido" oninvalid="setCustomValidity('Insira um e-mail válido')" required>
            <label for="phone" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" id="phone" name="phone" pattern="^\([0-9]{2}\)[\s]?[9]?[0-9]{4}-[0-9]{4}$" title="Insira um número de telefone válido" onfocus="formatPhone(this)" oninvalid="setCustomValidity('Insira um número de telefone válido')" required>
            <label for="subject">Serviço:</label>
            <select id="subject" name="subject" class="d-flex flex-row">
                <option></option>
                <?php sqlListProfessionals('option', '', false) ?>
                <option>Outro</option>
            </select>
            <label for="msg" class="form-label">Mensagem:</label>
            <textarea class="form-control" rows="5" id="msg" name="msg" style="resize:none;" required></textarea>
            <div class="d-flex flex-row w-100 align-items-center justify-content-center">
                <button class="btn btn-primary" role="submit">Enviar</button>
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (sendMailToServer($_POST, sprintf('Solicitação de orçamento por %s %s', $_POST['name'], $_POST['surname']), './includes/emails/orcamentoServer.php')) {
            sendMailToClient($_POST, './includes/emails/orcamento.php');
        } else {
            echo 'Erro ao enviar o email.<br>Tente novamente mais tarde.';
        }
    }
    ?>
</main>

<?php include './includes/footer.html' ?>