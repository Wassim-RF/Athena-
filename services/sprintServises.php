<?php
    namespace Services;

    use Classes\Sprint;
    use Repositories\SprintRepositories;

    class SprintServises {
        private SprintRepositories $sprintRepositories;

        public function __construct(SprintRepositories $sprintRepositories) {
            $this->sprintRepositories = $sprintRepositories;
        }

        public function sprintInProject(int $id) {
            return $this->sprintRepositories->sprintInProject($id);
        }
    }