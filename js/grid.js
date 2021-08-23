document.addEventListener("DOMContentLoaded", function () {
    const width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (width > 480) {
        grid = document.getElementById('services');
        titleHeights = [];
        descHeights = [];
        for (let i = 0; i < grid.children.length; i++) {
            for (let j = 0; j < grid.children[i].children.length; j++) {
                titleHeights.push(grid.children[i].children[j].children[1].children[0].offsetHeight);
                descHeights.push(grid.children[i].children[j].children[2].children[0].offsetHeight);
            }
        }
        let titleMax = Math.max(...titleHeights);
        let descMax = Math.max(...descHeights);
        for (let i = 0; i < grid.children.length; i++) {
            for (let j = 0; j < grid.children[i].children.length; j++) {
                grid.children[i].children[j].children[1].children[0].style.height = titleMax + 'px';
                grid.children[i].children[j].children[2].children[0].style.height = descMax + 'px';
            }
        }
    }
});