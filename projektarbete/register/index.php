


        
       <form action="register/signup.php" class="form-signin" method="post" id="register-form">
      
        <h1>Prova DiningCompete idag</h1>
        
   
          

        <div class="input"><input type="text" placeholder="Förnamn" name="firstname" /></div>
        <div class="input"><input type="text" placeholder="Efternamn" name="lastname" /></div>
        <div class="input"><input type="text" placeholder="Ort" name="city" /></div>
        <div class="input"><input type="text" placeholder="Ålder" name="age" /></div>    
        <div class="input"><input type="email" placeholder="E-mailadress" name="email" /></div>
        <div class="input"><input type="password" placeholder="Lösenord" name="password" /></div>

    
        

            <button type="submit" class="btn-signup" name="btn-signup">
    		Registrera dig
			</button> 



 <div class="error">          

<?php           
if (isset($_SESSION['message_signup']))
{
    echo $_SESSION['message_signup'];
    unset($_SESSION['message_signup']);
}
        
?>
</div>

      </form>

   
