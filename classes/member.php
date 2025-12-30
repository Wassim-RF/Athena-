<?php
    namespace Classes;

    class Member extends User {
        public function __construct(string $email, string $password, string $full_name) {
            parent::__construct($email , $password , $full_name , 'member');
        }
    }