<?php 
$fname = $_POST["name"];
$email= $_POST["email"]; 
$message= $_POST["comment"];

$ToEmail = 'ahmhama61@gmail.com'; 
$EmailSubject = 'Site contact form'; 

$headers = 'From :' . $fname . '\r\n';

else{
mail($ToEmail,$EmailSubject,$message,$headers);
echo "<script type='text/javascript'>
    window.history.go(-1);
</script>";
}
?>