<?php
    namespace Services;

    require_once __DIR__ . '/../classes/sprint.php';

    use Classes\Sprint;
    use Repositories\SprintRepositories;
    use DateTime;

    class SprintServises {
        private SprintRepositories $sprintRepositories;

        public function __construct(SprintRepositories $sprintRepositories) {
            $this->sprintRepositories = $sprintRepositories;
        }

        public function ajouteSprint(string $name , string $statu , string $description , DateTime $startDate , DateTime $endDate , int $project_id) {
            $sprint = new  Sprint($name , $description , $startDate , $endDate , $statu , $project_id);
            return $this->sprintRepositories->createSprint($sprint);
        }

        public function sprintInProject(int $id) {
            return $this->sprintRepositories->sprintInProject($id);
        }
        public function sprintById(int $id) {
            return $this->sprintRepositories->sprintById($id);
        }
    }