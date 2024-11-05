<?php
try {
    include_once 'zip://abc.zip#lux.php';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}