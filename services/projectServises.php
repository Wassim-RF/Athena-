<?php
    namespace Services;

    use Classes\Project;
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
    }