<?php

namespace com\bangkitanom\uqi\studios\Controller;

use com\bangkitanom\uqi\studios\App\View;

class MainController {

    function index() {
        View::render('index', []);
    }

    function info() {
        View::render('info', []);
    }

    function bike() {
        View::render('detail/bike', []);
    }

    function guardianRanger() {
        View::render('detail/guardian-ranger', []);
    }

    function gameAsset() {
        View::render('detail/game-asset', []);
    }

    function didiAndFriend() {
        View::render('detail/didi-and-friend', []);
    }

    function goodtime() {
        View::render('detail/goodtime', []);
    }

    function scifi() {
        View::render('detail/scifi', []);
    }

    function ranger() {
        View::render('detail/ranger', []);
    }

    function podomoro() {
        View::render('detail/podomoro', []);
    }

    function romano() {
        View::render('detail/romano', []);
    }

    function rotoscoping() {
        View::render('detail/rotoscoping', []);
    }

    function train() {
        View::render('detail/train', []);
    }

}