<?php
    namespace Repositories;

    use Classes\Sprint;
    use Core\DataBase;
    use PDO;

    class SprintRepositories {
        private PDO $pdo;

        public function __construct() {
            $db = new DataBase();
            $this->pdo = $db->connect();
        }

        public function createSprint(Sprint $sprint) {
            $sql = "INSERT INTO sprints (name , description , status , start_date , end_date , project_id) VALUES (:name , :description , :status , :start_date , :end_date , :project_id)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'name' => $sprint->getName(),
                'description' => $sprint->getDescription(),
                'status' => $sprint->getStatue(),
                'start_date' => $sprint->getStartDate()->format('Y-m-d'),
                'end_date' => $sprint->getEndDate()->format('Y-m-d'),
                'project_id' =>$sprint->getProjectId()
            ]); 
            $id = (int) $this->pdo->lastInsertId();
            $sprint->setId($id);
            return $sprint;
        }
        public function updateSprint(Sprint $sprint) {
            $sql = "UPDATE sprints SET name = :name , description = :description , start_date = :start_date , end_date = :end_date WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                'name' => $sprint->getName(),
                'description' => $sprint->getName(),
                'start_date' => $sprint->getStartDate(),
                'end_date' => $sprint->getEndDate(),
                'id' => $sprint->getId()
            ]);
        }
        public function updateSprintStatue(string $statue , int $id) {
            $sql = "UPDATE sprints SET status = :status WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                'status' => $statue,
                'id' => $id
            ]);
        }
        public function deleteSprint(int $id) {
            $sql = "DELETE FROM sprints WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute(['id' => $id]);
        }
        public function sprintInProject(int $id) {
            $sql = "SELECT * FROM sprints WHERE project_id = :id";
            $stmt  = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function sprintById(int $id) {
            $sql = "SELECT * FROM sprints WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } 
    }