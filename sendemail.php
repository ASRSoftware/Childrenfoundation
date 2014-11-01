<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];
// include db file
include('db.php');

$date = date("Y-m-d H:i:s");

$sql = "INSERT INTO user_detail ".
       "(name,email, message,phone,date) ".
       "VALUES ".
       "('$name','$email','$msg','$phone','$date')";

$retval = mysql_query( $sql, $conn );
$value = 'welcome';
echo json_encode($value);exit;
/*
require_once('PHPMailerAutoload.php'); 
   
$mail = new PHPMailer(); // create a new object

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.childrenfoundation.co.in"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.childrenfoundation.co.in"; // sets the SMTP server
$mail->Port       = 26;                    // set the SMTP port for the GMAIL server
$mail->Username   = "santosh.ghodke@childrenfoundation"; // SMTP account username
$mail->Password   = "123456";        // SMTP account password

$mail->SetFrom('santosh.ghodke@childrenfoundation.co.in', 'First Last');

$mail->AddReplyTo("santosh.ghodke@childrenfoundation.co.in","First Last");
 
$mail->Subject    = "PHPMailer Test Subject via smtp, basic with authentication";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
 
$mail->MsgHTML('dsfdsgfds dfggt dfdstgf');

$address = "santoshghodke05@gmail.com";
$mail->AddAddress($address, "santosh ghodke");
 

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
 exit();
} else {
echo "Message sent!";
 exit();
}

    $to = "santoshghodke05@gmail.com";
   $subject = "This is subject";
   $message = "This is simple text message.";
   $header = "From:santoshghodke1991@gmail.com \r\n";
   $retval = mail($to,$subject,$message,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
    exit();
   }
   else
   {
      echo "Message could not be sent...";
	   exit();
   }

$from = 'santoshghodke05@gmail.com';
$to = 'santoshghodke1991@gmail.com;
$subject = 'Hi!';
$body = "Hi,\n\nHow are you?";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'santoshghodke05@gmail.com',
        'password' => 'sandipsantosh'
    ));

$mail = $smtp->send($to, $headers, $body);

*/
 exit();
?>