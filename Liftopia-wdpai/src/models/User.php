<?php


class User{
    private $id;
    private $email;
    private $password;
    private $name;
    private $surname;
    private $dateOfBirth;
    private $nickname;
    private $avatarPath;

    public function __construct(string $email,string  $password, string $name, string $surname,$dateOfBirth, string $nickname)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->dateOfBirth = $dateOfBirth;
        $this->nickname = $nickname;
        $this->avatarPath = '/public/assets/man.png';
    }


    public function getAvatarPath()
    {
        return $this->avatarPath;
    }


    public function setAvatarPath($avatarPath): void
    {
        $this->avatarPath = $avatarPath;
    }


    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }




    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }




}