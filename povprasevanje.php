
<?php

$result="";
if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='digitalsgmarketing@gmail.com';
    $mail->Password='programersamo';

    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress(digitalsgmarketing@gmail.com);
    $mail->addReplyTo($_POST['email'], $_POST['name']);
    
    $mail->isHTML(true);
    $mail->Subject='Form Submission: '.$_POST['subject'];
    $mail->Body='<h1 align=center'>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>
        Message: '.$_POST['msg'].'</h1>;

    if(!$mail->send()){
        $result="Something went wrong. Please try again.";
    }
    else{
        $result="Thanks ".$_POST['name']." for contacting us. We'll get back to you soon!"; }
            }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <title> DigitalSGMarketing </title>
        <link rel="icon" href="logotip/S-digital10.png">
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>
        <header>
        </header>
        <nav>
            <div class="logo">
                <a href="domov"><img src="logotip/S-digital10.png"  height=140  align=left></a>
            </div>  
                <ul class="nav-links">
                    <li><a href="spletne_strani"> Spletne strani</a></li>
                    <li><a href="optimizacija"> Optimizacija </a></li>
                    <li><a href="cenik"> Cenik </a></li>
                    <li><a href="kontakt"> Kontakt </a></li>
                    <!--<li><a href="blog"> Blog </a></li>-->
                </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
        <div class="povprasevanje">
            <div class="povprasevanje1">
                <h2>Povpraševanje</h2>
                <br>
                <form action="form_process.php">
                    <label for="fname">Ime</label>
                    <input type="text" id="name" name="firstname" placeholder="Vaše ime..">

                    <label for="lname">Priimek</label>
                    <input type="text" id="lname" name="lastname" placeholder="Vaš priimek.."> 
                    
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Vaš e-poštni naslov..">
                    
                    <label for="lname">Podjetje</label>
                    <input type="text" id="email" name="lastname" placeholder="Vaše podjetje..">

                    <label for="country">Željena storitev</label>
                    <select id="country" name="country">
                        <option value="australia">Wordpress spletna stran</option>
                        <option value="canada">Statična spletna stran</option>
                    </select>

                    <label for="subject">Podrobnosti</label>
                    <textarea id="subject" name="subject" placeholder="Sporočilo.." style="height:200px"></textarea>

                    <input type="submit" name="submit" id="submit" value="Oddaj">
                </form>
            </div>
        </div>

    <footer>
        <span style="color:Black">Copyright -</span> DigitalSGmarketing
    </footer>  
    <script type="text/javascript" src="javascript.js"></script>          
    </body>
</html>
