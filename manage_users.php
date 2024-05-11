<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $superUsername = "alex";  // Change this to your super user's username
    $superPassword = "3636";  // Change this to your super user's password
    
    $submittedUsername = $_POST["username"] ?? "";
    $submittedPassword = $_POST["password"] ?? "";
    
    $action = $_POST["action"] ?? "";

    // Check if submitted username and password match the super user's credentials
    if ($submittedUsername === $superUsername && $submittedPassword === $superPassword) {
        // Superuser actions

        if ($action === "register") {
            // Register new user
            $newUsername = $_POST["new_username"];
            $newPassword = $_POST["new_password"];
            
            // Combine the new user's data
            $newUserData = $newUsername . ":" . $newPassword . PHP_EOL;
            
            // Append the new user's data to the file
            file_put_contents("ghghgfh.txt", $newUserData, FILE_APPEND);

            echo "User '$newUsername' has been registered.";
        } elseif ($action === "remove") {
            // Remove user
            $userToRemove = $_POST["remove_username"];

            // Read the existing user data from the file
            $fileContents = file("ghghgfh.txt");
            $updatedContents = [];

            // Loop through each line and check if the user should be removed
            foreach ($fileContents as $line) {
                list($username, $password) = explode(":", $line);
                if ($username !== $userToRemove) {
                    $updatedContents[] = $line;
                }
            }

            // Write the updated user data back to the file
            file_put_contents("ghghgfh.txt", implode("", $updatedContents));

            echo "User '$userToRemove' has been removed.";
        }
    }

    // Print user list (can be accessed by anyone)
    if ($action === "print_list") {
        $fileContents = file("ghghgfh.txt");
        echo "<h2>Registered Users:</h2>";
        echo "<ul>";
        foreach ($fileContents as $line) {
            list($username, $password) = explode(":", $line);
            echo "<li>$username</li>";
        }
        echo "</ul>";
    }

    // Display unauthorized access message if superuser credentials are not valid
    if (!($submittedUsername === $superUsername && $submittedPassword === $superPassword)) {
        echo "Unauthorized access. Only super user can manage users.";
    }
}
?>
