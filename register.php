
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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

        .register-container {
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

        .login-link {
            text-align: center;
            display: block;
            margin-top: 20px;
        }

        .login-link a {
            color: #4CAF50;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form id="registerForm" action="register.php" method="POST" onsubmit="return validateForm()">
            <input type="text" class="input-box" name="name" id="name" placeholder="Enter your name">
            <div class="error" id="nameError"></div>

            <input type="email" class="input-box" name="email" id="email" placeholder="Enter your email">
            <div class="error" id="emailError"></div>
            
            <input type="password" class="input-box" name="password" id="password" placeholder="Enter your password">
            <div class="error" id="passwordError"></div>

            <input type="password" class="input-box" name="confirm_password" id="confirm_password" placeholder="Confirm your password">
            <div class="error" id="confirmPasswordError"></div>
            
            <button type="submit" class="btn">Register</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="new_login.php">Login Now!</a></p>
        </div>
    </div>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;
            var isValid = true;

            if (name == "") {
                document.getElementById("nameError").innerText = "Please enter your name.";
                isValid = false;
            } else {
                document.getElementById("nameError").innerText = "";
            }

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

            if (confirmPassword == "") {
                document.getElementById("confirmPasswordError").innerText = "Please confirm your password.";
                isValid = false;
            } else if (confirmPassword !== password) {
                document.getElementById("confirmPasswordError").innerText = "Passwords do not match.";
                isValid = false;
            } else {
                document.getElementById("confirmPasswordError").innerText = "";
            }

            return isValid;
        }
    </script>
</body>
</html>
