<?php

class TokenGenerate{
	public function __construct(){

    }
    public function getToken(){
        if(!isset($_SESSION['user_token'])){
            $_SESSION['user_token'] = md5(uniqid());

            return $_SESSION['user_token'];
        }
        }
        
        public function checkToken($token){
            if($token != $_SESSION['user_token']){
                echo"<script>alert('Token does not match');</script>";
                return false;
            }else{
                return true;
            }
        }
        
        public function getTokenField(){
        return '<input type="hidden" name="token" value="'.$_SESSION['user_token'].'"/>';
        }
        
        public function destroyToken(){
        unset($_SESSION['user_token']);
        }

    }
?>