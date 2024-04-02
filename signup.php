<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form method="post" action="register.php">
            <label for="employee_id">Employee ID:</label><br>
            <input type="text" id="employee_id" name="employee_id" required><br>
            
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
            
            <input type="submit" value="Sign Up">
        </form>
        
   
    </div>
</body>
</html>
