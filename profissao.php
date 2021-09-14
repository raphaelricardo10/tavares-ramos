<?php
include './includes/header.php';
include './includes/smtp.php';
$professional = sqlGetProfessional();

?>

<script src="./js/form.js" async></script>
<link href="./css/form.css" rel="stylesheet">
<link href="./css/profissao.css" rel="stylesheet">

<main id="container-service" class="container-body container d-flex flex-column">
    <h1><?php echo $professional["name"] ?></h1>
    <div class="d-flex justify-content-center"><?php echo $professional["img"] ?></div>
    <p><?php echo $professional["description"] ?></p>
    <h2>Alguns serviços que podem ser realizados:</h2>
    <ul><?php echo $professional["services"] ?></ul>
    <h2>Se interessou pelo serviço?</h2>
    <h3>Realize um orçamento agora mesmo!</h3>
    <form name="form" id="form" action="/profissao?id=<?php echo $professional['link'] ?>" onsubmit="return validateForm()" class="form d-flex flex-column" method="POST">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" required>
        <label for="surname" class="form-label">Sobrenome:</label>
        <input type="text" class="form-control" id="surname" name="surname" required>
        <label for="email" class="form-label">Email:</label>
        <input type="text" class="form-control" id="email" name="email" pattern="^[a-z0-9.]+@[a-z0-9]+(\.[a-z]+)+$" title="Insira um e-mail válido" oninvalid="setCustomValidity('Insira um e-mail válido')" required>
        <label for="phone" class="form-label">Telefone:</label>
        <input type="tel" class="form-control" id="phone" name="phone" pattern="^\([0-9]{2}\)[\s]?[9]?[0-9]{4}-[0-9]{4}$" title="Insira um número de telefone válido" onfocus="formatPhone(this)" oninvalid="setCustomValidity('Insira um número de telefone válido')" required>
        <label for="msg" class="form-label">Mensagem:</label>
        <textarea class="form-control" rows="5" id="msg" name="msg" style="resize:none;" required></textarea>
        <div class="d-flex flex-row w-100 align-items-center justify-content-center">
            <button class="btn btn-primary" role="submit">Enviar</button>
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        var_dump($_POST);
        $_POST['subject'] = $professional['name'];
        echo $_POST['subject'];
        if (sendMailToServer($_POST, sprintf('Solicitação de contato por %s %s', $_POST['name'], $_POST['surname']), './includes/emails/orcamentoServer.php', 1)) {
            sendMailToClient($_POST, './includes/emails/contato.php');
        } else {
            echo 'Erro ao enviar o email.<br>Tente novamente mais tarde.';
        }
    }
    ?>
</main>

<?php include './includes/footer.html' ?>