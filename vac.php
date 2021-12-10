<?php
require_once('connection.php');
$limitStart = $_POST['limitStart'];
$limitCount = 8; // Set how much data you have to fetch on each request
if(isset($limitStart ) || !empty($limitStart)) {
$query = "SELECT id, title, image,description,package,role FROM vacancies ORDER BY id limit $limitStart, $limitCount";
$result = mysqli_query($conn, $query);
$res = array();
while($resultSet = mysqli_fetch_assoc($result)) {
$res[] = array('id'=>$resultSet['id'],'title'=>$resultSet['title'],'image'=>$resultSet['image'],'description'=>$resultSet['description'],'package'=>$resultSet['package'],'role'=>$resultSet['role']);
}
echo json_encode($res);
}
?>