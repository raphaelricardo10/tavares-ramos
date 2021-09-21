<?php include './includes/header.php' ?>

<link href="./css/about.css" rel="stylesheet">

<main id="sobre-container" class="container-body container d-flex flex-column">
    <h1>Sobre nós</h1>
    <div class="d-flex flex-row">
        <div id="text-container" class="d-flex flex-column w-100">
            <p>A Tavares Ramos é uma empresa de terceirização de serviços que atua em diferentes áreas e preza pela satisfação do cliente. Sabemos que contratar um profissional pode ser uma tarefa difícil e que exige muita dedicação para garantir que ele seja capaz de executar o serviço da maneira mais adequada. Nossos profissionais passam por um processo que avalia diversas qualidades, como: interação com o cliente, capacidade de reproduzir o que foi solicitado e fidelidade aos prazos.</p>
            <p>Nós equipamos nossos profissionais com ferramentas e maquinários modernos que permitem maior agilidade na realização do serviço e melhor acabamento, além de padronizar o serviço prestado por diferentes profissionais. Nós também possuímos uma forte cultura de segurança do trabalho, onde orientamos todos os nossos colaboradores a utilizarem os devidos equipamentos de proteção individual e a seguirem nossas diretivas de prevenção de acidentes.</p>
            <p>Entendemos que algo pode não sair como esperado e por isso, nossos clientes ainda contam com uma equipe de atendimento pronta para resolver quaisquer problemas que venham a ocorrer durante e após a prestação dos serviços. Nessas situações, nossas prioridade é garantir que a solicitação seja atendida e que o cliente continue satisfeito com nossa prestação de serviços.</p>
        </div>

        <div id="servicos-carousel" class="carousel slide d-flex flex-column w-100" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/servicos/img1.jpg" alt="Armário">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/servicos/img2.jpg" alt="Armário">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/servicos/img3.jpg" alt="Armário">
                </div>
            </div>
            <a class="carousel-control-prev" href="#servicos-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#servicos-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div id="mvv-container" class="d-flex flex-row">
        <div class="d-flex flex-column w-100 align-items-center">
            <h2>Missão</h2>
            <p>Permitir que as pessoas contratem profissionais em diferentes áreas com mais facilidade, sem que elas se precisem se preocupar em como escolher o prestador de serviços ideal para suas necessidades.</p>
        </div>
        <div id="vision-container" class="d-flex flex-column w-100 align-items-center">
            <h2>Visão</h2>
            <p>Ser referência nacional na área de terceirização de serviços e gerar um impacto positivo na sociedade com nossas facilidades propostas.</p>
        </div>
        <div class="d-flex flex-column w-100 align-items-center">
            <h2>Valores</h2>
            <p>Responsabilidade com nossos clientes, segurança no trabalho, facilitar a prestação de serviços, responsabilidade com o meio ambiente.</p>
        </div>
    </div>
    <div id="depos-container" class="d-flex flex-column align-items-center">
        <h1>Confira alguns comentários de nossos clientes</h1>
        <div class="quote-container d-flex flex-column">
            <div class="d-flex flex-row justify-content-start">
                <p><q class="quote">Morbi vestibulum augue eget mauris condimentum bibendum vitae nec magna.</q></p>
            </div>
            <div class="quote-author d-flex flex-row justify-content-end">
                <h2>-Martin Luther King Jr</h2>
            </div>
        </div>
        <div class="quote-container d-flex flex-column">
            <div class="d-flex flex-row justify-content-start">
                <p><q class="quote">Maecenas molestie sapien ac sem euismod dictum.</q></p>
            </div>
            <div class="quote-author d-flex flex-row justify-content-end">
                <h2>-Lorem Iipsum</h2>
            </div>
        </div>
        <div class="quote-container d-flex flex-column">
            <div class="d-flex flex-row justify-content-start">
                <p><q class="quote">Maecenas molestie sapien ac sem euismod dictum.</q></p>
            </div>
            <div class="quote-author d-flex flex-row justify-content-end">
                <h2>-Martin Luther King Jr</h2>
            </div>
        </div>
    </div>
</main>

<?php include './includes/footer.html' ?>