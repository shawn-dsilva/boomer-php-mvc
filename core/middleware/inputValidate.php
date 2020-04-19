<?php

foreach($_POST as $key => $value) {
  $_POST[$key] = filter_input(INPUT_POST, $value, FILTER_SANITIZE_SPECIAL_CHARS);
}