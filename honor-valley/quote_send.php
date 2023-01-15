<?php 
$to = "environment.long@gmail.com";
$subject = "New Quote Information from website |   Honor Valley Fruits ";
$headers = "From: " . strip_tags($_POST['txt_fname'])." <".strip_tags($_POST['txt_email'])."> \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

ob_start();

?>
<?php 
if(empty($_POST['txt_fname']))
    { $mmm = "please write your  Name "; }
elseif(empty($_POST['txt_phone']))
    { $mmm = "please write your phone "; }
elseif(empty($_POST['txt_email']))
    { $mmm = "please write your email "; }

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
            <td><?=strip_tags($_POST['txt_fname'])?></td>
            <td><strong>Email:</strong> </td>
            <td><?=strip_tags($_POST['txt_email'])?></td>
            <td><strong>Phone:</strong> </td>
            <td><?=strip_tags($_POST['txt_phone'])?></td>
            <td><strong>Address:</strong> </td>
            <td><?=strip_tags($_POST['txt_address'])?></td>
            <td><strong>Required Fruits:</strong> </td>
            <td><?=strip_tags($_POST['txt_product'])?></td>
            <td><strong>Quantity:</strong> </td>
            <td><?=strip_tags($_POST['txt_quantity'])?></td>


        </tr>


        <tr style='background: #eee;'>
            <td colspan="4"><strong>MESSAGE</strong> </td>
        </tr>
        <tr>
            <td colspan="4">
                <?=strip_tags($_POST['txt_message'])?>
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