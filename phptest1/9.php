<?php


require_once 'functions.php';


if (function_exists('greet')) {
    greet();
} else {
    die("Error: Function 'greet' does not exist.");
}
