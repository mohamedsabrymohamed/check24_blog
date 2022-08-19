<?php

namespace App\Exceptions;

use Exception;
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;

class CustomException extends Exception {

    public function __construct(string $message)
    {
        parent::__construct($message);
    }

    public function __toString() {
        return "{$this->message}\n";
    }
}