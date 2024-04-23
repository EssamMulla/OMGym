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
        select {
            width: 100%;
            padding: 5px;
            margin: 5px 0;
            box-sizing: border-box;
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
        <h1>My Schedule</h1>
    </div>
	<br><br>
<form action="book_trainer.php" method="post">
    <table>
        <tr>
            <th>Day</th>
            <th>Trainer</th>
            <th>Date</th>
            <th>Time</th>
            <th>Book</th>
        </tr>
        <?php
        // Sample data - replace with actual data from your database
        $trainers = ['Trainer 1', 'Trainer 2', 'Trainer 3'];
        $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $times = ['08:00', '10:00', '12:00', '14:00', '16:00'];

        foreach ($days as $day) {
            echo "<tr>";
            echo "<td>$day</td>";
            echo "<td><select name='trainer'>";
            foreach ($trainers as $trainer) {
                echo "<option value='$trainer'>$trainer</option>";
            }
            echo "</select></td>";
            echo "<td><input type='date' name='date'></td>";
            echo "<td><select name='time'>";
            foreach ($times as $time) {
                echo "<option value='$time'>$time</option>";
            }
            echo "</select></td>";
            echo "<td><input type='submit' value='Book'></td>";
            echo "</tr>";
        }
        ?>
    </table>
</form>
</body>
</html>
