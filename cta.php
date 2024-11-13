<?php
try {
    include_once 'zip://link.zip#book.php';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}