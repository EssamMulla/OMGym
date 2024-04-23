<!-- Save this as index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Our Website</title>
<style>
    body {
        background-color:#FFFFF0;
        color: #fff;
        text-align: center;
    }
    .navbar {
        display: flex;
        justify-content: space-between;
		color: white;
        padding: 1em;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .navbar ul {
        list-style: none;
        display: flex;
        gap: 1em;
        margin: 0;
        padding: 0;
    }
    .navbar ul li {
        padding: 0.5em 1em;

    }
    .navbar ul li a {
        text-decoration: none;
        color: black;
    }
    .content {
        background-image: url('background.JPEG');
        background-repeat: no-repeat;
        background-size: cover;
        color: #fff;
        text-align: center;
        padding: 350px;
    }
    .logo {
        display: flex;
        align-items: center;
        gap: 0.5em;
    }
    .logo img {
        height: 50px;
    }
    .basket {
        display: flex;
        align-items: center;
    }
    .basket span {
        background-color: #ff0000;
        color: #fff;
        border-radius: 50%;
        padding: 0.5em;
        margin-left: 0.5em;
    }
	.container .content .btn:hover{
   background: #006400;
}

.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
}

.form-container form{
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   text-align: center;
   width: 500px;
}

.form-container form h3{
   font-size: 30px;
   text-transform: uppercase;
   margin-bottom: 10px;
   color:black;
}

.form-container form input,
.form-container form select{
   width: 80%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
}

.form-container form select option{
   background: #fff;
}

.form-container form .form-btn{
   background: #556B2F;
   color:white;
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
}

.form-container form .form-btn:hover{
   background: #006400;
   color:#fff;
}

.form-container form p{
   margin-top: 10px;
   font-size: 20px;
   color:black;
}

.form-container form p a{
   color:#006400;
}

.form-container form .error-msg{
   margin:10px 0;
   display: block;
   background: #006400;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
}
</style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="images/logo.jpg" alt="OMGYM Logo">
        </div>
        <ul>
			<li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <div class="form-container">

   <form action="" method="post">
      <h3>Admin Login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
   </form>

</div>
</body>
</html>
