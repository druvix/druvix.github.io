<?php
// Create a connection to the database
$db = new PDO('mysql:host=localhost;dbname=register', 'root', '');

// Check if the form has been submitted
if (isset($_POST['username']) && isset($_POST['password'])) {

    // Sanitize the input
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Check if the username already exists
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $db->query($sql);

    if ($result->rowCount() > 0) {
        echo "The username already exists.";
    } else {

        // Insert the new user into the database
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $db->query($sql);

        // Redirect the user to the login page
        header('Location: login.php');
    }
}
?>