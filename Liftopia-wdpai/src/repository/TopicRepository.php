<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Section.php';

class TopicRepository extends Repository
{
    public function getTopicsBySectionId($sectionId)
    {
        $statement = $this->database->connect()->prepare("SELECT * FROM public.topics WHERE section_id = :section_id");
        $statement->bindParam(':section_id', $sectionId,PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTopicByTitle($search)
    {
        $sql = "SELECT t.id, t.title, t.posts, u.nickname AS author_name, t.created_at 
            FROM public.topics t
            LEFT JOIN public.users u ON t.created_by = u.id
            WHERE t.title ILIKE :search";

        $statement = $this->database->connect()->prepare($sql);
        $statement->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}