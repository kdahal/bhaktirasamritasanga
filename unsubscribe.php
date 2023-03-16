<?php
/* Set e-mail recipient */
$myemail  = "kumar.dahal@outlook.com";
$subject = 'Unsubscribe Form';


/* Check all form inputs using check_input function */
$not_relevant = check_input($_POST['not_relevant'], "Enter your name");
$too_frequent = check_input($_POST['too_frequent'], "Write a subject");
$remember_signing = check_input($_POST['remember_signing']);
$another_reason = check_input($_POST['another_reason']);
$email_one = check_input($_POST['email_one']);
$message_two = check_input($_POST['message_two'], "Write your comments");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email_one))
{
    show_error("E-mail address not valid");
}


/* Let's prepare the message for the e-mail */
$message = "Hello!

Your have lost the customer:

Q1: $not_relevant
Q2: $too_frequent
Q3: $remember_signing
Q4: $another_reason
Q5: $email_one
Comments: $message_two

End of message
";




/* Send the message using mail() function */
if( mail($myemail, $subject, $message) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}



/* Prepare autoresponder subject */
$respond_subject = "Unsubscribe From Visu Craft";

/* Prepare autoresponder message */
$respond_message = "Hello! from Visu Craft

Your email $email_one has been successfully unsubscribe from our emailing list.  
In future, if you wish to receive more information regarding Visu Craft Products and promotion, please opt in through email subscription button or if you have any questions, do not hesitate to contact us at info@visucraft.com or visit us @ www.visucraft.com 

Wish you the best of luck.
Yours sincerely, 
Visu Craft Team
www.visucraft.com
";

/* Send the message using mail() function */
mail($email_one, $respond_subject, $respond_message);



/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>