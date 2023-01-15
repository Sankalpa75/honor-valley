<?php 

$to = "environment.long@gmail.com";

$subject = "New Contact Information from website";

$headers = "From: " . strip_tags($_POST['name'])." <".strip_tags($_POST['email'])."> \r\n";

$headers .= "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



ob_start();



?>

<?php 

if(empty($_POST['name']))

{ $mmm = "please write your name "; }

elseif(empty($_POST['email']))

{ $mmm = "please write your email "; }

elseif(empty($_POST['phone']))

{ $mmm = "please write your Phone number"; }

else

{ ?>





<html>

<body>



    <table rules="all" style="border:1px solid  #666; font-size:16px;" cellpadding="10" width="100%">

        <tr style='background: #eee;'>

            <td colspan="4"><strong>PERSONAL INFORMATION</strong> </td>

        </tr>

        <tr>

            <td><strong>Name:</strong> </td>

            <td><?=strip_tags($_POST['name'])?></td>

            <td><strong>Email:</strong> </td>

            <td><?=strip_tags($_POST['email'])?></td>

        </tr>

        <tr>

            <td><strong>Phone:</strong> </td>

            <td><?=strip_tags($_POST['phone'])?></td>

            <td><strong>Subject:</strong> </td>

            <td><?=strip_tags($_POST['subject'])?></td>

        </tr>

        <tr style='background: #eee;'>

            <td colspan="4"><strong>MESSAGE</strong> </td>

        </tr>

        <tr>

            <td colspan="4">

                <?=strip_tags($_POST['message'])?>

            </td>

        </tr>



    </table>





</body>

</html>





<?php 



$message = ob_get_clean();

if(!@mail($to, $subject, $message, $headers))

 	$mmm = "Sorry! sending Message failed. Try again.";

 

 else 

 	$mmm = "Message sent successfully, We Will Contact You Soon, Thank you";

	

?>



<?php }

 ?>

<div class="container">

    <h1 style="text-align:center; color:green; padding:50px;">

        <?php

echo "$mmm"; 

?>

    </h1>

</div>
<!--container-->