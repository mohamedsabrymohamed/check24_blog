<?php

namespace App\Helpers;

class SanitizeData {

    public function cleanData($data)
    {
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        return $data;
    }
}