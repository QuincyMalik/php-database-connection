<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);
// if($conn)
// {
//     echo "chenye unataka iseme";
// }
// else
// {
//     echo "no tu";
// }
if(isset($_POST["submitButton"]))
{
    $fullname=$_POST["fullname"];
    $phonenumber=$_POST["phonenumber"];
    $email=$_POST["email"];
    $Gender=$_POST["Gender"];
    $Course=$_POST["Course"];

$dataconn=mysqli_query($conn,"INSERT INTO enrollment(fullname,phonenumber,email,Gender,Course)VALUES('$fullname','$phonenumber','$email','$Gender','$Course')");

if($dataconn)
{
    echo "Vipoa";
}
else
{
    echo "no";
}




}


?>


















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stlesheet" href="style.css">
</head>
<body>
    <?php include("navbar.php")?>   

     <main class="text-center p-5 mb-4 bg-light">
        <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <ul style="list-style-type:none ;">
            <li style="padding-right: 600px">
                    <span><i class="fa fa-calendar fa-2x"></i> <span>
                    <span>20th July 2022</span>
            </li>
            <li style="padding-right: 600px">
                    <span><i class="fa fa-map-marker fa-2x"></i> <span>
                    <span>Zalego Academy<br>Devan Plaza</span>
                    </li>
        </ul>
    </main>
    <div class="row">
    <div class="col-lg-12 text-center">
        <p>Looking for a place to kickstart your career in technology? <br> Whether you're a location,new in town or just cruising through we've got <br> loads of great tips and events for you </p>
</div>
    </div>
    <div class="sign-up-card">
        <h3 class="text-center p-5">Sign Up Today</h3>
    <form action="enroll.php" method="POST" class="container">
            
            <div class="row">
                <div class="col-lg-6">
                    <label for="full name" class="form-label"><b>Full name:</b></label>
                    <input type="text"  name="fullname"class="form-control"  placeholder="Enter your full name">
                </div>

                <div class="col-lg-6">
                    <label for="phone" class="form-label"><b>Phone number:</b></label>
                    <input type="tel"name="phonenumber" class="form-control"  placeholder="+2547...">
                </div>
          </div>
        
        
          <div class="row">
            <div class="col-lg-6">
                <label for="E-mail" class="form-label"><b>Email address:</b></label>
                <input type="email" name="email" class="form-control"  placeholder="Enter your email">
            </div>
            
                <div class="col-lg-6">
                    <label for="gender" class="form-label"><b>What is your gender</b></label>
                    <select class="form-select" name="Gender"  aria-label="Default select example">
                        <option selected>--select your gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <p class="mt-5">in order to complete your registration to the bootcamp you are required to select one course you will be <br> undertaking.Please NOTE that this will be your learning track during thr 2-weeks immersion
                </p>
                <div class="mb-5 mt-5 col-lg-6">
                    <label for="course" class="form-label"><b>What's your preffered course?</b></label>
                    <select name="Course"class="form-select"   aria-label="Default select example" name="course">
                        <option value="disable selected">...select your course--</option>
                        <option value="Web design">Web design</option>
                        <option value="Web development">Web development</option>
                        <option value="Android">Android</option>
                        <option value="Game development">Game development</option>
                        <option value="Graphic design">Graphic design</option>
                        <option value="Cyber security">Cyber security</option>
                
                </select>
            </div>
     </form>
         <p>You agree by prviding your information you understand all our data privacy and protection policy <br> outlined in our Terms & conditions and the Privacy Policy statements</p>
         <div class="form check mb-5 mt-5">
            <input class="form-check-label" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault mt-1">
                Agree terms and conditions
            </label>
         </div>
         <div class="row">
            <div class="col-lg-3">
                <button class="btn btn-primary mb-7" name="submitButton">Submit application</button>
            </div>
         </div>
            <div class="col-lg-12 mb-3" style="text-align: center;">
                <p style="color:gray">Subscribe to get information,latest news about<br>Zalego Academy</p>
            </div>
            <div class="col-lg-6" style="text-align: center; margin-bottom: 3px;">
                            <input type="email" id="email" class="form-control" placeholder="Enter e-mail address">
                            <button class="btn btn-primary">Subscribe</button>
             </div>
            <hr>
            <footer class="align-items: center;">
                &copy;company 2022
            </footer>
         </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>