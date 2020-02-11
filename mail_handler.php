<?php


	if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $msg=$_POST['msg'];



        $to='kenecholoroda@gmail.com'; // Receiver Email ID, Replace with your email ID
        $subject='Form Submission';
        $message="Name :".$name."\n"."Phone :".$phone."\n"."E-mail :".$email."\n"."Wrote the following :"."\n\n".$msg;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            //echo "<h3>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h3>";
             //$success = "Sent Successfully! Thanks $name , We will contact you shortly!";
             $_SESSION['success']= "Sent Successfully! Thanks $name , We will contact you shortly!";

        }
        else{
            //$success = "Something went wrong!";
            //echo "Something went wrong!";
            $_SESSION['success']= "Something went wrong!";
        }
    }
