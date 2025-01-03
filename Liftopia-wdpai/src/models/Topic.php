<?php

class Topic
{
    private $id;
    private $section_id;
    private $title;
    private $created_by;
    private $created_at;
    private $posts;


    public function __construct($section_id, $title, $created_by, $created_at)
    {
        $this->section_id = $section_id;
        $this->title = $title;
        $this->created_by = $created_by;
        $this->created_at = $created_at;
    }


    public function getPosts()
    {
        return $this->posts;
    }


    public function setPosts($posts): void
    {
        $this->posts = $posts;
    }




    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getSectionId()
    {
        return $this->section_id;
    }


    public function setSectionId($section_id): void
    {
        $this->section_id = $section_id;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title): void
    {
        $this->title = $title;
    }


    public function getCreatedBy()
    {
        return $this->created_by;
    }


    public function setCreatedBy($created_by): void
    {
        $this->created_by = $created_by;
    }


    public function getCreatedAt()
    {
        return $this->created_at;
    }


    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }



}