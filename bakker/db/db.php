<?php

class Database {
    private static $db;

    public static function getConnection() {
        if (!self::$db) {
            try {
                self::$db = new PDO('sqlite:db/producten.db');
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Verbindingsfout: " . $e->getMessage());
            }
        }
        return self::$db;
    }
}
