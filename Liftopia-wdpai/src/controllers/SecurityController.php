<?php


require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';


class SecurityController extends AppController
{
    public function login()
    {

        $userRepository = new UserRepository();

        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = $userRepository->getUserByEmail($email);

        if(!$user || $user->getPassword() !== $password){
            return $this->render('login',['messages' => ['Invalid email or password']]);
        }


        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url/base");
    }

    public function register()
    {
        $userRepository = new UserRepository();
        $user = new User($_POST["email"], $_POST["password"], $_POST["name"], $_POST["surname"], $_POST["dateOfBirth"]);

        $user2 = $userRepository->getUserByEmail($_POST["email"]);
        if ($user2) {
            return $this->render('register', [
                'messages' => ['User with this email already exists.'],
                'data' => $_POST
            ]);
        }

        $messages = $this->validateUser($user);

        if (!empty($messages)) {
            return $this->render('register', [
                'messages' => $messages,
                'data' => $_POST
            ]);
        }

        if (!$userRepository->save($user)) {
            return $this->render('register', [
                'messages' => ['Something went wrong.'],
                'data' => $_POST
            ]);
        }

        session_start();
        $_SESSION['registration_success'] = 'Registration successful! Please log in.';

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url/login");
    }

    private function validateUser(User $user)
    {
        $messages = [];

        if (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $messages[] = "Invalid email address.";
        }

        if (strlen($user->getPassword()) < 5) {
            $messages[] = "Password must be at least 5 characters long.";
        }

        if (!preg_match('/^[A-Za-z]+$/', $user->getName())) {
            $messages[] = "First name must contain only letters.";
        }

        if (!preg_match('/^[A-Za-z]+$/', $user->getSurname())) {
            $messages[] = "Last name must contain only letters.";
        }

        if (!$this->isAtLeast16($user->getDateOfBirth())) {
            $messages[] = "You must be at least 16 years old to register.";
        }

        return $messages;
    }

    private function isAtLeast16($dateOfBirth): bool
    {
        $birthDate = new DateTime($dateOfBirth);
        $today = new DateTime();
        $age = $today->diff($birthDate)->y;

        return $age >= 16;
    }
}