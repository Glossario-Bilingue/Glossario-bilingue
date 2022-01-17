<?php
   ob_start();
   session_start();
   include_once 'loginconnect.php';
?>

   
   <head>
      <title>Login</title>
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div class = "logincheck">
         
         <?php
         $msg = '';
            $login = ("select * from  usuario where usuario = 'supervisor'");
            $senha = ("select * from  senha where senhaid = '1234'");
            
            if (isset($login) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if (!$login && 
                  !$senha) {
                  $msg = 'Wrong username or password';
                  
                header('Location: adm.php');
               }else {
                  $msg = 'Wrong username or password';
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
               }
            }
         ?>
      </div> 
      
      <div class = "form">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = supervisor" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         
      </div> 
      
   </body>
</html>
<!-- adicionar um método pra tirar do banco de dados o Login e a senha. Também um método para adicionar novos usuarios e senhas. -->


