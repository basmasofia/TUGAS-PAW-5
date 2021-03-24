<?php
    $message=$_GET['message'];
    file_put_contents('chat.txt', $message, FILE_APPEND);
?>