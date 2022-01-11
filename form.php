<?php
	
 	$name = $email= $msg = '';

if(isset($_POST['submit']))
{
	

	if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['msg'])) 
	{
    	
    	header('location:index.php?error');
    }
    else
    	{ 
    			$name = $_POST["name"];
    			$email = $_POST["email"];
    			$msg = $_POST["msg"];
	    	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
		    {
		      
		    	header('location:index.php?name_error2');
		    }
		    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
   			{
      			 header('location:index.php?email_error2');
   			}
   			
		else
			{
				$to="amruta.sakura@yahoo.com,amruta.sakura@gmail.com";
				$subject="Enquiry for Japanese";
				$headers="From:".$email;
				if(mail($to,$subject,$msg,$headers))
				{
					header('location:index.php?success');
				}

			}
		}
}
else
{
	header('location:index.php');
}
?> 