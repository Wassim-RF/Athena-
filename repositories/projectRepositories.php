<?php
    namespace Repositories;

    use classes\Project;
    use Core\DataBase;
    use PDO;

    class ProjectRepositories {
        private PDO $pdo;

        public function __construct() {
            $db = new DataBase();
            $this->pdo = $db->connect();
        }
        public function createProject(Project $project) {
            $sql = "INSERT INTO projects (title , description , status , start_date , end_date , chef_id) VALUES (:title , :description , :status , :start_date , :end_date , :chef_id)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'title' => $project->getTitle(),
                'description' => $project->getDescription(),
                'status' => $project->getStatue(),
                'start_date' => $project->getStartDate(),
                'end_date' => $project->getEndDate(),
                'chef_id' => $project->getChefId()
            ]);
            $id = (int) $this->pdo->lastInsertId();
            $project->setId($id);
            return $project;
        }
        public function updateProject(Project $project) {
            $sql = "UPDATE projects SET title = :title , description = :description , start_date = :start_date , end_date = :end_date , chef_id = :chef_id WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                'title' => $project->getTitle(),
                'description' => $project->getDescription(),
                'start_date' => $project->getStartDate(),
                'end_date' => $project->getEndDate(),
                'chef_id' => $project->getChefId(),
                'id' => $project->getId()
            ]);
        }
        public function updateProjectStatue(string $statue , int $id) {
            $sql = "UPDATE projects SET status = :status WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                'status' => $statue,
                'id' => $id
            ]);
        }
        public function deleteProject(int $id) {
            $sql = "DELETE FROM projects WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute(['id' => $id]);
        }
        public function findAllProject() {
            $sql = "SELECT * FROM projects";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function findProjectById(int $id) {
            $sql = "SELECT * FROM projects WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }