'use strict';
 (function () {
    function init() {
        var router = new Router([
            new Route('home', 'home.html', true),            
            new Route('olech', 'olech.html'),
            new Route('ensino', 'ensino.html'),
            new Route('pesquisas', 'pesquisas.html'),
            new Route('publicacoes', 'publicacoes.html'),
        ]);
    }
    init();
}()); 