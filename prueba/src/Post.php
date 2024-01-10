<?php

namespace App;

class Post 
{
    protected $comments = [];

    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }

    public function countComments()
    {
        return coun($this->comments);
    }

    public function getComments()
    {
        return $this->comments;
    }
}