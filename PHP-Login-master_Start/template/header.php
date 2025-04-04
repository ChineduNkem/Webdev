<?php
// Start session at the very beginning
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['Active']) || $_SESSION['Active'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle ?? 'My Site'; ?></title>
    <link rel="stylesheet" href="../css/stylesheet.css">