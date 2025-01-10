<?php

require_once 'AppController.php';
require_once __DIR__.'/../security/AuthMiddleware.php';
require_once __DIR__.'/../repository/TopicRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/PostRepository.php';


class TopicController extends AppController
{

    public function viewTopic($sectionId, $topicId)
    {
        AuthMiddleware::checkLogin();
        $_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];
        $postRepository = new PostRepository();
        $posts = $postRepository->getPostsByTopicId($topicId);



        $this->render('topic', [
            'sectionId' => $sectionId,
            'topicId' => $topicId,
            'posts' => $posts
        ]);
    }

    public function addPost($topicId)
    {
        AuthMiddleware::checkLogin();
        $url = $_SESSION['previous_url'];
        $postRepository = new PostRepository();

        $content = $_POST['content'];

        $postRepository->save($topicId,$content);

        header("Location: $url");
        exit();
    }

}