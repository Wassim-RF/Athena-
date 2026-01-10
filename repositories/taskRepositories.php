<?php
    namespace Repositories;

    use Classes\Task;
    use Core\DataBase;
    use PDO;

    class TaskRepositories {
        private PDO $pdo;

        public function __construct() {
            $db = new DataBase();
            $this->pdo = $db->connect();
        }

        public function createTask(Task $task) {
            $sql = "
                INSERT INTO tasks 
                (title, description, status, priority, type, created_by, sprint_id)
                VALUES 
                (:title, :description, :status, :priority, :type, :created_by, :sprint_id)
            ";

            $stmt = $this->pdo->prepare($sql);

            $stmt->execute([
                'title'       => $task->getTitle(),
                'description' => $task->getDescription(),
                'status'      => $task->getStatue(),
                'priority'    => $task->getPriority(),
                'type'        => $task->getType(),
                'created_by'  => $task->getCreatedBy(),
                'sprint_id'   => $task->getSprintId()
            ]);

            $id = (int) $this->pdo->lastInsertId();
            $task->setId($id);
            return $task;
        }

        public function todoTaskNumBySprint(int $id) {
            $sql = "SELECT COUNT(*) FROM tasks WHERE status = 'todo' AND sprint_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchColumn();
        }
        public function inProgressTaskNumBySprint(int $id) {
            $sql = "SELECT COUNT(*) FROM tasks WHERE status = 'in_progress' AND sprint_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchColumn();
        }
        public function doneTaskNumBySprint(int $id) {
            $sql = "SELECT COUNT(*) FROM tasks WHERE status = 'done' AND sprint_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchColumn();
        }

        public function todoTaskInSprint(int $id) {
            $sql = "SELECT * FROM tasks WHERE status = 'todo' AND sprint_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function inProgresseTaskInSprint(int $id) {
            $sql = "SELECT * FROM tasks WHERE status = 'in_progress' AND sprint_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function doneTaskInSprint(int $id) {
            $sql = "SELECT * FROM tasks WHERE status = 'done' AND sprint_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function updateTaskStatue(int $taskId, string $statue) {
            $sql = "UPDATE tasks SET status = :status WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute([
                'status' => $statue,
                'id'     => $taskId
            ]);
        }
    }