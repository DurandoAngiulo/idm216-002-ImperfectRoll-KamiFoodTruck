<?php
include __DIR__ . '/../app.php';
// Destroy any current session
$_SESSION = [];
session_destroy();
redirect_to('/auth/login.php');