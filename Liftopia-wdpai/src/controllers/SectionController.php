<?php

require_once 'AppController.php';
require_once __DIR__.'/../security/AuthMiddleware.php';
require_once __DIR__.'/../repository/TopicRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SectionController extends AppController
{
    public function section($id) {
        AuthMiddleware::checkLogin();

        $topicRepository = new TopicRepository();
        $userRepository = new UserRepository();
        $topics = $topicRepository->getTopicsBySectionId($id);

        foreach ($topics as &$topic) {
            $user = $userRepository->getUserById($topic['created_by']);
            $topic['author_name'] = $user->getNickname();
        }

        $this->render('section', ['topics' => $topics, 'sectionId' => $id]);
    }

    public function search(){
        AuthMiddleware::checkLogin();
        $topicRepository = new TopicRepository();
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType == 'application/json') {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);


            header('Content-type: application/json');
            http_response_code(200);

            $topics = $topicRepository->getTopicByTitle($decoded['search']);
            echo json_encode($topics);
        }

    }
}