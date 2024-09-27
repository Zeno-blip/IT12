<?php

// Start the session
session_start();

// Get the logged-in user's ID
$userId = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : null;

// If the user is logged in


// Clear session data
$_SESSION = [];
session_unset();
session_destroy();

// Redirect to the login page
header("Location: index.php");
exit();
?>