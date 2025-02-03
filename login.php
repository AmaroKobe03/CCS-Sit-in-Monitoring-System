<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>CCS sit-in</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>
<body>
    <h1 style="color: white;">
        <img src="./images/ccs-logo.png" alt="CCS Image" style="height: 50px; vertical-align: middle; margin-right: 10px;">
        Welcome to CCS Sit-in
    </h1>
    <div class="container">

            <form action="register.php" id="logInForm" method="POST" >
            <!-- Login Form -->
                <div class="logForm">

                    <div class="logImage">
                        <img src="./images/model2.jpg" alt="CCS Image" style="height: 40vh; width: 400px; vertical-align: middle; margin-right: 10px;">
                    </div>

                    <div class="logfill">
                        <h2>Login</h2>
                        
                        <form method="POST" >
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" required>

                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>

                            <button type="submit" name="login" >Login</button>
                        </form>
                        <p>Don't have an account? <a style="color: #CF9D01; font-weight: 600; text-decoration: none; cursor:pointer;" id="registerBtn">Register here.</a></p>
                    </div>
                </div>
            </form>
        

            <!-- Registration Form -->

            <form action="register.php" method="POST" id="signUpForm" style="display: none;">
                <div class="regform">
                    <div class="regImage">
                        <img src="./images/mod no bg.png" alt="CCS Image" style="height: 45vh; width: 450px; vertical-align: middle; margin-right: 5px; margin-top: 35px;">
                    </div>

                    <div class="regfillform">
                        <h2>Register</h2>
                        <div class="form-row">
                            <div>
                                <label for="id">IDNO:</label>
                                <input type="text" id="id" name="id" required>
                            </div>
                            <div>
                                <label for="lastname">Last Name:</label>
                                <input type="text" name="lastname" id="lastname" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div>
                                <label for="firstname">First Name:</label>
                                <input type="text" name="firstname" id="firstname" required>
                            </div>
                            <div>   
                                <label for="midname">Middle Name:</label>
                                <input type="text" name="midname" id="midname">
                            </div>
                        </div>

                        <div class="form-row">
                            <div>
                                <label for="course">Course:</label>
                                <input type="text" name="course" id="course" required>
                            </div>
                            <div>
                                <label for="year">Year Level:</label>
                                <input type="number" name="year" id="yeaar" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div>
                                <label for="email">Email Address:</label>
                                <input type="email" name="email" id="email" required>
                            </div>

                            <div>
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username" required>
                            </div>
                        </div>
                        
                        <div>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <button type="submit" name="register" id="regBtn">Register</button>
                        <p>Already have an account? <a id="logInFormBtn" style="color: #CF9D01; font-weight:600; text-decoration: none; cursor: pointer;">Login here.</a></p>

                    </div>
                </div>
            </form>

    </div>
    <script src="script.js"></script>
</body>
</html>
