




<!-- contact form with php -->

<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "2490rahuljadhav@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>




<!-- contact form with java script -->


<script>


  function Mail(){
      let name = document.getElementById("Name").value;
      let email = document.getElementById("Email").value;
      let message = document.getElementById("Message").value;

      Email.send({
  SecureToken : "39e88465-071a-4f11-bc17-5d6f12c60aa7",
  To : '2490rahuljadhav@gmail.com',
  From : "2490rahuljadhav@gmail.com",
  Subject : "This is the subject",
  Body : "User Name:" + name + "<br/> User E-mail address :" + email + "<br/> User message:" +message
}).then(
    message => alert(message = " thank you for contact me"));
  }
</script>

