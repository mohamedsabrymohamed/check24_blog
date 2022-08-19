<?php

namespace App\Controllers;

use App\DB\PostModel;
use App\DTO\PostCollectionTransfer;
use App\Helpers\RenderViews;

class PostsController {


    /**
     * @return void
     * @throws \App\Exceptions\CustomException
     */
    public  function overview() : void
    {
        $postCollectionTransfer = (new PostModel())->paginate();
        RenderViews::render(__DIR__ . '/../../views/overview.php', (array)$postCollectionTransfer);
    }


}