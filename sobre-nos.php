<?php include './includes/header.php' ?>

<link href="./css/about.css" rel="stylesheet">

<main id="sobre-container" class="container-body container d-flex flex-column">
    <h1>Sobre nós</h1>
    <div class="d-flex flex-row">
        <div id="text-container" class="d-flex flex-column w-100">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros,
                pulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus.
                Donec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex,
                in pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent
                per conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut
                vestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.
                Integer eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat
                faucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc.
                Phasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis.
                Cras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus,
                non dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus</p>
        </div>

        <div id="servicos-caroussel" class="carousel slide d-flex flex-column w-100" data-ride="carousel">
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
            <a class="carousel-control-prev" href="#servicos-caroussel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#servicos-caroussel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div id="mvv-container" class="d-flex flex-row">
        <div class="d-flex flex-column w-100 align-items-center">
            <h2>Missão</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non nibh at urna ullamcorper interdum et a tellus. Integer ut dignissim ex. Cras et sollicitudin nibh. Duis efficitur arcu at orci maximus, in pretium dui imperdiet. Quisque vel rhoncus velit, vitae pharetra nibh. Morbi eget ligula non elit tincidunt sagittis in id velit. Aliquam erat volutpat. Praesent bibendum dapibus tellus. Sed faucibus ipsum enim, vitae congue diam tristique eget. Sed sed semper nunc. Maecenas quam libero, ultrices eu tempus a, porttitor eu libero. Curabitur eleifend bibendum tristique. Nam tincidunt, nulla ac commodo tincidunt, ipsum erat maximus mi, sed lobortis metus neque eget mauris.</p>
        </div>
        <div id="vision-container" class="d-flex flex-column w-100 align-items-center">
            <h2>Visão</h2>
            <p>
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec et ligula ac elit sollicitudin tincidunt. Donec magna risus, sollicitudin in efficitur et, pharetra vel ex. Duis at nisl vestibulum, vulputate arcu a, imperdiet nunc. Mauris odio nisi, efficitur et pulvinar nec, porta a nisi. Vestibulum suscipit, massa eu interdum blandit, metus magna tempus nisi, non venenatis dui nibh non elit. Aenean ultrices venenatis nunc ac tincidunt. Donec sed mauris ante. Praesent et orci nec ipsum laoreet volutpat. Praesent pulvinar dolor eu augue ultricies, tempor vestibulum augue faucibus.
            </p>
        </div>
        <div class="d-flex flex-column w-100 align-items-center">
            <h2>Valores</h2>
            <p>
                Ut venenatis metus ex, in congue erat feugiat quis. Donec vel gravida massa. Sed ultrices eget quam id porta. Ut feugiat dui vitae elit hendrerit, id rutrum nibh dignissim. Vestibulum dapibus risus ac imperdiet sagittis. Proin luctus nisi ac enim fermentum fringilla. Curabitur hendrerit ornare leo, non tristique nibh dictum non.
            </p>
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