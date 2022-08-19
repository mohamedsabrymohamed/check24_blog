<?php

namespace App\Helpers;

Class RenderViews {

    /**
     * @param string $fileName
     * @param array $data
     * @return void
     */
    public static function render(string $fileName, array $data) :void {
        extract($data);
        ob_start();
        require $fileName;
        ob_end_flush();
    }
}
