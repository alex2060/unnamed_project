

<?php
  #CREATE TABLE `a_final_Ledgur_keys` ( `time` TIMESTAMP NOT NULL ,`entery_name` TEXT NOT NULL , `ledgername` TEXT NOT NULL , `hash` TEXT NOT NULL , `solution` TEXT NOT NULL , `email` TEXT NOT NULL, UNIQUE (`entery_name`(248)) ) ENGINE = MyISAM; 

  include("config.php");


  include("stiper.php");

  $name     =the_striper($_GET["uname"]  );

  $password =the_striper($_GET["password"]);
  $email    =the_striper($_GET["email"]   );


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



  }

?>






<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Ledugre</title>
  <!-- bootstrap link start -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- bootstrap link end -->
  <style>
  .themainbutton{
    min-width: 220px;

  }
  

  </style>
</head>

<body style="background-color: #24222a;">

  <div class="container ">



    <div class=" d-flex justify-content-center">

      <form action="" class="mt-3">



        </br>
              <label for="uname" class="text-white">For bulk and secure Ledgure use see Ledgure Dev </label>
        </br>
        <label for="uname" class="text-white">name of key:<?php echo $nameofkey; ?> </label>
        </br>
        <label for="uname" class="text-white">key: <?php echo $hashsolution; ?> </label>
        </br>
        </br>


        <div class="form-group">
          <label for="uname" class="text-white">Ledgure name</label>
          <input type="text" class="form-control" id="uname" name="uname" placeholder="Ledgure name" value=<?php echo "\"".$_GET["uname"]."\""; ?> >
        </div>


        <div class="form-group">
          <label for="password" class="text-white">Ledgure Password</label>
          <input type="text" class="form-control" id="password" name="password" placeholder="Ledgure password" value=<?php echo "\"".$_GET["password"]."\""; ?> >
        </div>


        <div class="form-group">
              <label for="uname" class="text-white">Email</label>
              <input type="text" class="form-control" id="hash" name="email" placeholder="Email" value= <?php echo "\"".$_GET["email"]."\""; ?> >
        </div>

        <button type="submit" class="btn btn-primary" value="Submit">Submit</button>



      </form>

    </div>
  </div>
</br>
</br>
</br>


<label for="uname" class="text-white">User Funtionality</label>
</br>
          <button class="btn btn-info themainbutton" onclick="window.location.href='user_add.php   ';">Users           </button>
</br>
        <button class="btn btn-info themainbutton" onclick="window.location.href='  add_ledger.php ';">Ledgure       </button>
      </br>
        <button class="btn btn-info themainbutton" onclick="window.location.href='  add_post.php   ';">Post            </button>

        </br>
        </br>
        </br>





<label for="uname" class="text-white">Dev tools</label>
</br>
        <button class="btn btn-info themainbutton" onclick="window.location.href='dev_user.php';">User Dev    </button>
    </br>
        <button class="btn btn-info themainbutton" onclick="window.location.href='dev_ledger.php';">Ledgure Dev </button>
      </br>
        <button class="btn btn-info themainbutton" onclick="window.location.href='dev_post.php';">Posts Dev      </button>
      </br>
        <button class="btn btn-info themainbutton" onclick="window.location.href='template_dev.php';">Template Dev      </button>
    
    


</br>
</br>
</br>

<label for="uname" class="text-white">Contact</label>
</br>

<label for="uname" class="text-white">Alex Haussmann</label>
</br>
<label for="uname" class="text-white">alex.haussmann@gmail.com</label>
</br>
<label for="uname" class="text-white">303-335-7320</label>
</br>
</body>
</html>










