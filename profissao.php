<?php
include './includes/header.php';
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
    <h3>Realize um orçamento agora mesmo!<h4>
        <form name="form" id="form" action="#" onsubmit="return validateForm()" class="form d-flex flex-column">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" required>
            <label for="surname" class="form-label">Sobrenome:</label>
            <input type="text" class="form-control" id="surname" required>
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email">
            <label for="phone" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" id="phone" pattern="([0-9]{2}) [0-9]{4}-[0-9]{4}" title="Insira um número de telefone válido" onfocus="formatPhone(this)" oninvalid="setCustomValidity('Insira um número de telefone válido')" required>
            <label for="msg" class="form-label">Mensagem:</label>
            <textarea class="form-control" rows="5" id="msg" style="resize:none;"></textarea>
            <div class="d-flex flex-row w-100 align-items-center justify-content-center">
                <button class="btn btn-primary" role="submit">Enviar</button>
            </div>
        </form>
</main>

<?php include './includes/footer.html' ?>