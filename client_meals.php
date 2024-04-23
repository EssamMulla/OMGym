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
        .meal-plan {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .meal-plan h3 {
            margin-top: 0;
        }

        .select-button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .select-button:hover {
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
        <h2>Select a Meal Plan</h2>
    </div>
	<br><br>


<?php
// Sample meal plans - replace with actual data from your database
$mealPlans = [
    [
        "title" => "Weight Loss Plan",
        "description" => "A calorie-controlled meal plan rich in proteins and low in carbs."
    ],
    [
        "title" => "Muscle Building Plan",
        "description" => "High-protein, nutrient-rich meals to support muscle growth."
    ],
    [
        "title" => "Vegetarian Plan",
        "description" => "A plant-based diet focusing on health and wellness."
    ],
    // Add more plans as needed
];

foreach ($mealPlans as $plan) {
    echo "<div class='meal-plan'>";
    echo "<h3>" . htmlspecialchars($plan['title']) . "</h3>";
    echo "<p>" . htmlspecialchars($plan['description']) . "</p>";
    echo "<form action='select_plan.php' method='post'>";
    echo "<input type='hidden' name='plan_title' value='" . htmlspecialchars($plan['title']) . "'>";
    echo "<input type='submit' class='select-button' value='Select'>";
    echo "</form>";
    echo "</div>";
}
?>
</body>
</html>
