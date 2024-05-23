<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form has been submitted

    $conn = new mysqli('localhost', 'root', '', 'medi');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Replace this with the logged-in user's unique identifier (e.g., user ID)
    $user_id = 1;

    // Process and update the profile photo (if provided)
    if ($_FILES['profile_photo']['size'] > 0) {
        $target_dir = "path_to_photos/";
        // Replace 'path_to_photos/' with the actual path to your photos directory

        $target_file = $target_dir . basename($_FILES['profile_photo']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the image file is a actual image or fake image
        $check = getimagesize($_FILES['profile_photo']['tmp_name']);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists and generate a unique filename
        $filename = uniqid() . '.' . $imageFileType;
        $target_file = $target_dir . $filename;

        // Check file size
        if ($_FILES['profile_photo']['size'] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow only certain image file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $target_file)) {
                // Update the profile photo in the database
                $sql = "UPDATE user SET photo = '$filename' WHERE id = $user_id";
                if ($conn->query($sql) !== TRUE) {
                    echo "Error updating profile photo: " . $conn->error;
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    // Process and update the other profile information
    $fullname = $_POST['fullname'];
    $surname = $_POST['surname'];
    // Add other profile information (email, phone, dob, gender, nid, address, blood, password, etc.)

    // Update the profile information in the database
    $sql = "UPDATE user SET fullname = '$fullname', surname = '$surname' WHERE id = $user_id";
    // Add other fields to the SET clause for updating other information

    if ($conn->query($sql) === TRUE) {
        // Redirect to the profile page after successful update
        header("Location: profile.php");
        exit;
    } else {
        echo "Error updating profile: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect to the edit profile page if the form is not submitted
    header("Location: edit_profile.php");
    exit;
}
?>
