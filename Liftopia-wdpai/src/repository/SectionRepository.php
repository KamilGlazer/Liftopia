<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Section.php';

class SectionRepository extends Repository
{
    public function getSections(){
        $statement = $this->database->connect()->prepare("SELECT * FROM public.sections");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}