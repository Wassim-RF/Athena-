<?php
    namespace Repositories;

    use Classes\User;
    use Core\DataBase;
    use PDO;

    class UserRepositories {
        private PDO $pdo;

        public function __construct() {
            $db = new DataBase();
            $this->pdo = $db->connect();
        }
        public function createUser(User $user) {
            $sql = "INSERT INTO users (full_name , email , password , role) VALUES (:full_name , :email , :password , :role)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'full_name' => $user->getFullName(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'role' =>$user-> getRole()
            ]);
            $id = (int) $this->pdo->lastInsertId();
            $user->setId($id);
            return $user;
        }
        public function deleteUser(int $id) {
            $sql = "DELETE FROM users WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute(['id' => $id]);
        }
        public function updateUser(User $user) {
            $sql = "UPDATE users SET full_name = :full_name , email = :email , password = :password , role = :role WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                'full_name' => $user->getFullName(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'role' => $user->getRole(),
                'id' => $user->getRole()
            ]);
        }
        public function findAllUsers() {
            $sql = "SELECT * FROM users";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function findUserById(int $id) {
            $sql = "SELECT * FROM users WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public function existeEmail(string $email) {
            $sql = "SELECT COUNT(*) FROM users WHERE email = :email";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['email' => $email]);
            return $stmt->fetchColumn() > 0;
        }
        public function existeFullName(string $full_name) {
            $sql = "SELECT COUNT(*) FROM users WHERE full_name = :full_name";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['full_name' => $full_name]);
            return $stmt->fetchColumn() > 0;
        }
        public function countTotalUsers() {
            $sql = "SELECT COUNT(*) FROM users";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchColumn();
        }
        public function getUserCountByRole() {
            $sql = "SELECT role, COUNT(*) as total FROM users GROUP BY role";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stats = [];
            foreach ($results as $row) {
                $stats[$row['role']] = (int)$row['total'];
            }
            return $stats;
        }
    }