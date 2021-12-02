<?php
require 'connection.php';
$enum = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['enum'])));
$query = mysqli_query($conn, "SELECT * FROM `users` WHERE enum = '$enum'");
if(mysqli_num_rows($query) > 0){

    $row = mysqli_fetch_assoc($query);
    $change="<div class='sub-container '>
    <div class='row' style='margin-right: 0px;'>
        <h3 class='ms-5 col-md-6'><span>Login to continue</span></h3>

        <div class='container-fluid mt-4 m-0 col-md-6'>
            <div class='row d-flex justify-content-center'>
                <div class='d-flex justify-content-center px-5'>
                    <div class='search'>
                        <form name='myForm' onsubmit='return validateFormLogin()'>
                            <input type='text' class='search-input' placeholder='Email' name='email'>
                            <input type='text' class='search-input' placeholder='password' name='password'>
                            <input type='submit' class='search-icon'>
                            <i class='fa fas-search'></i> </input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-3'>
            <img src='images/girl.png' style='margin-top: -28rem;padding-left: 8rem;'></img>
        </div>



        <div class='col-md-3'>
            <img src='images/boy.png' style='margin-top: -28rem;margin-left: -15rem;'></img>
        </div>
    </div>
</div>";
echo $change;
}else{
    $change="<div class='sub-container '>
    <div class='row' style='margin-right: 0px;'>
        <h3 class='ms-5 col-md-6'><span>Register to continue</span></h3>

        <div class='container-fluid mt-4 m-0 col-md-6'>
            <div class='row d-flex justify-content-center'>
                <div class='d-flex justify-content-center px-5'>
                    <div class='search'>
                        <form name='regForm' onsubmit='return validateFormRegister()'>
                            <input type='text' class='search-input' placeholder='Email' name='email'>
                            <input type='password' class='search-input' placeholder='password' name='password'>
                            <input type='hidden' class='search-input' placeholder='enum' name='enum' value=".$enum.">
                            <input type='submit' class='search-icon'>
                            <i class='fa fas-search'></i> </input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-3'>
            <img src='images/girl.png' style='margin-top: -28rem;padding-left: 8rem;'></img>
        </div>



        <div class='col-md-3'>
            <img src='images/boy.png' style='margin-top: -28rem;margin-left: -15rem;'></img>
        </div>
    </div>
</div>";
echo $change;
}
?>