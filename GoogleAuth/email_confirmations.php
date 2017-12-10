<?php 
    require_once 'googleLib/GoogleAuthenticator.php';
	include('config.php');
	include('class/userClass.php');
    include('session.php');
    include('../Job_Portal_Web_App/emailService/email.php');

	$userClass = new userClass();

	if(empty($_SESSION['uid']))
	{
		header("Location: index.php");
    }
        $userClass = new userClass();
        $userDetails=$userClass->userDetails($_SESSION['uid']);

        $userEmailConfirmation= $userClass->userEmailConfirmation($session_uid);
        $jsonEncode = json_encode((array)$userEmailConfirmation);
        $data = json_decode($jsonEncode);
        if(empty($data->email_confirmation)){
            $userClass->userEmailConfirmationFirstLog($session_uid);
        }
        $tempkey =  $_GET['tempkey'];
        if($tempkey == md5($_SESSION['tempkey'])){
            $userClass->userEmailConfirmationTrue($session_uid);
            //header("Location: ../.php");
        }

        if(($data->email_confirmation) == 0){
            $ga = new GoogleAuthenticator();
            $secret = $ga->createSecret();
            $_SESSION['tempkey'] = $secret;
            echo  md5($secret);
            $email = new emailClass();
            $subject = 'Email confirmation for ' .$userDetails->name;
            $to = 'yshubhum@gmail.com;';
            $bodyHtml = 'Hello Mr.'.$userDetails->name.'<br/> <h5><a href="http://localhost/JP1/GoogleAuth/email_confirmations.php" style="color:blue">Please Click on me to confirm your email, Thank you</a></h5>';
            $body = 'http://localhost/JP1/GoogleAuth/email_confirmations.php?tempkey='.md5($secret);

            $email->sendEmail($subject,$to,$bodyHtml,$body);
        }
?>

<body>
        <h1>Please verify your email and confirm your email</h1>
</body>