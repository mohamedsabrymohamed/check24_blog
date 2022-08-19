<?php

namespace App\DTO;

class PostCollectionTransfer {

    protected array $posts;
    protected array $pagination;

    /**
     * @return array
     */
    public function getPosts(): array
    {
        return $this->posts;
    }

    /**
     * @param array $posts
     */
    public function setPosts(array $posts): void
    {
        $this->posts = $posts;
    }

    /**
     * @return int
     */
    public function getPagination(): array
    {
        return $this->pagination;
    }

    /**
     * @param int $pagination
     */
    public function setPagination(array $pagination): void
    {
        $this->pagination = $pagination;
    }

}