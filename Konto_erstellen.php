<?php
 include_once("connection.php");



 if (isset($_POST['submit'])) {
     
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mail = mysqli_real_escape_string($conn,$_POST['email'] );
    $pass = mysqli_real_escape_string($conn,$_POST['password'] );

    $query_mail= "select * from information where email='$mail'";
    $result= mysqli_query($conn, $query_mail);
    $test= mysqli_num_rows($result);

    
     if ($test==0 && $mail != 0) { 

     $sql = "INSERT INTO  information (firstname,nachname, email, password)
         VALUES ('$firstname', '$lastname' ,'$mail ','$pass')";

     $rs = mysqli_query($conn, $sql);

        if ($rs) {
            echo "<center class='mystyle1'>Successfuly.Jetzt können Sie Anmelden<br></center>";
      
        }else {
           echo "error:".$sql."<br>".mysqli_error($conn);}
         }else {
            echo "<center><p class='mystyle2'>E-Mail bereit existiert!.</p></center>";
        }
    
    }

mysqli_close($conn);

?>
<style>
    @media only screen and (max-width: 400px) {
        .mystyle1{
        margin: 0;
        color:green;
        transform: translate(0px,740px);
        font-size: large;
        
    }
    .mystyle2{
        margin: 0;
        color:red;
        transform: translate(0px,740px);
        font-size: large;
    }}
   
     @media only screen and (min-width: 400px) {
        .mystyle1{
        margin: 0;
        color:green;
        transform: translate(0px,780px);
        font-size: large;
        
    }
    .mystyle2{
        margin: 0;
        color:red;
        transform: translate(0px,780px);
        font-size: large;
        
        
    }}
    @media only screen and (min-width: 600px) {
        .mystyle1{
        margin: 0;
        color:green;
        transform: translate(0px,700px);
        font-size: large;
        
        
    }
    .mystyle2{
        margin: 0;
        color:red;
        transform: translate(0px,600px);
        font-size: large;
        
        
    }}
    @media only screen and (min-width: 768px) {
        .mystyle1{
        margin: 0;
        color:green;
        transform: translate(0px,750px);
        font-size: large;
      
        
    }
    .mystyle2{
        margin: 0;
        color:red;
        transform: translate(0px,750px);
        font-size: large;
        
        
    }}
    @media only screen and (min-width: 820px) {
    .mystyle1{
        margin: 0;
        color:green;
        transform: translate(0px,800px);
        font-size: large;
        
    }
    .mystyle2{
        margin: 0;
        color:red;
        transform: translate(0px,800px);
        font-size: large;
        
        
    }}
    @media only screen and (min-width: 992px) {
    .mystyle1{
        margin: 0;
        color:green;
        transform: translate(0px,730px);
        font-size: large;
       
        
    }
    .mystyle2{
        margin: 0;
        color:red;
        transform: translate(0px,730px);
        font-size: large;
        
        
    }}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konto erstellen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="konto.css">
    
</head>
<body>
    <center><img name="foto" class="foto" src="foto/logo.png" alt="user"> </center>
    <div class="signup-box"> 
        <div class="one">
        <h1 >Sign Up</h1><h3 >Herzlich Welcomen !</h3>
            
        </div>
        

  
  
    <form class="container" action="" method="POST">
    
        <div class="name">
        <label class="geschlecht">Geschlecht : </label>              
        <label for="man" class="woman"> weiblich</label><input id="man" type="radio" name="gender">
        <label for="woman" class="man">mänlich</label><input id="woman" type="radio" name="gender">    
        </div>

        <label for="firstlabel" class="vorname">VorName:</label>
        <label id="alertme1"></label><br>
        <input id="firstlabel" class="firstlabel" name="firstname" onclick="stop()" type="text" placeholder=""><br>
        
        
        <label for="lastlabel" class="nachname">NachName:</label>
        <label id="alertme2"></label> <br>
        <input id="lastlabel" class="lastlabel" name="lastname" onclick="stop()" type="text" placeholder="" ><br>

        <label for="emaillabel" class="email">E-Mail:</label>
        <label id="alertme3"></label><br>
        <input id="emaillabel" class="emaillabel" name="email" onclick="stop()" type="email" placeholder="" required><br>

        <label for="passwordlabel" class="password">Passwort:</label>
        <label id="alertme4"></label><br>                       
        <input id="passwordlabel" class="passwordlabel" name="password" onclick="stop()" type="password" placeholder="" ><br>

        <label  for="wiederholenlabel" class="wiederholen">Passwort bestätigen:</label><br>
        <input id="wiederholenlabel" class="wiederholenlabel" onclick="stop()" type="password" placeholder=""><br><br><br>

        <input class="erstellen" type="submit" name="submit" onclick="run()" value="Erstellen"><br><br>
    </form>
    
    <div class="text-center">
        <p >Sie haben bereits ein Konto?<a href="http://localhost/index/login.php" >   Login hier</a></p>
        </p>
      </div>
    

    </div>

    <script>
      function run(){
        var vorname= document.getElementById("firstlabel").value;
        var nachname=document.getElementById("lastlabel").value;
        var email=document.getElementById("emaillabel").value;
        var password=document.getElementById("passwordlabel").value;
        var password2=document.getElementById("wiederholenlabel").value;


        if (vorname=="") {
            document.getElementById("alertme1").innerHTML="Bitte Vorname eingeben";
            document.getElementById("alertme1").style.color="red";
        }else if (nachname == "") {
            document.getElementById("alertme2").innerHTML="Bitte Nachname eingeben";
            document.getElementById("alertme2").style.color="red";
        }else if (email == "") {
            document.getElementById("alertme3").innerHTML="Bitte E-Mail eingeben";
            document.getElementById("alertme3").style.color="red";
        }else if (password == "" || password2 == "" || password !=password2) {
            document.getElementById("alertme4").innerHTML="Password stimmt nicht überein";
            document.getElementById("alertme4").style.color="red";
        }
        }
        function stop(){
            document.getElementById("alertme1").innerHTML="";
            document.getElementById("alertme2").innerHTML="";
            document.getElementById("alertme3").innerHTML="";
            document.getElementById("alertme4").innerHTML="";
        }
      
    </script>
    
    
</body>
</html>