<?php

    // First we execute our common code to connection to the database and start the session
    require("common.php");

    // If we want to keep some session information such as shopping cart contents,
    // we only remove the user's data from the session without unsetting remaining
    // session variables and without destroying the session.
    unset($_SESSION['user']);

    // Otherwise, we unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();

    // Whether we destroy the session or not, we redirect them to the login page
    header("Location: login.php");
    die("Redirecting to: login.php");