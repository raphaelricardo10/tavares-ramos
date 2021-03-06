<?php include './includes/header.php' ?>

<link href="./css/about.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="./js/masonry.js"></script>

<main id="sobre-container" class="container-body container d-flex flex-column">
    <h1>Sobre nós</h1>
    <div class="d-flex flex-row">
        <div id="text-container" class="d-flex flex-column w-100">
            <p>A Tavares Ramos é uma empresa de terceirização de serviços que atua em diferentes áreas e preza pela satisfação do cliente. Sabemos que contratar um profissional pode ser uma tarefa difícil e que exige muita dedicação para garantir que ele seja capaz de executar o serviço da maneira mais adequada. Nossos profissionais passam por um processo que avalia diversas qualidades, como: interação com o cliente, capacidade de reproduzir o que foi solicitado e fidelidade aos prazos.</p>
            <p>Nós equipamos nossos profissionais com ferramentas e maquinários modernos que permitem maior agilidade na realização do serviço e melhor acabamento, além de padronizar o serviço prestado por diferentes profissionais. Nós também possuímos uma forte cultura de segurança do trabalho, onde orientamos todos os nossos colaboradores a utilizarem os devidos equipamentos de proteção individual e a seguirem nossas diretivas de prevenção de acidentes.</p>
            <p>Entendemos que algo pode não sair como esperado e por isso, nossos clientes ainda contam com uma equipe de atendimento pronta para resolver quaisquer problemas que venham a ocorrer durante e após a prestação dos serviços. Nessas situações, nossas prioridade é garantir que a solicitação seja atendida e que o cliente continue satisfeito com nossa prestação de serviços.</p>
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

    <div id="servicos-carousel" class="section-container carousel slide carrousel-fade d-flex flex-column w-100" data-ride="carousel">
        <h1>Configura alguns de nossos serviços</h1>
        <ol class="carousel-indicators">
            <li data-target="#servicos-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#servicos-carousel" data-slide-to="1"></li>
            <li data-target="#servicos-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- Gallery -->
                <div class="masonry-slide row">
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/armario-branco-1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/armario-branco-2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/calha-1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/calha-2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/calha-4.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/deck-1.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- Gallery -->
                <div class="masonry-slide row">
                    <div class="grid-sizer w-100"></div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/armario-marrom-1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/armario-marrom-2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/calha-3.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/altura-1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/altura-2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/piso-2.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <!-- Gallery -->
                <div class="masonry-slide row">
                    <div class="grid-sizer"></div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/deck-2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/palco-1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/palco-2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/paredes-1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/paredes-2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/telhado-1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 mb-4">
                        <div class="card">
                            <img src="./img/servicos/telhado-2.jpg" alt="" />
                        </div>
                    </div>
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

    <div class="section-container d-none flex-column align-items-center">
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
<script>
    setInterval(function() {
        $('#servicos-carousel').imagesLoaded(function() {
            $('#servicos-carousel').find('.carousel-inner').children('.carousel-item.active').masonry({
                itemSelector: '.grid-item',
                percentPosition: true
            })
        });
    }, 1);
</script>

<?php include './includes/footer.html' ?>