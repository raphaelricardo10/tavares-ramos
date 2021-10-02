function masonryInit(carousel) {
    $(container).on('slide.bs.carousel', function () {
        imagesLoaded(container, function () {
            new Masonry(container, {
                itemSelector: '.grid-item',
                percentPosition: true
            });
        })
    });
}