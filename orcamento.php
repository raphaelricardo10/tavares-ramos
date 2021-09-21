<?php
include './includes/header.php';
require_once './includes/smtp.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['other']) {
        $_POST['subject'] = $_POST['other'];
    }
    try {
        sendMailToServer($_POST, sprintf('Solicitação de orçamento por %s %s', $_POST['name'], $_POST['surname']), './includes/emails/orcamentoServer.php');
        sendMailToClient($_POST, './includes/emails/contato.php');
    } catch (Exception $e) {
        echo 'Erro ao tentar enviar o email<br>Tente novamente mais tarde.';
    }
}
?>

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

        <form name="form" id="form" action="#" method="POST" class="form d-flex flex-column">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <label for="surname" class="form-label">Sobrenome:</label>
            <input type="text" class="form-control" id="surname" name="surname" required>
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" onblur="validateField(this, mailRegex)" id="email" name="email" required>
            <label for="phone" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" onblur="validateField(this, phoneRegex)" id="phone" name="phone" title="Insira um número de telefone válido" onfocus="formatPhone(this)" required>
            <label for="subject">Serviço:</label>
            <select id="subject" name="subject" onchange="checkOptions(this, 'Outro', 'specify-container')" class="d-flex flex-row">
                <option></option>
                <?php sqlListProfessionals('option', '', false) ?>
                <option>Outro</option>
            </select>
            <div id="specify-container" class="d-none flex-column">
                <label for="other" class="form-label">Especifique:</label>
                <input type="text" class="form-control" id="other" name="other">
            </div>
            <label for="msg" class="form-label">Mensagem:</label>
            <textarea class="form-control" rows="5" id="msg" name="msg" style="resize:none;" required></textarea>
            <div class="d-flex flex-row w-100 align-items-center justify-content-center">
                <button class="btn btn-primary" role="submit">Enviar</button>
            </div>
        </form>
    </div>


</main>

<?php include './includes/footer.html' ?>