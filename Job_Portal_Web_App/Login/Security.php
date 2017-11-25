<?php
class Security{
    public function __construct(){
       
    }

    public function whitelistRegularExpression($value){
        if(!preg_match(("#^[a-zA-Z0-9]+$#", $username)){
            echo("Regular expression did not match");
            return true;
        }else{
            echo("Regular expression did match");
            return false;
        }
    }
    
    /*
    Regular expression: ^\w+$
    
    ^ asserts position at start of a line
    \w+ matches any word character (equal to [a-zA-Z0-9_])
    + Quantifier — Matches between one and unlimited times, as many times as possible
    $ asserts position at the end of a line
    */
    
    public function validateURL($url){
        //Validates value as URL
        return filter_var($url, FILTER_VALIDATE_URL);
    }
    
    public function validateIpAddress($ip){
        //Validates value as IP address
        return filter_var($ip, FILTER_VALIDATE_IP);
    }
    
    public function validateEmail($email){
        //The FILTER_VALIDATE_EMAIL filter validates an e-mail address.
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    public function sanitizationEmail($emailValue){
        //Remove all characters except letters, digits and !#$%&'*+-=?^_`{|}~@.[].
    return filter_var($emailValue, FILTER_SANITIZE_EMAIL);
    }
    
    public function sanitizationNumber($numberValue){
        //The FILTER_SANITIZE_NUMBER_INT filter removes all illegal characters from a number.
    return filter_var($numberValue,FILTER_SANITIZE_NUMBER_INT);
    }
    
    public function sanitizationInput($inputText){
        /*
        The FILTER_SANITIZE_SPECIAL_CHARS filter HTML-escapes special characters.
        This filter is used to escape "<>& and characters with ASCII value below 32
        */
    return filter_var($inputText, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    public function sanitizationHtmlTags($htmlValues){
        //The FILTER_SANITIZE_STRING filter removes tags and remove or encode special characters from a string.
        return filter_var($htmlValues, FILTER_SANITIZE_STRING);
        }
}

?>