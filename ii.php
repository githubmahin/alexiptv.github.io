<!DOCTYPE html>
<html>
<head>
    <title>Manage Users</title>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1, h2 {
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        p {
            font-size: 16px;
        }
    </style>
</head>
<body>
    
    


    <h2>Super User Registration</h2>
    <form action="manage_users.php" method="post">
        <label for="reg_username">Super User Username:</label>
        <input type="text" id="reg_username" name="username" required><br><br>

        <label for="reg_password">Super User Password:</label>
        <input type="password" id="reg_password" name="password" required><br><br>

        <hr>

        <label for="new_username">New User Username:</label>
        <input type="text" id="new_username" name="new_username" required><br><br>

        <label for="new_password">New User Password:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>

        <input type="hidden" name="action" value="register">
        <input type="submit" value="Register">
    </form>
    
   
    <h2>Remove User</h2>
    <form action="manage_users.php" method="post">
        <label for="remove_username">Super User Username:</label>
        <input type="text" id="remove_username" name="username" required><br><br>

        <label for="remove_password">Super User Password:</label>
        <input type="password" id="remove_password" name="password" required><br><br>

        <label for="remove_username">Username to Remove:</label>
        <input type="text" id="remove_username" name="remove_username" required><br><br>

        <input type="hidden" name="action" value="remove">
        <input type="submit" value="Remove User">
    </form>

    <h2>Print User List</h2>
    <form action="manage_users.php" method="post">
        <input type="hidden" name="action" value="print_list">
        <input type="submit" value="Print User List">
    </form>
    

</body>
</html>
