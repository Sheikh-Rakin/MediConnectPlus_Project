<?php
session_start(); 
include('connect_login.php');

// Check if the user is logged in
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

$sql = "SELECT * FROM user WHERE email = '$loggedInUserEmail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $userData = $result->fetch_assoc();

    $fullName = $userData['fullname'];
    $surname = $userData['surnname'];
    $address = $userData['address'];
    $nid = $userData['nid'];
    $gender = $userData['gender'];
    $phone = $userData['phone'];
    $bloodGroup = $userData['blood'];
    $profilePicture = $userData['photo'];
} else {

    header('Location: login.php');
    exit();
}

//updating profile information and profile picture
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //profile picture
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['profile_picture']['tmp_name'];
        $fileName = $_FILES['profile_picture']['name'];
        $fileSize = $_FILES['profile_picture']['size'];
        $fileType = $_FILES['profile_picture']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $allowedExtensions = array('jpg', 'jpeg', 'png');

        if (in_array($fileExtension, $allowedExtensions)) {
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $uploadFileDir = './profile_pics/';
            $dest_path = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
                $updateSql = "UPDATE user SET photo='$newFileName' WHERE email='$loggedInUserEmail'";
                $conn->query($updateSql);

               
                if ($profilePicture && $profilePicture !== 'default_profile_pic.jpg') {
                    $oldProfilePicPath = $uploadFileDir . $profilePicture;
                    if (file_exists($oldProfilePicPath)) {
                        unlink($oldProfilePicPath);
                    }
                }

               
                $profilePicture = $newFileName;
            } else {
                
                $_SESSION['update_error'] = "Error uploading profile picture. Please try again.";
            }
        } else {
            
            $_SESSION['update_error'] = "Invalid file type. Only JPG, JPEG, and PNG files are allowed.";
        }
    }

    // updating profile information
    $fullName = $_POST['full_name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $nid = $_POST['nid'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $bloodGroup = $_POST['blood_group'];

    $updateSql = "UPDATE user SET fullname='$fullName', surnname='$surname', address='$address', nid='$nid', gender='$gender', phone='$phone', blood='$bloodGroup' WHERE email='$loggedInUserEmail'";
    if ($conn->query($updateSql) === TRUE) {
    
        $_SESSION['update_success'] = "Profile updated successfully!";
    } else {
       
        $_SESSION['update_error'] = "Error updating profile. Please try again.";
    }

   
    header('Location: profile.php');
    exit();
}


$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile - Mediconnet Plus</title>
    <link rel="stylesheet" type="text/css" href="edit_profile.css">
</head>
<body style="background: url(./v870-tang-36.jpg);">
    <div class="container">
        <h1>Edit Profile</h1>
        <?php
        if (isset($_SESSION['update_success'])) {
            echo "<p class='success-message'>{$_SESSION['update_success']}</p>";
            unset($_SESSION['update_success']); 
        }

        if (isset($_SESSION['update_error'])) {
            echo "<p class='error-message'>{$_SESSION['update_error']}</p>";
            unset($_SESSION['update_error']); 
        }
        ?>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="profile-picture">
                <?php if ($profilePicture) : ?>
                    <img src="profile_pics/<?php echo $profilePicture; ?>" alt="Profile Picture">
                <?php else : ?>
                    <img src="default_profile_pic.jpg" alt="Profile Picture">
                <?php endif; ?>
                <input type="file" name="profile_picture">
            </div>
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" id="full_name" value="<?php echo $fullName; ?>" required>

            <label for="surname">Surname:</label>
            <input type="text" name="surname" id="surname" value="<?php echo $surname; ?>" required>

            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="<?php echo $address; ?>" required>

            <label for="nid">NID:</label>
            <input type="text" name="nid" id="nid" value="<?php echo $nid; ?>" required>

            <label for="gender">Gender:</label>
            <select name="gender" id="gender" required>
                <option value="" disabled>Choose Gender</option>
                <option value="Male" <?php echo $gender === 'Male' ? 'selected' : ''; ?>>Male</option>
                <option value="Female" <?php echo $gender === 'Female' ? 'selected' : ''; ?>>Female</option>
                <option value="Other" <?php echo $gender === 'Other' ? 'selected' : ''; ?>>Other</option>
            </select>

            <label for="phone">Phone No:</label>
            <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>" required>

            <label for="blood_group">Blood Group:</label>
            <input type="text" name="blood_group" id="blood_group" value="<?php echo $bloodGroup; ?>" required>

            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
