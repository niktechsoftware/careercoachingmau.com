<?php
class mailController extends CI_Controller{
	function footerMail(){
		$name = $this->input->post("name");
		$mail = $this->input->post("email");
		$msg = $this->input->post("msg");
		
		$to = 'careermakergroup1@gmail.com';
		$from = "careermakergroup1@gmail.com";
		$subject = "New Message from Career Maker Group";
		$subject1 = "Career Maker Group";
		
		//begin of HTML message
		$message = "
			<html>
				<body>
					<table>
						<tr>
							<td>Name</td><td>$name</td>
						</tr>
						<tr>
							<td>Email Id</td><td>$mail</td>
						</tr>
						<tr>
							<td>Message</td><td>$msg</td>
						</tr>
					</table>
					<table>
						<tr>
							<td>This is Send By $mail Please contact him.</td>
						</tr>
					</table>
				</body>
			</html>
		";
		
		$message1 = "
		
			<html>
					<body>
					<table>
					<tr>
					<td>Thank You $name. We will contact you soon</td>
						</tr>
						<tr>
							<td>Thanks Regards</td>
						</tr>
						<tr>
							<td>Career Maker Group</td>
						</tr>
					</table>
				
				</body>
			</html>
		";
		
   //end of message
		   $headers  = "From: $from\r\n";
		   $headers .= "Content-type: text/html\r\n";
		
    //options to send to cc+bcc
		//$headers .= "Cc: [email]maa@p-i-s.cXom[/email]";
		//$headers .= "Bcc: [email]email@maaking.cXom[/email]";
		
		// now lets send the email.
		mail($to, $subject, $message, $headers);
		mail($mail, $subject1, $message1, $headers);
		
	}
}