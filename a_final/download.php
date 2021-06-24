
<?php 

#http://alexhaussmann.com/adhaussmann/a_final/download.php?cat_name=cat_1

$data = $row['field1'].",".$row['field2'].",".$row['field3'].",".$row['field4']."\n";




$cat=$_GET["cat_name"];

if ($cat=="") {
	$cat="%%";
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
    min-width: 190px;

  }

  .themainsize{
    border: 5px solid gray;

  }

  .main{
    font-size: 30px;

  }



  

  </style>


</head>



<body style="background-color: #24222a;">

    


    </div>


  <div class="container" id="main_page">


      <div id="load more" >


  </div>

</body >





<script type="text/javascript">
            main_url="http://alexhaussmann.com/adhaussmann/a_final/";
            seach_terms="";
            main_page_name="main page";
            max=0;
            curantnumber=0;
            catname=<?php echo "\"".$cat."\"";?>;








            function placestuff(A,B){
                      var add_thing=A;

                            add_things=add_thing.split("(???)")
                           


                            var uname=      add_things[0];

                            var text=       add_things[1];

                            var body=       add_things[2];

                            var tital=      add_things[3];

                            var time=       add_things[4];

                            var photo=      add_things[5];

                            var ifram=      add_things[6];

                            var cat1=       add_things[7];

                            var cat2=       add_things[8];
                            //basic

                            

                            output="";

                            output+="</br><div class=\" d-flex justify-content-center main\"><label for=\"uname\" class=\"text-white\">"+main_page_name+"</label></div>";


                            output=output+"<button class=\"btn btn-info themainbutton\" onclick=\"next(); \">Next    </button>";

                            output=output+"<button class=\"btn btn-info themainbutton\" onclick=\"prev();\">Previous</button>";



                            output=output+"</br></br><div class=\" d-flex justify-content-left themainsize\"><label for=\"uname\" class=\"text-white\">"+uname+" "+time+"</label></div>";


                            output=output+"<div class=\" d-flex justify-content-left themainsize\"><label for=\"uname\" class=\"text-white\">"+tital+"</label></div>";




                            if (photo!=""){
                              //output=output+"<div class=\" d-flex justify-content-center themainsize\"><img src=\"https://www.websoftconsultancy.com/wp-content/uploads/2020/09/web-img.png\" alt=\"\" width=\"100%\" height=\"315\"> </div>";
                              output=output+"<div class=\" d-flex justify-content-center themainsize\"><iframe width=\"100%\" height=\"315\" src=\""+photo+"\" allowtransparency=\"true\" scrolling=\"no\" align=\"right\"frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></div>";
                            }


                            //iframe

                            if (ifram!=""){

                              output=output+"<div class=\" d-flex justify-content-center themainsize\"><iframe width=\"100%\" height=\"315\" src=\""+ifram+"\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></div>";

                            }


                            output=output+"<div class=\" d-flex justify-content-left themainsize\"><label for=\"uname\" class=\"text-white\"></br>"+text+"</label></div>" ;


                            output=output+ "<div class=\" d-flex justify-content-left themainsize\"><label for=\"uname\" class=\"text-white\"></br>"+curantnumber+"</label></div>" ;

                            //output=output+"<div class=\" d-flex justify-content-left themainsize\"><label for=\"uname\" class=\"text-white\">"+seach_terms+"  value "+B+"   "+A+"</label></div>";

                            //output=output+"<label for=\"uname\" class=\"text-white\">"+seach_terms+"</label>";
                            document.getElementById("main_page").innerHTML=output;
                  }

                  function loadmore(key){

                      post_responce(main_url+"get_post_dev.php?key="+key+"&type=all",placestuff,key);
                    }

                    function post_responce(path,func,varible){

                        console.log(path);
                        fetch(path).then(
                            ( response) => {
                                return response.text();
                            })
                            .then((html) => {
                                func(html.trim(),path)
                            });

                    }

                    function seach_for_stuff(A,B){

                        seach_terms=A.split("?");
                        console.log(seach_terms[0]);
                        console.log(seach_terms[1]);
                        loadmore(seach_terms[0]);
                        max=seach_terms.length;
                    
                    }

                    function next(){
                        console.log("we in nextss");
                          if (curantnumber!=max-2){

                              console.log("in if");
                              curantnumber=curantnumber+1;
                              loadmore(seach_terms[curantnumber]);

                          }
                        }

                    function prev(){
                            console.log("we in prev");
                            if (curantnumber!=0){
                              curantnumber=curantnumber-1;
                              loadmore(seach_terms[curantnumber]);
                            }
                    }

                    function start() {
                        console.log("we went2");

                        post_responce("http://alexhaussmann.com/adhaussmann/a_final/get_post_dev.php?type=basic&cat1="+catname,seach_for_stuff,"varible");
                    }

                    console.log("we went");

                    window.onload = start();
                    






</script>




