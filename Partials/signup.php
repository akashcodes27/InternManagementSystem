<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/signup.css">
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



<div class="signup-section">
        <div class="signup-container">
          <div class="signup-box">
            <h1>Create an Account</h1>
            <form action="../Actions/signup.php" method="post" enctype="multipart/form-data">
             

             

                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" required><br>
              

                

                  
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required><br>
             
              

             


                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>
            
           

                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone"><br>
            

            


                <label for="college">College:</label>
                <input type="text" id="college" name="college" required><br>

                <label for="current_year">Current Year of Studying:</label>
                <input type="number" id="current_year" name="current_year" required><br>

         

            
                <label for="passing_year">Year of Passing Out:</label>
                <input type="number" id="passing_year" name="passing_year" required><br>

                <label for="course">Course:</label>
                <input type="text" id="course" name="course" required><br>


                <label for="marks">Marks:</label>
                <input type="number" step="0.01" id="marks" name="marks" required><br>

                <label for="resume">Resume:</label>
                <input type="file" id="resume" name="resume" required accept=".pdf,.doc,.docx"><br>


        

                <input type="submit" value="Signup">
            </form>
            <div class="signup-options">
              <span>Already have an account?</span>
              <a href="./login.php">Login</a>
            </div>
          </div>
        </div>

        <div class="signup-img">
          <img src="../assets/alpha-labs2.jpg" alt="">
        </div>

      </div>

<section class="footer">

Lorem ipsum dolor sit amet consectetur.


</section>

</body>

</html>