<?php
    namespace Services;

    use Classes\Task;
    use Repositories\TaskRepositories;

    class TaskServises {
        private TaskRepositories $taskRepositories;

        public function __construct(TaskRepositories $taskRepositories) {
            $this->taskRepositories = $taskRepositories;
        }

        public function todoTaskNumBySprint(int $id) {
            return $this->taskRepositories->todoTaskNumBySprint($id);
        }
        public function inProgresseTaskNumBySprint(int $id) {
            return $this->taskRepositories->inProgressTaskNumBySprint($id);
        }
        public function doneTaskNumBySprint(int $id) {
            return $this->taskRepositories->doneTaskNumBySprint($id);
        }
    }