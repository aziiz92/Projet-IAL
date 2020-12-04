<?php

require_once "src/Repository/ArticleRepository.php";

/**
 *
 */
class ArticleController
{
    private $_db;
    private $_requestMethod;
    private $_id;
    private $_category;
    private $_repository;

    public function __construct($db, $requestMethod, $id = null, $category = null)
    {
        $this->_db = $db;
        $this->_requestMethod = $requestMethod;
        $this->_id = $id;
        $this->_category = $category;
        $this->_repository = new ArticleRepository($db);
    }

    public function processRequest()
    {
        switch ($this->_requestMethod) {
        case 'GET':
            if ($this->_id) {
                $response = $this->getArticle();
            } else {
                $response = $this->getArticles();
            }
            break;

        default:
            $response = $this->notFoundResponse();
            break;
        }

        header($response['status']);
        if ($response['body']) {
            echo $response['body'];
        }
    }

    private function getArticles()
    {
        if ($this->_category) {
            $data = $this->_repository->findAll(true, $this->_category);
        } else {
            $data = $this->_repository->findAll(true);
        }
        $response['status'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($data);
        return $response;
    }

    private function getArticle()
    {
        $data = $this->_repository->find($this->_id);
        if (!$data) {
            return $this->notFoundResponse();
        }

        $response['status'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($data);
        return $response;
    }

    private function notFoundResponse()
    {
        $response['status'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = json_encode(['code' => 404, 'message' => 'Not found!']);
        return $response;
    }
}
