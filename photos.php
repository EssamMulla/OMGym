<!-- Save this as index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Our Website</title>
<style>
    body {
        font-family: Arial, sans-serif;
        color: black;
        text-align: center;
		background-color: #FFFFF0;
    }
    .navbar {
        display: flex;
        justify-content: space-between;
		color: white;
        padding: 0em;
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
        height: 70px;
		width:70px;
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
	.card-container {
		display: inline-block;
		justify-content: center;
		align-items: center;
  
	}

	.card {
		background-color: white;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
		text-align: center;
		max-width: 400px;
		margin: 10px;
	}

	h1 {
		font-size: 24px;
		margin-bottom: 10px;
	}

	p {
		margin-bottom: 10px;
	}

	.price {
		font-weight: bold;
	}

	.formBtn1 {
		background-color: #4caf50;
		color: #fff;
		border: none;
		padding: 10px 20px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		border-radius: 5px;
		cursor: pointer;
	}

	.formBtn1 a {
		color: #fff;
  text-decoration: none;
}

.formBtn1:hover {
  background-color: #45a049;
}
img {
    width: 350px;
	max-width:350px;
    height: 350px;
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
            <li><a href="shop.php">Shop</a></li>
            <li><a href="photos.php">Photos</a></li>
			<li><a href="subscription.php">Subscription</a></li>
            <li><a href="Login.php">Login</a></li>
			<li><a href="cart.php">Cart</a></li>
        </ul>
    </nav>
	<h1>Photos for our GYM</h1>
    <div class="card-container">
			<div class="card">
				
				<?php echo "<img src ='images/gym1.jpg'>";?>
			</div>
	</div>
	<div class="card-container">
			<div class="card">
				
				<?php echo "<img src ='images/gym2.jpg'>";?>
				
			</div>
	</div>
	<div class="card-container">
			<div class="card">
				
				<?php echo "<img src ='images/gym3.jpg'>";?>
				
			</div>
	</div>
</body>
</html>
