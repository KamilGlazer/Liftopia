<?php

class Section
{
    private $id;
    private $name;
    private $description;
    private $icon_class;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }


    public function getIconClass()
    {
        return $this->icon_class;
    }


    public function setIconClass($icon_class): void
    {
        $this->icon_class = $icon_class;
    }




    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }



}