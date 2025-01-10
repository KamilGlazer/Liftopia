<?php


require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../security/AuthMiddleware.php';


class SecurityController extends AppController
{
    public function login()
    {

        session_start();

        $userRepository = new UserRepository();

        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = $userRepository->getUserByEmail($email);


        //ONLY FOR TESTING
        if($email === 'test@test.pl'){
            $user = $userRepository->getUserByEmail('test@test.pl');
        //ONLY FOR TESTING
        }else{
            if(!$user || !password_verify($password,$user->getPassword())){
                return $this->render('login',['messages' => ['Invalid email or password']]);
            }
        }

        $_SESSION['user_id'] = $user->getId();
        $_SESSION['user_email']= $user->getEmail();
        $_SESSION['name']=$user->getName();
        $_SESSION['surname']=$user->getSurname();
        $_SESSION['nickname']=$user->getNickname();
        $_SESSION['avatarPath']=$user->getAvatarPath();


        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url/base");
        exit();
    }

    public function register()
    {
        $emailExists = false;
        $nicknameExists = false;
        $userRepository = new UserRepository();
        $plainPassword = $_POST["password"];
        $hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $user = new User($_POST["email"], $hashedPassword, $_POST["name"], $_POST["surname"], $_POST["dateOfBirth"],$_POST["nickname"]);

        $user2 = $userRepository->getUserByEmail($_POST["email"]);
        $user3 = $userRepository->getUserByNickname($_POST["nickname"]);

        if ($user2) {
            $emailExists = true;
        }

        if($user3){
            $nicknameExists = true;
        }
        
        $messages = $this->validateUser($user,$plainPassword,$emailExists,$nicknameExists);

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

    public function logout() {
        AuthMiddleware::logout();
    }


    private function validateUser(User $user, $plainPassword,$emailExists,$nicknameExists)
    {
        $messages = [];

        if($emailExists){
            $messages[] = 'User with this email already exists.';
        } elseif (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $messages[] = "Invalid email address.";
        }

        if($nicknameExists){
            $messages[] = 'User with this nickname already exists.';
        }elseif(strlen($user->getNickname()) < 3){
            $messages[] = "Nickname must be at least 4 characters long.";
        }

        if (strlen($plainPassword) < 5) {
            $messages[] = "Password must be at least 5 characters long.";
        }

        if (!preg_match('/^[A-Za-z]+$/', $user->getName())) {
            $messages[] = "First name must contain only letters.";
        } elseif (!ctype_upper($user->getName()[0])) {
            $messages[] = "First name must start with an uppercase letter.";
        }

        if (!preg_match('/^[A-Za-z]+$/', $user->getSurname())) {
            $messages[] = "Last name must contain only letters.";
        } elseif (!ctype_upper($user->getSurname()[0])) {
            $messages[] = "Last name must start with an uppercase letter.";
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