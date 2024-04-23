<!-- Save this as index.php -->
<?php
session_start();

if(isset($_POST['submit'])){
	header('location:client_update.php');
}
?>
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
	table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"], input[type="number"], input[type="file"] {
            width: 95%;
            padding: 5px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: orange;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
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
    <div>
        <h2>Update your details</h2>
    </div>
	<br><br>
	<form action="update_details_handler.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Detail</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="number" name="age"></td>
        </tr>
        <tr>
            <td>Weight (kg)</td>
            <td><input type="number" name="weight" step="0.1"></td>
        </tr>
        <tr>
            <td>Height (cm)</td>
            <td><input type="number" name="height"></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="file" name="photo"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Update Details"></td>
        </tr>
    </table>
</form>
</body>
</html>
