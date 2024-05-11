<?php
// Function to read user accounts and passwords from a text file
function readUsersFromFile($filename) {
    $users = array();
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    foreach ($lines as $line) {
        list($username, $password) = explode(':', $line);
        $users[$username] = $password;
    }
    
    return $users;
}

$usersFile = 'ghghgfh.txt';
$users = readUsersFromFile($usersFile);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if user exists and password is correct
    if (isset($users[$username]) && $users[$username] === $password) {
        // Start a session and set the logged-in user
        session_start();
        $_SESSION['username'] = $username;

        // Redirect to MikroTik user addition page
        header('Location: tv.php');
        exit();
    } else {
        echo 'Invalid username or password.';
    }
}
?>
