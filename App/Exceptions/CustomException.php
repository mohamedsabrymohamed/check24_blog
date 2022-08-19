<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception {

    /**
     * @param string $message
     */
    public function __construct(string $message)
    {
        parent::__construct($message);
    }

    /**
     * @return string
     */
    public function __toString() : string {
        return "{$this->message}\n";
    }
}