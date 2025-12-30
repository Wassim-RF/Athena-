<?php

    namespace Classes;

    class Notification {
        private ?int $id = null;
        private string $type;
        private string $message;
        private bool $isRead;
        private int $userId;
        public const ALLOWED_TYPES = [
            'task_created', 
            'task_updated', 
            'task_deleted', 
            'assigned_to_project', 
            'removed_from_project', 
            'project_deleted', 
            'sprint_created', 
            'sprint_updated', 
            'status_changed'
        ];

        public function __construct(string $type , string $message , int $userId , bool $isRead) {
            $this->setType($type);
            $this->setMessage($message);
            $this->setUserId($userId);
            $this->setIsRead($isRead);
        }
        public function getId() {
            return $this->id;
        }
        public function setId(?int $id) {
            $this->id = $id;
        }
        public function getType() {
            return $this->type;
        }
        public function setType(string $type) {
            if (in_array($type, self::ALLOWED_TYPES)) {
                $this->type = $type;
            }
        }
        public function getMessage() {
            return $this->message;
        }
        public function setMessage(string $message) {
            $this->message = $message;
        }
        public function getIsRead() {
            return $this->isRead;
        }
        public function setIsRead(bool $isRead) {
            $this->isRead = $isRead;
        }
        public function getUserId() {
            return $this->userId;
        }
        public function setUserId(int $userId) {
            $this->userId = $userId;
        }
    }