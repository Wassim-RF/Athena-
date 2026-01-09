<?php
    require_once './core/router.php';
    require_once './core/database.php';
    require_once './repositories/userRepositories.php';
    require_once './services/authServises.php';
    require_once './repositories/projectRepositories.php';
    require_once './services/projectServises.php';
    require_once './repositories/sprintRepositories.php';
    require_once './services/sprintServises.php';
    require_once './repositories/taskRepositories.php';
    require_once './services/taskServises.php';

    use Repositories\UserRepositories;
    use Services\AuthServises;
    use Repositories\ProjectRepositories;
    use Services\ProjectServises;
    use Repositories\SprintRepositories;
    use Services\SprintServises;
    use Repositories\TaskRepositories;
    use Services\TaskServises;

    $userRepo = new UserRepositories();
    $authService = new AuthServises($userRepo);
    $projectRepo = new ProjectRepositories();
    $projectService = new ProjectServises($projectRepo);
    $sprintRepo = new SprintRepositories();
    $sprintService = new SprintServises($sprintRepo);
    $taskRepo = new TaskRepositories();
    $taskService = new TaskServises($taskRepo);

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
        session_start();
        require './views/auth/login.php';
    });

    $router->add('POST', '/login', function () use ($authService) {
        $email = $_POST['email_login_upload--input'] ?? '';
        $password = $_POST['password_login_upload--input'] ?? '';

        $user = $authService->login($email, $password);

        if (!$user) {
            session_start();
            $_SESSION['error'] = "Email ou mot de passe incorrect";
            header("Location: /login");
            exit();
        }

        switch ($user->getRole()) {
            case 'admin':
                header("Location: /admin/dashboard");
                break;
            case 'chef':
                header("Location: /chef/dashboard");
                break;
            case 'member':
                header("Location: /member/dashboard");
                break;
        }
        exit();
    });

    
    $router->add('GET' , '/logout' , function() use ($authService) {
        $authService->logout();
    });

    $router->add('GET' , '/admin/dashboard' , function() use ($authService) {
        $authService->ifISLogin();
        require './views/admin/dashboard.php';
    });

    $router->add('GET' , '/projects' , function() use ($projectService) {
        session_start();
        require './views/pages/project/projects.php';
    });

    $router->add('POST' , '/projects' , function() use ($projectService) {
        session_start();
        $projectTitle = $_POST['input_add_project--Title'];
        $projectStatu = $_POST['input_add_project--Status'];
        $projectDescription = $_POST['input_add_project--Description'];
        $projectStartDate = new DateTime($_POST['input_add_project--StartDate']);
        $projectEndDate = new DateTime($_POST['input_add_project--EndDate']);

        $projectService->ajouteProject($projectTitle , $projectStatu , $projectDescription , $projectStartDate , $projectEndDate , $_SESSION['user']['id']);

        require './views/pages/project/projects.php';
    });
    
    $router->add('GET' , '/project/show' , function() use ($projectService , $sprintService) {
        session_start();
        $id = $_GET['id'];
        $project = $projectService->showProjectById( (int) $id);
        $sprints = $sprintService->sprintInProject( (int) $id);
        require './views/pages/project/showProject.php';
    });

    $router->add('GET' , '/project/addSprint' , function() use ($projectService , $sprintService) {
        session_start();
        $id = $_GET['id'];
        require './views/pages/sprints/addSprint.php';
    });

    $router->add('GET' , '/sprint/show' , function() use ($sprintService , $taskService) {
        session_start();
        $taskNumber = $_GET['task'];
        $id = $_GET['id'];
        $sprint = $sprintService->sprintById((int) $id);
        require './views/pages/sprints/showSprint.php';
    });

    $router->add('POST' , '/project/addSprint' , function() use ($projectService , $sprintService) {
        session_start();
        $id = $_GET['id'];

        $sprintName = $_POST['input_add_sprint--name'];
        $sprintStatus = $_POST['input_add_sprint--Status'];
        $sprintDescription = $_POST['input_add_sprint--Description'];
        $sprintStartDate = new DateTime($_POST['input_add_sprint--StartDate']);
        $sprintEndDate = new DateTime($_POST['input_add_sprint--EndDate']);

        $sprintService->ajouteSprint($sprintName , $sprintStatus , $sprintDescription  , $sprintStartDate , $sprintEndDate , (int) $id);
        header("Location: /project/show?id={$id}");
        exit();
    });

    $router->add('GET' , '/projects/ajouteProject' , function () use ($projectService) {
        session_start();
        if ($_SESSION['user']['role'] === 'member') {
            $_SESSION['errore'] = "Vous n'avez pas l'acces a cette page";
            header("Location: /");
            exit();
        }
        require './views/pages/project/createProject.php';
    });

    $router->dispatch();