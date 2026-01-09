<?php
    namespace Services;

    use Classes\Task;
    use Repositories\TaskRepositories;

    class TaskServises {
        private TaskRepositories $taskRepositories;

        public function __construct(TaskRepositories $taskRepositories) {
            $this->taskRepositories = $taskRepositories;
        }

        public function ajouteTask(string $title, string $description, string $statue, string $priority, string $type, int $createdBy, int $sprintId) {
            $task = new Task($title, $description, $statue, $priority, $type, $createdBy, $sprintId);
            return $this->taskRepositories->createTask($task);
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
        public function todoTaskiNSprint(int $id) {
            return $this->taskRepositories->todoTaskInSprint($id);
        }
        public function inProgresseTaskiNSprint(int $id) {
            return $this->taskRepositories->inProgresseTaskInSprint($id);
        }
        public function doneTaskiNSprint(int $id) {
            return $this->taskRepositories->doneTaskInSprint($id);
        }
    }