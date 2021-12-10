
<head>    
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
  background-color: #eee;
  display: block;
  padding: 6px 15px;
  margin-top: 10px;
}
.box-container .box-img {
  margin-top: -35px;
  position: relative;
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
li {font-size:20px;}
#loading { display:none; color:green; font-size:20px; }
</style>

<body>





    
<div id=" posts"class="posts container">
<ol id="results" class="row" ></ol>
</div>
<span id="loading">Loading Please wait...</span>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
 <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
<script>
$(function() {
loadResults(0);
$('#posts').scroll(function() {
if($("#loading").css('display') == 'none') {
if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
var limitStart = $("#results li").length;
console.log(limitstart);
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
$("#results").append("<li class='col-sm-3'><div class='box-container'><div class='box-img'><img src='"+value.image+"' /><div class='box-price'>$12345</div></div><h4 class='box-title'>"+value.title+" </h4><div class='box-heading text-uppercase'>Category</div><div class='box-btns'><a class='btn btn-primary text-uppercase'>view</a></div><div class='box-id'>"+key.id+"</div></div> </li> ");});

$("#loading").hide();
}
});
};
});
</script>
</body>
</html>