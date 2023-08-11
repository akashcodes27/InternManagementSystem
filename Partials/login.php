<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <title>Navbar Example</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="../assets/alpha_labs_logo.png" alt="" width="100px">
        </div>
        <ul class="nav-links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="internships.php">Internships</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="login.php">Login</a></li>
            <li class="certificate-btn"><a href="#">Certificate Validator</a></li>
        </ul>
    </nav>
    <hr class="custom-hr">



<section class="login-body">



    <div class="login-section">

       
        <div class="logn-container">
            <div class="logn-box">
                <h1>Welcome Back!</h1>

                <form class="logn-form" action="../Actions/login.php" method="POST">
                    <input type="text" name="username" placeholder="E-mail Id" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>

                <div class="login-options">
                    <a href="./forgot-password.php">Forgot Password?</a>
                    <span class="logn-divider"></span>
                    <a href="./signup.php">Create New Account</a>
                </div>
            </div>
        </div>

        <div class="signup-img">
          <img src="../assets/alpha-labs2.png" alt="">
        </div>
        
    </div>



</section>
    
<section class="footer">

    Lorem ipsum dolor sit amet consectetur.


</section>
</body>

</html>