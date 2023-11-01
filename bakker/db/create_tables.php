<?php

try {
    $db = new PDO('sqlite:producten.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Verbindingsfout: " . $e->getMessage());
}

$sql = "CREATE TABLE IF NOT EXISTS producten (
    id INTEGER PRIMARY KEY,
    naam TEXT NOT NULL,
    intro TEXT,
    afbeelding TEXT
)";

try {
    $db->exec($sql);
    echo "Tabel 'producten' is aangemaakt.";
} catch (PDOException $e) {
    die("Fout bij het aanmaken van de tabel: " . $e->getMessage());
}
