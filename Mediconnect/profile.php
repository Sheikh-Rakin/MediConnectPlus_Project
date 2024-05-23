<?php
session_start(); // Start the PHP session


if (!isset($_SESSION['login_success']) || $_SESSION['login_success'] !== true) {
    header('Location: login.php');
    exit();
}

if (isset($_SESSION['loggedInUserEmail'])) {
 
    $loggedInUserEmail = $_SESSION['loggedInUserEmail'];
} else {

    header('Location: login.php');
    exit();
}

// Database connection settings
include('connect_login.php');

//user info for original user
$sql = "SELECT * FROM user WHERE email = '$loggedInUserEmail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $userData = $result->fetch_assoc();

    // profile page info
    $fullName = $userData['fullname'];
    $surname = $userData['surnname'];
    $address = $userData['address'];
    $nid = $userData['nid'];
    $gender = $userData['gender'];
    $phone = $userData['phone'];
    $bloodGroup = $userData['blood'];

} else {
   
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body style="background: url(./v870-tang-36.jpg);">
    <?php include 'navigation.php'; ?>

    <div class="content">
        <div class="profile-container">

            <div class="profile-picture">
                <img src="<?php echo isset($userData['photo']) ? $userData['photo'] : 'defaultprofilepic.png'; ?>" alt="Profile Picture">
            </div>

            <div class="profile-info">
                <div class="profile-box">
                    <strong>Full Name:</strong> <?php echo $fullName; ?>
                </div>
                <div class="profile-box">
                    <strong>Surname:</strong> <?php echo $surname; ?>
                </div>
                <div class="profile-box">
                    <strong>Address:</strong> <?php echo $address; ?>
                </div>
                <div class="profile-box">
                    <strong>NID:</strong> <?php echo $nid; ?>
                </div>
                <div class="profile-box">
                    <strong>Email:</strong> <?php echo $loggedInUserEmail; ?>
                </div>
                <div class="profile-box">
                    <strong>Gender:</strong> <?php echo $gender; ?>
                </div>
                <div class="profile-box">
                    <strong>Phone No:</strong> <?php echo $phone; ?>
                </div>
                <div class="profile-box">
                    <strong>Blood Group:</strong> <?php echo $bloodGroup; ?>
                </div>
                <div class="profile-box">
                    <strong>Password:</strong> ******* 
                </div>
            </div>
            <div class="edit-profile-btn">
                <a href="edit_profile.php">
                    <button>Edit Profile</button>
                </a>
            </div>
            <div class="logout-btn">
                <a href="login.php">Logout</a> 
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
