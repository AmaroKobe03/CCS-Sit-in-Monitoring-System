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
    $id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $midname = $_POST['midname'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password=md5($password);

    // Check if username or ID already exists (for better data integrity)
    $check_query = "SELECT * FROM users WHERE IDNO = '$id' OR UserName = '$username'"; 
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        echo "<script>alert('ID or Username already exists. Please choose a different one.'); window.location.href = 'login.php';</script>"; 
    } else {

      $sql = "INSERT INTO users (IDNO, LastName, FirstName, MiddleName, Course, YearLevel, Email, UserName, Password) 
              VALUES ('$id', '$lastname', '$firstname', '$midname', '$course', '$year', '$email', '$username', '$password')"; 

      if ($conn->query($sql) === TRUE) {
          echo "<script>alert('Registration successful. You can now login.'); window.location.href = 'login.php';</script>"; 
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
}


    // Login function
    if (isset($_POST['login'])) {
        echo"wasap";
        $username = $_POST['username'];
        $password = $_POST['password']; 

        $sql = "SELECT * FROM users WHERE UserName = '$username' AND Password = '$password'";

        header("Location: UserDash.php"); 
        exit();
    }

    $conn->close();
?>