<?php

declare(strict_types=1);
require_once __DIR__ . '/settings.php';

function connectDb(): PDO
{
    try {
        static $db = null;
        if ($db === null) {
            // Get settings
            $settings = settings(); // Call the function
            // Connect to the database
            $dsn = $settings->dsn;
            $dbUser = $settings->dbUser;
            $dbPassword = $settings->dbPassword;
            $db = new PDO($dsn, $dbUser, $dbPassword);
        }
        
        return $db;
    } catch (PDOException $e) {
        throw $e;
    }
}
