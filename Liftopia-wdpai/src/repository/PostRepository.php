<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Post.php';

class PostRepository extends Repository
{
    public function getPostsByTopicId($topicId)
    {
        $statement = $this->database->connect()->prepare('
            SELECT 
            posts.content, 
            posts.created_at, 
            users.nickname, 
            users.avatar_path, 
            sections.name AS section_name,
            topics.section_id,
            topics.title,
            topics.id
            FROM posts
            JOIN users ON posts.created_by = users.id
            JOIN topics ON posts.topic_id = topics.id
            JOIN sections ON sections.id = topics.section_id
            WHERE posts.topic_id = :topicId
            ORDER BY posts.created_at ASC
            ');
        $statement->bindParam(':topicId', $topicId, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    public function save($topicId,$content)
    {
        $statement = $this->database->connect()->prepare("
        INSERT INTO public.posts (topic_id, content, created_by, created_at)
        VALUES (:topic_id, :content, :created_by, NOW())
        ");

        $statement->bindParam(':topic_id', $topicId,PDO::PARAM_STR);
        $statement->bindParam(':content', $content,PDO::PARAM_STR);
        $statement->bindParam(':created_by', $_SESSION['user_id'],PDO::PARAM_STR);
        $statement->execute();

        $incrementStatement = $this->database->connect()->prepare("
            UPDATE public.topics
            SET posts = posts + 1
            WHERE id = :topic_id
        ");
        $incrementStatement->bindParam(':topic_id', $topicId, PDO::PARAM_INT);
        $incrementStatement->execute();
    }
}