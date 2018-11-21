'use strict';

(function () {
    function init() {
        var router = new Router([
            new Route('home', 'home.html', true),            
            new Route('lech', 'LECH.html')
        ]);
    }
    init();
}());