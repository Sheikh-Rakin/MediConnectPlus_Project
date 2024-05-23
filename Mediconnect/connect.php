<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $nid = $_POST['nid'];
    $password = $_POST['password'];


    $conn = new mysqli('localhost', 'root', '', 'medi');


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check email already exists in the database
    $email_query = "SELECT * FROM user WHERE email = '$email'";
    $email_result = $conn->query($email_query);
    
    if ($email_result->num_rows > 0) {

        echo "Email already registered!";
    } else {
        // Email doesn't exist
        $sql = "INSERT INTO user (fullname, email, phone, dob, gender, nid, password) 
                VALUES ('$fullname', '$email', '$phone', '$dob', '$gender', '$nid', '$password')";

        if ($conn->query($sql) === TRUE) {
            session_start();
            $_SESSION['signup_success'] = "Sign up successful! Please log in to continue.";
            header('Location: login.php');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


    $conn->close();
}
?>
