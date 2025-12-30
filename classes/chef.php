<?php
    namespace Classes;

    class Chef extends User {
        public function __construct(string $email, string $password, string $full_name) {
            parent::__construct($email , $password , $full_name , 'chef');
        }
        public function canCreateProject() {
            return true;
        }
        public function canCreateSprint() {
            return true;
        }
    }