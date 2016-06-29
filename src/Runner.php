<?php

namespace LegacyTester;

class Runner
{
    public static function execute($filePath)
    {
        ob_start();
        require $filePath;
        return ob_get_clean();
    }

    /**
     * @param $filePath
     * @param $queryParams
     * @return string
     */
    public static function query($filePath, $queryParams)
    {
        $_GET = $queryParams;
        return self::execute($filePath);
    }
}