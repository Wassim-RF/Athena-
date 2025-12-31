<?php
    namespace Services;

    use Classes\User;
    use Classes\Admin;
    use Classes\Chef;
    use Classes\Member;
    use Repositories\UserRepositories;
    use Exception;

    class AuthServises {
        private UserRepositories $userRepositories;

        public function __construct(UserRepositories $userRepositories) {
            $this->userRepositories = $userRepositories;
        }

        public function login(string $email , string $password) {
            $user = $this->userRepositories->findUserByEmail($email);
            if (!$user) return null;
            if ($password !== $user['password']) {
                return null;
            }
            session_start();
            $_SESSION['user'] = [
                'id' => $user['id'],
                'email' => $user['email'],
                'full_name' => $user['full_name'],
                'role' => $user['role']
            ];
            return $this->createUserObject($user);
        }
        public function createUserObject(array $data) {
            switch ($data['role']) {
                case 'admin':
                    $user = new Admin($data['email'] , $data['password'] , $data['full_name']);
                    break;
                case 'chef':
                    $user = new Chef($data['email'] , $data['password'] , $data['full_name']);
                    break;
                case 'member':
                    $user = new Member($data['email'] , $data['password'] , $data['full_name']);
                    break;
                default:
                    throw new Exception("Unknown role: " . $data['role']);
            }
            $user->setId($data['id']);
            return $user;
        }
    }