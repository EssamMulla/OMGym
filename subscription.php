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
		width: 70px;
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
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 70%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .membership-option {
            margin-bottom: 15px;
        }
        .membership-option label {
            margin-left: 10px;
            font-size: 1.2em;
        }
        .submit-button {
            padding: 10px 30px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.2em;
        }
        .submit-button:hover {
            background-color: #0056b3;
        }
</style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="images/logo.jpg" alt="OMGYM Logo">
        </div>
        <ul>
            <li><a href="client_home.php">Home</a></li>
			<li><a href="client_schedule.php">My Schedule</a></li>
			<li><a href="client_meals.php">My Meals</a></li>
			<li><a href="client_workout.php">My Workout Programs</a></li>
			<li><a href="shop.php">shop</a></li>
			<li><a href="cart.php">cart</a></li>
			<li><a href="logout.php">logout</a></li>
        </ul>
    </nav>
<div class="container">
    <h2>Purchase Gym Membership</h2>
    <form action="process_membership.php" method="post">
        <div class="membership-option">
            <input type="radio" id="basic" name="membership" value="Basic">
            <label for="basic">Basic Membership - $30/month</label>
        </div>
        <div class="membership-option">
            <input type="radio" id="premium" name="membership" value="Premium">
            <label for="premium">Premium Membership - $50/month</label>
        </div>
        <div class="membership-option">
            <input type="radio" id="vip" name="membership" value="VIP">
            <label for="vip">VIP Membership - $70/month</label>
        </div>
        <input type="submit" class="submit-button" value="Purchase">
    </form>
</div>
</body>
</html>
