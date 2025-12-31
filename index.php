<?php
    require_once './core/router.php';

    $router = new Router();

    $router->add('GET', '/index.php', function() {
        if (session_status() === PHP_SESSION_ACTIVE) {
            echo "hy";
            exit();
        } else {
            header("Location: /login");
            exit();
        }
    });

    $router->add('GET', '/login', function() {
        require './views/auth/login.php';
    });

    $router->dispatch();