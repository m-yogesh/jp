
<?php

class emailClass{



	
	public function sendEmail($subject,$to,$bodyHtml,$bodyText)
	{
		$url = 'https://api.elasticemail.com/v2/email/send';
		$apiKey = '4084713e-9826-4e24-8ed6-9b227c1052fd';
	//'careernoreply64@gmail.com;yshubhum@gmail.com'
		try{
			$post = array('from' => 'careernoreply64@gmail.com',
			'fromName' => 'careernoreply64@gmail.com',
			'apikey' => $apiKey,
			'subject' => $subject,
			'to' => $to ,
			'bodyHtml' => '<h1 style="textalign:center">'.$bodyHtml.'</h1>',
			'bodyText' => $bodyText,
			'isTransactional' => false);
			
			$ch = curl_init();
			curl_setopt_array($ch, array(
				CURLOPT_URL => $url,
				CURLOPT_POST => false,
				CURLOPT_POSTFIELDS => $post,
				CURLOPT_RETURNTRANSFER => false,
				CURLOPT_HEADER => false,
				CURLOPT_SSL_VERIFYPEER => false
			));
			
			$result=curl_exec ($ch);
			curl_close ($ch);
			
			echo $result;	
	}
	catch(Exception $ex){
		echo $ex->getMessage();
	}
  
	}

	

}
?>