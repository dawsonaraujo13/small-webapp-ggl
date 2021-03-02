<?php

    if(isset($_POST['submit'])){
        $first_name = $_POST['first'];
        $last_name = $_POST['last'];
        $visitor_email = $_POST['email'];
        $phone_num = $_POST['phone'];
        $instagram = $_POST['instagram'];
        $service = $_POST['service'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $pref_contact = $_POST['contact'];
        $comment = $_POST_['comment'];
    
        $email_from = $visitor_email;
        $email_subject = 'New Booking';
        $email_body = "Name: $first_name $last_name \n".
            "Email: $visitor_email \n".
            "Phone: $phone_num \n".
            "Instagram: $instagram \n". 
            "Preferred Contact: $pref_contact".
            "Service Type: $service \n". 
            "Date Requested: $date \n". 
            "Time: $time \n". 
            "Message: $comment";     
            
        $to = "genevieveslashes@gmail.com";
    
        $headers = "From: $email_from \r\nReply-To: $visitor_email \r\n"
    
        mail($to,$email_subject,$email_body,$headers);
    
        header("Location: index.html");
    }


?>