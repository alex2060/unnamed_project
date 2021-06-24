<?php
session_start();
include("config.php");
$name=$_GET["name"];
$check_key=hash('sha256', $_GET["key"]   );
$output="false";
$newkey=$_GET["Nkey"];

$sql = "SELECT * FROM `a_final_Ledgur_keys` WHERE `entery_name` LIKE '".$name."' AND `hash` LIKE '".$check_key."' ORDER BY `hash` DESC";

$out="false";

$result = $conn->query($sql);

if ($result->num_rows==1) {
    while($row = $result->fetch_assoc() ) {
        $ledgername=$row["ledgername"];
    }
        $rando        = base64_encode($bytes);
        $hashsolution = hash('sha256',$rando );
        $newname      = hash('sha256', $hashsolution );
    $sql="UPDATE `a_final_Ledgur_keys` SET `entery_name` = '".$name."' WHERE `solution` = '".$_GET["key"]."';";
    $result = $conn->query($sql);

    $sql="INSERT INTO `a_final_Ledgur_keys` (`entery_name`, `ledgername`, `hash`, `solution`, `email`,`time`) VALUES ('".$newname."', '".$ledgername."', '".$_GET["Nkey"]."', 'key', '".$email."', CURRENT_TIMESTAMP);";
    $result = $conn->query($sql);
    $out=$newname;
}
echo $out;


//http://alexhaussmann.com/adhaussmann/a_final/change_key.php?name=9f86e29db0b11d6609cff525cb56b590835c26d3e01ad3fb70bf925f93226487&key=269512356d5c9abd1a1da609ab2d9ff69ea38943c30b370bfc225243ee039afc&Nkey=wemadenew


?>