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
</style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="images/logo.jpg" alt="OMGYM Logo">
        </div>
        <ul>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="photos.php">Photos</a></li>
			<li><a href="subscription.php">Subscription</a></li>
            <li><a href="Login.php">Login</a></li>
			<li><a href="cart.php">Cart</a></li>
        </ul>
    </nav>
    <div>
        <h2>Welcome to our Website</h2>
    </div>
	<br><br>
	<div>Step into a dynamic fitness hub that offers a complete workout experience. The gym is divided into zones for specialized activities, with top-of-the-line equipment for cardio and strength training. Alongside the main exercise area, there's an exclusive personal training zone for focused sessions. Members also enjoy access to a well-stocked in-house shop featuring the latest fitness gear and supplements, ensuring a holistic fitness journey under one roof.</div>
</body>
</html>
