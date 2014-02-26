<?
//SET THE COLLECTED FORM DATA FROM THE POST VARIABLES ARRAY
$cname=$_POST['name'];
$cemail=$_POST['email'];//CUSTOMER EMAIL FROM FORM
$ccomments=$_POST['message'];

//INITIAL VARIABLES
$adminemail = 'catherine@catherinejonesdesigns.com.au';//CLIENT EMAIL ADDRESS

$sitename = "Catherine Jones Portfolio";//CLIENT COMPANY NAME
$clientWebsite = "www.catherinejonesdesigns.com.au";//CLIENT WEBSITE

$subjectCustomer='Your enquiry to Catherine Jones Designs';//CUSTOMER SUBJECT LINE
$subject='Enquiry from website '. $cname; //CLIENT SUBJECT LINE
				
//create a boundary for the emails. 
$boundary = uniqid('np');

//_________________ CUSTOMER HEADERS AND MESSAGE ___________________

//customer headers - Set MIME VERSION, FROM header, TO header and CONTENT TYPE
$headersCustomer = "MIME-Version: 1.0\r\n";
$headersCustomer .= "From: ". $sitename ." \r\n";
$headersCustomer .= "To: ".$cemail."\r\n";
$headersCustomer .= "Content-Type: multipart/alternative;boundary=" . $boundary . "\r\n";//DEFINE EMAIL AS MULTIPART EMAIL WITH PLAIN AND HTML CONTENT AND APPLY UNIQUE ID

//CUSTOMER EMAIL CONTENT BODY
$messageCustomer = "This is a MIME encoded message."; //HIDDEN EMAIL NOTICE
$messageCustomer .= "\r\n\r\n--" . $boundary . "\r\n";//APPLY UNIQUE ID

//PLAIN TEXT BODY CONTENT
$messageCustomer .= "Content-type: text/plain;charset=utf-8\r\n\r\n";//DEFINE THE PLAIN TEXT BODY CONTENT TYPE
$messageCustomer .= 'Hi '. $cname . ', \n\n Thank you for your enquiry we will get back to you as soon as possible. ';
$messageCustomer .= "\r\n\r\n--" . $boundary . "\r\n";//APPLY UNIQUE ID

