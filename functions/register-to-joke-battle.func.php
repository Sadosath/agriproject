<?php

    function email_taken($email){
        global $db;
        $e = array('email' => $email);
        $sql = 'SELECT * FROM user WHERE email = :email';
        $req = $db->prepare($sql);
        $req->execute($e);
        $free = $req->rowCount($sql);

        return $free;
    }
    function name_taken($name){
        global $db;
        $e = array('name' => $name);
        $sql = 'SELECT * FROM user WHERE name = :name';
        $req = $db->prepare($sql);
        $req->execute($e);
        $free = $req->rowCount($sql);

        return $free;
    }

    function register($name, $email, $password, $paypal){
        global $db;
        $confirme_code = rand () ;
        $r = array(
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'confirme_code'=> $confirme_code,
            'paypal' => $paypal
        );
        $sql = "INSERT INTO user(name,email,password,confirme_code, paypal) VALUES(:name,:email,:password, :confirme_code, :paypal)";
        $req = $db->prepare($sql);
        $req->execute($r);
        ini_set( 'display_errors', 1);
         $from = "dumbestjoke@dumbestjoke.com";
        $message = 
        "  Hello $name
           Confirm Your Email 
           Click On This Link To Activate Your Account.
          
           dumbestjoke.com/confirme.php?username=$name&code=$confirme_code

           You must be wondering if dumbestjoke is really going to pay you..

 Yes we are going to pay you.
 Dumbestjoke Earns money through ads and will pay you 75% of the revenue you generate by making and sharing jokes on It site

          Keep sharing jokes from dumbestjoke with your friends to earn extra money.
          Thank You For Joining dumbestjoke.
        ";
        $headers = "From: dumbestjoke@dumbestjoke.com" . "\r\n" .
"CC: dumbestjoke";
        mail ($email,"dumbestjoke Confirm Email", $message, $headers);
        echo "<br><h4 >Registration Complete! Please Confirm Your Email.</h4><br>
                <h4 >If You Did Not Recieve A Mail,Please Check In Your Spam Folder. Sometimes, Emails Are Considered Spam </h4>";
    }