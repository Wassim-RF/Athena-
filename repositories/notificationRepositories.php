<?php
    namespace Repositories;

    use Classes\Notification;
    use Core\DataBase;
    use PDO;

    class notificationRepositories {
        private PDO $pdo;

        public function __construct() {
            $db = new DataBase();
            $this->pdo = $db->connect();
        }

        public function createNotification() {
            $sql = "INSERT INTO notifications (type , message , user_id)";
        }
    }