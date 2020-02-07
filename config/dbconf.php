<?php

try {
    new PDO('mysql:host=127.0.0.1;dbname=boomermvc', 'phpmyadmin', '123456');
} catch (PDOException $error) {
    die("Could Not Connect. ");
}