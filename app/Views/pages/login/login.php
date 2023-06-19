<!DOCTYPE html>
<html lang="en">
   <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;700&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="../../assets/css/stylelogin.css" />
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Login aplikasi Management Project</title>
   </head>
   <body>
      <div class="container">
         <div class="form">
            <div class="form-login">
               <span class="title">Management Project</span>

               <form action="#">
                  <div class="input_field">
                     <input type="text" placeholder="Masukkan Username" required />
                     <i class="fas fa-light fa-user"></i>
                  </div>
                  <div class="input_field">
                     <input type="password" placeholder="Masukkan Password" required />
                     <i class="fas fa-light fa-lock"></i>
                  </div>

                  <div class="checkbox-text">
                     <a href="#" class="text">Forgot Password?</a>
                  </div>

                  <div class="input_field button">
                     <input type="button" value="Login" />
                  </div>
               </form>

               <div class="login-signup">
                  <span class="text"
                     >Bukan anggota?<br />
                     <a href="register.html" class="text signup-text">Signup now</a>
                  </span>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
