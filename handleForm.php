<?php 
session_start();

// Check if the user is logged in
if (isset($_SESSION['firstName'])) {
    // User is logged in
    echo $_SESSION['firstName'] . " is already logged in. Wait for them to logout first.";
    // Display logout button
    echo '<form method="post" action="unset.php">
              <button type="submit" name="logoutBtn">Logout</button>
          </form>';
} else {
    // Handle login form submission
    if (isset($_POST['submitBtn'])) {
        // Get the first name from index.php
        $firstName = $_POST['firstName'];

        // Get the password from the input field
        $password = md5($_POST['password']);

        // Set the session variables
        $_SESSION['firstName'] = $firstName;
        $_SESSION['password'] = $password;

        // Go back to index.php
        header('Location: index.php');
    }
}
?>
