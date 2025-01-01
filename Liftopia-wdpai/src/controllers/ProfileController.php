<?php

require_once 'AppController.php';
require_once __DIR__.'/../security/AuthMiddleware.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../models/User.php';

class ProfileController extends AppController
{
    public function profile(){
        AuthMiddleware::checkLogin();
        return $this->render('profile');
    }

    public function update()
    {
        AuthMiddleware::checkLogin();

        $repository = new UserRepository();
        $email = $_SESSION['user_email'];
        $oldNickname = $_SESSION['nickname'];


        $user = $repository->getUserByEmail($email);
        if (!$user) {
            return $this->render('login');
        }

        $updatedUser = $this->buildUpdatedUser($user, $_POST);

        $messages = $this->validateUser($repository, $updatedUser, $email, $oldNickname);
        if (!empty($messages)) {
            return $this->render('profile', ['messages' => $messages]);
        }

        if ($repository->save($updatedUser)) {
            $this->updateSession($updatedUser);
            $this->redirectToBase();
        } else {
            return $this->render('profile', ['messages' => ['Failed to save changes.']]);
        }
    }

    private function buildUpdatedUser(User $user, array $data): User
    {
        $user->setEmail($data['email']);
        $user->setNickname($data['nickname']);
        $user->setAvatarPath($data['avatar']);
        return $user;
    }

    private function validateUser(UserRepository $repository, User $user, string $oldEmail, string $oldNickname): array
    {
        $messages = [];

        if ($user->getEmail() !== $oldEmail && $repository->getUserByEmail($user->getEmail())) {
            $messages[] = 'User with this email already exists.';
        } elseif (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $messages[] = 'Invalid email address.';
        }

        if ($user->getNickname() !== $oldNickname && $repository->getUserByNickname($user->getNickname())) {
            $messages[] = 'User with this nickname already exists.';
        } elseif (strlen($user->getNickname()) < 4) {
            $messages[] = 'Nickname must be at least 4 characters long.';
        }

        return $messages;
    }

    private function updateSession(User $user): void
    {
        $_SESSION['user_email'] = $user->getEmail();
        $_SESSION['nickname'] = $user->getNickname();
        $_SESSION['avatarPath'] = $user->getAvatarPath();
    }

    private function redirectToBase(): void
    {
        $url = "http://{$_SERVER['HTTP_HOST']}/base";
        header("Location: $url");
        exit();
    }
}