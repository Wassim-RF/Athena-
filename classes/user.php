<?php
    namespace Classes;

    use Exception;

    abstract class User {
        protected ?int $id = null;
        protected string $email;
        protected string $password;
        protected string $full_name;
        protected string $role;

        public function __construct(string $email , string $password , string $full_name , string $role) {
            $this->setEmail($email);
            $this->setPassword($password);
            $this->setFullName($full_name);
            $this->setRole($role);
        }
        public function getId(): ?int {
            return $this->id;
        }
        public function setId(int $id): void {
            $this->id = $id;
        }
        public function getEmail(): string {
            return $this->email;
        }
        public function setEmail(string $email): void {
            if (filter_var($email , FILTER_VALIDATE_EMAIL)) {
                $this->email = $email;
            }
        }
        public function getPassword(): string {
            return $this->password;
        }
        public function setPassword(string $password): void {
            if (!empty($password)) {
                $this->password = password_hash($password, PASSWORD_DEFAULT);
            }
        }
        public function getFullName(): string {
            return $this->full_name;
        }
        public function setFullName(string $full_name): void {
            if (!empty($full_name)) {
                $this->full_name = $full_name;
            }
        }
        public function getRole(): string {
            return $this->role;
        }
        protected function setRole(string $role): void {
            if (!empty($role)) {
                $this->role = $role;
            }
        }
    }