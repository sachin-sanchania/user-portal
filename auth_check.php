<?php
session_start();
if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_name'])) {
    header('Location: login.php');
    exit;
}