<?php

namespace App\DB;

use App\DTO\PostCollectionTransfer;
use App\DTO\PostTransfer;

class PostModel {

    const  TABLE_NAME = 'posts';

    /**
     * @param int $currentPage
     * @return PostCollectionTransfer
     * @throws \App\Exceptions\CustomException
     */
    public function paginate(int $currentPage = 1)
    {
        $query = Database::selectQueryPaginated(self::TABLE_NAME, $currentPage);
        return $this->mapper($query);
    }

    /**
     * @param array $query
     * @return PostCollectionTransfer
     */
    protected function mapper(array $query)
    {
        $postsList = [];
        $pagination = [
            'total_pages' => $query['total_pages'],
            'current_page' => $query['current_page']
        ];

        foreach ($query['data'] as $singlePost)
        {
            $postTransfer = new PostTransfer();
            $postTransfer->setId($singlePost['id']);
            $postsList[] = $postTransfer;
        }

        $postCollectionTransfer = new PostCollectionTransfer();
        $postCollectionTransfer->setPosts($postsList);
        $postCollectionTransfer->setPagination($pagination);

        return $postCollectionTransfer;
    }
}