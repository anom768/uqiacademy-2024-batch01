<?php

use com\bangkitanom\uqi\studios\App\Router;
use com\bangkitanom\uqi\studios\Controller\AcademyController;
use com\bangkitanom\uqi\studios\Controller\MainController;

require_once __DIR__ . '/../vendor/autoload.php';

Router::add('GET', '/', MainController::class, 'index', []);
Router::add('GET', '/info', MainController::class, 'info', []);
Router::add('GET', '/guardian-ranger', MainController::class, 'guardianRanger', []);
Router::add('GET', '/game-asset', MainController::class, 'gameAsset', []);
Router::add('GET', '/didi-and-friend', MainController::class, 'didiAndFriend', []);
Router::add('GET', '/goodtime', MainController::class, 'goodtime', []);
Router::add('GET', '/scifi', MainController::class, 'scifi', []);
Router::add('GET', '/ranger', MainController::class, 'ranger', []);
Router::add('GET', '/podomoro', MainController::class, 'podomoro', []);
Router::add('GET', '/romano', MainController::class, 'romano', []);
Router::add('GET', '/rotoscoping', MainController::class, 'rotoscoping', []);
Router::add('GET', '/train', MainController::class, 'train', []);
Router::add('GET', '/bike', MainController::class, 'bike', []);
Router::add('GET', '/academy', AcademyController::class, 'academy', []);

Router::run();