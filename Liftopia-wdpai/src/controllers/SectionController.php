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

            $topics = $topicRepository->getTopicByTitle($decoded['search'],$decoded['sectionId']);
            echo json_encode($topics);
        }

    }

    public function createTopic($id){
        AuthMiddleware::checkLogin();
        $topicRepository = new TopicRepository();
        $userRepository = new UserRepository();

        $title = $_POST['title'];
        $content = $_POST['content'];


        $messages = $this->validateTopic($title,$content,$topicRepository,$id);
        if (!empty($messages)) {
            $topics = $topicRepository->getTopicsBySectionId($id);
            foreach ($topics as &$topic) {
                $user = $userRepository->getUserById($topic['created_by']);
                $topic['author_name'] = $user->getNickname();
            }
            return $this->render('section', [
                'topics' => $topics,
                'messages' => $messages,
                'sectionId' => $id,
                'title' => $title,
                'content' => $content
            ]);
        }

        $userId = $_SESSION['user_id'];
        $topicRepository->addTopic($id,$title,$content,$userId);

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url/section/$id");
        exit();
    }


    private function validateTopic($title,$content,$topicRepository,$sectionId): array
    {
        $messages = [];
        $topic = $topicRepository->getTopicByTitle2($title,$sectionId);

        if(!empty($topic)) {
            $messages[] = "That topic already exists.";
        } elseif(strlen($title) < 4){
            $messages[] = 'Title must be at least 4 characters long.';
        }

        if(strlen($content) < 4){
            $messages[] = 'Content must be at least 10 characters long.';
        }

        return $messages;
    }
}