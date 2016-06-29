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
}