
<?php
include_once("connection.php");
if (isset($_POST['submit'])) {
$mail = mysqli_real_escape_string($conn,$_POST['email'] );
$pass = mysqli_real_escape_string($conn,$_POST['password'] );

$query= "select * from information where email='$mail' and password ='$pass'";
$result= mysqli_query($conn, $query);
$test= mysqli_num_rows($result);

$query_mail= "select * from information where email='$mail'";
$result_mail= mysqli_query($conn, $query_mail);
$test_mail= mysqli_num_rows($result_mail);
if ($test>0) {
  header("Location: https://myvapez.de/collections/");
  exit;
  }if ($test_mail>0) {
      echo "<p class='mystyle'>E-Mail und Password stimmt nicht überein</p>" ;
   }else{
    echo "<p class='mystyle'>kein Konto mit diesem E-Mail</p>" ; "";
   }
}

mysqli_close($conn);

?>
<style>
 @media only screen and (max-width: 600px) {
    .mystyle{
    font-size:large;
    margin: 0%;
    position: absolute;
    color:red;
    top: 77%;
    left: 35%;
    transform: translate(-50%, 0%); 
     
    }}
 @media only screen and (min-width: 600px) {
    .mystyle{
    font-size:large;
    margin: 0%;
    position: absolute;
    color:red;
  
    top: 50%;
    left: 51%;
    transform: translate(-50%, 0%); 
    
      
     
    }}
 @media only screen and (min-width: 768px) {
    .mystyle{
    font-size:x-large;
    margin: 0%;
    position: absolute;
    color:red;
    
    top: 50%;
    left: 51%;
    transform: translate(-50%, 0%); 
     
    }}
@media only screen and (min-width: 992px) {
    .mystyle{
    font-size:x-large;
    margin: 0%;
    position: absolute;
    color:red;
    letter-spacing: 1px;
    top: 74%;
    left: 51%;
    transform: translate(-50%, 0%); 
    
        
    }


}


</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="logo.css">
    <title>Login</title>
</head>
<body>
    

    
    <header>
        
        <img src="foto/logo.png" alt="user">  
        
    </header>
   
    
         <section class="example">
            <div class="log">
            <h1 class="text" >Login</h1>
            <a class="erstellen" href="http://localhost/index/konto_erstellen.php">Registieren</a>
            </div>
            <form name="form" action="" method="post">
          <br> <br>
            <input id="email" class="email" name="email" onclick="hold()" type="text" require placeholder="E-Mail Adresse">
          <br><br><br>
            <input id="pass" class="pass" name="password" onclick="hold()" type="password"  placeholder="Enter Password" ><br><br>
            <label id="alert"></label><br><br><br>
        
            <button class="main-btn" type="submit" name="submit" onclick="Alert()">Anmelden</button>
             </form>
            </section>
   
              
    
    <script>
        function Alert() {
            var email= document.getElementById("email").value;
            var pass=document.getElementById("pass").value;
            
            if (email=="") {
                document.getElementById("alert").innerHTML="Bitte E-Mail Adresse eingeben";
                document.getElementById("alert").style.color="red";
                document.getElementById("alert").style.fontFamily='poppins', sans-serif;
            }
            if (pass=="") {
                document.getElementById("alert").innerHTML="Bitte  Password eingeben";
                document.getElementById("alert").style.color="red";
                document.getElementById("alert").style.fontFamily='poppins', sans-serif;
            }
        }
        function hold() {
            document.getElementById("alert").innerHTML="";         
        }
    </script>
       
    
</body>
</html>