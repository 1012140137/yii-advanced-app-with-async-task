<?php

// NOTE: Make sure this file is not accessible when deployed to production
if (!in_array(@$_SERVER['HTTP_HOST'], ['127.0.0.1', 'localhost'])) {
    die('You are not allowed to access this file.');
}

phpinfo();
