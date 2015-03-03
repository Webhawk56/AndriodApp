<?php
/* Set e-mail recipient */
$myemail = 'keith.jones@azubu.com';

/* Check all form inputs using check_input function */
$email = check_input($_POST['inputEmail'], "Your E-mail Address");


/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("Invalid e-mail address");
}
/* Let's prepare the message for the e-mail */

$subject = "Please add my email for the Azubu News Letter!";

$message = "

Someone has signed up for the Azubu Newsletter:


Email: $email
Subject: $subject

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: http://www.authsci.com/azubu/keith/careers/nwslttrconfirm/confirmation-page.html');
exit();

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

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}
?>