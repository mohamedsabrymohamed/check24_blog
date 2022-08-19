<?php

namespace App;

use App\Controllers\PostsController;

class Router {

    /**
     * @return int|void
     */
    public static function getController()
    {
        $request = $_SERVER['REQUEST_URI'];

        switch ($request) {
            case '/' :
                $controller = new PostsController();
                return $controller->index();
                break;
            case '' :
                $controller = new PostsController();
                return $controller->index();
                break;
            default:
                http_response_code(404);
                require_once __DIR__ . '/../views/404.php';
                break;
        }
    }
}