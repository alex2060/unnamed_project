<?php

if ($_GET["usertemplate_name"]!="") {

  $gets="&var0=".$_GET["var0"]."&var1=".$_GET["var1"]."&var3=".$_GET["var3"]."&var4=".$_GET["var4"]."&var5=".$_GET["var5"]."&var6=".$_GET["var6"]."&var7=".$_GET["var7"];
  $gets=$gets."&var8=".$_GET["var8"]."&var9=".$_GET["var9"]."&uname=".$_GET["uname"]."&hashword=".$_GET["hashword"]."&setion=".$_GET["setion"]."&setion2=".$_GET["setion2"];

  header("Location: make_newpage.php?usertemplate_name=".$_GET["usertemplate_name"].$gets);

}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Ledugre</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
        <label for="uname" class="text-white">For making new html apps  </label>
        </br>
        </br>

        <div class="form-group">
          <label for="uname" class="text-white">Usertemplate Name</label>
          <input type="text" class="form-control" id="uname" name="usertemplate_name" placeholder="usertemplate_name" value="" >
        </div>
        
        <div class="form-group">
          <label for="uname" class="text-white">User Name</label>
          <input type="text" class="form-control" id="uname" name="uname" placeholder="uname"               value="" >
        </div>

        <div class="form-group">
          <label for="password" class="text-white">Password</label>
          <input type="text" class="form-control" id="password" name="password" placeholder="password"      value="" >
        </div>



        <div class="form-group">
          <label for="password" class="text-white">Var1</label>
          <input type="text" class="form-control" id="password" name="var1" placeholder="var1"              value="" >
        </div>


        <div class="form-group">
          <label for="password" class="text-white">setion</label>
          <input type="text" class="form-control" id="password" name="setion"   placeholder="setion"        value="" >
        </div>

        <div class="form-group">
          <label for="password" class="text-white">setion2</label>
          <input type="text" class="form-control" id="password" name="setion2"  placeholder="setion2"       value="" >
        </div>


        <button type="submit" class="btn btn-primary" value="Submit">Submit</button>

      </form>
    </div>
  </div>

</br>
</br>
<button class="btn btn-info themainbutton" onclick="window.location.href=' add_template.php ';">make newpage            </button>

</br>
</br>
</br>


<label for="uname" class="text-white">User Funtionality</label>
</br>
          <button class="btn btn-info themainbutton" onclick="window.location.href='user_add.php   ';">Users            </button>
</br>
        <button class="btn btn-info themainbutton" onclick="window.location.href='  add_ledger.php ';">Ledgure          </button>
      </br>
        <button class="btn btn-info themainbutton" onclick="window.location.href='  add_post.php   ';">Post             </button>

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
</br>
<label for="uname" class="text-white">Other tools</label>
</br> 

<button class="btn btn-info themainbutton" onclick="window.location.href='3D_G.php';">3D graphics       </button>
</br>
<button class="btn btn-info themainbutton" onclick="window.location.href='inventory_managment.php';">Invetory managment</button>


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
<label for="uname" class="text-white">now in here <?php echo $inhere." email ".$hoster_email." mailed".$mailed." uname".$name."!" ; ?></label>
</body>
</html>









