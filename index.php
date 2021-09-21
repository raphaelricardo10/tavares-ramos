<?php include './includes/header.php' ?>

<link href="./css/home.css" rel="stylesheet">
<script src="./js/grid.js" defer></script>

<main class="container-body container d-flex flex-column">
    <!---Carrossel na tela inicial--->
    <div id="banner-home" class="d-flex flex-column carousel h-100" data-ride="carousel">
        <div class="carousel-inner bg-secondary w-100" role="listbox">
            <div class="carousel-item active d-flex justify-content-center">
                <img sizes="(max-width: 1140px) 100vw, 1140px" srcset="
                    ./img/banner-home_auvmy6_c_scale,w_360.png 360w,
                    ./img/banner-home_auvmy6_c_scale,w_624.png 624w,
                    ./img/banner-home_auvmy6_c_scale,w_818.png 818w,
                    ./img/banner-home_auvmy6_c_scale,w_993.png 993w,
                    ./img/banner-home_auvmy6_c_scale,w_1140.png 1140w"
                    src="./img/banner-home_auvmy6_c_scale,w_1140.png" alt="banner">
            </div>
        </div>
    </div>

    <!---Painel de serviços prestados--->
    <div id="container-services" class="d-flex flex-column">
        <!---Cabeçalho do painel--->
        <div id="container-services-title">
            <h1>Oferecemos uma grande variedade de serviços</h1>
        </div>
        <div id="container-services-subtitle">
            <h2>Estes são alguns profissionais que possuímos para resolver seu o problema:</h2>
        </div>

        <!---Grid de serviços para desktop--->
        <div id="services">
            <div class="d-flex flex-column flex-md-row align-items-center">
                <div class="first-row services-service row-first-service d-flex flex-column w-100 align-items-center">
                    <img class="img-fluid" src=" ./img/pedreiro.svg">
                    <div Class="services-service-title d-flex w-100 flex-row align-items-center justify-content-center">
                        <h1>Pedreiro</h1>
                    </div>
                    <div class="services-service-description d-flex flex-row w-100">
                        <p>É o profissional que cuida da parte "bruta" de uma construção, também conhecida como
                            alvenaria, além de fazer a primeira etapa dos acabamentos. Ele é capaz de construir
                            e revestir paredes, pisos, vigas, lajes, telhados e outros serviços.</p>
                    </div>
                    <div class="services-service-btn-container d-flex flex-row w-100 align-items-center justify-content-center">
                        <button class="btn btn-primary" onclick="location.href='./profissao?id=pedreiro';" role="button">Saiba mais</button>
                    </div>
                </div>
                <div class="first-row services-service d-flex flex-column w-100 align-items-center">
                    <img class="img-fluid" src="./img/pintor.svg">
                    <div Class="services-service-title d-flex w-100 flex-row align-items-center justify-content-center">
                        <h1>Pintor</h1>
                    </div>
                    <div class="services-service-description d-flex flex-row w-100">
                        <p>Um profissional de acabamento capaz de pintar paredes de diversas formas. Seus
                            principais serviços são passar massa e pintar paredes (internas e externas) e tetos,
                            tanto em casa quanto em grandes edifícios.</p>
                    </div>
                    <div class="services-service-btn-container d-flex flex-row w-100 align-items-center justify-content-center">
                        <button class="btn btn-primary" onclick="location.href='./profissao?id=pintor';" role="button">Saiba mais</button>
                    </div>
                </div>
                <div class="first-row services-service row-last-service d-flex flex-column w-100 align-items-center">
                    <img class="img-fluid" src="./img/bomb-hidraulico.svg">

                    <div Class="services-service-title d-flex w-100 flex-row align-items-center justify-content-center">
                        <h1>Bombeiro Hidráulico</h1>
                    </div>
                    <div class="services-service-description d-flex flex-row w-100">
                        <p>O bombeiro hidráulico cuida da parte de encanamento da construção. Ele tem a
                            habilidade de construir e reparar o caminho de canos desde a fonte de água até as
                            torneiras, chuveiros e afins.</p>
                    </div>
                    <div class="services-service-btn-container d-flex flex-row w-100 align-items-center justify-content-center">
                        <button class="btn btn-primary" onclick="location.href='./profissao?id=bomb-hidraulico';"role="button">Saiba mais</button>
                    </div>
                </div>
            </div>

            <!---Quebra de linha do grid-->
            <div class="services d-flex flex-column flex-md-row align-items-center">
                <div class="services-service row-first-service d-flex flex-column w-100 align-items-center">
                    <img class="img-fluid" src=" ./img/marceneiro.svg">
                    <div Class="services-service-title d-flex w-100 flex-row align-items-center justify-content-center">
                        <h1>Marceneiro</h1>
                    </div>
                    <div class="services-service-description d-flex flex-row w-100">
                        <p>Um marceneiro cuida do design, produção e montagem de móveis planejados. Ele
                            tem a capacidade de olhar o ambiente do cliente e pensar num conjunto de armários,
                            equipados com ferragens modernas, que atendam às suas
                            necessidades.
                        </p>
                    </div>
                    <div class="services-service-btn-container d-flex flex-row w-100 align-items-center justify-content-center">
                        <button class="btn btn-primary" onclick="location.href='./profissao?id=marceneiro';" role="button">Saiba
                            mais</a>
                    </div>
                </div>
                <div class="services-service d-flex flex-column w-100 align-items-center">
                    <img class="img-fluid" src="./img/montador.svg">
                    <div Class="services-service-title d-flex w-100 flex-row align-items-center justify-content-center">
                        <h1>Montador</h1>
                    </div>
                    <div class="services-service-description d-flex flex-row w-100">
                        <p>O montador cuida da montagem de diversos tipos de móveis e itens menores. Ele pode
                            montar desde móveis como armários de cozinha, camas e painéis, como prateleiras,
                            penduradores de banheiro, purificadores de água e afins.</p>
                    </div>
                    <div class="services-service-btn-container d-flex flex-row w-100 align-items-center justify-content-center">
                        <button class="btn btn-primary" onclick="location.href='./profissao?id=montador';" role="button">Saiba mais</button>
                    </div>
                </div>
                <div class="services-service row-last-service d-flex flex-column w-100 align-items-center">
                    <img class="img-fluid" src="./img/eletricista.svg">
                    <div Class="services-service-title d-flex w-100 flex-row align-items-center justify-content-center">
                        <h1>Eletricista</h1>
                    </div>
                    <div class="services-service-description d-flex flex-row w-100">
                        <p>O trabalho do eletricista é projetar e executar instalações elétricas em qualquer
                            ambiente. Incluindo, planejar o caminho dos fios, dimensionar fios e disjuntores,
                            posicionar pontos de luz e executar o projeto.</p>
                    </div>
                    <div class="services-service-btn-container d-flex flex-row w-100 align-items-center justify-content-center">
                        <button class="btn btn-primary" onclick="location.href='./profissao?id=eletricista';" role="button">Saiba
                            mais</a>
                    </div>
                </div>
            </div>

            <!---Quebra de linha do grid-->
            <div class="services d-flex flex-column flex-md-row align-items-center">
                <div class="last-row services-service row-first-service d-flex flex-column w-100 align-items-center">
                    <img class="img-fluid" src=" ./img/serralheiro.svg">
                    <div Class="services-service-title d-flex w-100 flex-row align-items-center justify-content-center">
                        <h1>Serralheiro</h1>
                    </div>
                    <div class="services-service-description d-flex flex-row w-100">
                        <p>É o profissional que projeta, monta e conserta produtos utilizando peças de metal.
                            Ele trabalha portões, grades, janelas e quaisquer outros produtos que envolvam
                            componentes como ferro e aço.</p>
                    </div>
                    <div class="services-service-btn-container d-flex flex-row w-100 align-items-center justify-content-center">
                        <button class="btn btn-primary" onclick="location.href='./profissao?id=serralheiro';" role="button">Saiba
                            mais</a>
                    </div>
                </div>
                <div class="last-row services-service d-flex flex-column w-100 align-items-center">
                    <img class="img-fluid" src="./img/vidraceiro.svg">
                    <div Class="services-service-title d-flex w-100 flex-row align-items-center justify-content-center">
                        <h1>Vidraceiro</h1>
                    </div>
                    <div class="services-service-description d-flex flex-row w-100">
                        <p>O vidraceiro é capaz de desenvolver produtos compostos predominantemente de vidro.
                            Dentre as diferentes possibilidades, ele pode fabricar portas, janelas e vitrines,
                            independentemente do ambiente de instalação.</p>
                    </div>
                    <div class="services-service-btn-container d-flex flex-row w-100 align-items-center justify-content-center">
                        <button class="btn btn-primary" onclick="location.href='./profissao?id=vidraceiro';" role="button">Saiba
                            mais</a>
                    </div>
                </div>
                <div class="last-service last-row services-service row-last-service d-flex flex-column w-100 align-items-center">
                    <img class="img-fluid" src="./img/tec-informatica.svg">
                    <div Class="services-service-title d-flex w-100 flex-row align-items-center justify-content-center">
                        <h1>Técnico de Informática</h1>
                    </div>
                    <div class="services-service-description d-flex flex-row w-100">
                        <p>O trabalho do técnico de informática consiste em realizar montagem e manutenção de
                            computadores, sejam de mesa (desktops), notebooks ou servidores. Ele
                            executa trabalhos como instalação e atualização de aplicativos e sistemas
                            operacionais, instalação de SSD e aumento de memória.
                        </p>
                    </div>
                    <div class="services-service-btn-container d-flex flex-row w-100 align-items-center justify-content-center">
                        <button class="btn btn-primary" onclick="location.href='./profissao?id=tec-informatica';" role="button">Saiba mais</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="container-services-contact">
            <h2>Não encontrou o que procura? Entre em contato conosco através do link abaixo
                e informe o serviço solicitado:</h2>
            <div class="d-flex flex-row w-100 align-items-center justify-content-center">
                <button class="btn btn-primary" onclick="location.href='./orcamento';" role="button">Orçamento</button>
            </div>
        </div>
</main>

<?php include './includes/footer.html' ?>