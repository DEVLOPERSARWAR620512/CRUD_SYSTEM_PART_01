<?php
session_start();

if(isset($_POST['submit'])){
  $errors = []; // errors massage
  $request = $_POST; // requesting form value
$title = $request['title'];
$detail = $request['detail'];
$author= $request['author'];

if(empty($title)){
  $msg = "please write title name";
  $errors['title'] = $msg;
}elseif(strlen($title) > 10){
  $msg = "10 character limited title";
  $errors['title'] = $msg;
}
if(empty($detail)){
  $msg = "please write detail name";
  $errors['detail'] = $msg;
}elseif(strlen($detail) > 10){
  $msg = "10 character limited detail";
  $errors['detail'] = $msg;
}
if(empty($author)){
  $msg = "please write detail name";
  $errors['author'] = $msg;
}elseif(strlen($author) > 10){
  $msg = "10 character limited detail";
  $errors['author'] = $msg;
}
if(count($errors) > 0){
   $_SESSION['errors'] = $errors;
   $_SESSION['old_data'] = $request;
   header("location: ../index.php");
}
}else{
  echo "please click the submit button";
}


?>