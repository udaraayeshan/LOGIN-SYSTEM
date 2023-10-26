<?php
   if(isset($_POST["submit"])){
     $username = $_POST["uid"];
     $pwd = $_POST["pwd"];

     require_once 'dbh.inc.php';
     require_once 'function.inc.php';

     $emptyInput = $emptyInputSignup()

     if (emptyInputsLogin($username,$pwd) !==false){
          exit();
     }
        
     LoginUser($username,$pwd);

   }else{
     header('Location:../login.php');
     exit();                               //wenathanakata yawanna header function yoda gannawa
   }                                                       // ../ (back)   
                                   