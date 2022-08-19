<?php

namespace App;

use App\Controllers\PostsController;

class Router {

    /**
     * @return int|void
     */
    public static function getController()
    {

        $requestURI = $_SERVER['REQUEST_URI'];
        $currentPath = substr($requestURI, 0, strpos($requestURI, "check24_blog"));
        $response = '';
        switch ($currentPath) {
            case '/' :
                $controller = new PostsController();
                $response = $controller->index();
                break;
            default:
                http_response_code(404);
                require_once __DIR__ . '/../views/404.php';
                break;
        }
        return $response;
    }
}