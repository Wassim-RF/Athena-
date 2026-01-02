<?php
    session_start();
    
    require_once './core/router.php';
    require_once './core/database.php';
    require_once './repositories/userRepositories.php';
    require_once './services/authServises.php';

    use Repositories\UserRepositories;
    use Services\AuthServises;

    $userRepo = new UserRepositories();
    $authService = new AuthServises($userRepo);

    $router = new Router();

    $router->add('GET', '/', function () {
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit();
        }
    });

    $router->add('GET', '/index.php', function () {
        header("Location: /login");
        exit();
    });

    $router->add('GET', '/login', function () {
        require './views/auth/login.php';
    });

    $router->add('POST', '/login', function () use ($authService) {
        $email = $_POST['email_login_upload--input'] ?? '';
        $password = $_POST['password_login_upload--input'] ?? '';

        $user = $authService->login($email, $password);

        if ($user === null) {
            $_SESSION['error'] = "Email ou mot de passe incorrect";
            header("Location: /login");
            exit();
        }

        switch ($user->getRole()) {
            case 'admin':
                header("Location: /admin/Dashboard");
                break;
            case 'chef':
                header("Location: /chef/Dashboard");
                break;
            case 'member':
                header("Location: /member/Dashboard");
                break;
        }
        exit();
    });

    
    $router->add('GET' , '/logout' , function() use ($authService) {
        $authService->logout();
    });

    $router->add('GET' , '/admin/Dashboard' , function() use ($authService) {
        $authService->ifISLogin();
        require './views/admin/dashboard.php';
    });
    
    $router->dispatch();