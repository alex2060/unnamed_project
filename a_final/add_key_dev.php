

<?php
  #CREATE TABLE `a_final_Ledgur_keys` ( `time` TIMESTAMP NOT NULL ,`entery_name` TEXT NOT NULL , `ledgername` TEXT NOT NULL , `hash` TEXT NOT NULL , `solution` TEXT NOT NULL , `email` TEXT NOT NULL, UNIQUE (`entery_name`(248)) ) ENGINE = MyISAM; 

  include("config.php");


  include("stiper.php");

  $name     =the_striper($_GET["uname"]  );

  $password =the_striper($_GET["password"]);
  $email    =the_striper($_GET["email"]   );


$out="SELECT * FROM `a_final_Ledgur` WHERE `Ledgurename` LIKE '".$name."' and `Ledgurepassword` LIKE '".$password."';";

  if ($name!="") {
    $sql = "SELECT * FROM `a_final_Ledgur` WHERE `Ledgurename` LIKE '".$name."' and `Ledgurepassword` LIKE '".$password."';";
    $result = $conn->query($sql);
      

      if ($result->num_rows!=0) {

        
      
      #get email on file 
      while($row = $result->fetch_assoc() and $count==0) {

          $hoster_email=$row["email"];
    

      }



      $inhere="true";

      $bytes = openssl_random_pseudo_bytes(256);


      //making randome name
      $rando = base64_encode($bytes);
      $nameofkey= hash('sha256',$rando );




      $bytes = openssl_random_pseudo_bytes(256);


      //making randome name
      $rando        = base64_encode($bytes);
      $hashsolution = hash('sha256',$rando );

      $hash         = hash('sha256', $hashsolution );


      $sql="INSERT INTO `a_final_Ledgur_keys` (`entery_name`, `ledgername`, `hash`, `solution`, `email`,`time`) VALUES ('".$nameofkey."', '".$name."', '".$hash."', 'key', '".$email."', CURRENT_TIMESTAMP);";
      $result = $conn->query($sql);


     $sendurl = "http://alexhaussmann.com/adhaussmann/a_final/output.php?key=".$hashsolution."&name=".$nameofkey."&entery_name=".$name;

      $sentto=mail($email,"you got ".$name,  $sendurl );
      if ($sentto==1){
        if ($email=="") {
            $hashsolution="key and name was sent an email to ".$email;
        }


      }


      mail( $hoster_email, $name." was bough ", "by ".$email );
      
      mail( "alex.haussmann@gmail.com", $name." was bough ", "by ".$email );
     $mailed="true";
    }


    //
  }

#http://alexhaussmann.com/adhaussmann/a_final/add_key_dev.php?uname=my_go&password=now&email=alex.haussmann%40gmail.com
$out="";
if ($nameofkey=="") { 
  $out="fail";
}



?><?php echo $out." ".$nameofkey." ".$hashsolution; ?>