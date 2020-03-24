 <?php 
    //fonction pour lister les types de comptes
    function sendmail($host,$username,$password,$from,$fromname,$subject,$email,$body)
    {
          //you have to upload class files "class.phpmailer.php" and "class.smtp.php" 
          $mail = new PHPMailer(); 
          $mail->IsSMTP();
          $mail->SMTPAuth = true; 
          $mail->Host = $host; 
          $mail->Username = $username;
          $mail->Password = $password;  
          $mail->From = $from;
          $mail->FromName = $fromname; 
          $mail->AddAddress($email);
          $mail->Subject = $subject;
          $mail->Body = $body;
          $mail->WordWrap = 50;
          $mail->IsHTML(true);
          $str1= "gmail.com";
          $str2=strtolower("info@kwenpam.com");
            If(strstr($str2,$str1))  {
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                if(!$mail->Send()) {
                    return 4;
                    // echo "Mailer Error: " . $mail->ErrorInfo;
                    // echo "<br><br> * Please double check the user name and password to confirm that both of them are correct. <br><br>";
                    // echo "* If you are the first time to use gmail smtp to send email, please refer to this link :http://www.smarterasp.net/support/kb/a1546/send-email-from-gmail-with-smtp-authentication-but-got-5_5_1-authentication-required-error.aspx?KBSearchID=137388";
                }else {
                    // echo "Message has been sent";
                    return 1;
                }
            }else{
                $mail->Port = 25;
                if(!$mail->Send()) {
                    return 4;
                    // echo "Mailer Error: " . $mail->ErrorInfo;
                    // echo "<br><BR>* Please double check the user name and password to confirm that both of them are correct. <br>";
                } else {
                   return 1;
                    // echo "Message has been sent";
                }
            }  
    } 