//HTML BODY
$messageCustomer .= "Content-type: text/html;charset=utf-8\r\n\r\n";//DEFINE THE HTML TEXT BODY CONTENT TYPE
$messageCustomer .= '<html>
	<head>
		<link href="http://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Your message to Catherine Jones Designs</title>
		<style type="text/css">
			  .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}

			  @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
			  body[yahoo] .hide {display: none!important;}
			  body[yahoo] .buttonwrapper {background-color: transparent!important;}
			  body[yahoo] .button {padding: 0px!important;}
			  body[yahoo] .button a {background-color: #e05443; padding: 15px 15px 13px!important;}
			  body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
			  }

			  /*@media only screen and (min-device-width: 601px) {
				.content {width: 600px !important;}
				.col425 {width: 425px!important;}
				.col380 {width: 380px!important;}
				}*/

		</style>
		
	</head>
    <body yahoo bgcolor="#f6f8f1" style=" margin: 0; padding: 0; min-width: 100%!important;">
		<table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0">
		<tr>
		  <td>
			<!--[if (gte mso 9)|(IE)]>
			  <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
				<tr>
				  <td>
			<![endif]-->     
			<table bgcolor="#ffffff" align="center" cellpadding="0" cellspacing="0" border="0" style="width: 100%; max-width: 600px;">
			  <tr>
				<td bgcolor="#7bcffe" style="padding: 40px 30px 20px 30px;">
				  <table width="70" align="left" border="0" cellpadding="0" cellspacing="0">  
					<tr>
					  <td height="70" style="padding: 0 20px 20px 0;">
						<img src="http://www.catherinejonesdesigns.com.au/images/email.png" width="100" height="79" border="0" alt="letter" style="height: auto; border-radius:10px;"/>
					  </td>
					</tr>
				  </table>
				  <!--[if (gte mso 9)|(IE)]>
					<table width="425" align="left" cellpadding="0" cellspacing="0" border="0">
					  <tr>
						<td>
				  <![endif]-->
				  <table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 425px;">  
					<tr>
					  <td height="70">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td style="padding: 0 0 0 3px; font-size: 15px; color: #ffffff; font-family: "Abril Fatface", cursive; letter-spacing: 10px;">
							  Thank you
							</td>
						  </tr>
						  <tr>
							<td style="padding: 5px 0 0 0; font-size: 33px; line-height: 38px; font-weight: bold; font-family: "Abril Fatface", cursive;">
							   for your enquiry
							</td>
						  </tr>
						</table>
					  </td>
					</tr>
				  </table>
				  <!--[if (gte mso 9)|(IE)]>
						</td>
					  </tr>
				  </table>
				  <![endif]-->
				</td>
			  </tr>
			  <tr>
				<td style="border-bottom: 1px solid #f2eeed; padding: 30px 30px 30px 30px;}">
				  <table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
					  <td style="padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold; font-family: "Open Sans", sans-serif;">
						A copy of you enquiry has been included below
					  </td>
					</tr>
					<tr>
					  <td style="font-size: 16px; line-height: 22px;">
						
					  </td>
					</tr>
				  </table>
				</td>
			  </tr>
			  <tr>
				<td style="border-bottom: 1px solid #f2eeed; padding: 30px 30px 30px 30px;}">
				  <table width="115" align="left" border="0" cellpadding="0" cellspacing="0">  
					<tr>
					  <td height="115" style="padding: 0 20px 20px 0;">
					  </td>
					</tr>
				  </table>
				  <!--[if (gte mso 9)|(IE)]>
					<table width="380" align="left" cellpadding="0" cellspacing="0" border="0">
					  <tr>
						<td>
				  <![endif]-->
				  <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 380px;">  
					<tr>
					  <td>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td style="color: #153643; font-family: "Open Sans", sans-serif;">
							  '. $ccomments .'
							</td>
						  </tr>
						  <tr>
							<td style="padding: 20px 0 0 0;">
							  
							</td>
						  </tr>
						</table>
					  </td>
					</tr>
				  </table>
				  <!--[if (gte mso 9)|(IE)]>
						</td>
					  </tr>
				  </table>
				  <![endif]-->
				</td>
			  </tr>
			  <tr>
				<td  style="border-bottom: 1px solid #f2eeed; padding:30px;">
				 
				</td>
			  </tr>
			  <tr>
				<td style="color:#153643; font-family: "Open Sans", sans-serif; padding:30px;">
				 I appreciate you getting in contact and I will be in touch shortly in regards to your enquiry. In the meantime please feel free to visit me on Github, LinkedIn or Behance and check out what I have been up to.<br />
				Thanks again Catherine
				</td>
			  </tr>
			  <tr>
				<td bgcolor="#7bcffe" style="padding: 20px 30px 15px 30px;">
				  <table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
					  <td align="center" style=" font-family: "Open Sans", sans-serif; font-size: 14px; color: #ffffff;">
						<a style="color: #ffffff; text-decoration: underline;" href="http://www.catherinejonesdesigns.com.au">Catherine Jones Designs</a> ABN:78 802 654 339 <br/><strong>E-mail:</strong> catherine@catherinejonesdesigns.com.au <strong>Phone:</strong>0404843789
					  </td>
					</tr>
					<tr>
					  <td align="center" style="padding: 20px 0 0 0;">
						<table border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td width="37" style="text-align: center; padding: 0 10px 0 10px;">
							  <a href="https://github.com/catherine-jones"><img style="height: auto; border-radius:10px;" src="http://www.catherinejonesdesigns.com.au/images/Github.jpg" alt="Octocat"/></a>
							</td>
							<td width="37" style="text-align: center; padding: 0 10px 0 10px;">
							  <a href="http://www.linkedin.com/in/catherineelizabethjones1"><img style="height: auto; border-radius:10px;" src="http://www.catherinejonesdesigns.com.au/images/LinkedIn.jpg" alt="LinkedIn Logo"/></a>
							</td>
							<td width="37" style="text-align: center; padding: 0 10px 0 10px;">
							  <a href="http://www.behance.net/catherine_jones_web"><img style="height: auto; border-radius:10px;" src="http://www.catherinejonesdesigns.com.au/images/Behance.jpg" alt="Behance Logo"/></a>
							</td>
						  </tr>
						</table>
					  </td>
					</tr>
				  </table>
				</td>
			  </tr>
			</table>
			<!--[if (gte mso 9)|(IE)]>
				  </td>
				</tr>
			</table>
			<![endif]-->
			</td>
		  </tr>
		</table>
</body>
</html>';
$messageCustomer .= "\r\n\r\n--" . $boundary . "--";//APPLY UNIQUE ID
//_________________ END CUSTOMER HEADERS AND MESSAGE ___________________

//_________________ CLIENT HEADERS AND MESSAGE ___________________				
				
//headers - specify your from email address and name here
//and specify the boundary for the email
$headers = "MIME-Version: 1.0\r\n";
$headers .= "From: ". $cname ." \r\n";
$headers .= "To: ".$adminemail."\r\n";
$headers .= "Content-Type: multipart/alternative;boundary=" . $boundary . "\r\n";

//here is the content body
$message = "This is a MIME encoded message.";
$message .= "\r\n\r\n--" . $boundary . "\r\n";
$message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";

//Plain text body
$message .= 'A customer has sent an enquiry . ' . "\n\n" . ' Details - ' . "\n\n" . ' Name: '. $cname.'"\n\n" ';
$message .= "\r\n\r\n--" . $boundary . "\r\n";
$message .= "Content-type: text/html;charset=utf-8\r\n\r\n";

//Html body
$message .= '<html>
  <head/>
  <body style="font-family:Helvetica, sans-serif;font-size: 16px">
  <h1>You have received the following enquiry from your Portfolio site</h1>
	<p>'. $cname. '</P>
	<p>'. $cemail.'</p>
	<p>'. $ccomments .'</p>
</body>
</html>
';
$message .= "\r\n\r\n--" . $boundary . "--";
//_________________ END CLIENT HEADERS AND MESSAGE ___________________

//invoke the PHP mail function
$sentOKCustomer=mail('', $subjectCustomer, $messageCustomer, $headersCustomer);
$sentOKClient=mail('', $subject, $message, $headers);
if($sentOKClient){header('Location: thanks.htm');}else{echo 'Sorry we were unable to send mail at the moment. Please try again later.';}

?>