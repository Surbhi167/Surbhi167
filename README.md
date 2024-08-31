//Login page with js validation 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Custom CSS for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-box {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        .register-link {
            text-align: center;
            display: block;
            margin-top: 20px;
        }

        .register-link a {
            color: #4CAF50;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm" action="login.php" method="POST" onsubmit="return validateForm()">
            <input type="email" class="input-box" name="email" id="email" placeholder="Enter your email">
            <div class="error" id="emailError"></div>
            
            <input type="password" class="input-box" name="password" id="password" placeholder="Enter your password">
            <div class="error" id="passwordError"></div>
            
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="register-link">
            <p>Don't have an account? <a href="new_register.php">Register Now!</a></p>
        </div>
    </div>

    <script>
        function validateForm() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var isValid = true;

            if (email == "") {
                document.getElementById("emailError").innerText = "Please enter your email.";
                isValid = false;
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                document.getElementById("emailError").innerText = "Invalid email format.";
                isValid = false;
            } else {
                document.getElementById("emailError").innerText = "";
            }

            if (password == "") {
                document.getElementById("passwordError").innerText = "Please enter your password.";
                isValid = false;
            } else {
                document.getElementById("passwordError").innerText = "";
            }

            return isValid;
        }
    </script>
</body>
</html>
