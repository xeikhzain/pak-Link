<?php

if(isset($_POST['contactBtn'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "webmaster@starpacificshipping.com";
    $subject = "Contact Form Details";
    $txt = "First Name: $fname \n Last Name: $lname \n Phone: $phone \n Email: $email \n Message: $message";
    $headers = "From: $email";

    if(mail($to,$subject,$txt,$headers)){
        echo "
        <script>
        alert(Email sent successfully);
        window.location.href = 'contact.php';
        </script>
        ";
    }
    else{
        echo "
        <script>
        alert(Something went wrong);
        window.location.href = 'contact.php';
        </script>
        ";
    }
}




if(isset($_POST['getQuoteBtn'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "webmaster@starpacificshipping.com";
    $subject = "Contact Form Details";
    $txt = "First Name: $fname \n Last Name: $lname \n Phone: $phone \n Email: $email \n Message: $message";
    $headers = "From: $email";

    if(mail($to,$subject,$txt,$headers)){
        echo "
        <script>
        alert(Email sent successfully);
        window.location.href = 'index.php';
        </script>
        ";
    }
    else{
        echo "
        <script>
        alert(Something went wrong);
        window.location.href = 'index.php';
        </script>
        ";
    }
}
// if(isset($_POST['captchaBtn'])){

//     $email = $_POST['email'];

//     $recaptcha = $_POST['g-recaptcha-response']; 

//     $secret_key = '6LccklkpAAAAAGKiIkDeTzeLXwiUoX9bZfRswJKo'; 

//     $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
//           . $secret_key . '&response=' . $recaptcha;

//     $response = file_get_contents($url); 
  
//     $response = json_decode($response); 
  
//     if ($response->success == true) { 

//         $to = "webmaster@starpacificshipping.com";
//         $subject = "Newsletter Form";
//         $txt = "Email: $email";
//         $headers = "From: $email";
//         mail($to,$subject,$txt,$headers);

//         echo "
//         <script>
//         alert('Submitted Successfully')
//         window.location.href='index.php';
//         </script>"; 
//     } else { 
//         echo "
//         <script>
//         alert('Something went wrong')
//         window.location.href = 'index.php';
//         </script>"; 
//     } 
// }

if(isset($_POST['captchaBtn'])){
    $email = $_POST['email'];
    // Validate email format
    if (!preg_match("/^[a-zA-Z0-9_]+@[a-zA-Z0-9_]+\.[a-zA-Z]{2,}$/", $email)) {
        echo "
        <script>
        alert('Invalid email format. Please enter a valid email address.');
        window.location.href = 'index.php';
        </script>";
        exit; // Stop further processing
    }

    $recaptcha = $_POST['g-recaptcha-response']; 
    $secret_key = 'YOUR_RECAPTCHA_SECRET_KEY_HERE'; 
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $recaptcha;
    $response = file_get_contents($url); 
    $response = json_decode($response); 
    if ($response->success == true) { 
        $to = "webmaster@starpacificshipping.com";
        $subject = "Newsletter Form";
        $txt = "Email: $email";
        $headers = "From: $email";
        mail($to,$subject,$txt,$headers);
        echo "
        <script>
        alert('Submitted Successfully');
        window.location.href='index.php';
        </script>"; 
    } else { 
        echo "
        <script>
        alert('Something went wrong');
        window.location.href = 'index.php';
        </script>"; 
    } 
}
?>