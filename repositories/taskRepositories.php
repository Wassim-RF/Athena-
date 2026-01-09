<?php
    namespace Repositories;

    use Core\DataBase;
    use PDO;

    class TaskRepositories {
        private PDO $pdo;

        public function __construct() {
            $db = new DataBase();
            $this->pdo = $db->connect();
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
    }