



  <link rel="stylesheet" href="style.css" />
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

   <!-- font-awesome link -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />
    <title>The Placement Cell</title>


</head>
<style>
 
 .box-container {
  text-align: center;
  width: 100%;
  border: 1px solid #999;
  margin: 25px 0;
  margin-top: 50px;
  padding: 6px 15px 0;
}
.box-container .box-id {
  background-color: dodgerblue;
  display: block;
  padding: 6px 15px;
  margin-top: 10px;
}
.box-container .box-img {
  margin-top: -35px;
  position: relative;
}
.box-container .box-img img{
    width: 230px;
    height:150px;
}
.box-container .box-price {
  display: inline-block;
  background-color: #3498db;
  border-radius: 0px;
  padding: 4px 10px;
  margin: 15px auto 0;
  color: #fff;
  position: absolute;
  top: 0;
  left: 0;
}

.box-container .box-title {
  font-size: 14px;
  text-transform: uppercase;
  font-weight: bold;
}
.box-container .box-heading {
  margin: 10px 0;
}
.box-container .btn {
  font-size: 13px;
}
.box-container img {
  display: block;
  max-width: 100%;
}
.posts { height: 100%; overflow: auto; width: 100%; }
.loading { color: green; }
li {font-size:20px; list-style:none!important;}
#loading { display:none; color:green; font-size:20px; }
</style>

<body>
       <!-- header section starts here -->
       <section class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/R.png" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="visibility:hidden;">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="position: absolute;left:25%;">
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
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile">My profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
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
            <img src="img/banner.png" class="img-fluid">
        </div>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1400 250">
            <path fill="white" fill-opacity="1"
                d="M0,128L48,138.7C96,149,192,171,288,186.7C384,203,480,213,576,208C672,203,768,181,864,154.7C960,128,1056,96,1152,106.7C1248,117,1344,171,1392,197.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="notice" style="padding:00px 25px; ">
    <div style="background-color:red; color:white; padding:30px 25px; border-radius:25px;">
    <h3>Notice: </h3>

    <i id="nc" style="color:white;position: relative;top: -71px;float: right; cursor:pointer;"><button style="background:none; border:none;" >close</button></i>

</div>
</section>
<section style="text-align:center; padding:20px 20px; " >
<div style="border-radius:25px; padding:40px 20px;  background-image:linear-gradient(to right, #0066b2, #5072a7); color:white;">

<h1>Recommended Opportunities</h1>
<div class="btn-group btn-group-lg " style="transform:scale(1.3); margin:20px 0;">
  <button type="button" class="btn  btn-default">Internship</button>
  <button type="button" class="btn btn-default">Jobs</button>
  <button type="button" class="btn btn-default">Others</button>
</div>

<div class="posts container">
<ol id="results"></ol>




</div>
<span id="loading">Loading Please wait...</span>

</div>   

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $('#nc').click(function(){$('#notice').css('display','none') });
$(function() {
loadResults(0);
$('.posts').scroll(function() {
if($("#loading").css('display') == 'none') {
if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
var limitStart = $("#results li").length;
loadResults(limitStart);
}
}
});function loadResults(limitStart) {
$("#loading").show();
$.ajax({
url: "vac.php",
type: "post",
dataType: "json",
data: {
limitStart: limitStart
},
success: function(data) {
$.each(data, function(key, value) {
$("#results").append("<li class='col-sm-3'><div class='box-container'><div class='box-img'><img src='"+value.image+"' /><div class='box-price'>"+value.package+"</div></div><h4 class='box-title'>"+value.title+" </h4><div class='box-heading text-uppercase'>"+value.description+"</div><div class='box-btns'><a class='btn btn-primary text-uppercase'>Apply</a></div><div class='box-id'>"+value.role+"</div></div> </li> ");
});
$("#loading").hide();
}
});
};
});
</script>
