<?php
session_start();
ob_start();

/* Post Control*/
if($_POST){
	

	
	/*Your Website Email*/
	$your_email = "9225913@gmail.com";
		
	/*Form Post*/
	$name			= $_POST['name'];
	$email 			= $_POST['email']; 
	$phone			= $_POST['phone']; 
	$comments  		= $_POST['comments']; 
	$photo 			= $_POST['photo1'];
	
		
		/*Check the free space*/
		if(!$name || !$email || !$phone || !$comments)
		{

		?>
        <div class="alert alert-danger heading">Заполните все поля</div>	
		
		<?php
		}else{
			

		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/plain; charset=utf-8";
		$headers[] = "From: $name <$email>"; // Sender name and email address
		$headers[] = "Reply-To: Recipient Name <$your_email>"; // Your site e-mail address
		$headers[] = "X-Mailer: PHP/".phpversion();
		
		mail($your_email, $subject, $comments,implode("\r\n", $headers));							 
						  
								  
		?>
        <div class="alert alert-success heading">Спасибо, мы скоро свяжемся с вами!</div>	
		
		<?php
			}

	
	}else{
		?>
        <div class="alert alert-danger heading">Ошибка</div>	
		
		<?php
		}

 ?>