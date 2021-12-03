<!DOCTYPE html>
<html lang="en">

<head>
<?php
session_start();
require 'connection.php';

// IF USER LOGGED IN

if(isset($_SESSION['u_id'])){
  header('Location: index.php');
}

?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS File Link -->
    <link rel="stylesheet" href="style.css" />
    <!-- bootstrap links -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <!-- font-awesome link -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />
    <title>The Placement Cell</title>

</head>


<body>
    <!-- header section starts here -->
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/R.png" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="position: absolute;left: 38%;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- Banner Section  -->
    <section class="banner">
        <div class="container">
            <div class="centered"><span class="stretch">The Placement Cell</span></div>
            <img src="images/banner.png" class="img-fluid">
        </div>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1400 250">
            <path fill="white" fill-opacity="1"
                d="M0,128L48,138.7C96,149,192,171,288,186.7C384,203,480,213,576,208C672,203,768,181,864,154.7C960,128,1056,96,1152,106.7C1248,117,1344,171,1392,197.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="changeable">

    
    <div class="sub-container ">
        <div class="row" style="margin-right: 0px;">
            <h3 class="ms-5 col-md-6"><span>Enter Your Enrollment Number to continue</span></h3>

            <div class="container-fluid mt-4 m-0 col-md-6">
                <div class="row d-flex justify-content-center">
                    <div class="d-flex justify-content-center px-5">
                        <div class="search">
                            <form name="myForm" onsubmit="return validateForm()">
                                <input type="text" class="search-input" placeholder="Search..." name="enum">
                                <input type="submit" class="search-icon">
                                <i class="fa fas-search"></i> </input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="images/girl.png" style="margin-top: -28rem;padding-left: 8rem;"></img>
            </div>



            <div class="col-md-3">
                <img src="images/boy.png" style="margin-top: -28rem;margin-left: -15rem;"></img>
            </div>
        </div>
    </div>
    </section>


    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
 <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script>
            
        function validateForm() {
            
            const z= document.forms["myForm"]["enum"].value;
            
            if (z == "") {
                alert("enrollment number must be filled out");
                return false;
            }
            else { buttonclickhandler(); return false; }
        }
        function buttonclickhandler() {
            
            const z= document.forms["myForm"]["enum"].value;
           
            
            console.log(z);
            
            $.ajax({
        url: "matchenum.php",
        data: {enum: z},
        type: "POST",
        success:function(data){
            $("#changeable").html(data);
            
        },
        error:function (data){
          console.log(data);
        }
        });
        
        return false;
        }
        
        function validateFormRegister() {
            
            let x = document.forms["regForm"]["email"].value;
            let y = document.forms["regForm"]["password"].value;
            if (x == ""|| y=="") {
                alert("All fields must be filled out");
                return false;
            }
            else { buttonclickhandlers(); return false; }
        }
        function buttonclickhandlers() {
            

            let x = document.forms["regForm"]["email"].value;
            let y = document.forms["regForm"]["password"].value;
            let z = document.forms["regForm"]["enum"].value;
            console.log(z);
            
            $.ajax({
        url: "insert_user.php",
        data: {email: x,password:y,enum:z},
        type: "POST",
        success:function(data){
           alert(data);
        },
        error:function (data){
          console.log(data);
        }
        });
        
        return false;
        }
        function validateFormLogin() {
            
            let x = document.forms["logForm"]["email"].value;
            let y = document.forms["logForm"]["password"].value;
            if (x == ""|| y=="") {
                alert("All fields must be filled out");
                return false;
            }
            else { buttonclickhandel(); return false; }
        }
        function buttonclickhandel() {
            

            let x = document.forms["logForm"]["email"].value;
            let y = document.forms["logForm"]["password"].value;
            
            
            
            $.ajax({
        url: "login.php",
        data: {email: x,password:y},
        type: "POST",
        success:function(data){
           alert(data);
        },
        error:function (data){
          console.log(data);
        }
        });
        
        return false;
        }
    </script>
</body>

</html>