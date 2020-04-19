<?php

function inputValidate() {
    foreach ($_POST as $key => $value) {
        // $_POST[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        $_POST[$key] = strip_tags($value);
    }
}