<?php
    namespace Classes;

    class Admin extends User {
        public function __construct(string $email, string $password, string $full_name) {
            parent::__construct($email , $password , $full_name , 'admin');
        }
        public function canManageEverything() {
            return true;
        }
    }