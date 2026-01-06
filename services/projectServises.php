<?php
    namespace Services;

    require_once __DIR__ . '/../classes/project.php';

    use Classes\Project;
    use DateTime;
    use Repositories\ProjectRepositories;
    use Exception;

    class ProjectServises {
        private ProjectRepositories $projectRepositories;

        public function __construct(ProjectRepositories $projectRepositories) {
            $this->projectRepositories = $projectRepositories;
        }
        public function showAllProject() {
            return $this->projectRepositories->findAllProject();       
        }

        public function ajouteProject(string $title , string $statu , string $description , DateTime $startDate , DateTime $endDate , int $chef_id) {
            $project = new Project($title , $description , $startDate , $endDate , $statu , $chef_id);
            return $this->projectRepositories->createProject($project);
        }
    }