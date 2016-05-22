 <form action="/projektarbete/login/login.php" method="post" id="login-form">

                  <h1>Logga in</h1>
                  <div class="input"><input type="text" name="email" /></div>
                  <div class="input"><input type="password" name="password" /></div>
                  <button class="btn-login" name="btn-login">Logga in</button>

<div class="error">              
<?php           
if (isset($_SESSION['message_login']))
{
    echo $_SESSION['message_login'];
    unset($_SESSION['message_login']);
}
        
?>
   </div>
               
                  </form>
               
        
					
