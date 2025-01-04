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

    public function getTopicByTitle($search, $sectionId)
    {
        $sql = "SELECT t.id, t.title, t.posts, u.nickname AS author_name, t.created_at 
            FROM public.topics t
            LEFT JOIN public.users u ON t.created_by = u.id
            WHERE t.title ILIKE :search and t.section_id = :section_id";

        $statement = $this->database->connect()->prepare($sql);
        $statement->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
        $statement->bindValue(':section_id', $sectionId, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTopicByTitle2($topicTitle, $sectionId)
    {
        $statement = $this->database->connect()->prepare("SELECT * FROM public.topics WHERE section_id = :section_id AND title = :topicTitle");
        $statement->bindParam(':section_id', $sectionId,PDO::PARAM_STR);
        $statement->bindParam(':topicTitle', $topicTitle,PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addTopic($id, $title, $content, $userId)
    {
        $statement = $this->database->connect()->prepare("
        INSERT INTO public.topics (section_id, title, created_by, created_at, posts)
        VALUES (:section_id, :title, :created_by, NOW(), :posts)
        ");

        $statement->execute([
            'section_id' => $id,
            'title' => $title,
            'created_by' => $userId,
            'posts' => 1
        ]);

        $statement = $this->database->connect()->prepare("SELECT last_value FROM topics_id_seq AS topic_id");
        $statement->execute();
        $topic_id = $statement->fetchColumn();

        $statement = $this->database->connect()->prepare("
        INSERT INTO public.posts (topic_id, content, created_by, created_at)
        VALUES (:topic_id, :content, :created_by, NOW())
        ");


        $statement->execute([
            'topic_id' => $topic_id,
            'content' => $content,
            'created_by' => $userId,
        ]);
    }
}