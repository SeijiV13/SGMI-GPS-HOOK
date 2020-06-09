<?php
    file_put_contents('pandg-results.txt', json_encode($_GET) + "%", FILE_APPEND);
?>