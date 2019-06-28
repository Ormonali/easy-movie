<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $create = array_filter($_POST);
    if(count($create)!=count($_POST)){
        goback();
    }elseif(strlen($create['login'])>40){
        goback();
    }
    $name = $create['login'];
    $email = $create['email'];
    $password = password_hash($create['password'],PASSWORD_DEFAULT);
    $sql = "INSERT INTO `users`(`login`,`password`,`email`) VALUES ('$name','$password','$email')";
    if(mysqli_query(connect(),$sql)){
        $_SESSION['user'] = $name;
        goIndex();
    }else{
        goback();
    }    
}
if($_SERVER['REQUEST_METHOD']=='GET'){
    $read = array_filter($_GET);
    $email = $read['email'];
    var_dump($read);
    if(count($read)!=count($_GET)){
        goback();
    }
    $query = mysqli_query(connect(),"SELECT `password`,`login` FROM `users` WHERE `email`='$email'");
    $query = mysqli_fetch_assoc($query);
    if($query == NULL){
        goback('Wrong email');
    }
   if(password_verify($read['password'],$query['password'])){
        $_SESSION['user'] = $query['login'];
        goIndex();
    }else{
        goback('Wrong password');
    }

}
function goIndex(){
    header("location:index.php");
}
function goback($msg){
    (empty($msg)) ? header("location:{$_SERVER['HTTP_REFERER']}"):header("location:index.php?$msg");
}
function connect(){
    $connect = mysqli_connect('127.0.0.1','LOGIN','PASSWORD','easyMovie');
    return $connect;
}
