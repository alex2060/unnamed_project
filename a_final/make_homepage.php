

<?php
#CREATE TABLE `a_final_Ledgur_keys` ( `time` TIMESTAMP NOT NULL ,`entery_name` TEXT NOT NULL , `ledgername` TEXT NOT NULL , `hash` TEXT NOT NULL , `solution` TEXT NOT NULL , `email` TEXT NOT NULL, UNIQUE (`entery_name`(248)) ) ENGINE = MyISAM; 

if ($_GET["group_name"]!="") {

  header("Location: download.php?cat_name=".$_GET["group_name"]);

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
          <label for="uname" class="text-white">group_name</label>
          <input type="text" class="form-control" id="uname" name="group_name" placeholder="Ledgure name" value=<?php echo "\"".$_GET["uname"]."\""; ?> >
        </div>
        <button type="submit" class="btn btn-primary" value="Submit">Submit</button>


      </form>

    </div>



  </div>
</br>
</br>
<button class="btn btn-info themainbutton" onclick="window.location.href='  newpage_maker.php  ';">make newpage            </button>

</br>
</br>
<button class="btn btn-info themainbutton" onclick="window.location.href='  add_template.php  ';">add template            </button>

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







