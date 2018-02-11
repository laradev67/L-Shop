<?php
declare(strict_types = 1);

namespace App\Exceptions\News;

use App\Exceptions\DomainException;

class DoesNotExistException extends DomainException
{
    public function __construct($news)
    {
        parent::__construct("News {$news} does not exist", 0, null);
    }
}
