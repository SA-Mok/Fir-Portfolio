<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    $u_name = $_POST["name"]; //set PHP variables like this so we can use them anywhere in code below
    $u_email = $_POST["email"];
    $u_text = $_POST["message"];
    
    //print output text
    print "Hello " . $u_name . "!, we have received your message and email ". $u_email;
    print "</br>We will contact you very soon!";
    
    
    $email = "XXXXXXXX@naver.com";
    $title = "폼테스트 해보는 중";
    $message = "Hello " . $u_name . "!, 이메일 주소는 : ". $u_email . " </br>\r\n ". $u_text;
    $mailheader = "From:magsal66@naver.com\r\nContent-type: text/html;charet=EUC_KR";
    mail($email, $title, $message, $mailheader);
    
}
?>

