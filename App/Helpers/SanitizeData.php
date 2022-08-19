<?php

namespace App\Helpers;

class SanitizeData {

    /**
     * @param $data
     * @return string
     */
    public function cleanData(string $data)
    {
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        return $data;
    }
}