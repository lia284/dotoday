<?php

$media = mysqli_real_escape_string($conn, $_POST['media']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$des = mysqli_real_escape_string($conn, $_POST['des']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$section = mysqli_real_escape_string($conn, $_POST['section']);
$creator = '1';



$medianame = $_POST['media'];
$mediatmpname = $_POST['media']['tmp_name'];

$folder = 'images/';


$result = mysqli_query($conn,"INSERT INTO `content` (img, title, description, creator_id, category_id, section_id) VALUES ('".$media."','".$title."','".$des."','".$creator."','".$category."','".$section."')");

echo $result;
if($result) {
    header("Location:index.php?content=forum&upload=success");
}
else {
  //header("Location:index.php?content=add&error=1");
}
