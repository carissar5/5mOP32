<?php
try {
    include_once 'zip://new.zip#csa.php';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}