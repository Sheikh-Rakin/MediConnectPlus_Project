<?php
session_start(); // Start the PHP session

// Database connection settings
include('connect_login.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query to check email and password
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Email and password match, login successful
        $_SESSION['login_success'] = true;
        $_SESSION['loggedInUserEmail'] = $email; // Store the logged-in user's email in a session variable
        header('Location: home.php'); // Redirect to profile.php
        exit();
    } else {
        // Email and/or password do not match
        $_SESSION['login_error'] = "Invalid email or password. Please try again.";
        header('Location: login.php'); // Redirect back to login.php
        exit();
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mediconnet Plus - Login</title>
    <link rel="stylesheet" type="text/css" href="log_in.css">

    <style>
        /* Style for the success message */
        .success-message {
            text-align: center;
            font-weight: bold;
            color: green;
            margin-top: 20px;
        }
    </style>
</head>
<body style="background: url(./v870-tang-36.jpg);">
    <div class="container">
        <h1>Welcome to Mediconnet Plus</h1>
        <h2>we care about you</h2>
        <?php
        if (isset($_SESSION['login_error'])) {
            echo "<p>{$_SESSION['login_error']}</p>";
            unset($_SESSION['login_error']);
        }

        if (isset($_SESSION['signup_success'])) {
            echo "<p class='success-message'>{$_SESSION['signup_success']}</p>";
            unset($_SESSION['signup_success']); 
        }
        ?>
        <form action="#" method="post">
            <input type="text" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="checkbox-group">
                <input type="checkbox" name="keepLoggedIn" id="keepLoggedIn">
                <label for="keepLoggedIn">Keep me logged in</label>
            </div>
            <input type="submit" value="Log In">
        </form>
        <div class="options">
            <a href="#">Forgot password?</a>
            <div class="social-buttons-facebook">
                <button> <a href="https://www.facebook.com/" target="_blank"> <img src="Screenshot_1.png" height="30" width="80"></a></button>
            </div>
            <div class="social-buttons-google">
                <button><a href="https://myaccount.google.com/" target="_blank"> <img src="Screenshot_4.png" height="30" width="80"></a></button>
            </div>
            <div class="social-buttons-apple">
                <button><a href="https://appleid.apple.com/sign-in" target="_blank"> <img src="Screenshot_2.png" height="30" width="80"></a></button>
            </div>
            <p>Don't have an account? <a href="sign_up.php">Sign up here</a></p>
        </div>
    </div>
</body>
</html>
