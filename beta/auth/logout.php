<?php
include __DIR__ . '/../app.php';
// Destroy any current session
session_destroy();
redirect_to('/auth/login.php');