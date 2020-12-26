<?php
require_once "lang.php";
$stav = session_status();

if ($stav == PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['jazyk']) || !isset($_SESSION['jazyk'])) {
    $_SESSION['jazyk'] = "sk";
}
if (isset($_GET['jazyk']) && ($_GET['jazyk'] == "sk" || $_GET['jazyk'] == "en") && $_SESSION['jazyk'] != $_GET['jazyk']) {
    $_SESSION['jazyk'] = $_GET['jazyk'];
}
