<?php

function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) ||empty($pwdRepeat) || ){
        result = true ;
    }else{
        result = false; 
    }
     return $result;
}

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/")){
        result = true ;
    }else{
        result = false; 
    }
     return $result;
}

function invalidEmail($email){
    $result;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        result = true ;
    }else{
        result = false; 
    }
     return $result;
}

function pwdMatch($pwd){
    $result;
    if($pwd == $pwdRepeat){
        result = true ;
    }else{
        result = false; 
    }
     return $result;
}

function uidExists($conn, $username ,$email) {
    
}



?>