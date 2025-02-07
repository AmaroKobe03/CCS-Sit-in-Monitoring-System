<?php
session_start();

// Database credentials
$servername = "localhost"; // e.g., localhost
$username = "root";
$password = "";
$dbname = "ccs_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  // Registration function
  if (isset($_POST['register'])) {
    $id = $_POST['idno'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $midname = $_POST['midname'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    $check_query = "SELECT * FROM users WHERE idno = '$id' OR UserName = '$username'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        echo "<div class='message error'>ID or Username already exists. Please choose a different one.</div>";
    } else {
        $sql = "INSERT INTO users (idno, LastName, FirstName, MiddleName, Course, YearLevel, Email, UserName, Password) 
                VALUES ('$id', '$lastname', '$firstname', '$midname', '$course', '$year', '$email', '$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='message success'>Registration successful. You can now login.</div>";

            echo "<meta http-equiv='refresh' content='2;url=login.php'>"; 
            exit(); 
        } else {
            echo "<div class='message error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    }
}

// Login function
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = md5($password);

    $sql = "SELECT * FROM users WHERE UserName = '$username' AND Password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['idno'];
        $_SESSION['username'] = $row['UserName'];

        header("Location: UserDash.php");
        exit();
    } else {
        echo "<div class='message error'>Invalid username or password. Please try again.</div>";
    }
}


$conn->close();


?>