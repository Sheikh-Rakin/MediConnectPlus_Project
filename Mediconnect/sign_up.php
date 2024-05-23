
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
    <link rel="stylesheet" type="text/css" href="sign_up.css">
</head>
<body style="background: url(./v870-tang-36.jpg);">
    <div class="container">
        <h1>Sign Up Page</h1>
        <h2>Create Account With </h2>
        <div class="social-buttons-facebook">
                <button> <a href="https://www.facebook.com/" target="_blank"> <img src="Screenshot_1.png" height="30" width="80"></a></button>
                
            </div>
        <div class="social-buttons-google">
    
        <button><a href="https://myaccount.google.com/" target="_blank"> <img src="Screenshot_4.png" height="30" width="80"></a></button>
        </div>
        <div class="social-buttons-apple">
            <button><a href="https://appleid.apple.com/sign-in" target="_blank"> <img src="Screenshot_2.png" height="30" width="80"></a></button>
        </div>
        <p class="or">-OR-</p>
        <form action="connect.php" method="post">
            <input type="text" id= "full_name" name="full_name" placeholder="Full Name" required>
            <input type="email" id= "email" name="email" placeholder="Email" required>
            <input type="tel" id= "phone"name="phone" placeholder="Phone Number" required>
            <label for="dob">Date of Birth</label>
            <input type="date" id= "dob" name="dob" required>
            <label for="gender">Gender</label>
            <select name="gender" id= "gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <input type="text" name="nid" placeholder="NID Number" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Sign Up">
           
        </form>
        <p>Already have account? <a href="login.php">Log in here</a></p>
        
    </div>
</body>
</html>
