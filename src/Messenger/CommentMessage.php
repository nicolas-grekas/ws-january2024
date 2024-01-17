<?php

namespace App\Messenger;

class CommentMessage
{
    public function __construct(
        public int $id,
        public array $context = [],
    ) {
    }
}