<?php

namespace com\bangkitanom\uqi\studios\Controller;

use com\bangkitanom\uqi\studios\App\View;

class AcademyController {

    function academy() {
        View::render('academy/academy', []);
    }

}